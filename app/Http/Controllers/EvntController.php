<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event; 
use Yajra\DataTables\DataTables;

class EvntController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $events = \DB::table('events')->get();


            return Datatables::of($events)

                ->addIndexColumn()

                ->addColumn('action', function($row){
                    $edit ="<a class='btn btn-action btn-warning btn-xs' href='event/".$row->id."/edit' title='Edit'><i class='nav-icon fas fa-edit'></i></a>";
                    $delete ="<button href='event/".$row->id."/delete' onclick='deleteData(this)' class='btn btn-action btn-danger btn-xs' title='Disable'><i class='nav-icon fas fa-trash-alt'></i></button>";
                return $edit." ".$delete; 
            })

                ->rawColumns(['action'])

                ->make(true);

        }






        return view('admin.events');
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
