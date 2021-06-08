<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Blog;
use App\Slider;
use DB;
use App\CommentReply;
use App\User;
use App\Comment;
use Illuminate\Support\Facades\Auth;
class PagesController extends Controller
{
    // index page
    public function index()
    {
        // Show All Blog Posts Show
        $blogs = Blog::paginate(10);        
        return view('pages.index',compact('blogs'));
    }

    
    // public function blog(){            
    //     // $recentposts=  Blog::latest()->limit(2)->get();
    //     $blogs = Blog::paginate(2);
    //     // $categories = Blog::orderBy('category','desc')->get();
    //     return view('pages.blog',compact('blogs'));
        
    // }


     function likePost(Request $request)
    {
      $user= Auth::user();
      return $user;
      $likePost = $user->likedPosts()->where('post_id',$request->blog_id)->count();
      if($likePost == 0)
      {
        $user->likedPosts()->attach($request->blog_id);
      }
      else{
        $user->likedPosts()->detach($request->blog_id);
      }
      return redirect()->back();
    }



    public function allpost($id, $category){
        // SinglePost
        $blogs = Blog::find($id);

       
        $countComments = DB::table('comments')->where('post_id', $id)->get()->count();
      

        // Related Posts Show
        $relatedposts= Blog::where('category',"=", $category)->take(3)->get();
        // Related Posts Show

         


        // Travel Category Post Count //
        $categorytravelCount= Blog::where('category',"=","travel")->get()->count(); 
        // Travel Category Post Count //
        
        // Travel Category Post Count //
        $categorystartupsCount= Blog::where('category',"=","startups")->get()->count(); 
        // Travel Category Post Count //




        // Health Category Post Count //
        $categoryhealthCount= Blog::where('category',"=","health")->get()->count(); 
        // Health Category Post Count //




        // Law Category Post Count
        $categorylawCount= Blog::where('category',"=","law")->get()->count(); 
        // Law Category Post Count




        // Lifestyle Category Post Count
        $categorylifestyleCount= Blog::where('category',"=","lifestyle")->get()->count(); 
        // Lifestyle Category Post Count




        // Review Category Post Count
        $categoryreviewCount= Blog::where('category',"=","review")->get()->count(); 
        // Review Category Post Count




        // howto Category Post Count
        $categoryhowtoCount= Blog::where('category',"=","howto")->get()->count();
        // howto Category Post Count




        // BrandStories Category Post Count
        $categorybrandstoriesCount= Blog::where('category',"=","brandstories")->get()->count();
        // BrandStories Category Post Count




        // Food Category Post Count
        $categoryfoodCount= Blog::where('category',"=","food")->get()->count();
        // Food Category Post Count




        // Career Category Post Count
        $categorycareerCount= Blog::where('category',"=","career")->get()->count();
        // Career Category Post Count




        // Education Category Post Count
        $categoryeducationCount= Blog::where('category',"=","education")->get()->count(); 
        // Education Category Post Count

        $user_detail= DB::table('users')->join('comments','users.id','comments.user_id')->get(); 
        $comments = DB::table('comments')->where('post_id', $id)->get();

        return view('pages.blog_category_pages.post',compact('blogs','relatedposts','categorytravelCount','categoryhealthCount',
        'categorylawCount','categorylifestyleCount','categoryreviewCount','categoryhowtoCount','categorybrandstoriesCount','categoryfoodCount',
        'categorycareerCount','categoryeducationCount','categorystartupsCount','comments','user_detail','countComments'));
        
    }


