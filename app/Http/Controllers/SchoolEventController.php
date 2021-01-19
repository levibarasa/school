<?php

namespace App\Http\Controllers;

use App\Models\SchoolEvent;
use Illuminate\Http\Request;
use Yajra\DataTables\Datatables;

class SchoolEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) { 
            $users = \DB::table('school_events')->get();  
            return Datatables::of($users) 
                ->addIndexColumn() 
                ->addColumn('action', function($row){  
                    $btn = '<a href="school_events/'.$row->id.'/edit" class="btn btn-primary btn-icon btn-sm" ><i class="icon ion-ios-create mr-2"></i>Update</a>';
              return $btn; 
                }) 
                ->rawColumns(['action']) 
                ->make(true); 
        } 
        return view('mdm.schoolevent.index');
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
     * @param  \App\Models\SchoolEvent  $schoolEvent
     * @return \Illuminate\Http\Response
     */
    public function show(SchoolEvent $schoolEvent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SchoolEvent  $schoolEvent
     * @return \Illuminate\Http\Response
     */
    public function edit(SchoolEvent $schoolEvent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SchoolEvent  $schoolEvent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SchoolEvent $schoolEvent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SchoolEvent  $schoolEvent
     * @return \Illuminate\Http\Response
     */
    public function destroy(SchoolEvent $schoolEvent)
    {
        //
    }
}
