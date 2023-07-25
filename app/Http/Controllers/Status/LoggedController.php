<?php

namespace App\Http\Controllers\Status;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Project;
use App\Models\Type;

class LoggedController extends Controller
{

    public function show($id){

        $project = Project :: findOrFail($id);

        return view("logged.show", compact('project'));
    }
    public function create(){
        $types = Type :: all();

        return view('logged.create', compact('types'));
    }
    public function store(Request $request) {

        $data = $request -> all();

        $project = Project :: create($data);

        return redirect() -> route('show', $project -> id);
    }
}
