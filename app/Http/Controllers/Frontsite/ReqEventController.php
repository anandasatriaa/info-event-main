<?php

namespace App\Http\Controllers\Frontsite;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\MasterData\Event;

use App\Http\Requests\RequestEvent\StoreEventRequest;

// use everything here
use Gate;
use Auth;
use File;

class ReqEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        return view('pages.frontsite.add-event.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // get all request from frontsite
        $data = $request->all();
        // $category = Category::orderBy('catname', 'desc')->get();
        $data['user_id'] = Auth::user()->id;

       


        // upload process here
        $path = public_path('app/public/assets/file-event');
        if(!File::isDirectory($path)){
            $response = Storage::makeDirectory('public/assets/file-event');
        }

        // change file locations
        if(isset($data['poster'])){
            $data['poster'] = $request->file('poster')->store(
                'assets/file-event', 'public'
            );
        }else{
            $data['poster'] = "";
        }

        // store to database
        $request_event = Event::create($data);

        // alert()->success('Success Message', 'Successfully added new event,Let admin accept your event');
        return view('pages.frontsite.success.adedd-success',compact('request_event','request'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return abort(404);
    }
}
