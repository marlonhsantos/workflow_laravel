<?php

namespace App\Http\Controllers;

use App\Http\PostCaller;
use Illuminate\Http\Request;

use App\Models\Refund;
class RefundController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function create() {
        return view('refunds.create');
    }

    public function list() {
        $refunds = Refund::all();
        return view('refunds.list', ['refunds' => $refunds]);
    }

    public function store(Request $request, Refund $refund){
        //$refund = new Refund;
        $refund->description = $request->description;
        $refund->requester_name = $request->requester_name;
        $refund->value = $request->value;
        $refund->is_approved = false;
        $refund->is_denied = false;

        $refund->save();

        $post = new PostCaller(WorkflowController::class, 'store', Request::class,[
            'is_concluded' => 0,
            'is_deleted' => 0,
            'refund_id' => $refund->id,
            'step_id' => 1
        ]);

        $post->call();

        return $this->list();
    }
}
