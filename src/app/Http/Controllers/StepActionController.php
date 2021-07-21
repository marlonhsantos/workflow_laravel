<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StepActionController extends Controller
{
    public function index(Request $request){
        $class = '\App\Http\Controllers\Actions\\' . ucwords($request->type) . 'Action';
        $method = "step" . $request->step;
        if (method_exists($class, $method)) {
           return call_user_func_array([$class, $method], [$request]);
        }
        return response()->json(['Action not found'], Response::HTTP_OK);
    }
}
