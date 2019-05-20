<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class HelloController extends BaseController{
    public function sayHello(){
        return response()->json(['msg' => 'Hello']);
    }
}
