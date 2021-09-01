<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TimeTable;
use App\Group;
use App\Room;
use App\Science;
use App\Teacher;
use App\Time;
use App\DayTable;

class timeTableController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $days = DayTable::all();
        $timeTables = TimeTable::paginate(5);
        $groups = Group::all();
        $sciences = Science::all();
        $rooms = Room::all();
        $teachers = Teacher::all();
        $times = Time::all();

        return view('timeTable.index', compact('timeTables', 'groups', 'sciences', 'rooms', 'teachers', 'times', 'days'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $days = DayTable::all();
        $groups = Group::all();
        $sciences = Science::all();
        $rooms = Room::all();
        $teachers = Teacher::all();
        $times = Time::all();
        return view('timeTable.create', compact('groups', 'sciences', 'rooms', 'teachers', 'times', 'days'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $timeTables = new TimeTable();
        $timeTables->day_id = $request->day_id;
        $timeTables->group_id = $request->group_id;
        $timeTables->room_id = $request->room_id;
        $timeTables->time_id = $request->time_id;
        $timeTables->science_id = $request->science_id;
        $timeTables->teacher_id = $request->teacher_id;

        $timeTables->save();

        return redirect('/timeTable');
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
        $days = DayTable::all();
        $groups = Group::all();
        $sciences = Science::all();
        $rooms = Room::all();
        $teachers = Teacher::all();
        $times = Time::all();
        $timeTables = TimeTable::where('id', $id)->get();
        return view('timeTable.edit', compact('timeTables', 'groups', 'sciences', 'rooms', 'teachers', 'times', 'days'));
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
        $timeTables = TimeTable::findOrFail($id);
        $timeTables->day_id = $request->day_id;
        $timeTables->group_id = $request->group_id;
        $timeTables->room_id = $request->room_id;
        $timeTables->time_id = $request->time_id;
        $timeTables->science_id = $request->science_id;
        $timeTables->teacher_id = $request->teacher_id;
     
        $timeTables->save();

        return redirect('/timeTable')->with('success','Blog Create successfully,');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $timeTables = TimeTable::find($id);
        $timeTables->delete();

        return redirect()->back()->with('success', 'Blog delete syccessfully');
    }

}
