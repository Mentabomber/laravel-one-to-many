<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class LoggedController extends Controller
{

    public function show($id){

        $project = Project :: findOrFail($id);

        return view("logged.show", compact('project'));
    }
}
