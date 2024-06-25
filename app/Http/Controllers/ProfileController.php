<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function createProfile(Request $request)
    {
        $validator=Validator::make($request->all(),
        [
            "user_id"=>'required|integer|'
        ])
        $test=$request->all();
        return $this->responseData($test);
    }
}
