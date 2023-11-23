<?php

namespace App\Http\Controllers;

use App\Models\userwo;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserWoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = userwo::limit(1)->get();
        return view('main.dashboard', compact('data'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\userwo  $user_wo
     * @return \Illuminate\Http\Response
     */
    public function show(userwo $user_wo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\userwo  $user_wo
     * @return \Illuminate\Http\Response
     */
    public function edit(userwo $user_wo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\userwo  $user_wo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, userwo $user_wo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\userwo  $user_wo
     * @return \Illuminate\Http\Response
     */
    public function destroy(userwo $user_wo)
    {
        //
    }
}
