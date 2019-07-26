<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Category;
use App\AdaptPost;
use App\RequestPost;
use App\User;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('user');
    }
    public function index(){
        // return view('Home.homecontent.homecontent');
        return view('user.home.home_content');
    }

    public function mypost(){
        $category=Category::all();
        $data=AdaptPost::where('user_id','=',Auth::user()->id)->get();

        return view('user.pages.mypost',[
            'category'=>$category,
            'data'=>$data,
        ]);

    }
    public function mypost_add(Request $request){
        $data=new AdaptPost();

        if($request->hasFile('image')){
        $files = $request->file('image');
        $extension = $files->getClientOriginalExtension();
        $fileName = str_random(5) . "-" . date('his') . "-" . str_random(3) . "." . $extension;
        $folderpath = 'public/'.'image/' . date('Y') . '/';
        $image_url = $folderpath . $fileName;
        $files->move($folderpath, $fileName);
        $data->image = $image_url;
    }

 
        $data->category=$request->category;
        $data->title=$request->title;
        $data->gender=$request->gender;
        $data->address=$request->address;
        $data->description=$request->description;
        $data->status=0;
        $data->user_id=Auth::user()->id;
        $data->save();
        return redirect()->back();

        // return $data;
      }
      
      public function mypost_edit($id){
        $data = AdaptPost::find($id);
        return $data;
      }
      
      
      
      
      
      public function mypost_update(Request $request){
        $data= AdaptPost::find($request->id);
      
        if($request->hasFile('image')){
            $files = $request->file('image');
            $extension = $files->getClientOriginalExtension();
            $fileName = str_random(5) . "-" . date('his') . "-" . str_random(3) . "." . $extension;
            $folderpath = 'public/'.'image/' . date('Y') . '/';
            $image_url = $folderpath . $fileName;
            $files->move($folderpath, $fileName);
            $data->image = $image_url;
        }
    
     
            $data->category=$request->category;
            $data->title=$request->title;
            $data->gender=$request->gender;
            $data->address=$request->address;
            $data->description=$request->description;
            $data->status=0;
            $data->save();
            return redirect()->back();
        // return $data;
     
      
      
          
      }
      public function mypost_delete($id){
        $data=AdaptPost::find($id);
        $data->delete();
        return redirect()->back();
      }
      public function mypost_status_update($id){
        $status=AdaptPost::find($id);
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

      public function my_request(){
        $category=Category::all();
        $data=AdaptPost::all();
        $RequestPost=RequestPost::where('request_user_id','=',Auth::user()->id)->get();
        
        return view('user.pages.myRequest',[
            'category'=>$category,
            'data'=>$data,
            'RequestPost'=>$RequestPost,
        ]);

    }
    public function request_my_post(){
      $category=Category::all();
      $data=AdaptPost::all();
      $RequestPost=RequestPost::where('post_user_id','=',Auth::user()->id)->get();
      $user=User::all();
      
      return view('user.pages.onmyRequest',[
          'category'=>$category,
          'data'=>$data,
          'RequestPost'=>$RequestPost,
          'user'=>$user,
      ]);
    }

    public function Adapt_list(){
      $category=Category::all();
      $data=AdaptPost::all();
      $RequestPost=RequestPost::where('request_user_id','=',Auth::user()->id)
                              ->where('status',1)  
                              ->get();
      $user=User::all();
      
      return view('user.pages.myAdaptanimal',[
          'category'=>$category,
          'data'=>$data,
          'RequestPost'=>$RequestPost,
          'user'=>$user,
      ]);
    } 

public function request_my_post_status_update($id){
  $status=RequestPost::find($id);
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

}