    // Here we show Startups 
    public function startups()
    {

               // Travel Category Post Count //
               $categorytravelCount= Blog::where('category',"=","travel")->get()->count(); 
               // Travel Category Post Count //

              // Related Posts Show
              $relatedposts= Blog::latest()->limit(5)->get();
              // Related Posts Show
               

              // Travel Category Post Count //
               $categorystartupsCount= Blog::where('category',"=","startups")->get()->count(); 
              // Travel Category Post Count //
              
               // Health Category Post Count //
               $categoryhealthCount= Blog::where('category',"=","health")->get()->count(); 
               // Health Category Post Count //
       
       
       
       
               // Law Category Post Count
               $categorylawCount= Blog::where('category',"=","law")->get()->count(); 
               // Law Category Post Count
       
       
       
       
               // Lifestyle Category Post Count
               $categorylifestyleCount= Blog::where('category',"=","lifestyle")->get()->count(); 
               // Lifestyle Category Post Count
       
       
       
       
               // Review Category Post Count
               $categoryreviewCount= Blog::where('category',"=","review")->get()->count(); 
               // Review Category Post Count
       
       
       
       
               // howto Category Post Count
               $categoryhowtoCount= Blog::where('category',"=","howto")->get()->count();
               // howto Category Post Count
       
       
       
       
               // BrandStories Category Post Count
               $categorybrandstoriesCount= Blog::where('category',"=","brandstories")->get()->count();
               // BrandStories Category Post Count
       
       
       
       
               // Food Category Post Count
               $categoryfoodCount= Blog::where('category',"=","food")->get()->count();
               // Food Category Post Count
       
       
       
       
               // Career Category Post Count
               $categorycareerCount= Blog::where('category',"=","career")->get()->count();
               // Career Category Post Count
       
       
       
       
               // Education Category Post Count
               $categoryeducationCount= Blog::where('category',"=","education")->get()->count(); 
               // Education Category Post Count
               

      $blogs_startups = Blog::where('category','startups')->paginate(50);
      return view('pages.blog_category_pages.startup',compact('blogs_startups','relatedposts','categorytravelCount','categoryhealthCount',
      'categorylawCount','categorylifestyleCount','categoryreviewCount','categoryhowtoCount','categorybrandstoriesCount','categoryfoodCount',
      'categorycareerCount','categoryeducationCount','categorystartupsCount'));
    }

    // Here we show health 
    public function health()
    {
              // Related Posts Show
               $relatedposts= Blog::latest()->limit(5)->get();
              // Related Posts Show

              // Travel Category Post Count //
              $categorytravelCount= Blog::where('category',"=","travel")->get()->count(); 
              // Travel Category Post Count //
      
      
              // Travel Category Post Count //
                $categorystartupsCount= Blog::where('category',"=","startups")->get()->count(); 
              // Travel Category Post Count //
        
      
              // Health Category Post Count //
              $categoryhealthCount= Blog::where('category',"=","health")->get()->count(); 
              // Health Category Post Count //
      
      
      
      
              // Law Category Post Count
              $categorylawCount= Blog::where('category',"=","law")->get()->count(); 
              // Law Category Post Count
      
      
      
      
              // Lifestyle Category Post Count
              $categorylifestyleCount= Blog::where('category',"=","lifestyle")->get()->count(); 
              // Lifestyle Category Post Count
      
      
      
      
              // Review Category Post Count
              $categoryreviewCount= Blog::where('category',"=","review")->get()->count(); 
              // Review Category Post Count
      
      
      
      
              // howto Category Post Count
              $categoryhowtoCount= Blog::where('category',"=","howto")->get()->count();
              // howto Category Post Count
      
      
      
      
              // BrandStories Category Post Count
              $categorybrandstoriesCount= Blog::where('category',"=","brandstories")->get()->count();
              // BrandStories Category Post Count
      
      
      
      
              // Food Category Post Count
              $categoryfoodCount= Blog::where('category',"=","food")->get()->count();
              // Food Category Post Count
      
      
      
      
              // Career Category Post Count
              $categorycareerCount= Blog::where('category',"=","career")->get()->count();
              // Career Category Post Count
      
      
      
      
              // Education Category Post Count
              $categoryeducationCount= Blog::where('category',"=","education")->get()->count(); 
              // Education Category Post Count
              

      $blogs_health = Blog::where('category','health')->paginate(50);
      return view('pages.blog_category_pages.health',compact('blogs_health','relatedposts','categorytravelCount','categoryhealthCount',
      'categorylawCount','categorylifestyleCount','categoryreviewCount','categoryhowtoCount','categorybrandstoriesCount','categoryfoodCount',
      'categorycareerCount','categoryeducationCount','categorystartupsCount'));
    }

