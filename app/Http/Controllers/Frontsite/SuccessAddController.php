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

class SuccessAddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.frontsite.success.adedd-success');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        alert()->success('Success Message', 'Successfully added new event');
        return redirect()->route('add.success', $request_event->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
