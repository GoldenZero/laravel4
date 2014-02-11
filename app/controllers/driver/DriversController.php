<?php

class DriversController extends BaseController {

	/**
	* Login
	**/
	public function login($username,$password){
		$driver = Driver::whereraw("username = ? and password = ?",array($username,$password))->with('vehicle')->first();
		if($driver){
			return Response::json(array("driver"=>$driver->toArray()));
		}else{
			return Response::json(array("error"=>"wrong login"),401);
		}
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        //return Response::json(Driver::all(),200);
        $drivers = Driver::all();
		return Response::json(array("drivers"=>$drivers->toArray()));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('drivers.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$driver = Driver::where("pk","=",$id)->with('vehicle')->firstOrFail();
		return Response::json(array("driver"=>$driver->toArray()));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return View::make('drivers.edit');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
