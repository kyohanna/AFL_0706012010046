<?php

namespace App\Http\Controllers;

use App\Models\Mentee;
use App\Models\Mentor;
use Illuminate\Http\Request;

class menteeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$mentor = Mentor::all();
        $mentee = Mentee::all();
        return view('mentee', compact('mentee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mentor = Mentor::all();
        return view('creatementee',[
            'mentors'=> $mentor
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Mentee::create([
            'nama' => $request->nama,
            'angkatan' => $request->angkatan,
            'mentor' => $request->mentor,
            'dosenpa' => $request->dosenpa,
        ]);
        return redirect('mentee')->with('success', 'Mentee Added Successfully!');;
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('showmentee', [
            'mentee'=>mentee::where('id', $id)->get()->first()
             ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mentee = Mentee::findOrFail($id);
        return view('editmentee', compact('mentee'));
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
        $mentee = Mentee::findOrFail($id);
        $mentee->update($request->all());
        return redirect('mentee')->with('success', 'Mentee Edited Successfully!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mentee = Mentee::findOrFail($id);
        $mentee->delete();
        return back();
    }
}
