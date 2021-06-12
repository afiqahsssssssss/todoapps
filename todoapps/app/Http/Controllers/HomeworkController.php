<?php

namespace App\Http\Controllers;

use App\Models\Homework;
use Illuminate\Http\Request;
const HOMEWORKS = '/homeworks';

class HomeworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeworks = Homework::all();
        return view('homeworks.index', compact('homeworks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('homeworks.create');
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
            'task_name' => 'required'
            ]);
            $homeworks = new Homework([
            'task_name' => $request->get('task_name')
            ]);
            $homeworks->save();
            return redirect(HOMEWORKS)->with('success', 'Homework Details Saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Homework  $homework
     * @return \Illuminate\Http\Response
     */
    public function show(Homework $task_id)
    {
        $homeworks = Homework::find($task_id);
        return view('homeworks.show', compact('homeworks'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Homework  $homework
     * @return \Illuminate\Http\Response
     */
    public function edit($task_id)
    {
        $homeworks = Homework::find($task_id);
        return view('homeworks.edit', compact('homeworks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Homework  $homework
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $task_id)
    {
        $request->validate([
            'task_name' => 'required'
            ]);
            $homeworks = Homework::find($task_id);
            $homeworks->task_name = $request->get('task_name');
            $homeworks->save();
            return redirect(HOMEWORKS)->with('success', 'Homework Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Homework  $homework
     * @return \Illuminate\Http\Response
     */
    public function destroy($task_id)
    {
        $homeworks = Homework::find($task_id);
        $homeworks->delete();
        return redirect(HOMEWORKS)->with('success', 'Homework Deleted!');

    }
}
