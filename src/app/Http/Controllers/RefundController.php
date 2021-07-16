<?php

namespace App\Http\Controllers;

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

        return redirect("/refunds");
    }
}
