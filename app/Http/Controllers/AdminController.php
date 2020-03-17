<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enquiries;
use DB;

class AdminController extends Controller
{
 public function country()


{


    $country = Enquiries::select('country',
            DB::raw('count(id) as Total')
     
  )->groupBy('country')->orderBy('country', 'ASC')->get();

 return view('country',compact('country'));
    }



    public function advert()
    {



$advert = Enquiries::select('advert',
            DB::raw('count(id) as Total')
     
  )->groupBy('advert')->orderBy('advert', 'ASC')->get();

  return view('adverts',compact('advert'));
    }


   


}
