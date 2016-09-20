<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Bikes;

class BikesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
   return Bikes::all();
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
$bikes = new Bikes;
    $bikes->name = $request->input('name');
    $bikes->series = $request->input('series');
    $bikes->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if($bikes = Bikes::findOrFail($id)) {

       return $bikes;

  } else {

              $status = array('status' => 400);

              return $status;

  }
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
     $bikes = Bikes::findOrFail($id);
     $bikes->name = $request->input('name');
    $bikes->series = $request->input('series');
    $bikes->save();
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         if($bikes = Bikes::find($id)) {

                if($bikes->delete()) {

                    return array('status' => 200);

                } else {

                    return array('status' => 500);

                }

            } else {

              return array('status' => 400);

            }

 }
    }

