<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testomonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TestonimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testomonials = Testomonial::all();
        return view('admin.testomonials.index',compact('testomonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testomonials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'post' => 'required|string',
            'description' => 'required|string',
            'photopath' => 'required|image|mimes:png,jpg',
        ]);

        if($request->has('photopath')){
            $fname = Str::random(20);
            $fexe = $request->file('photopath')->extension();
            $fpath = "$fname.$fexe";

            $request->file('photopath')->storeAs('public/testomonials', $fpath);

            $data['photopath'] = 'testomonials/'.$fpath;
        }

        Testomonial::create($data);

        return redirect(route('admin.testomonial.index'))->with('success', 'testomonials Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testomonial  $testomonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testomonial $testomonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testomonial  $testomonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testomonial $testomonial)
    {
        return view('admin.testomonials.edit',compact('testomonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testomonial  $testomonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testomonial $testomonial)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'post' => 'required|string',
            'description' => 'required|string',
            'photopath' => 'nullable|image|mimes:png,jpg',
        ]);

        if($request->has('photopath')){
            $fname = Str::random(20);
            $fexe = $request->file('photopath')->extension();
            $fpath = "$fname.$fexe";

            $request->file('photopath')->storeAs('public/testomonials', $fpath);

            $data['photopath'] = 'testomonials/'.$fpath;

            if($testomonial->photopath){
                Storage::delete('public/'. $testomonial->photopath);
            }
            
        }

        $testomonial->update($data);

        return redirect(route('admin.testomonial.index'))->with('success', 'testomonial updated sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testomonial  $testomonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testomonial $testomonial)
    {
        //
    }

    public function delete(Request $request)
    {
        $s = Testomonial::find($request->dataid);
        Storage::delete('public/'.$s->photopath);
        $s->delete();
        return redirect(route('admin.testomonial.index'))->with('success', 'testomonial Deleted Sucessfully');

    }
}
