<?php

namespace App\Http\Controllers\Actions;

use \App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RefundAction extends Controller
{
    public static function step3(Request $request){
        \App\Models\Refund::findOrFail($request->id)->update($request->all());
        return response()->json($request, Response::HTTP_OK);
    }
}
