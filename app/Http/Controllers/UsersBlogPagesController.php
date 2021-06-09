<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\UsersBlog;

use Illuminate\Support\Facades\Auth;
class UsersBlogPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        // Users Blogs List
        $user_id = Auth::id();
        $users_blogs = UsersBlog::where('user_id',$user_id)->get();
        return view ('pages.users_blogs.list',compact('users_blogs','user_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.users_blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Store User's Blogs
        $this->validate($request,[
            'title' => 'required|string',
            'category' => 'required|string',
            'description' => 'required|string',
            'highlightedText' => 'required|string',
            'image' => 'required|image',

        ]);
        

        $users_blogs = new UsersBlog;
        $users_blogs->title = $request->title;
        $users_blogs->category= $request->category;
        $users_blogs->description = $request->description;
        $users_blogs->highlightedText = $request->highlightedText; 
        $users_blogs->status = 0;        
        $image  = $request->file('image');
        Storage::putFile('public/img/',$image);
        $users_blogs->image ="storage/img/".$image->hashName();


        $user_id =Auth::id();
        $user_all_data = Auth::user();
        $users_blogs->user_id = $user_id;

        // dd($users_blogs);
        $users_blogs->save();
        return redirect()->route('admin.users_blogs.create')->with('success','New Posts Category & details created Successfully');
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

    public function restoreList()
    {
        //
        $users_blogs = UsersBlog::onlyTrashed()->get();
        return view ('pages.users_blogs.restoreList',compact('users_blogs'));
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
        $users_blogs = UsersBlog::find($id);
        return view('pages.users_blogs.edit',compact('users_blogs'));
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
        $users_blogs = Blog::find($id);
        $users_blogs->title = $request->title;
        $users_blogs->category= $request->category;
        $users_blogs->description = $request->description;       
        $users_blogs->highlightedText = $request->highlightedText;
        $users_blogs->status = 0;            
        if($request->file('image')){
            $image  = $request->file('image');
            Storage::putFile('public/img/',$image);
            $users_blogs->image ="storage/img/".$image->hashName();
        }
        $users_blogs->save();

        
        return redirect()->route('admin.users_blogs.create')->with('success','New Posts Category & details updated Successfully');
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
        $users_blogs = UsersBlog::find($id);
        $users_blogs->delete();
        return redirect()->route('admin.users_blogs.list')->with('success',"Post Deleted Successfully");
    }

    public function restoreData($id)
    {
        //
        $users_blogs = UsersBlog::onlyTrashed()->find($id)->restore();
        return redirect()->route('admin.users_blogs.list')->with('success',"Blog Restored Successfully");
    }
}
