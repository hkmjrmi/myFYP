<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $assignments = Assignment::all();
        $lecturers = Auth::user()->id;
        $assignments = Assignment::with('lecturers')->where('lecturer_id',$lecturers)->get();

        return view('assignments.index', compact('assignments'));
    }

    public function indexStudent()
    {
        $student = Auth::user()->lecturer_id;
        $assignments = Assignment::with('lecturers')->where('lecturer_id',$student)->get();

        return view('assignments.indexStudent', compact('assignments'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('assignments.create');
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

            'name' => 'required',
            'status' => 'required',
            'deadline' => 'required',

        ]);

        $assignment = new Assignment();
        $assignment->lecturer_id = Auth::user()->id;
        $assignment->name = $request->name;
        $assignment->status = $request->status;
        $assignment->deadline = $request->deadline;
        $assignment->save();

        return redirect()->route('lecturer.assignments.index')->with('success','Assignment created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Assignment $assignment)
    {
        return view('assignments.show',compact('assignment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Assignment $assignment)
    {
        return view('assignments.edit',compact('assignment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Assignment $assignment)
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required',
            'deadline' => 'required',
        ]);

        $assignment->update($request->all());

        return redirect()->route('lecturer.assignments.index')->with('success','Assignment updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assignment $assignment)
    {
        $assignment->delete();

        return redirect()->route('lecturer.assignments.index')
                        ->with('success','Assignment deleted successfully');
    }
}
