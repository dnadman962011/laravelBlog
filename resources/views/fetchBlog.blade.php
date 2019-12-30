@extends('layout.master')


@section('content')

<div class="row">

<div class="col-sm-10">


<div class="panel panel-default" style="border-color:">
  <div class="panel-body">

      <img src="{{$blog->BlogThumbnail}}" style='height:100px;width:100px;' class='pull-left' alt="">


     <div class="col-sm-8">
    
     <h2>{{$blog->BlogHeader}}</h2>
      <p>{{$blog->BlogBody}}</p>   
      
     </div>
   </div>
 </div>
 </div>
</div>




<div class="row">

<div class="col-sm-8">

<div class="panel panel-default">
 <div class="panel-body">
   <h4>Comment:</h4>


   @foreach( $comments as $comment)

   <div class="panel panel-default">
     <div class="panel-body">
      <div class="media">
      <div class="media-left"><img src="http://127.0.0.1/webmag/webmag/img/avatar.png" class='pull-left' alt=""></div>
      <div class="media-body">
      <div class="media-heading"><h3>{{$comment->fullName}}</h3></div>
      <p> {{$comment->commentBody}}</p>
      </div>     
      </div>
     </div> 
    </div> 


   @endforeach
  




   <div class="panel panel-default">
     <div class="panel-body">
      <h2>leave comment:</h2>
      <form method='POST' class="form-horizontal">
       <div class="form-group">
         <div class="col-sm-6"><input name='CemailI' type="email" placeholder='E-mail' class="form-control" required></div>
         <div class="col-sm-6"><input name='CnameI' type="text" placeholder='Full Name' class="form-control" required></div>
       </div>
       <div class="form-group"><div class="col-sm-12"><textarea placeholder='text your comment' class='form-control' name="CbodyI"  cols="30" rows="6"></textarea></div></div>
       <div class="form-group"><div class="col-sm-1"><input type="submit"  class="btn btn-primary"></div></div>
       {{ csrf_field()}}
      </form>
     </div>
    </div>
 </div>
</div>




</div>

</div>


@endsection