<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function welcome (){
        return view('welcome');
    }
    public function contact(){
         return view('contact');
    }
    public function description(){
        return view('description');

    }
    public function GI(){
        return view('GI');

    }
    public function TM(){
        return view('TM');

    }

    public function create(Request $request)
    {
        if (isset ($_POST['valider'])) {
            $nom = $request->get('name');
            $cne = $request->get('CNE');
            $date_de_naissance = $request->get('Date');
            $password = $request->get('password');

            DB::insert('insert into students values(?,?,?,?,?)', array( $nom, $cne, $date_de_naissance, $password));

            return view('new');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
