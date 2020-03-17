<?php

namespace App\Http\Controllers;

use App\NewPrograms;
use App\Http\Requests\ProgramsRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class NewProgramsController extends Controller
{
    /**
     * Display a listing of the Programss
     *
     * @param  \App\Programs  $model
     * @return \Illuminate\View\View
     */
    public function index(NewPrograms $model)
    {

         $NewPrograms= NewPrograms::get();

         // return response()->json( $NewPrograms);

        return view('NewPrograms.index', ['NewPrograms' => $model->paginate(15)]);
    }

    /**
     * Show the form for creating a new NewPrograms
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('NewPrograms.create');
    }



    public function store(Request $request)
    {
        $save=NewPrograms::create($request->all());
       
//         foreach($result as $studentresult)
//         {
//           $data=$studentresult->student['email_address'];
//           $user = User::where('email', $studentresult->student['email_address'])->first();
// //      $user = new User();
// // $user->email = 'gmuchiri@strathmore.edu';   // This is the email you want to send to.
//           $user->notify(new PendingUnit($save));
// // 
//       }
      return view('NewPrograms.index');
  }

    /**
     * Store a newly created NewPrograms in storage


     *
     * @param  \App\Http\Requests\NewProgramsRequest  $request
     * @param  \App\NewPrograms  $model
     * @return \Illuminate\Http\RedirectResponse
     */
    

    /**
     * Show the form for editing the specified NewPrograms
     *
     * @param  \App\NewPrograms  $NewPrograms
     * @return \Illuminate\View\View
     */
    public function edit(NewPrograms $NewPrograms)
    {
        return view('NewPrograms.edit', compact('job'));
    }

    /**
     * Update the specified NewPrograms in storage
     *
     * @param  \App\Http\Requests\NewProgramsRequest  $request
     * @param  \App\NewPrograms  $NewPrograms
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(NewProgramsRequest $request, NewPrograms  $NewPrograms)
    {
        $hasPassword = $request->get('password');
        $NewPrograms->update(
            
            $request->merge(['password' => Hash::make($request->get('password'))])
                ->except([$hasPassword ? '' : 'password']
        ));

        return redirect()->route('NewPrograms.index')->withStatus(__('NewPrograms successfully updated.'));
    }

    /**
     * Remove the specified Programs from storage
     *
     * @param  \App\Programs  $Programs
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Programs  $job)
    {
        $job->delete();

        return redirect()->route('programs.index')->withStatus(__('Programs successfully deleted.'));
    }
}
