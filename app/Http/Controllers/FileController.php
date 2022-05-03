<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    function postUploadFile(Request $request) {

        $request->validate([
            'myfile' => 'required|mimes:pdf,png,jgep,jpg,bmp,txt,docx', // size:1024 in kilobyte
        ]);

        $fileName = time() . '.' . $request->myfile->extension(); // 112215.jpg

        $request->myfile->move(public_path('uploads'), $fileName);

        $request->session()->flash('file_upload_feedback', 'File Uploaded Successfully');
        
        return redirect()->back();

    }
}
