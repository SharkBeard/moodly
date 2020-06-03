<?php

namespace App\Http\Controllers;

use App\Models\Entry;
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
      $entries = Entry::orderBy('created_at', 'desc')->take(10)->get();
      // $entries = Entry::all();
      return response()->json($entries, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $input = $request->all();

      $validator = Validator::make($input, [
          'mood' => 'required',
          'story' => 'required'
      ]);

      if ($validator->fails()) {
        return $this->sendError('Validation Error.', $validator->errors());
      }

      $product = Product::create($input);

      return response()->json($entries, 200);
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
