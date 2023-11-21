<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;

class uploadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $imagens = Upload::all();
        return view("upload.index", ['imagens' => $imagens]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('upload.upload');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Upload $upload)
    {
        if($request->hasFile($request->input('file'))){
            $file = $request->file($request->input('file'));
            $filename = $file['img']->getClientOriginalName();
            $path = new Upload();
            $path->path = $filename;
            $path->save();
            $file['img']->storeAs('public', $filename);
            return 'espero q tenha dado certo';
        } else {
            return 'deu ruim :)';
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
