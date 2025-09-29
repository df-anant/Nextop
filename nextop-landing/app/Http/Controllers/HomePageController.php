<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Exception;


class HomePageController extends Controller
{
    public function homePage()
    {
        try{

            return view('homePage');
        }catch(Exception $e){
            dd($e->getMessage());
            return response()->view('errors.500', [], 500);
        }
    }
}