    // Here we show Law 
    public function law()
    {
              // Travel Category Post Count //
              $categorytravelCount= Blog::where('category',"=","travel")->get()->count(); 
              // Travel Category Post Count //
      
      
              // Travel Category Post Count //
               $categorystartupsCount= Blog::where('category',"=","startups")->get()->count(); 
              // Travel Category Post Count //
        
      
              // Health Category Post Count //
              $categoryhealthCount= Blog::where('category',"=","health")->get()->count(); 
              // Health Category Post Count //
      
      
      
      
              // Law Category Post Count
              $categorylawCount= Blog::where('category',"=","law")->get()->count(); 
              // Law Category Post Count
      
      
      
      
              // Lifestyle Category Post Count
              $categorylifestyleCount= Blog::where('category',"=","lifestyle")->get()->count(); 
              // Lifestyle Category Post Count
      
      
      
      
              // Review Category Post Count
              $categoryreviewCount= Blog::where('category',"=","review")->get()->count(); 
              // Review Category Post Count
      
      
      
      
              // howto Category Post Count
              $categoryhowtoCount= Blog::where('category',"=","howto")->get()->count();
              // howto Category Post Count
      
      
      
      
              // BrandStories Category Post Count
              $categorybrandstoriesCount= Blog::where('category',"=","brandstories")->get()->count();
              // BrandStories Category Post Count
      
      
      
      
              // Food Category Post Count
              $categoryfoodCount= Blog::where('category',"=","food")->get()->count();
              // Food Category Post Count
      
      
      
      
              // Career Category Post Count
              $categorycareerCount= Blog::where('category',"=","career")->get()->count();
              // Career Category Post Count
      
      
      
      
              // Education Category Post Count
              $categoryeducationCount= Blog::where('category',"=","education")->get()->count(); 
              // Education Category Post Count
              
    // Related Posts Show
       $relatedposts= Blog::latest()->limit(5)->get();
    // Related Posts Show
      
      $blogs_law = Blog::where('category','law')->paginate(50);
      return view('pages.blog_category_pages.law',compact('blogs_law','relatedposts','categorytravelCount','categoryhealthCount',
      'categorylawCount','categorylifestyleCount','categoryreviewCount','categoryhowtoCount','categorybrandstoriesCount','categoryfoodCount',
      'categorycareerCount','categoryeducationCount','categorystartupsCount'));
    }


    // Here we show lifestyle 
    public function lifestyle()
    {
              
             // Travel Category Post Count //
             $categorytravelCount= Blog::where('category',"=","travel")->get()->count(); 
            // Travel Category Post Count //
      
             // Related Posts Show
             $relatedposts= Blog::latest()->limit(5)->get();
             // Related Posts Show


             // Startups Category Post Count //
             $categorystartupsCount= Blog::where('category',"=","startups")->get()->count(); 
             // Startups Category Post Count //
   
      
              // Health Category Post Count //
              $categoryhealthCount= Blog::where('category',"=","health")->get()->count(); 
              // Health Category Post Count //
      
      
      
      
              // Law Category Post Count
              $categorylawCount= Blog::where('category',"=","law")->get()->count(); 
              // Law Category Post Count
      
      
      
      
              // Lifestyle Category Post Count
              $categorylifestyleCount= Blog::where('category',"=","lifestyle")->get()->count(); 
              // Lifestyle Category Post Count
      
      
      
      
              // Review Category Post Count
              $categoryreviewCount= Blog::where('category',"=","review")->get()->count(); 
              // Review Category Post Count
      
      
      
      
              // howto Category Post Count
              $categoryhowtoCount= Blog::where('category',"=","howto")->get()->count();
              // howto Category Post Count
      
      
      
      
              // BrandStories Category Post Count
              $categorybrandstoriesCount= Blog::where('category',"=","brandstories")->get()->count();
              // BrandStories Category Post Count
      
      
      
      
              // Food Category Post Count
              $categoryfoodCount= Blog::where('category',"=","food")->get()->count();
              // Food Category Post Count
      
      
      
      
              // Career Category Post Count
              $categorycareerCount= Blog::where('category',"=","career")->get()->count();
              // Career Category Post Count
      
      
      
      
              // Education Category Post Count
              $categoryeducationCount= Blog::where('category',"=","education")->get()->count(); 
              // Education Category Post Count
              

      $blogs_lifestyle = Blog::where('category','lifestyle')->paginate(50);
      return view('pages.blog_category_pages.lifestyle',compact('blogs_lifestyle','relatedposts','categorytravelCount','categoryhealthCount',
      'categorylawCount','categorylifestyleCount','categoryreviewCount','categoryhowtoCount','categorybrandstoriesCount','categoryfoodCount',
      'categorycareerCount','categoryeducationCount','categorystartupsCount'));
    }

