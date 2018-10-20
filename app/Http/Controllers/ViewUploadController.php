<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ViewUploadController extends Controller
{
    public function showviewuploadForm(){
    	$downloads=DB::table('files')->get();
    	return view('viewupload',compact('downloads'));

    	


    }
    
}
