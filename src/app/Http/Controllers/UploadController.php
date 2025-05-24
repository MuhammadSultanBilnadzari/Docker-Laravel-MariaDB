<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upload;

class UploadController extends Controller
{
    public function index()
    {
        $uploads = Upload::all();
        return view('uploads.index', compact('uploads'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|file|max:5120' // max 5MB
        ]);

        $file = $request->file('file');
        $filename = $file->store('uploads', 'public');


        Upload::create([
            'filename' => $filename,
            'original_name' => $file->getClientOriginalName()
        ]);

        return redirect()->back()->with('success', 'File uploaded successfully!');
    }
}
