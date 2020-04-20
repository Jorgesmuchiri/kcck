<?php

namespace App\Http\Controllers;

use App\Media;
use App\Http\Requests\EventsRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    /**
     * Display a listing of the Eventss
     *
     * @param  \App\Events  $model
     * @return \Illuminate\View\View
     */

  public function home()

  {


 $events= Media::get();

         return view('frontend/media', ['events' => $events]);


  }



    public function index(Media $model)
    {

         $events= Media::get();

         // return response()->json( $Events);

        return view('media.index', ['events' => $model->paginate(15)]);
    }

    /**
     * Show the form for creating a new Events
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('media.create');
    }



    public function store(Request $request)
    {



 if ($request->hasFile('image')){
     $file = $request->file('image');
    $extension = $file->getClientOriginalExtension(); // you can also use file name
    $fileName =  $request->input('name').'.'.$extension;  
    $path = public_path().'/storage/images';
    $uplaod3= $file->move($path,$fileName);

       
 }


    
    $media = new Media;
    $media->image=$fileName;
    $media->name= $request->input('name');
    $media->caption = $request->input('caption');
    $media->save();
        
    
       

      return back();
  }

    /**
     * Store a newly created Events in storage


     *
     * @param  \App\Http\Requests\EventsRequest  $request
     * @param  \App\Events  $model
     * @return \Illuminate\Http\RedirectResponse
     */
    

    /**
     * Show the form for editing the specified Events
     *
     * @param  \App\Events  $Events
     * @return \Illuminate\View\View
     */
    public function edit(Media $Events)
    {
        return view('media.edit', compact('job'));
    }

    /**
     * Update the specified Events in storage
     *
     * @param  \App\Http\Requests\EventsRequest  $request
     * @param  \App\Events  $Events
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(EventsRequest $request, Events  $Events)
    {
        $hasPassword = $request->get('password');
        $Events->update(
            $request->merge(['password' => Hash::make($request->get('password'))])
                ->except([$hasPassword ? '' : 'password']
        ));

        return redirect()->route('events.index')->withStatus(__('Events successfully updated.'));
    }

    /**
     * Remove the specified Events from storage
     *
     * @param  \App\Events  $Events
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Media  $job)
    {
        $job->delete();

        return redirect()->route('events.index')->withStatus(__('Events successfully deleted.'));
    }
}
