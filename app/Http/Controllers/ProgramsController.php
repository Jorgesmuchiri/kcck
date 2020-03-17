<?php

namespace App\Http\Controllers;

use App\Programs;
use App\Http\Requests\ProgramsRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ProgramsController extends Controller
{
    /**
     * Display a listing of the Programss
     *
     * @param  \App\Programs  $model
     * @return \Illuminate\View\View
     */
    public function index(Programs $model)
    {

         $programs= Programs::get();

         // return response()->json( $programs);

        return view('programs.index', ['programs' => $model->paginate(15)]);
    }

    /**
     * Show the form for creating a new Programs
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('programs.create');
    }



    public function store(Request $request)
    {
        $save=Programs::create($request->all());
       
//         foreach($result as $studentresult)
//         {
//           $data=$studentresult->student['email_address'];
//           $user = User::where('email', $studentresult->student['email_address'])->first();
// //      $user = new User();
// // $user->email = 'gmuchiri@strathmore.edu';   // This is the email you want to send to.
//           $user->notify(new PendingUnit($save));
// // 
//       }
      return view('programs.index');
  }

    /**
     * Store a newly created Programs in storage


     *
     * @param  \App\Http\Requests\ProgramsRequest  $request
     * @param  \App\Programs  $model
     * @return \Illuminate\Http\RedirectResponse
     */
    

    /**
     * Show the form for editing the specified Programs
     *
     * @param  \App\Programs  $Programs
     * @return \Illuminate\View\View
     */
    public function edit(Programs $Programs)
    {
        return view('programs.edit', compact('job'));
    }

    /**
     * Update the specified Programs in storage
     *
     * @param  \App\Http\Requests\ProgramsRequest  $request
     * @param  \App\Programs  $Programs
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProgramsRequest $request, Programs  $Programs)
    {
        $hasPassword = $request->get('password');
        $Programs->update(
            $request->merge(['password' => Hash::make($request->get('password'))])
                ->except([$hasPassword ? '' : 'password']
        ));

        return redirect()->route('programs.index')->withStatus(__('Programs successfully updated.'));
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
