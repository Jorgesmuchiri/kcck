<?php

namespace App\Http\Controllers;

use App\Enquiries;
use App\Http\Requests\EnquiriesRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Session;
use Excel;
use File;
use DB;

class EnquiriesController extends Controller
{
    /**
     * Display a listing of the Enquiriess
     *
     * @param  \App\Enquiries  $model
     * @return \Illuminate\View\View
     */
    public function index(Enquiries $model)
    {

         $Enquiries= Enquiries::get();

        return view('enquiries.index', ['Enquiries' => $model->paginate(15)]);
    }

    /**
     * Show the form for creating a new Enquiries
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('enquiries.create');
    }



      public function upload()
    {
        return view('enquiries.upload');
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
 
                        $insertData = DB::table('enquiries')->insert($insert);
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
        $save=Enquiries::create($request->all());
       
//         foreach($result as $studentresult)
//         {
//           $data=$studentresult->student['email_address'];
//           $user = User::where('email', $studentresult->student['email_address'])->first();
// //      $user = new User();
// // $user->email = 'gmuchiri@strathmore.edu';   // This is the email you want to send to.
//           $user->notify(new PendingUnit($save));
// // 
//       }
      return view('frontend/registration')->with('success','Thank you for registering with us we shall get back to you');
  }







    /**
     * Store a newly created Enquiries in storage
     *
     * @param  \App\Http\Requests\EnquiriesRequest  $request
     * @param  \App\Enquiries  $model
     * @return \Illuminate\Http\RedirectResponse
     */
    

    /**
     * Show the form for editing the specified Enquiries
     *
     * @param  \App\Enquiries  $Enquiries
     * @return \Illuminate\View\View
     */
    public function edit(Enquiries $enquiry)
    {
        return view('enquiries.edit', compact('enquiry'));
    }

    /**
     * Update the specified Enquiries in storage
     *
     * @param  \App\Http\Requests\EnquiriesRequest  $request
     * @param  \App\Enquiries  $Enquiries
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
            

             $enquiries = Enquiries::findOrFail($request->input('id'));
             $enquiries->admin_comment =$request->input('admin_comment');
             $enquiries->save();

        return back()->withStatus(__('Enquiries successfully updated.'));
    }

    /**
     * Remove the specified Enquiries from storage
     *
     * @param  \App\Enquiries  $Enquiries
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Enquiries  $Enquiries)
    {
        $Enquiries->delete();

        return redirect()->route('enquiries.index')->withStatus(__('Enquiries successfully deleted.'));
    }
}