    // Here we show review 
    public function review()
    {
              // Travel Category Post Count //
              $categorytravelCount= Blog::where('category',"=","travel")->get()->count(); 
              // Travel Category Post Count //
       
             // Related Posts Show
               $relatedposts= Blog::latest()->limit(5)->get();
             // Related Posts Show
      
             // Travel Category Post Count //
                $categorystartupsCount= Blog::where('category',"=","startups")->get()->count(); 
             // Travel Category Post Count //
      
      
              // Health Category Post Count //
              $categoryhealthCount= Blog::where('category',"=","health")->get()->count(); 
              // Health Category Post Count //
      
      
      
      
              // Law Category Post Count
              $categorylawCount= Blog::where('category',"=","law")->get()->count(); 
              // Law Category Post Count
      
      
      
      
              // Lifestyle Category Post Count
              $categorylifestyleCount= Blog::where('category',"=","lifestyle")->get()->count(); 
              // Lifestyle Category Post Count
      
      
      
      
              // Review Category Post Count
              $categoryreviewCount= Blog::where('category',"=","review")->get()->count(); 
              // Review Category Post Count
      
      
      
      
              // howto Category Post Count
              $categoryhowtoCount= Blog::where('category',"=","howto")->get()->count();
              // howto Category Post Count
      
      
      
      
              // BrandStories Category Post Count
              $categorybrandstoriesCount= Blog::where('category',"=","brandstories")->get()->count();
              // BrandStories Category Post Count
      
      
      
      
              // Food Category Post Count
              $categoryfoodCount= Blog::where('category',"=","food")->get()->count();
              // Food Category Post Count
      
      
      
      
              // Career Category Post Count
              $categorycareerCount= Blog::where('category',"=","career")->get()->count();
              // Career Category Post Count
      
      
      
      
              // Education Category Post Count
              $categoryeducationCount= Blog::where('category',"=","education")->get()->count(); 
              // Education Category Post Count
              

      $blogs_review = Blog::where('category','review')->paginate(50);
      return view('pages.blog_category_pages.review',compact('blogs_review','relatedposts','categorytravelCount','categoryhealthCount',
      'categorylawCount','categorylifestyleCount','categoryreviewCount','categoryhowtoCount','categorybrandstoriesCount','categoryfoodCount',
      'categorycareerCount','categoryeducationCount','categorystartupsCount'));
    }

    // Here we show howto 
    public function howto()
    {
              // Travel Category Post Count //
              $categorytravelCount= Blog::where('category',"=","travel")->get()->count(); 
              // Travel Category Post Count //
     
              // Related Posts Show
               $relatedposts= Blog::latest()->limit(5)->get();
               // Related Posts Show

            // Travel Category Post Count //
              $categorystartupsCount= Blog::where('category',"=","startups")->get()->count(); 
            // Travel Category Post Count //
      
      
      
              // Health Category Post Count //
              $categoryhealthCount= Blog::where('category',"=","health")->get()->count(); 
              // Health Category Post Count //
      
      
      
      
              // Law Category Post Count
              $categorylawCount= Blog::where('category',"=","law")->get()->count(); 
              // Law Category Post Count
      
      
      
      
              // Lifestyle Category Post Count
              $categorylifestyleCount= Blog::where('category',"=","lifestyle")->get()->count(); 
              // Lifestyle Category Post Count
      
      
      
      
              // Review Category Post Count
              $categoryreviewCount= Blog::where('category',"=","review")->get()->count(); 
              // Review Category Post Count
      
      
      
      
              // howto Category Post Count
              $categoryhowtoCount= Blog::where('category',"=","howto")->get()->count();
              // howto Category Post Count
      
      
      
      
              // BrandStories Category Post Count
              $categorybrandstoriesCount= Blog::where('category',"=","brandstories")->get()->count();
              // BrandStories Category Post Count
      
      
      
      
              // Food Category Post Count
              $categoryfoodCount= Blog::where('category',"=","food")->get()->count();
              // Food Category Post Count
      
      
      
      
              // Career Category Post Count
              $categorycareerCount= Blog::where('category',"=","career")->get()->count();
              // Career Category Post Count
      
      
      
      
              // Education Category Post Count
              $categoryeducationCount= Blog::where('category',"=","education")->get()->count(); 
              // Education Category Post Count
              

      $blogs_howto = Blog::where('category','howto')->paginate(50);
      return view('pages.blog_category_pages.howto',compact('blogs_howto','relatedposts','categorytravelCount','categoryhealthCount',
      'categorylawCount','categorylifestyleCount','categoryreviewCount','categoryhowtoCount','categorybrandstoriesCount','categoryfoodCount',
      'categorycareerCount','categoryeducationCount','categorystartupsCount'));
    }

