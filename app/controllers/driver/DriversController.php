<?php

class DriversController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        //return Response::json(Driver::all(),200);
        $drivers = Driver::all();
        $response = array();
        foreach ($drivers as $driver) {
        	$response[]= array(
        		"pk"=>$driver->pk,
        		"name"=>$driver->name,
        		"phone"=>$driver->phone,
        		"photo"=>$driver->photo,
        		"rate"=>"3",
        		"car"=>array("model"=>"1","plate"=>"33")
        		);
        }
        return Response::json($response);
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
		$driver = Driver::where("pk","=",$id)->firstOrFail();
		$response['driver']= array(
        		"pk"=>$driver->pk,
        		"name"=>$driver->firstname." ".$driver->lastname,
        		"phone"=>$driver->phone,
        		"photo"=>$driver->photo,
        		"rate"=>"3",
        		"car"=>array("model"=>"1","plate"=>"33")
        		);
		return Response::json($response);
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
