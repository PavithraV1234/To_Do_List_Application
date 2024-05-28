<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Type;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    

    public function createtask(){
        $types = Type::pluck('Type'); // Fetch all values of the specified column
    return view('create', ['types'=>$types]);
    }
    public function insert(Request $request){
        $invalue=$request->validate([
            'Title' => 'required',
            'Description' => 'required',
            'Priority'=> 'required',
            'Status'=> 'required',
            'Category'=>'required',
            'DueDate'=>'required'

        ]);
        $invalue['UserID'] = auth()->id();
        Task::create($invalue);
        return redirect()->route('dashboard')
                        ->with('success','Task created successfully.');


    }

    public function show(Task $task){
        $task=Task::where('id',$task->id)->first();
        return view('show',['task'=>$task]);

    }
    public function edit(Task $task){
        $task=Task::where('id',$task->id)->first();
        $types = Type::pluck('Type');
        return view('edit',['task'=>$task],['types'=>$types]);

    }
    public function editinsert(Task $task, Request $request){
        if (auth()->user()->id === $task['UserID']) {
        $incomingFields = $request->validate([
            'Title' => 'required',
            'Description' => 'required',
            'Priority'=> 'required',
            'Status'=> 'required',
            'Category'=>'required',
            'DueDate'=>'required'
        ]);

        $task->update($incomingFields);
        return redirect()->route('dashboard');
    }
                        
    }
    public function deletetask(Task $task) {
        if (auth()->user()->id === $task['UserID']) {
            $task->delete();
        }
        return(redirect('/dashboard'));
    }
    public function search(Request $request){
        $insearch=$request->validate([
            'Title' => 'required'
        ]);
        $tasks = Task::where(function ($query) use ($insearch) {
            foreach ($insearch as $search) {
                $query->orWhere('Title', 'LIKE', '%' . $search . '%');
            }
        })
        ->where('UserID', auth()->id())
        ->get();
        return view('search', ['tasks' => $tasks]);

    }
    
    public function showall(){
        $tasks=Task::where('UserID',auth()->id())->get();
    return view('search', ['tasks' => $tasks]);
    }

}