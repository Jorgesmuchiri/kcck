<?php

namespace App\Http\Controllers;

use App\Participants;
use App\Http\Requests\HostRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ParticipantsController extends Controller
{
    /**
     * Display a listing of the Hosts
     *
     * @param  \App\Host  $model
     * @return \Illuminate\View\View
     */
    public function index(Host $model)
    {

         $location= Participants::get();

         // return response()->json( $Host);

        return view('participants.index', ['location' => $model->paginate(15)]);
    }

    /**
     * Show the form for creating a new Host
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('participants.create');
    }



    public function store(Request $request)
    {
        $save=Participants::create($request->all());
       
//         foreach($result as $studentresult)
//         {
//           $data=$studentresult->student['email_address'];
//           $user = User::where('email', $studentresult->student['email_address'])->first();
// //      $user = new User();
// // $user->email = 'gmuchiri@strathmore.edu';   // This is the email you want to send to.
//           $user->notify(new PendingUnit($save));
// // 
//       }
      return view('participants.index');
  }

    /**
     * Store a newly created Host in storage


     *
     * @param  \App\Http\Requests\HostRequest  $request
     * @param  \App\Host  $model
     * @return \Illuminate\Http\RedirectResponse
     */
    

    /**
     * Show the form for editing the specified Host
     *
     * @param  \App\Host  $Host
     * @return \Illuminate\View\View
     */
    public function edit(Host $Host)
    {
        return view('participants.edit', compact('job'));
    }

    /**
     * Update the specified Host in storage
     *
     * @param  \App\Http\Requests\HostRequest  $request
     * @param  \App\Host  $Host
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(HostRequest $request, Host  $Host)
    {
        $hasPassword = $request->get('password');
        $Host->update(
            $request->merge(['password' => Hash::make($request->get('password'))])
                ->except([$hasPassword ? '' : 'password']
        ));

        return redirect()->route('participants.index')->withStatus(__('Host successfully updated.'));
    }

    /**
     * Remove the specified Host from storage
     *
     * @param  \App\Host  $Host
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Host  $job)
    {
        $job->delete();

        return redirect()->route('participants.index')->withStatus(__('Host successfully deleted.'));
    }
}
