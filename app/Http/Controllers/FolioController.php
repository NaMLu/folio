<?php namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests;
use App\Http\Requests\StoreWorkPostRequest;
use App\Work;
use Illuminate\Support\Facades\Input;
use Response;
use View;
use App\Picture;

class FolioController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $items = Work::with('categories','pictures')->get();
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
        // getting all of the post data
        $files = Input::file('images');
        $paths = [];
        foreach ($files as $file) {
            // path is root/uploads
            $destinationPath = 'uploads';
            $filename = $file->getClientOriginalName();
            $upload_success = $file->move($destinationPath, $filename);
            // flash message to show success.
            if ($upload_success) {
                $paths[] = 'uploads/' . $filename;
            }
        }
//        create folio item
        $item = new Work();
        $item->name = Input::get('name');
        $item->link = Input::get('link');
        $item->quote = Input::get('quote');
        $item->person = Input::get('person');
        $item->published = true;
        $item->description = INPUT::get('description');
        $item->save();
//        save categories
        $item->categories()->sync(Input::get('categories'));

//        save photo URLS
        foreach($paths as $pic){
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
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

}
