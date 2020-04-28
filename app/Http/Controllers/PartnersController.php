<?php

namespace App\Http\Controllers;

use App\Partners;
use App\Http\Requests\PartnersRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class PartnersController extends Controller
{
    /**
     * Display a listing of the Partnerss
     *
     * @param  \App\Partners  $model
     * @return \Illuminate\View\View
     */
    public function index(Partners $model)
    {

         $partner= Partners::get();

         // return response()->json( $Partners);

        return view('partner.index', ['partner' => $model->paginate(15)]);
    }

    /**
     * Show the form for creating a new Partners
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('partner.create');
    }



    public function store(Request $request)
    {
        $save=Partners::create($request->all());
       
//         foreach($result as $studentresult)
//         {
//           $data=$studentresult->student['email_address'];
//           $user = User::where('email', $studentresult->student['email_address'])->first();
// //      $user = new User();
// // $user->email = 'gmuchiri@strathmore.edu';   // This is the email you want to send to.
//           $user->notify(new PendingUnit($save));
// // 
//       }
       return back()->withStatus('Partner Information successfully posted.');
  }

    /**
     * Store a newly created Partners in storage


     *
     * @param  \App\Http\Requests\PartnersRequest  $request
     * @param  \App\Partners  $model
     * @return \Illuminate\Http\RedirectResponse
     */
    

    /**
     * Show the form for editing the specified Partners
     *
     * @param  \App\Partners  $Partners
     * @return \Illuminate\View\View
     */
    public function edit(Partners $Partners)
    {
        return view('partner.edit', compact('job'));
    }

    /**
     * Update the specified Partners in storage
     *
     * @param  \App\Http\Requests\PartnersRequest  $request
     * @param  \App\Partners  $Partners
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PartnersRequest $request, Partners  $Partners)
    {
        $hasPassword = $request->get('password');
        $Partners->update(
            $request->merge(['password' => Hash::make($request->get('password'))])
                ->except([$hasPassword ? '' : 'password']
        ));

        return redirect()->route('partner.index')->withStatus(__('Partners successfully updated.'));
    }

    /**
     * Remove the specified Partners from storage
     *
     * @param  \App\Partners  $Partners
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Partners  $job)
    {
        $job->delete();

        return redirect()->route('partner.index')->withStatus(__('Partners successfully deleted.'));
    }
}
