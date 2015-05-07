<?php namespace App\Http\Controllers;

use App\Skill;
use App\Setting;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Home Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders your application's "dashboard" for users that
    | are authenticated. Of course, you are free to change or remove the
    | controller as you wish. It is just here to get your app started!
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index()
    {
        $skills = Skill::all();

        return view('home', compact('skills'));
    }

    public function settings()
    {
        $settings = DB::table('options')->get();
        $options = [];
        foreach ($settings as $setting) {
            $setting->name_string = str_replace("_", " ", $setting->name);
            $options[] = $setting;
        }

        return view('settings', compact('settings'));
    }

    public function save_settings()
    {
        $data = Input::except( '_token');
        foreach ($data as $key => $value) {
            $setting =Setting::find($key);
            $setting->value = $value;
            $setting->save();
        }

        return redirect('settings')->with('message', 'Update Successful');;
    }

}
