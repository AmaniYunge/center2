<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

    /////////////// functions to handle contacts
    public function contact()
    {
        return View::make('contact');
    }
    public function enquery()
    {


        if(Input::get("email") != "" && Input::get("name") !=""){
            $data = array("name"=>Input::get("name"),"email"=>Input::get("email"),"tel"=>Input::get("tel"),"contents"=>Input::get("contents"));
            Mail::send('contact.enquery',$data, function($message){
                $message->from(Input::get("email"), 'Lowa Health Centre Visitor');
                $message->to('lowahealthcentre@gmail.com', 'Lowa Health Centre')->subject('Message From Lowa user');

            });


            return "<h4 class='text-error'>message has been sent..</h4>";


        }else{
            return "<h4 class='text-error'>Compulsory field(s) empty.. </h4>";
        }
    }

}
