<?php

namespace App\Http\Controllers;

use Yajra\DataTables\Datatables;
use App\Models\Entity;
use Illuminate\Http\Request;

class EntityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) { 
            $users = \DB::table('entities')->get();  
            return Datatables::of($users) 
                ->addIndexColumn() 
                ->addColumn('action', function($row){  
                    $btn = '<a href="entities/'.$row->id.'/edit" class="btn btn-primary btn-icon btn-sm" ><i class="icon ion-ios-create mr-2"></i>Update</a>';
              return $btn; 
                }) 
                ->rawColumns(['action']) 
                ->make(true); 
        } 
        return view('mdm.entity.index');
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
     * @param  \App\Models\Entity  $entity
     * @return \Illuminate\Http\Response
     */
    public function show(Entity $entity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entity  $entity
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { $data = Entity::where('id',$id)->get();
        if($data->count() > 0){
            return view('mdm.entity.update', compact('data'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entity  $entity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { //name,motto,address,phone,email
        $data =  Entity::find($id);
        $data->name = $request->name;
        $data->motto = $request->motto;
        $data->address = $request->address;
        $data->phone = $request->phone;
        $data->email = $request->email; 
       if($data->save()){ 
           return redirect()->route('entities.index')->with('success','Event Updated successfully');

       }else{ 
           return redirect()->back();
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entity  $entity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entity $entity)
    {
        //
    }
}
