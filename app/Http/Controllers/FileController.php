<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    function postUploadFile(Request $request) {

        $request->validate([
            'myfile' => 'required|mimes:pdf,png,jgep,jpg|max:500|min:480', // size:1024 in kilobyte
        ]);

        // dd($request->myfile);

        // $fileName = time() . '.' . $request->myfile->extension();
        // $request->myfile->move(public_path('uploads'), $fileName);
        // $request->session()->flash('file_upload_feedback', 'File Uploaded Successfully');
        // return redirect()->back();
    }
}
