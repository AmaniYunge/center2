<?php

class BoardController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return View::make('admin.board.index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make("admin.board.add");
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		BoardMember::create(array(
            "fname" => Input::get('fname'),
            "gender" => Input::get('type'),
            "lname" => Input::get('lname'),
            "phone_no" => Input::get('phone'),
            "email" => Input::get('email'),
            "occupation" => Input::get('occu'),
            "education_level" => Input::get('edu'),
            "bibliograph" => Input::get('bibli')
        ));

        echo "Board Member added successful";
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$board = BoardMember::find($id);
        return View::make("admin.board.edit",compact('board'));
	}

    /**
	 * Display the specified resource.
	 *
	 * @return Response
	 */
	public function lists()
	{
		return View::make("admin.board.list");
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $board = BoardMember::find($id);
        return View::make("admin.board.edit",compact('board'));
    }


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $board = BoardMember::find($id);
        $board->fname  = Input::get('fname');
        $board->lname  = Input::get('lname');
        $board->gender  = Input::get('type');
        $board->phone_no  = Input::get('phone');
        $board->email = Input::get('email');
        $board->occupation  = Input::get('occu');
        $board->education_level  = Input::get('edu');
        $board->bibliograph = Input::get('bibli');
        $board->save();

        return "Board Member updated successful";
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        BoardMember::find($id)->delete();

	}


}
