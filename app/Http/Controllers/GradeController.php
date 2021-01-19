<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;
use Yajra\DataTables\Datatables;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) { 
            $users = \DB::table('grades')->get();  
            return Datatables::of($users) 
                ->addIndexColumn() 
                ->addColumn('action', function($row){  
                    $btn = '<a href="grades/'.$row->id.'/edit" class="btn btn-primary btn-icon btn-sm" ><i class="icon ion-ios-create mr-2"></i>Update</a>';
              return $btn; 
                }) 
                ->rawColumns(['action']) 
                ->make(true); 
        } 
        return view('mdm.class.index');
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

        Grade::create([ 
            "name"=>$request->name,
            "nofstudents"=>$request->nofstudents 
        ]);  

         return back()->with('success','Class created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function show(Grade $grade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */ 
    public function edit($id)
    { 
        $data = Grade::where('id',$id)->get();
        if($data->count() > 0){
            return view('mdm.class.update', compact('data'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {  
        $data =  Grade::find($id);
        $data->name = $request->name;
        $data->nofstudents = $request->nofstudents; 
       if($data->save()){ 
           return redirect()->route('grades.index')->with('success','Class Updated successfully');

       }else{ 
           return redirect()->back();
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grade $grade)
    {
        //
    }
}
