<?php

namespace App\Http\Controllers;

use App\Inquiries;
use App\Http\Requests\InquiriesRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Session;
use Excel;
use File;
use DB;

class InquiriesController extends Controller
{
    /**
     * Display a listing of the Inquiriess
     *
     * @param  \App\Inquiries  $model
     * @return \Illuminate\View\View
     */
    public function index(Inquiries $model)
    {

         $Inquiries= Inquiries::get();

        return view('Inquiries.index', ['Inquiries' => $model->paginate(15)]);
    }

    /**
     * Show the form for creating a new Inquiries
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('Inquiries.create');
    }



      public function upload()
    {
        return view('Inquiries.upload');
    }


    public function import(Request $request){
        //validate the xls file
        $this->validate($request, array(
            'file'      => 'required'
        ));
 
        if($request->hasFile('file')){
            $extension = File::extension($request->file->getClientOriginalName());
            if ($extension == "xlsx" || $extension == "xls" || $extension == "csv") {
 
                $path = $request->file->getRealPath();
                $data = Excel::load($path, function($reader) {
                })->get();
                if(!empty($data) && $data->count()){
 
                    foreach ($data as $key => $value) {
                        $insert[] = [
                        'name' => $value->name,
                        'email' => $value->email,
                        'phone_no' => $value->phone_no,
                        'country' => $value->country, 
                        'course' => $value->course, 
                        'intake' => $value->intake, 
                        'advert' => $value->advert, 
                        'comment' => $value->comment, 
                        'enquiry_date' => $value->enquiry_date, 
                        

                        ];
                    }
 
                    if(!empty($insert)){
 
                        $insertData = DB::table('Inquiries')->insert($insert);
                        if ($insertData) {
                         return response()->json($insertData);
                        }else {                        
                              return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
                            return back();
                        }


                 
                    }
                }
 
                return back();
 
            }else {
                Session::flash('error', 'File is a '.$extension.' file.!! Please upload a valid xls/csv file..!!');
                return back();
            }
        }
    }


   public function store(Request $request)
    {
        $save=Inquiries::create($request->all());
       
//         foreach($result as $studentresult)
//         {
//           $data=$studentresult->student['email_address'];
//           $user = User::where('email', $studentresult->student['email_address'])->first();
// //      $user = new User();
// // $user->email = 'gmuchiri@strathmore.edu';   // This is the email you want to send to.
//           $user->notify(new PendingUnit($save));
// // 
//       }
      return back()->with('success', 'Inquiry Sent successfully');
  }







    /**
     * Store a newly created Inquiries in storage
     *
     * @param  \App\Http\Requests\InquiriesRequest  $request
     * @param  \App\Inquiries  $model
     * @return \Illuminate\Http\RedirectResponse
     */
    

    /**
     * Show the form for editing the specified Inquiries
     *
     * @param  \App\Inquiries  $Inquiries
     * @return \Illuminate\View\View
     */
    public function edit(Inquiries $enquiry)
    {
        return view('Inquiries.edit', compact('enquiry'));
    }

    /**
     * Update the specified Inquiries in storage
     *
     * @param  \App\Http\Requests\InquiriesRequest  $request
     * @param  \App\Inquiries  $Inquiries
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
            

             $Inquiries = Inquiries::findOrFail($request->input('id'));
             $Inquiries->admin_comment =$request->input('admin_comment');
             $Inquiries->save();

        return back()->withStatus(__('Inquiries successfully updated.'));
    }

    /**
     * Remove the specified Inquiries from storage
     *
     * @param  \App\Inquiries  $Inquiries
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Inquiries  $Inquiries)
    {
        $Inquiries->delete();

        return redirect()->route('Inquiries.index')->withStatus(__('Inquiries successfully deleted.'));
    }
}
