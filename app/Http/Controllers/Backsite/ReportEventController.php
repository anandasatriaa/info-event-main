<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;

// use library here
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

// request
use App\Http\Requests\Event\StoreEventRequest;
use App\Http\Requests\Event\UpdateEventRequest;

// use everything here
use Gate;
use Auth;
use File;

// use model here
use App\Models\MasterData\Event;
use App\Models\User;

// thirdparty package

class ReportEventController extends Controller
{
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('event_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');


        Auth::user();
        // for table grid
        $event = Event::orderBy('created_at', 'desc')->get();

        

        return view('pages.backsite.master-data.event.index', compact('event'));
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
    public function store(StoreEventRequest $request)
    {
        // get all request from frontsite
        $data = $request->all();

        $data['user_id'] = Auth::user()->id;
        $data['status'] = 1;


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
        $event = Event::create($data);

        alert()->success('Success Message', 'Successfully added new event');
        return redirect()->route('backsite.event.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        abort_if(Gate::denies('event_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pages.backsite.master-data.event.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        abort_if(Gate::denies('event_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        // for select2 = ascending a to z
        // $category = Category::orderBy('catname', 'asc')->get();
        // $request_event = RequestEvent::orderBy('event_name', 'asc')->get();

        return view('pages.backsite.master-data.event.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        // get all request from frontsite
        $data = $request->all();
        // upload process here
        // change format photo
        if(isset($data['poster'])){

             // first checking old poster to delete from storage
            $get_item = $event['poster'];

            // change file locations
            $data['poster'] = $request->file('poster')->store(
                'assets/file-event', 'public'
            );

            // delete old poster from storage
            $data_old = 'storage/'.$get_item;
            if (File::exists($data_old)) {
                File::delete($data_old);
            }else{
                File::delete('storage/app/public/'.$get_item);
            }

        }

        // update to database
        $event->update($data);

        alert()->success('Success Message', 'Successfully updated event');
        return redirect()->route('backsite.event.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        abort_if(Gate::denies('event_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        // first checking old file to delete from storage
        $get_item = $event['poster'];

        $data = 'storage/'.$get_item;
        if (File::exists($data)) {
            File::delete($data);
        }else{
            File::delete('storage/app/public/'.$get_item);
        }

        $event->forceDelete();

        alert()->success('Success Message', 'Successfully deleted event');
        return back();
    }
}
