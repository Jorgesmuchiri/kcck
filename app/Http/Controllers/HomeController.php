<?php

namespace App\Http\Controllers;
  use App\Programs;
  use App\Enquiries;
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

    $enquiries=Enquiries::count();
    $pending=Enquiries::where('status','=','pending')->count();
    $programs=Programs::count();
    $country=Enquiries::get();
    $country->unique('country')->count();




        return view('dashboard',['enquiries'=>$enquiries,'pending'=>$pending,'programs'=>$programs,'country'=>$country]);
    }


    public function country()
    {


    $countries = Enquiries::select('country',
            DB::raw('count(id) as Total')
     
  )->groupBy('country')->orderBy('country', 'ASC')->get();

  return response()->json(   $countries);
    }



  }