    // Here we show religion 
    public function brandstories()
    {
              // Travel Category Post Count //
              $categorytravelCount= Blog::where('category',"=","travel")->get()->count(); 
              // Travel Category Post Count //


               // Related Posts Show
               $relatedposts= Blog::latest()->limit(5)->get();
               // Related Posts Show

              // Startup Category Post Count //
              $categorystartupsCount= Blog::where('category',"=","startups")->get()->count(); 
              // Startup Category Post Count //
      
      
      
      
              // Health Category Post Count //
              $categoryhealthCount= Blog::where('category',"=","health")->get()->count(); 
              // Health Category Post Count //
      
      
      
      
              // Law Category Post Count
              $categorylawCount= Blog::where('category',"=","law")->get()->count(); 
              // Law Category Post Count
      
      
      
      
              // Lifestyle Category Post Count
              $categorylifestyleCount= Blog::where('category',"=","lifestyle")->get()->count(); 
              // Lifestyle Category Post Count
      
      
      
      
              // Review Category Post Count
              $categoryreviewCount= Blog::where('category',"=","review")->get()->count(); 
              // Review Category Post Count
      
      
      
      
              // howto Category Post Count
              $categoryhowtoCount= Blog::where('category',"=","howto")->get()->count();
              // howto Category Post Count
      
      
      
      
              // BrandStories Category Post Count
              $categorybrandstoriesCount= Blog::where('category',"=","brandstories")->get()->count();
              // BrandStories Category Post Count
      
      
      
      
              // Food Category Post Count
              $categoryfoodCount= Blog::where('category',"=","food")->get()->count();
              // Food Category Post Count
      
      
      
      
              // Career Category Post Count
              $categorycareerCount= Blog::where('category',"=","career")->get()->count();
              // Career Category Post Count
      
      
      
      
              // Education Category Post Count
              $categoryeducationCount= Blog::where('category',"=","education")->get()->count(); 
              // Education Category Post Count
              

      $blogs_brandstories = Blog::where('category','brandstories')->paginate(50);
      return view('pages.blog_category_pages.brandstories',compact('blogs_brandstories','relatedposts','categorytravelCount','categoryhealthCount',
      'categorylawCount','categorylifestyleCount','categoryreviewCount','categoryhowtoCount','categorybrandstoriesCount','categoryfoodCount',
      'categorycareerCount','categoryeducationCount','categorystartupsCount'));
    }

