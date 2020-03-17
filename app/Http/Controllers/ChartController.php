<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Charts;
use App\Enquiries;
use DB;


class ChartController extends Controller
{
    public function index()
    {



    $users = Enquiries::select('course',
            DB::raw('count(id) as Total')
     
  )->groupBy('course')->orderBy('course', 'ASC')->get();

 $chart = Charts::database($users, 'bar', 'highcharts')
                  ->title("Masters Course Enquiries")
                  ->elementLabel("No of Enquiries")
                  ->dimensions(1000, 500)
                  ->responsive(true)
                  ->groupBy('course');
        return view('chart',compact('chart'));
    }
 public function repeat()
    {



    $users = StudentResults::  where(function ($q) {
  $q->where('marks', '<=', 39);
  $q->where('marks', '>=', 36);
})->select('unit_code',
            DB::raw('count(id) as Total')
     
  )->groupBy('unit_code')->orderBy('unit_code', 'ASC')->get();

$repeat = Charts::database($users, 'bar', 'highcharts')
                  ->title("Repeats")
                  ->elementLabel("No of Students")
                  ->dimensions(1000, 500)
                  ->responsive(true)
                  ->groupBy('unit_code');
        return view('repeat',compact('repeat'));
    }






}