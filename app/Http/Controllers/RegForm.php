<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\volunteers;
class RegForm extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('regform');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function thanks()
    {
        return view('thnaks');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required'
        ]);

        volunteers::create([
            'name' => $request->name,
            'mail' => $request->mail,
            'phone' => $request->phone,
            'university' => $request->university,
            'major' => $request->major,
            'acyear' => $request->acyear[0],
            'committee' =>$request->committee[0],
            'ras-question' => $request->ras,
            'past-vol-work' => $request->exp,
            'why-join' => $request->wjoin,
            'facebook' => $request->facebook,
            'experince' => $request->comments
        ]);
        
        

        return redirect()->route('thanks');
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
