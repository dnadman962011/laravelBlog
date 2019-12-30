<?php




namespace App\Http\Controllers;

use App\blogs;
use App\catigory;
use App\comments;


use Illuminate\Http\Request;

class BlogController extends Controller
{








public function getIndex()
{
    $Blogs=blogs::all();
    $catigory=catigory::all();
  


    return view('index',['Blogs'=>$Blogs,'catigories'=>$catigory]);
}




public function fetchBlog($BlogId)
{  
    $Blog=blogs::find($BlogId);
    $comments=Comments::where('BlogId','=',$BlogId)->get();
    
  
    

    return view('fetchBlog',['blog'=>$Blog,'comments'=>$comments]);
}



public function postFetchBlog($BlogId,Request $requset)
{
    $Comment=new comments([

        'Email'=>$requset->input('CemailI'),
        'fullName'=>$requset->input('CnameI'),
        'BlogId'=>$BlogId,
        'commentBody'=>$requset->input('CbodyI')
    ]);
    $Comment->save();
    return redirect()->back();
}









    public function getAddBlog(){
    $Catigories=catigory::all();
    return view('Blog.AddBlog',['Catigories'=> $Catigories]);

    }

    public function postAddBlog(Request $requset)
    {
        $blog = new blogs([
            'BlogHeader' => $requset->input('BlogHeadI'),
            'BlogBody' => $requset->input('BlogBodyI'),
            'CatigoryId'=>$requset->input('BlogCatigoryI'),
            'BlogAuthor' => $requset->input('BlogAuthorI'),
            'BlogThumbnail' => $requset->input('BlogThumbnailI')
        ]);
        $catId=$requset->input('BlogCatigoryI');
        

        $catigory1=catigory::find($catId);
        $catigory1->toJson();
        $cat2= $catigory1['catigoryBlogsNum']+1;

        $catigory2=catigory::find($catId);
        $catigory2->update(['catigoryBlogsNum' => $cat2]);


        $blog->save();

        
   return redirect()->route('Blog.DelBlog');
        
    }



    public function getDelBlog(){
    
        $Blogs=blogs::all();
        $Blogs->toJson();

        foreach( $Blogs as $test){
         
            $catId=$test['CatigoryId'];
            $catigory1=catigory::find($catId);
            $t111=$catigory1->toArray();
            return view('Blog.DelBlog',['Blogs'=> $Blogs]);
            

            
        };
       


        /*
         */
    }


    public function postDelBlog(Request $requset)
    {
       $submitValue=$requset->input('DelSubmit');
       $Blogs=blogs::find($submitValue);
       $Blogs->toJson();
       $catId=$Blogs['CatigoryId'];
       $catigory1=catigory::find($catId);
       $catigory1->toJson();
       $catNum=$catigory1['catigoryBlogsNum']-1;
       $catigory1->update(['catigoryBlogsNum'=>$catNum]);
       $Blogs->delete();
      
       return redirect()->route('Blog.DelBlog');
      
    }



    public function getUpdateBlog()
    {
        $Blog=blogs::all();
        return view('Blog.UpdateBlog',['Blogs'=>$Blog]);
    }



    public function getUpdateBlog2($BlogId)
    { 
        
        $Blog=blogs::find($BlogId);
        $catigory=catigory::all();
        


        return view('Blog.UpdateBlog2',['Blog'=>$Blog,'Catigories'=>$catigory]);
    }


    public function postUpdateBlog(Request $requset)
    {
        $updateSubmit=$requset->input('updateSubmit');
        $Blog=blogs::find($updateSubmit);
        $Blog->update([
            "BlogHeader"=>$requset->input('BlogHeadI'),
            "BlogBody"=>$requset->input('BlogBodyI'),
            "BlogCatigoryI"=>$requset->input('BlogCatigoryI'),
            "BlogAuthor"=>$requset->input('BlogAuthorI'),
            "BlogThumbnail"=>$requset->input('BlogThumbnailI')        
        ]);

        return redirect()->route('Admin.Dashboard');
    }












    public function getCatigory(){


         $catigories=catigory::all();
        return view('Blog.CatigoryMain',['Catigories'=> $catigories]);
}









    public function postCatigoryAdd(Request $requset)
    {
        $catNum=0;
        $catigory = new catigory([
            'catigoryName'=>$requset->input('CatNameI'),
            'catigroyColor'=>$requset->input('catColorI'),
            'catigoryBlogsNum'=>$catNum 
        ]);
        $catigory->save();
        return redirect()->route('Blog.CatigoryMain');
    }

    public function getCatigoryDel( $catigoryName)
    {
    
     $catDel = catigory::where('catigoryName',$catigoryName)->delete();

     return redirect()->route('Blog.CatigoryMain');
     


      
    }

    
    public function CommentPost()
    {
        # code...
    }





























}







