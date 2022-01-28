<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Youtube;
use App\Models\Video;

class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function category($category)
    {
        //
        return Video::where('belong_to', $category)->get();
    }
    public function index()
    {
        //
        return Video::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        return view("videos.create");
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
        $video = Youtube::upload($request->file('video')->getPathName(), [
            'title'       => $data['title'],
            'description' => $data['description']
        ]);

        
        $data['user_id'] = auth()->user()->id;
        $data['url'] = "https://youtube.com/". $video->getVideoId();
        Video::create($data);

 
        return "Video uploaded successfully. Video ID is ". $video->getVideoId();
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

    private function validateRequest($request){
        return $request->validate([
            'title'=>'required',
            'description'=>'required',
            'file'=> 'required|mimes:mp4',
            'belong_to'=>'',
            'lecture_id' => '',

        ]);

    }
}