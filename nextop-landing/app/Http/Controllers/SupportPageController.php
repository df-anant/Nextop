<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupportPageController extends Controller
{
    public function supportPage()
    {
        try{
            
            return view('supportPage');
        }catch(Exception $e){
            dd($e->getMessage());
            return response()->view('errors.500', [], 500);
        }
    }
}
