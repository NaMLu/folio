<?php namespace App\Http\Controllers;
use App\Category;
use App\Option;
use App\Work;
use App\Skill;
use App\Slide;
class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{	$items =  Work::with('categories')->orderBy('id','desc')->take(9)->get();
        $skills_object = Skill::all()->toArray();
        $skills = array_chunk((array)$skills_object,4,true);
		$categories =  Category::all();
        $slides = Slide::all();
        $site_options = Option::lists('value', 'name');
		return view('welcome', compact('items','categories','skills','slides','site_options'));
	}

}
