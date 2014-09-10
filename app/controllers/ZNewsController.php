<?php

class ZNewsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//$news = DB::table('news')->get();
		$news = ZNew::all();

		return View::make('znews.index', compact('news'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('znews.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
			'name' => 'required',
			'amount' => 'required|numeric',
			'abc' => 'required|numeric',
		);
		$validator = Validator::make(Input::all(), $rules);
		if($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput();
		} else {
			$new = new ZNew();
			$new->name = Input::get('name');
			$new->amount = Input::get('amount');
			$new->abc = Input::get('abc');
			$new->timestamps = false;
			$new->save();
			return Redirect::route('znews.index');
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
		$new = ZNew::find($id);
		return View::make('znews.edit', compact('new'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = array(
			'name' => 'required',
			'amount' => 'required|numeric',
			'abc' => 'required|numeric',
		);
		$validator = Validator::make(Input::all(), $rules);
		if($validator->fails()) {
			return Redirect::back()->withErrors($validator)->withInput();
		} else {
			$new = ZNew::find($id);
			$new->name = Input::get('name');
			$new->amount = Input::get('amount');
			$new->abc = Input::get('abc');
			$new->timestamps = false;
			$new->save();
			return Redirect::route('znews.index');
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		ZNew::find($id)->delete();
		return Redirect::route('znews.index');
	}


}
