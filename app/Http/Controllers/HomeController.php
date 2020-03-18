<?php

namespace App\Http\Controllers;
  use App\Courses;
  use App\Users;
  use DB;
class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    

    public function index()
    {

    $enquiries=Courses::count();

    $programs=Users::count();
    $country=Courses::get();
    $country->unique('country')->count();




        return view('dashboard',['enquiries'=>$enquiries,'programs'=>$programs,'country'=>$country]);
    }


    public function country()
    {


    $countries = Enquiries::select('country',
            DB::raw('count(id) as Total')
     
  )->groupBy('country')->orderBy('country', 'ASC')->get();

  return response()->json(   $countries);
    }



  }