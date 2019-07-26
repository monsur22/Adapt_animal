<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Category;
use App\AdaptPost;
use App\RequestPost;
use App\User;
use App\Volunteer;
// use App\Volunteer;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    public function index(){
        return view('admin.home.home_content');
    }
    public function category(){
        $data= Category::all();
        return view('admin.pages.category',[
           'data'=>$data, 
        ]);

    }

    public function category_add(Request $request){
        $data=new Category();
        $data->category_name=$request->category_name;
        $data->status=0;
        $data->save();
        return redirect()->back();
      }
      
      
      
   
      
      public function category_edit($id){
        $data = Category::find($id);
        return $data;
      }
      
      
      
      
      
      public function category_update(Request $request){
      
      
        $data= Category::find($request->id);
      
        $data->category_name=$request->category_name;
        $data->status=0;
        $data->save();
        return redirect()->back();
      
      
          
      }
      public function category_delete($id){
        $data=Category::find($id);
        $data->delete();
        return redirect()->back();
      }
      public function category_status_update($id){
        $status=Category::find($id);
        if ($status->status==1) {
          $status->status=0;
          $status->save();
        return redirect()->back();
          
        }else if($status->status==0){
          $status->status=1;
          $status->save();
        return redirect()->back();
          
        }
      }
      Public function post_list(){
        $AdaptPost=AdaptPost::all();
        $category=Category::all();
        $user=User::all();
        return view('admin.pages.all_post',[
          'AdaptPost'=>$AdaptPost,
          'category'=>$category,
          'user'=>$user,
        ]);
      }
      Public function Request_On_Post(){
        $AdaptPost=AdaptPost::all();
        $category=Category::all();
        $RequestPost=RequestPost::all();
        $user=User::all();
        return view('admin.pages.all_request',[
          'AdaptPost'=>$AdaptPost,
          'category'=>$category,
          'user'=>$user,
          'RequestPost'=>$RequestPost,
        ]);
      }
      public function Request_delete($id){
        $RequestPost=RequestPost::find($id);
        
        $RequestPost->delete();
        return redirect()->back();

      }
      Public function volunteer_show(){

        $Volunteer=Volunteer::all();

        return view('admin.pages.volunter',[
          'Volunteer'=>$Volunteer,
      
        ]);
      }

      Public function user_list(){

        $User=User::all();

        return view('admin.pages.user_list',[
          'User'=>$User,
      
        ]);
      }

}
