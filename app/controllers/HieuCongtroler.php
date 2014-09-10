<?php

class HieuCongtroler extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$data = Hieu::all();
        // var_dump($data); exit;
        return View::make('hieu.index',compact('data'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('hieu.edit');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$rules = array(
			'title' => 'required',
			'description' => 'required'
		);
		$validator = Validator::make(Input::all(), $rules);
		if($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput();
		} else {
			$hieu = new Hieu();
			$hieu->title = Input::get('title');
			$hieu->description = Input::get('description');
			$hieu->save();
			return Redirect::route('hieu.index');
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
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
