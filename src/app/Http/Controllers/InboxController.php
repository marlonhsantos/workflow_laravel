<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Refund;
use App\Models\Workflow;

class InboxController extends Controller
{
    public function index(){
        $workflows = Workflow::with(['refund'])->get();
        return view('inbox', ['workflows' => $workflows]);
    }

    public function workflow($id){
        return view('workflows.detail', ['id' => $id]);
    }
}
