<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Time;

class timesController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $times = Time::all();

        return view('time.index', compact('times'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('time.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $times = new Time();
        $times->start = $request->start;
        $times->finish = $request->finish;

        $times->save();

        return redirect('/time');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $times = Time::where('id', $id)->get();
        return view('time.edit', compact('times'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $times = Time::findOrFail($id);
        $times->start = $request->start;
        $times->finish = $request->finish;
     
        $times->save();

        return redirect('/time')->with('success','Blog Create successfully,');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $times = Time::find($id);
        $times->delete();

        return redirect()->back()->with('success', 'Blog delete syccessfully');
    }

}
