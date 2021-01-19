<?php

namespace App\Http\Controllers;

use App\Models\Stream;
use Illuminate\Http\Request;
use Yajra\DataTables\Datatables;

class StreamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) { 
            $users = \DB::table('streams')->get();  
            return Datatables::of($users) 
                ->addIndexColumn() 
                ->addColumn('action', function($row){  
                    $btn = '<a href="streams/'.$row->id.'/edit" class="btn btn-primary btn-icon btn-sm" ><i class="icon ion-ios-create mr-2"></i>Update</a>';
              return $btn; 
                }) 
                ->rawColumns(['action']) 
                ->make(true); 
        } 
        return view('mdm.stream.index');
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

        Stream::create([ 
            "name"=>$request->name
        ]);  

         return back()->with('success','Stream created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stream  $stream
     * @return \Illuminate\Http\Response
     */
    public function show(Stream $stream)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stream  $stream
     * @return \Illuminate\Http\Response
     */ 
    public function edit($id)
    { 
        $data = Stream::where('id',$id)->get();
        if($data->count() > 0){
            return view('mdm.stream.update', compact('data'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stream  $stream
     * @return \Illuminate\Http\Response
     */ 
    public function update(Request $request, $id)
    {  
        $data =  Stream::find($id);
        $data->name = $request->name;  
       if($data->save()){ 
           return redirect()->route('streams.index')->with('success','Stream Updated successfully');

       }else{ 
           return redirect()->back();
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stream  $stream
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stream $stream)
    {
        //
    }
}