    // Here we show food 
    public function food()
    {
              // Travel Category Post Count //
              $categorytravelCount= Blog::where('category',"=","travel")->get()->count(); 
              // Travel Category Post Count //


              
               // Related Posts Show
               $relatedposts= Blog::latest()->limit(5)->get();
               // Related Posts Show

              // Startup Category Post Count //
              $categorystartupsCount= Blog::where('category',"=","startups")->get()->count(); 
              // Startup Category Post Count //
      
      
      
      
              // Health Category Post Count //
              $categoryhealthCount= Blog::where('category',"=","health")->get()->count(); 
              // Health Category Post Count //
      
      
      
      
              // Law Category Post Count
              $categorylawCount= Blog::where('category',"=","law")->get()->count(); 
              // Law Category Post Count
      
      
      
      
              // Lifestyle Category Post Count
              $categorylifestyleCount= Blog::where('category',"=","lifestyle")->get()->count(); 
              // Lifestyle Category Post Count
      
      
      
      
              // Review Category Post Count
              $categoryreviewCount= Blog::where('category',"=","review")->get()->count(); 
              // Review Category Post Count
      
      
      
      
              // howto Category Post Count
              $categoryhowtoCount= Blog::where('category',"=","howto")->get()->count();
              // howto Category Post Count
      
      
      
      
              // BrandStories Category Post Count
              $categorybrandstoriesCount= Blog::where('category',"=","brandstories")->get()->count();
              // BrandStories Category Post Count
      
      
      
      
              // Food Category Post Count
              $categoryfoodCount= Blog::where('category',"=","food")->get()->count();
              // Food Category Post Count
      
      
      
      
              // Career Category Post Count
              $categorycareerCount= Blog::where('category',"=","career")->get()->count();
              // Career Category Post Count
      
      
      
      
              // Education Category Post Count
              $categoryeducationCount= Blog::where('category',"=","education")->get()->count(); 
              // Education Category Post Count
              

       $blogs_food = Blog::where('category','food')->paginate(50);
       return view('pages.blog_category_pages.food',compact('blogs_food','relatedposts','categorytravelCount','categoryhealthCount',
       'categorylawCount','categorylifestyleCount','categoryreviewCount','categoryhowtoCount','categorybrandstoriesCount','categoryfoodCount',
       'categorycareerCount','categoryeducationCount','categorystartupsCount'));
    }


    // Here we show travel 
    public function travel()
    {
              // Travel Category Post Count //
              $categorytravelCount= Blog::where('category',"=","travel")->get()->count(); 
              // Travel Category Post Count //

                 
               // Related Posts Show
               $relatedposts= Blog::latest()->limit(5)->get();
               // Related Posts Show

              // Startup Category Post Count //
              $categorystartupsCount= Blog::where('category',"=","startups")->get()->count(); 
              // Startup Category Post Count //
      
      
      
      
      
              // Health Category Post Count //
              $categoryhealthCount= Blog::where('category',"=","health")->get()->count(); 
              // Health Category Post Count //
      
      
      
      
              // Law Category Post Count
              $categorylawCount= Blog::where('category',"=","law")->get()->count(); 
              // Law Category Post Count
      
      
      
      
              // Lifestyle Category Post Count
              $categorylifestyleCount= Blog::where('category',"=","lifestyle")->get()->count(); 
              // Lifestyle Category Post Count
      
      
      
      
              // Review Category Post Count
              $categoryreviewCount= Blog::where('category',"=","review")->get()->count(); 
              // Review Category Post Count
      
      
      
      
              // howto Category Post Count
              $categoryhowtoCount= Blog::where('category',"=","howto")->get()->count();
              // howto Category Post Count
      
      
      
      
              // BrandStories Category Post Count
              $categorybrandstoriesCount= Blog::where('category',"=","brandstories")->get()->count();
              // BrandStories Category Post Count
      
      
      
      
              // Food Category Post Count
              $categoryfoodCount= Blog::where('category',"=","food")->get()->count();
              // Food Category Post Count
      
      
      
      
              // Career Category Post Count
              $categorycareerCount= Blog::where('category',"=","career")->get()->count();
              // Career Category Post Count
      
      
      
      
              // Education Category Post Count
              $categoryeducationCount= Blog::where('category',"=","education")->get()->count(); 
              // Education Category Post Count
              

      $blogs_travel = Blog::where('category','travel')->paginate(50);
      return view('pages.blog_category_pages.travel',compact('blogs_travel','relatedposts','categorytravelCount','categoryhealthCount',
      'categorylawCount','categorylifestyleCount','categoryreviewCount','categoryhowtoCount','categorybrandstoriesCount','categoryfoodCount',
      'categorycareerCount','categoryeducationCount','categorystartupsCount'));
    }

