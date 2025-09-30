<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function communityPage()
    {
        try{
            
            return view('communityPage');
        }catch(Exception $e){
            dd($e->getMessage());
            return response()->view('errors.500', [], 500);
        }
    }
}
