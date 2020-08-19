<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Users;
use App\Http\Controllers;
use Illuminate\Http\Client\Request;

class UsersController extends Controller
{
    public function __construct()
    {
        
    }

    public function getAllUsers()
    {
        $data = Users::all();
        Log::info("Get all data customers");
        if(count($data) > 0){
            return Response::Success($data, "Retrieve Data");
        }else{
            return Response::Failed("There's no users data", "Null Data");
        } 
    }

    

    public function checkLogin(Request $request)
    {
        $check = Users::where('username', $request->input('data.username'))->first();
        if(!$check){
            return Response::Failed("There's no user data", "Null Data");
        }

        return Response::Success($check, "Retrieve data success");
    }
}