    // Here we show career 
    public function career()
    {
                // Travel Category Post Count //
                 $categorytravelCount= Blog::where('category',"=","travel")->get()->count(); 
                // Travel Category Post Count //

                 // Related Posts Show
                 $relatedposts= Blog::latest()->limit(5)->get();
                 // Related Posts Show
  
                // Startup Category Post Count //
                $categorystartupsCount= Blog::where('category',"=","startups")->get()->count(); 
                // Startup Category Post Count //
      
      
      
      
              // Health Category Post Count //
              $categoryhealthCount= Blog::where('category',"=","health")->get()->count(); 
              // Health Category Post Count //
      
      
      
      
              // Law Category Post Count
              $categorylawCount= Blog::where('category',"=","law")->get()->count(); 
              // Law Category Post Count
      
      
      
      
              // Lifestyle Category Post Count
              $categorylifestyleCount= Blog::where('category',"=","lifestyle")->get()->count(); 
              // Lifestyle Category Post Count
      
      
      
      
              // Review Category Post Count
              $categoryreviewCount= Blog::where('category',"=","review")->get()->count(); 
              // Review Category Post Count
      
      
      
      
              // howto Category Post Count
              $categoryhowtoCount= Blog::where('category',"=","howto")->get()->count();
              // howto Category Post Count
      
      
      
      
              // BrandStories Category Post Count
              $categorybrandstoriesCount= Blog::where('category',"=","brandstories")->get()->count();
              // BrandStories Category Post Count
      
      
      
      
              // Food Category Post Count
              $categoryfoodCount= Blog::where('category',"=","food")->get()->count();
              // Food Category Post Count
      
      
      
      
              // Career Category Post Count
              $categorycareerCount= Blog::where('category',"=","career")->get()->count();
              // Career Category Post Count
      
      
      
      
              // Education Category Post Count
              $categoryeducationCount= Blog::where('category',"=","education")->get()->count(); 
              // Education Category Post Count
              

      $blogs_career = Blog::where('category','career')->paginate(50);
      return view('pages.blog_category_pages.career',compact('blogs_career','relatedposts','categorytravelCount','categoryhealthCount',
      'categorylawCount','categorylifestyleCount','categoryreviewCount','categoryhowtoCount','categorybrandstoriesCount','categoryfoodCount',
      'categorycareerCount','categoryeducationCount','categorystartupsCount'));
    }

    // Here we show sports 
    public function education()
    {
               // Travel Category Post Count //
               $categorytravelCount= Blog::where('category',"=","travel")->get()->count(); 
               // Travel Category Post Count //
      
      
              // Related Posts Show
              $relatedposts= Blog::latest()->limit(5)->get();
              // Related Posts Show
  

             // Startup Category Post Count //
              $categorystartupsCount= Blog::where('category',"=","startups")->get()->count(); 
             // Startup Category Post Count //
      
              // Health Category Post Count //
              $categoryhealthCount= Blog::where('category',"=","health")->get()->count(); 
              // Health Category Post Count //
      
      
      
      
              // Law Category Post Count
              $categorylawCount= Blog::where('category',"=","law")->get()->count(); 
              // Law Category Post Count
      
      
      
      
              // Lifestyle Category Post Count
              $categorylifestyleCount= Blog::where('category',"=","lifestyle")->get()->count(); 
              // Lifestyle Category Post Count
      
      
      
      
              // Review Category Post Count
              $categoryreviewCount= Blog::where('category',"=","review")->get()->count(); 
              // Review Category Post Count
      
      
      
      
              // howto Category Post Count
              $categoryhowtoCount= Blog::where('category',"=","howto")->get()->count();
              // howto Category Post Count
      
      
      
      
              // BrandStories Category Post Count
              $categorybrandstoriesCount= Blog::where('category',"=","brandstories")->get()->count();
              // BrandStories Category Post Count
      
      
      
      
              // Food Category Post Count
              $categoryfoodCount= Blog::where('category',"=","food")->get()->count();
              // Food Category Post Count
      
      
      
      
              // Career Category Post Count
              $categorycareerCount= Blog::where('category',"=","career")->get()->count();
              // Career Category Post Count
      
      
      
      
              // Education Category Post Count
              $categoryeducationCount= Blog::where('category',"=","education")->get()->count(); 
              // Education Category Post Count
              
        
      $blogs_education = Blog::where('category','education')->paginate(50);

      return view('pages.blog_category_pages.education',compact('blogs_education','relatedposts','categorytravelCount','categoryhealthCount',
      'categorylawCount','categorylifestyleCount','categoryreviewCount','categoryhowtoCount','categorybrandstoriesCount','categoryfoodCount',
      'categorycareerCount','categoryeducationCount','categorystartupsCount'));
    }


}
