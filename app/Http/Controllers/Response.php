<?php
namespace App\Http\Controllers;

class Response{

    public static function Success($data = [], $message = "")
    {
        return response()->json(
            [
                "message"=> $message,
                "status"=> true,
                "data"=> $data
            ], 200, 
        );
    }

    public static function Failed($data = "", $message = "")
    {
        return response()->json(
            [
                "message"=> $message,
                "status"=> false,
                "data"=> $data
            ],500, 
        );
    }
}