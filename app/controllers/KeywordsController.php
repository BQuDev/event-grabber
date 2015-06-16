<?php

class KeywordsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /keywords
	 *
	 * @return Response
	 */
	public function index()
	{
		//
        $keywords = Keyword::all();
        return Response::json(array(
                'error' => false,
                'urls' => $keywords->toArray()),
            200
        );
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /keywords/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /keywords
	 *
	 * @return Response
	 */
	public function store()
	{
        $keyword = new Keyword();
        $keyword->name = Request::get('name');
        $keyword->description = Request::get('description');

        // Validation and Filtering is sorely needed!!
        // Seriously, I'm a bad person for leaving that out.

        $keyword->save();

        return Response::json(array(
                'error' => false,
                'urls' => $keyword->toArray()),
            200
        );
	}

	/**
	 * Display the specified resource.
	 * GET /keywords/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
        $keyword = Keyword::where('id', $id)
            ->take(1)
            ->get();

        return Response::json(array(
                'error' => false,
                'urls' => $keyword->toArray()),
            200
        );
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /keywords/{id}/edit
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
	 * PUT /keywords/{id}
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
	 * DELETE /keywords/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}