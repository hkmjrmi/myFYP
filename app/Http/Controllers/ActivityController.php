<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Activity;
use App\Models\Supervisor;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $Activitys = Activity::all();
       
        $activity = Activity::all();

        return view('activities.index', compact('activity'));
    }

    public function indexSupervisor($id)
    {
        
        $student = Student::find($id);
        $id = $student->id;
        $activity = Activity::with('students')->where('student_id',$id)->get();

        return view('activities.indexSupervisor', compact('activity'));
    }

    public function editActivity($id)
    {
        $activity = Activity::find($id);
        return view('dashboard.supervisor.edit-activity', compact('activity'));
    }

    public function updateActivity(Request $request, $id)
    {
        $activity = Activity::find($id);
        $activity->signature = $request->input('signature');
        $activity->update();
        return redirect()->back()->with('status','Signature Signed!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('activities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $request->validate([

            'dateMeeting' => 'required',
            'name' => 'required',

        ]);

        $activity = new Activity();
        $activity->student_id = Auth::user()->id;
        $activity->supervisor_id = Auth::user()->supervisor_id;
        $activity->dateMeeting = $request->dateMeeting;
        $activity->name = $request->name;
        $activity->comment = $request->comment;
        
        $activity->save();

        return redirect()->route('student.activities.index')->with('success','Activity created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Activity $activity)
    {
        return view('activities.show',compact('activity'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Activity $activity)
    {
        return view('activities.edit',compact('activity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activity $activity)
    {
        $request->validate([
            'dateMeeting' => 'required',
            'name' => 'required',
        ]);

        $activity->update($request->all());

        return redirect()->route('student.activities.index')->with('success','Activity updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activity $activity)
    {
        $activity->delete();

        return redirect()->route('student.activities.index')
                        ->with('success','Activity deleted successfully');
    }
}
