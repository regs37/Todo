<?php

namespace Todo\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Todo\Task;

class TaskController extends Controller {
 	
	public function widgetGetTask(){
		$tasks = Task::leftJoin('users','tasks.userid','=','users.id')->orderBy('tasks.created_at','asc')->get();
		return view('widget/task-list')->with("tasks",$tasks);
	}

    public function createTask(Request $data){
    	if (Auth::check()){
    		$userId = Auth::id();
	    	return Task::create([
	    		'userid' => $userId,
	    		'title' => $data['title'],
	    		'description' => $data['description']
	    	]);
    	}
    }
    
}
