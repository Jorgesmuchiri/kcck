<?php

namespace App\Http\Controllers;

use App\Worker;
use App\Http\Requests\WorkerRequest;
use Illuminate\Support\Facades\Hash;

class WorkerController extends Controller
{
    /**
     * Display a listing of the Workers
     *
     * @param  \App\Worker  $model
     * @return \Illuminate\View\View
     */
    public function index(Worker $model)
    {

         $Worker= Worker::get();

        return view('worker.index', ['Worker' => $model->paginate(15)]);
    }

    /**
     * Show the form for creating a new Worker
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('worker.create');
    }

    /**
     * Store a newly created Worker in storage
     *
     * @param  \App\Http\Requests\WorkerRequest  $request
     * @param  \App\Worker  $model
     * @return \Illuminate\Http\RedirectResponse
     */
    

    /**
     * Show the form for editing the specified Worker
     *
     * @param  \App\Worker  $Worker
     * @return \Illuminate\View\View
     */
    public function edit(Worker $Worker)
    {
        return view('worker.edit', compact('job'));
    }

    /**
     * Update the specified Worker in storage
     *
     * @param  \App\Http\Requests\WorkerRequest  $request
     * @param  \App\Worker  $Worker
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(WorkerRequest $request, Worker  $Worker)
    {
        $hasPassword = $request->get('password');
        $Worker->update(
            $request->merge(['password' => Hash::make($request->get('password'))])
                ->except([$hasPassword ? '' : 'password']
        ));

        return redirect()->route('worker.index')->withStatus(__('Worker successfully updated.'));
    }

    /**
     * Remove the specified Worker from storage
     *
     * @param  \App\Worker  $Worker
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Worker  $Worker)
    {
        $Worker->delete();

        return redirect()->route('worker.index')->withStatus(__('Worker successfully deleted.'));
    }
}
