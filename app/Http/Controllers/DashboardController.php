<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;


    class DashboardController extends Controller
        { 
            public function index () {
                
                $req=Register::get();

                return view('dashboard',compact('req'));

            }
           
        }