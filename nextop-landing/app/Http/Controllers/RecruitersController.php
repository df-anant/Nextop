<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecruitersController extends Controller
{
    public function recruitersPage()
    {
        try{
            
            return view('recruitersPage');
        }catch(Exception $e){
            dd($e->getMessage());
            return response()->view('errors.500', [], 500);
        }
    }
}
