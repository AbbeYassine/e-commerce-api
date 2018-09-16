<?php

namespace App\Http\Controllers;

class HelloWorldController extends Controller
{
    public function getMessageHelloWorld()
    {
        return response()->json(['message' => "This the message Hello World"]);
    }
}
