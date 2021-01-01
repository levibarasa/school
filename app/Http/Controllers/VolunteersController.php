<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VolunteersController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('admin.volunteer');
    }

    public function datatable(){ 
        $data  = \DB::select('select firstname,lastname,phonenumber,email,county,status from volunteers');
        return Datatables::of($data)
        ->addColumn('action',function($data){
            $url_edit = url('volunteers/'.$data->id.'/edit');
            $url = url('volunteers/'.$data->id);
            $edit ="<a class='btn btn-action btn-warning btn-xs' href='".$url_edit."' title='Edit'><i class='nav-icon fas fa-edit'></i></a>";
           
            return $edit;
        }) 
        ->rawColumns(['action'])
        ->editColumn('id','{{$id}}')
        ->make(true);
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
