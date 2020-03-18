<?php

namespace App\Http\Controllers;

use App\Events;
use App\Http\Requests\EventsRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the Eventss
     *
     * @param  \App\Events  $model
     * @return \Illuminate\View\View
     */
    public function index(Events $model)
    {

         $events= Events::get();

         // return response()->json( $Events);

        return view('events.index', ['events' => $model->paginate(15)]);
    }

    /**
     * Show the form for creating a new Events
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('events.create');
    }



    public function store(Request $request)
    {
        $save=Events::create($request->all());
       
//         foreach($result as $studentresult)
//         {
//           $data=$studentresult->student['email_address'];
//           $user = User::where('email', $studentresult->student['email_address'])->first();
// //      $user = new User();
// // $user->email = 'gmuchiri@strathmore.edu';   // This is the email you want to send to.
//           $user->notify(new PendingUnit($save));
// // 
//       }
      return view('events.index');
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
    public function edit(Events $Events)
    {
        return view('events.edit', compact('job'));
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
    public function destroy(Events  $job)
    {
        $job->delete();

        return redirect()->route('events.index')->withStatus(__('Events successfully deleted.'));
    }
}
