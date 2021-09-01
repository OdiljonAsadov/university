<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;

class groupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Group::all();

        return view('group.index', compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('group.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $groups = new Group();
        $groups->name = $request->name;
        $groups->description = $request->description;

        $groups->save();

        return redirect('/groups');
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
        $groups = Group::where('id', $id)->get();
        return view('group.edit', compact('groups'));
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
        $groups = Group::findOrFail($id);
        $groups->name = $request->name;
        $groups->description = $request->description;
     
        $groups->save();

        return redirect('/groups')->with('success','Blog Create successfully,');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $groups = Group::find($id);
        $groups->delete();

        return redirect()->back()->with('success', 'Blog delete syccessfully');
    }
}
