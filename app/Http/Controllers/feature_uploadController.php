<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\feature;

class feature_uploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('upload');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // get value and validation
        $request->validate([
            'text' => 'required',
            'sub-title' => 'required',
            'img' => 'required|mimes:jpg,jpeg,png',
        ]);

        // get image value
        $img = $request->file('img');
        $targetDir = 'storage\img-feature/';
        $imgName = $img->hashName();
        $imgstore = $targetDir . $imgName;

        // store to local storage
        Storage::disk('local')->put('public\img-feature/', $img);

        // push to db
        $store = new feature ([
            'title' => $request['text'],
            'sub' => $request['sub-title'],
            'img_name' => $imgstore,
        ]);

        $store->save();
        return redirect('/upload-feature');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
