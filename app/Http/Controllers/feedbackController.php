<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\feedback;

class feedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('feedback');
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
            'name' => 'required',
            'role' => 'required',
            'feedback' => 'required',
            'file' => 'required|mimes:jpg,jpeg,png',
        ]);

        // get image value
        $img = $request->file('file');
        $targetDir = 'storage\img-feedback/';
        $imgName = $img->hashName();
        $imgstore = $targetDir . $imgName;

        // store to local storage
        Storage::disk('local')->put('public\img-feedback/', $img);

        // push to db
        $store = new feedback ([
            'name' => $request['name'],
            'role' => $request['role'],
            'feedback' => $request['feedback'],
            'img_name' => $imgstore,
        ]);

        $store->save();
        return redirect('/');
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
