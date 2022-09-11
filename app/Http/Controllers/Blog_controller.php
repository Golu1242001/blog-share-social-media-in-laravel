<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;


class Blog_controller extends Controller
{
    
    public function show_blog(){
     $blog['blog']=Blog::all();

     foreach($blog['blog'] as $list){
        $blog['share'] = \Share::page(url('view-blog/'.$list->id), 'Share Blogs')
        ->facebook()
        ->twitter()
        ->linkedin()
        ->whatsapp();
     }
   return view('show_blog_table',$blog);
    }
    public function insert_blog(){
        return view('insert_blog');
    }
    public function submit_blog(Request $request){
        $vadate=$request->validate([
            'title'=>'required',
            'img'=>'required',
            'description'=>'required'
        ]);
        $img='';
        if($request->hasfile('img')){
            $file_name=time().rand(111,999).".".$request->file('img')->getClientOriginalExtension();
            $img=$request->file('img')->move('img/',$file_name);
        }
        
            $blog = new Blog();
            $blog->title = $request->title;
            $blog->img = $img;
            $blog->description = $request->description;
            $blog->save();
            session()->flash('msg','Successfully Blog Inserted!');
            return redirect('/');
        
    }
    public function view_blog($id){
        $blog['view']=Blog::find($id);
        return view('view_blog',$blog);

    }
}
