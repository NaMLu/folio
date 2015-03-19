<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Message;
use Illuminate\Support\Facades\Input;

class MessagesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $messages = Message::orderBy('read')->orderBy('id','desc')->wherereplied('0')->get();
        return view('messages.index', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $data = Input::all();
        $message = new Message();
        $message->name = $data['name'];
        $message->message = $data['message'];
        $message->email = $data['email'];
        $message->read = False;
        $message->replied = false;
        if (isset($data['quote'])) {
            $message->quote = $data['quote'];
        } else {
            $message->quote = 'none';
        }
        $message->save();
//        Event::fire(new messageReceived($message));
        $response_data = [
            'message' => 'Your message has been received, we will get back to you as soon as possible',
            'success' => True,
            'data'    => $message,
        ];

        return response()->json($response_data);

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
