<?php namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests;
use App\Http\Requests\StoreWorkPostRequest;
use App\Picture;
use App\Skill;
use App\Work;
use Illuminate\Support\Facades\Input;
use Response;
use View;
use App\Option;
   use Intervention\Image\Facades\Image;

class FolioController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $items = Work::with('categories', 'pictures')->get();

        return view('folio.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categories = Category::lists('name', 'id');

        return view('folio.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(StoreWorkPostRequest $request)
    {
        // getting images
        $files = Input::file('images');
        //        create folio item
        $item = new Work();
        $item->name = Input::get('name');
        $item->link = Input::get('link');
        $item->quote = Input::get('quote');
        $item->person = Input::get('person');
        $item->published = true;
        $item->description = INPUT::get('description');
        $item->save();
        $paths = [];
        foreach ($files as $file) {
            // path is root/uploads
            $destinationPath = public_path() . '/uploads/work/' . $item->id . '/';
            $filename = $file->getClientOriginalName();
            $upload_success = $file->move($destinationPath, $filename);
            if ($upload_success) {
                $paths[] = 'uploads/' . $filename;
            }
        }
        $img = head($files);
         self::make_thumb($img, $item);
//        save categories
        $item->categories()->sync(Input::get('categories'));
//       create 

//        save photo URLS
        foreach ($paths as $pic) {
            $p = new Picture();
            $p->work_id = $item->id;
            $p->link = $pic;
            $p->save();
        }
        flash()->success('Item successfully added to the portfolio!');

        return redirect('portfolio/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $item = Work::find($id);
        $site_options = Option::lists('value', 'name');
        return view('folio.show', compact('item','site_options'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $work = Work::find($id);
        $site_options = Option::lists('value', 'name');
        $categories = Category::lists('name', 'id');
        return view('folio.edit', compact('work','site_options', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        $item =  Work::find($id);
        $item->name = Input::get('name');
        $item->link = Input::get('link');
        $item->quote = Input::get('quote');
        $item->person = Input::get('person');
        $item->published = true;
        $item->description = INPUT::get('description');
        $item->save();
        flash()->success('Item successfully updated!');

        return redirect('portfolio/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     *
     */
    public function storeSkill()
    {
        $data = Input::all();
        $skill = new Skill();
        $skill->name = $data['name'];
        $skill->percentage = $data['percentage'];
        $skill->save();
        $data = [
            'success' => TRUE,
            'link' => $skill,
        ];
        return response()->json($data);
    }
    public function deleteSkill($id)
    {
        $skill = Skill::find($id);
        $skill->delete();
        $data = [
            'success' => TRUE,
        ];
        return redirect()->back()->with('message', 'skill deleted');
    }
    private function make_thumb($i, $g)
        {   $arr = array(400, 350, 320, 340, 500);
            shuffle($arr);
            $height = head($arr);
            $width =  last($arr);
            $filename = $i->getClientOriginalName();
            $destination = public_path() . '/uploads/work/' . $g->id . '/';
            $thumb = Image::make($destination . $filename)->fit($width, $height);
            $thumb->save(($destination . 'thumb.jpg'));
            return true;
        }
}
