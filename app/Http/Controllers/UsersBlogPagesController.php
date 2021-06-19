<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\UsersBlog;
use App\Blog;
use Illuminate\Support\Facades\Auth;

//For Notification
use App\Models\User;
use App\Notifications\NewAuthorPost;
use Illuminate\Support\Facades\Notification;
use App\Subscriber;
use App\Notifications\NewPostNotify;
//For Notification

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
        $users_blogs = Blog::where('user_id',$user_id)->whereNull('deleted_at')->orderby('id','DESC')->get();
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
        

        $users_blogs = new Blog;
        $users_blogs->title = $request->title;
        $users_blogs->category= $request->category;
        $users_blogs->description = $request->description;
        $users_blogs->highlightedText = $request->highlightedText; 
              
        $image  = $request->file('image');
        Storage::putFile('public/img/',$image);
        $users_blogs->image ="storage/img/".$image->hashName();


        $user_id =Auth::id();
        $user_all_data = Auth::user();
        $users_blogs->user_id = $user_id;

        if($user_all_data->blog_access == 1)
        {
            $users_blogs->status = 1;     
        }
        else{
            $users_blogs->status = 0; 
        }



        $users_blogs->save();

        
        
        //Notification Part
        $users = User::all();
        Notification::send($users,new NewAuthorPost($user_all_data->name));

        $subscribers = Subscriber::all();
        foreach($subscribers as $subscriber)
        {
            Notification::route('mail',$subscriber->email)
                ->notify(new NewPostNotify($user_all_data));
        }
        // Notification Part End 



        return redirect()->route('users.users_blogs.create')->with('success','New Posts Category & details created Successfully');
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
        $users_blogs = Blog::find($id);
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
                    
        if($request->file('image')){
            $image  = $request->file('image');
            Storage::putFile('public/img/',$image);
            $users_blogs->image ="storage/img/".$image->hashName();
        }
        $users_blogs->save();

        // notify()->success('Laravel Notify is awesome!');
        return redirect()->route('users.users_blogs.list')->with('success','Blog updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
      

        $blog = Blog::where('id', $id)->first();
        $blog->delete();
       
        
        return redirect()->route('users.users_blogs.list')->with('success',"Post Deleted Successfully");
    }

  
    public function ReviewCommentlist()
    {
        $user_id = Auth::id();
        $users_blogs = Blog::where('user_id',$user_id)->whereNotNull('review_comment')->whereNULL('deleted_at')->get();
        return view ('pages.users_blogs.review',compact('users_blogs','user_id'));
    }
}
