<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Refund;
use App\Models\Workflow;

class InboxController extends Controller
{
    public function index(){
        return view('inbox');
    }

    public function workflow($id){
        return view('workflows.detail', ['id' => $id]);
    }
}
