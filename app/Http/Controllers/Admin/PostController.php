<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Model\user\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=post::all();
        return view('admin.post.show',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $this->validate($request,[
            'title'=>'required',
            'subtitle'=>'required',
            'slug'=>'required',
            'body'=>'required',
        ]);

        $posts= new post;
        $posts->title=$request->title;
        $posts->subtitle=$request->subtitle;
        $posts->slug=$request->slug;
        $posts->body=$request->body;
        $posts->save();
        return redirect(route('post.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post= post::where('id',$id)->first();
       return view('admin.post.edit',compact('post'));
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
        
        $this->validate($request,[
                    'title'=>'required',
                    'subtitle'=>'required',
                    'slug'=>'required',
                    'body'=>'required',
                ]);

        $posts= post::find($id);
                $posts->title=$request->title;
                $posts->subtitle=$request->subtitle;
                $posts->slug=$request->slug;
                $posts->body=$request->body;
                $posts->save();
                return redirect(route('post.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       post::where('id',$id)->delete();
       return  redirect()->back();
    }
}
