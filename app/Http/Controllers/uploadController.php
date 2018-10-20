<?php

namespace App\Http\Controllers;
use App\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class uploadController extends Controller
{
	public function index() {

		return view('upload.upload');

	}

	public function noOfFiles() {
		return File::count();
	}

	public function store(Request $request)
	{
		$validator = Validator::make($request->all(), [
			'image' => 'required|file|mimes:docx,doc,pdf,xlsx'
		]);
	
		if($validator->fails()){
			return back()->withErrors($validator)->with('error', 'Validation failed!');
		}
		else{
		
		if ($request->hasFile('image')) {

			$filename = $request->image->getClientOriginalName();

			$filesize = $request->image->getClientSize();

			$file = new File();

			$file->name = $filename;

			$file->size = $filesize;

			$file->save();

			$request->image->storeAs('public/uploads', $filename);

			return back()->with('success', 'File upload success!');

		}


		}


	}
    
}
