<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;


    class WelcomeController extends Controller
        { 
            function addRequest(Request $req){

                $request = new Register;
                $request->dla_fname=$req->dla_fname;
                $request->dla_lname=$req->dla_lname;
                $request->dla_tel=$req->dla_tel;
                $request->dla_prov=$req->dla_prov;
                $request->dla_name=$req->dla_name;
                $request->save();

            }
        }

       