<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Reviews;
  use App\User;
use App\Enquiries;
use Auth;
use App\Notifications\DeanNotification;
use App\Notifications\RegistrarNotification;
use App\Notifications\Approvedunit;
class ReviewController extends Controller
{
    public function index(Request $request)
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            //Enter Vaalidation rules
          $enquiries = Enquiries::findOrFail($request->input('id'));
             $enquiries->admin_comment =$request->input('admin_comment');
             $enquiries->save();

        return back()->withStatus(__('Enquiries successfully updated.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = StudentResults::findOrFail($id);

        return response()->json($result);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  request
     * @param  int  id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $item = StudentResults::findOrFail($id);

            $item->delete();

            return response()->json($item, 200);
        } catch (\Illuminate\Database\QueryException $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

}
