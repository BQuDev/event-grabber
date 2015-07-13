<?php

class UsersController extends \BaseController {

    /**
     * Display a listing of the resource.
     * GET /keywords
     *
     * @return Response
     */
    public function index()
    {
        //
        $users = User::all();
        return Response::json(array(
                'error' => false,
                'users' => $users->toArray()),
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

    public function username_check(){

        if(Input::get('username') !=''){
        $user = User::where('username','=',Input::get('username'))->first();
        if($user){
            return Response::json(array(
                'error' => false,
                'user' => 'Username already in'),
            200
        );
        }else{
            return Response::json(array(
                    'error' => false,
                    'user' => 'Username available'),
                200
            );
        }}else{
            return Response::json(array(
                    'error' => false,
                    'user' => 'Username empty'),
                200
            );
        }
    }
    public function store()
    {
        //return Input::all();
        //
        if(Input::get('username') == ''){
            return Response::json(array(
                    'error' => true,
                    'reason' => 'Username empty'),
                200
            );
        }
        if(Input::get('password') == ''){
            return Response::json(array(
                    'error' => true,
                    'reason' => 'Password empty'),
                200
            );
        }

        $user = User::where('username','=',Input::get('username'))->first();

        if(!$user){//return $user;
                $user = new User();
                $user->username = Input::get('username');
                $user->first_name = Input::get('first_name');
                $user->last_name = Input::get('last_name');
                $user->facebook_id = Input::get('facebook_id');
                $user->password = Hash::make(Input::get('password'));

                if($user->save()){
                    return Response::json(array(
                            'error' => false,
                            'user' => $user->toArray()),
                        200
                    );
                }else{
                    return Response::json(array(
                            'error' => true,
                            'reason' => 'User save failed'),
                        200
                    );
                }
        }else{
            return Response::json(array(
                    'error' => true,
                    'reason' => 'Username already in'),
                200
            );
        }
            }

    public function sign_in(){

        if(Input::get('username') == ''){
            return Response::json(array(
                    'error' => true,
                    'reason' => 'Username empty'),
                200
            );
        }
        if(Input::get('password') == ''){
            return Response::json(array(
                    'error' => true,
                    'reason' => 'Password empty'),
                200
            );
        }



        $user = User::where('username','=',Input::get('username'))->where('password','=',Input::get('password'))->get();

        if(!is_null($user)){
            return Response::json(array(
                    'error' => false,
                    'user' => $user->toArray()),
                200
            );
        }else{
            return Response::json(array(
                    'error' => true,
                    'user' => 'User does not exists'),
                200
            );
        }
    }

    public function fb_sign_in(){
        if(Input::get('facebook_id') !=''){
        $user = User::where('facebook_id','=',Input::get('facebook_id'))->get();

        if($user){
            return Response::json(array(
                    'error' => false,
                    'user' => $user->toArray()),
                200
            );
        }else{
            return Response::json(array(
                    'error' => true,
                    'reason' => 'User does not exists'),
                200
            );
        }
        }else{
            return Response::json(array(
                    'error' => true,
                    'reason' => 'Facebook id empty'),
                200
            );
        }
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
        $user = User::where('id', Auth::user()->id)
            ->where('id', $id)
            ->take(1)
            ->get();

        return Response::json(array(
                'error' => false,
                'user' => $user->toArray()),
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
        $user = User::where('id', Auth::user()->id)->find($id);

        if ( Request::get('username') )
        {
            $user->username = Request::get('username');
        }

        if ( Request::get('password') )
        {
            $user->password = Hash::make(Request::get('passwords'));
        }

        $user->save();

        return Response::json(array(
                'error' => false,
                'message' => 'user updated'),
            200
        );
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
        $user = User::where('id', Auth::user()->id)->find($id);

        $user->delete();

        return Response::json(array(
                'error' => false,
                'message' => 'user deleted'),
            200
        );
    }

}
