<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;

class LoginController extends Controller
{
    public function loginPage()
    {
        try{
            
            return view('loginPage');
        }catch(Exception $e){
            dd($e->getMessage());
            return response()->view('errors.500', [], 500);
        }
    }
}
