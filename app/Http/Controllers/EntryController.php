<?php

namespace App\Http\Controllers;

use App\entry;
use Illuminate\Http\Request;

class EntryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $entries = App\Entry::orderBy('created_at', 'desc')->take(10);
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
     * @param  \App\entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function show(entry $entry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, entry $entry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\entry  $entry
     * @return \Illuminate\Http\Response
     */
    public function destroy(entry $entry)
    {
        //
    }
}
