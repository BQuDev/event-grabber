<?php

class EventsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /events
	 *
	 * @return Response
	 */
	public function index()
	{
		//
        $keywords = DB::table('keywords_users_map')->join('users','users.id','=','keywords_users_map.user_id')->join('keywords','keywords.id','=','keywords_users_map.keywords_id')->where('keywords_users_map.user_id','=',Auth::user()->id)->select('keywords.id')->get();
        return Response::json(array(
                'error' => false,
                'urls' => $keywords),
            200
        );
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /events/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /events
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /events/{id}
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
	 * GET /events/{id}/edit
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
	 * PUT /events/{id}
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
	 * DELETE /events/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}