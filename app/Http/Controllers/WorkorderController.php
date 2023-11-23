<?php

namespace App\Http\Controllers;

use App\Models\workorder;
use App\Http\Requests\StoreworkorderRequest;
use App\Http\Requests\UpdateworkorderRequest;

class WorkorderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $data = userwo::limit(1)->get();
        return view('user.request');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreworkorderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreworkorderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\workorder  $workorder
     * @return \Illuminate\Http\Response
     */
    public function show(workorder $workorder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\workorder  $workorder
     * @return \Illuminate\Http\Response
     */
    public function edit(workorder $workorder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateworkorderRequest  $request
     * @param  \App\Models\workorder  $workorder
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateworkorderRequest $request, workorder $workorder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\workorder  $workorder
     * @return \Illuminate\Http\Response
     */
    public function destroy(workorder $workorder)
    {
        //
    }
}
