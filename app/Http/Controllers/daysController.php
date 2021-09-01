<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DayTable;

class daysController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $days = DayTable::all();

        return view('day.index', compact('days'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('day.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $days = new DayTable();
        $days->name = $request->name;

        $days->save();

        return redirect('/day');
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
        $days = DayTable::where('id', $id)->get();
        return view('day.edit', compact('days'));
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
        $days = DayTable::findOrFail($id);
        $days->name = $request->name;
     
        $days->save();

        return redirect('/day')->with('success','Blog Create successfully,');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $days = DayTable::find($id);
        $days->delete();

        return redirect()->back()->with('success', 'Blog delete syccessfully');
    }
}
