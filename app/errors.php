<?php 


// NotFoundException handler
App::error(function(Illuminate\Database\Eloquent\ModelNotFoundException $e)
{
    if(Request::is('api/*')){
        $default_message = 'The requested resource was not found';

        return Response::json(array(
            'status'=>"NOT_FOUND",
            'status_code'=>404,
            'error' => $e->getMessage() ?: $default_message,
        ), 404);
    }
});

App::error(function(Symfony\Component\HttpKernel\Exception\NotFoundHttpException $e)
{
    if(Request::is('api/*')){
        $default_message = 'The requested resource was not found';

        return Response::json(array(
            'status'=>"NOT_FOUND",
            'status_code'=>404,
            'error' => $e->getMessage() ?: $default_message,
        ), 404);
    }else{
        return;
    }
});

App::error(function(Symfony\Component\HttpKernel\Exception\HttpException $e, $code)
{
    if(Request::is('api/*')){
        $headers = $e->getHeaders();
        switch ($code)
        {
            case 401:
                $default_message = 'Invalid API key';
                $headers['WWW-Authenticate'] = 'Basic realm="REST API"';
            break;

            case 403:
                $default_message = 'Insufficient privileges to perform this action';
            break;

            case 404:
                $default_message = 'The requested resource was not found';
            break;

            default:
                $default_message = 'An error was encountered';
        }

        return Response::json(array(
            'error' => $e->getMessage() ?: $default_message,
        ), $code, $headers);
    }
});