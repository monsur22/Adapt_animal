<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\AdaptPost;
use DB;
use App\User;
use App\RequestPost;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data=AdaptPost::all();
        $category=Category::all();
        $home_content=AdaptPost::orderBy('id', 'desc')->take(4)->get();
        
        return view('Home.homecontent.homecontent',[
            'data'=>$data,
            'category'=>$category,
            'home_content'=>$home_content,
        ]);

    }

    public function volunteer_index(){
        $category=Category::all();
        return view('Home.pages.volunteer',[
            'category'=>$category,

        ]);

    }
    public function about_index(){
        $category=Category::all();
        return view('Home.pages.about',[
            'category'=>$category,

        ]);

    }
    public function contact_index(){
        $category=Category::all();
        return view('Home.pages.contact',[
            'category'=>$category,

        ]);

    }

    public function animal_by_menu($id){
        $category=Category::all();
        $data=AdaptPost::all();
        $animal_by_menu= DB::table('adapt_posts')
                            ->join('categories', 'adapt_posts.category', '=', 'categories.id')
                            ->select('adapt_posts.*', 'categories.category_name')  
                            ->where('adapt_posts.category',$id)
                            ->where('adapt_posts.status',1)
                            ->get();
        return view('Home.pages.adnimal_by_menu',[
            'data'=>$data,
            'animal_by_menu'=>$animal_by_menu,
            'category'=>$category,


        ]);

    }

    public function animal_details_by_id($id){
        $category=Category::all();
        $data = AdaptPost::find($id);
        $user=User::all();
        return view('Home.pages.adnimal_by_id',[
            'data'=>$data,
            'category'=>$category,
            'user'=>$user,

        ]);
    }

    public function request_for_adapt(Request $request){
        $data=new RequestPost();
        $data->title=$request->title;
        $data->post_id=$request->post_id;
        $data->post_category=$request->post_category;
        $data->post_image=$request->post_image;
        $data->post_user_id=$request->post_user_id;
        $data->post_address=$request->post_address;
        $data->status=0;
        $data->request_user_id=Auth::user()->id;
        $data->request_user_email=Auth::user()->email;
        $data->save();
        return redirect()->back();
        // return $data;
    }

}
