<?php

namespace App\Http\Controllers;

use App\Jobs;
use App\Http\Requests\JobsRequest;
use Illuminate\Support\Facades\Hash;

class JobsController extends Controller
{
    /**
     * Display a listing of the Jobss
     *
     * @param  \App\Jobs  $model
     * @return \Illuminate\View\View
     */
    public function index(Jobs $model)
    {

         $jobs= Jobs::get();

        return view('jobs.index', ['jobs' => $model->paginate(15)]);
    }

    /**
     * Show the form for creating a new Jobs
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created Jobs in storage
     *
     * @param  \App\Http\Requests\JobsRequest  $request
     * @param  \App\Jobs  $model
     * @return \Illuminate\Http\RedirectResponse
     */
    

    /**
     * Show the form for editing the specified Jobs
     *
     * @param  \App\Jobs  $Jobs
     * @return \Illuminate\View\View
     */
    public function edit(Jobs $Jobs)
    {
        return view('jobs.edit', compact('job'));
    }

    /**
     * Update the specified Jobs in storage
     *
     * @param  \App\Http\Requests\JobsRequest  $request
     * @param  \App\Jobs  $Jobs
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(JobsRequest $request, Jobs  $Jobs)
    {
        $hasPassword = $request->get('password');
        $Jobs->update(
            $request->merge(['password' => Hash::make($request->get('password'))])
                ->except([$hasPassword ? '' : 'password']
        ));

        return redirect()->route('jobs.index')->withStatus(__('Jobs successfully updated.'));
    }

    /**
     * Remove the specified Jobs from storage
     *
     * @param  \App\Jobs  $Jobs
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Jobs  $Jobs)
    {
        $Jobs->delete();

        return redirect()->route('job.index')->withStatus(__('Jobs successfully deleted.'));
    }
}
