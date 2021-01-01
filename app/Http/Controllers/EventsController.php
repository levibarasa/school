<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class EventsController extends Controller
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
                    $edit ="<a class='btn btn-action btn-warning btn-xs' href='#' title='Edit'><i class='nav-icon fas fa-edit'></i></a>";
                $delete ="<button data-url='#' onclick='deleteData(this)' class='btn btn-action btn-danger btn-xs' title='Delete'><i class='nav-icon fas fa-trash-alt'></i></button>";


                   // $btn = '<a href="#" class="btn btn-primary btn-icon btn-sm" ><i class="icon ion-ios-create mr-2"></i>Approve </a>';



                    return $edit." ".$delete;;

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
       Event::create([
           "events"=>$request->events,
           "name"=>$request->name,
           "description"=>$request->descrption,
           "location"=>$request->location
       ]);

        return back()->with('success','Event created successfully');

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
