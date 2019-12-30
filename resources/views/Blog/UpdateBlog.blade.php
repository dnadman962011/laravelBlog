@extends('layout.master')


@section('content')








 

 
  @foreach($Blogs as $blog)
    <div class="col-sm-10 col-offset-2">
       <div class="panel panel-default" >
        <div class="panel-body">
          <div class='col-sm-2'><img src="{{$blog->BlogThumbnail}}" style='height:100px;width:100px;'  alt=""></div> 
          <div class="col-sm-8"><h2>{{$blog->BlogHeader}}</h2><p>{{$blog->BlogBody}}</p></div>
          <div class="col-sm-2"><a href="/Admin/UpdateBlog/{{$blog->id}}" class="btn btn-primary">Update</a></div>
       </div>
       </div>
    </div>
 @endforeach






@endsection 