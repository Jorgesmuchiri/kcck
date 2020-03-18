<?php

namespace App\Http\Controllers;

use App\Courses;
use App\Http\Requests\CoursesRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the Coursess
     *
     * @param  \App\Courses  $model
     * @return \Illuminate\View\View
     */
    public function index(Courses $model)
    {

         $course= Courses::get();

         // return response()->json( $Courses);

        return view('course.index', ['course' => $model->paginate(15)]);
    }

    /**
     * Show the form for creating a new Courses
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('course.create');
    }



    public function store(Request $request)
    {
        $save=Courses::create($request->all());
       
//         foreach($result as $studentresult)
//         {
//           $data=$studentresult->student['email_address'];
//           $user = User::where('email', $studentresult->student['email_address'])->first();
// //      $user = new User();
// // $user->email = 'gmuchiri@strathmore.edu';   // This is the email you want to send to.
//           $user->notify(new PendingUnit($save));
// // 
//       }
      return view('course.index');
  }

    /**
     * Store a newly created Courses in storage


     *
     * @param  \App\Http\Requests\CoursesRequest  $request
     * @param  \App\Courses  $model
     * @return \Illuminate\Http\RedirectResponse
     */
    

    /**
     * Show the form for editing the specified Courses
     *
     * @param  \App\Courses  $Courses
     * @return \Illuminate\View\View
     */
    public function edit(Courses $Courses)
    {
        return view('course.edit', compact('job'));
    }

    /**
     * Update the specified Courses in storage
     *
     * @param  \App\Http\Requests\CoursesRequest  $request
     * @param  \App\Courses  $Courses
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CoursesRequest $request, Courses  $Courses)
    {
        $hasPassword = $request->get('password');
        $Courses->update(
            $request->merge(['password' => Hash::make($request->get('password'))])
                ->except([$hasPassword ? '' : 'password']
        ));

        return redirect()->route('course.index')->withStatus(__('Courses successfully updated.'));
    }

    /**
     * Remove the specified Courses from storage
     *
     * @param  \App\Courses  $Courses
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Courses  $job)
    {
        $job->delete();

        return redirect()->route('course.index')->withStatus(__('Courses successfully deleted.'));
    }
}
