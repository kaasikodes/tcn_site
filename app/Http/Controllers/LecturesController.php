<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lecture;

class LecturesController extends Controller
{
    public function __construct()
    {
        $this->middleware(
            'auth',[
            'except'=>['index','show', 'category']
            ]
        );
        // $this->middleware('test'); //testing middleware
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function category($category){
        // return "JJJ";
        return Lecture::where('belong_to', $category)->get();

    }
    public function index()
    {
        //
        //return view("lectures.index");
        return Lecture::orderBy('created_at','desc')->limit(3)->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("lectures.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validateRequest($request);
        $data['user_id'] = auth()->user()->id;
        $lecture = Lecture::create($data);
        return redirect('/lectures')->with('success',$lecture->title ." has been created successfully!");
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
        $lecture = Lecture::find($id);
        return view('lectures.show')->with('lecture', $lecture);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Lecture $lecture)
    {
        $lecture->options = array('protection, control, & metering' => 'pcm', 'system lines' => 'sl', 'electrical maintainance' => 'em', 'system operation' => 'so');
        return view('lectures.edit')->with('lecture', $lecture);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lecture $lecture)
    {
        //
        $data = $this->validateRequest($request);
        
        $lecture->update($data);
        return redirect('/lectures/'.$lecture->id)->with('success',$lecture->title. " successfully updated.");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lecture $lecture)
    
    {
        $lecture->delete();
        return redirect('/lectures')->with('success',$lecture->title. " successfully deleted");
        
    }


    private function validateRequest($request){
        return $request->validate([
            'title'=>'required',
            'content'=>'required',
            'summary'=>'',
            'belong_to'=>''

        ]);

    }
}