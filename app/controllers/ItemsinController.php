<?php

class ItemsinController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// get all the items
		$items = Itemsin->fetchNames();
//}		
		
		// load the view and pass the items
		return View::make('itemsin.index')
			->with('items', $items);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// load the create form (app/views/items/create.blade.php)
	$spares = Spare::where('state', '=', 1)->get()->toArray();
		foreach($spares as $key=>$value){
			$spare[$value['id']]=$value['name'];
		}
	$models = Model::where('state', '=', 1)->get()->toArray();
		foreach($models as $key=>$value){
			$model[$value['id']]=$value['name'];
		}
	$providers = Provider::where('state', '=', 1)->get()->toArray();
		foreach($providers as $key=>$value){
			$provider[$value['id']]=$value['name'];
		}
		
		return View::make('itemsin.create')
			->with('spares',$spare)
			->with('models',$model)
			->with('providers',$provider);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// validate
		// read more on validation at http://laravel.com/docs/validation
		$rules = array(
			'quantity'      => 'required|numeric'
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('itemsin/create')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			// store
			$item = new Itemsin;
			$item->spareId = Input::get('spareId');
			$item->modelId = Input::get('modelId');
			$item->providerId = Input::get('providerId');
			$item->costprice = Input::get('costPrice');
			$item->quantity = Input::get('quantity');
			$item->save();

			// redirect
			Session::flash('message', 'Successfully created item!');
			return Redirect::to('itemsin');
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
		// get the item
		$item = Itemsin::find($id);

		// show the view and pass the item to it
		return View::make('itemsin.show')
			->with('item', $item);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// get the item
		$item = Itemsin::find($id);

		// show the edit form and pass the item
		return View::make('itemsin.edit')
			->with('item', $item);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// validate
		// read more on validation at http://laravel.com/docs/validation
		$rules = array(
			'quantity' => 'required|numeric'
		);
		$validator = Validator::make(Input::all(), $rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('itemsin/' . $id . '/edit')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			// store
			$item = Itemsin::find($id);
			$item->name       = Input::get('name');
			$item->parent = Input::get('parent');
			$item->save();

			// redirect
			Session::flash('message', 'Successfully updated stock!');
			return Redirect::to('itemsin');
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
		// delete
		$item = Itemsin::find($id);
		$item->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the item!');
		return Redirect::to('itemsin');
	}

}