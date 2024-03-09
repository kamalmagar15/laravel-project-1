<?php

namespace App\Http\Controllers;

use App\Models\Remide;
use Illuminate\Http\Request;

class RemediController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $remide=Remide::all();
        return view('page.index',compact('remide'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('page.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $remide = new Remide();
        $remide->name = $request->name;
        $remide->email = $request->email;
        $remide->save();
        return redirect()->back();
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
        $remide= Remide::where('id',$id)->first();
        return view('page.edit' ,compact('remide'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $remide= Remide::where('id',$id)->first();
        $remide->name = $request->name;
        $remide->email = $request->email;
        $remide->update();
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $remide= Remide::where('id',$id)->first();
        $remide->delete();
        return redirect()->back();

    }
}
