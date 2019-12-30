@extends('layout.master')


@section('content')

 






<div class="row">


<div class="col-sm-10 col-offset-2">
 
   @foreach($Blogs as $blog)
  

  
  
     






   
 <div class="panel panel-default" style="border-color:">
  <div class="panel-body">
    <div class="col-sm-2">
      <img src="{{$blog->BlogThumbnail}}" style='height:100px;width:100px;' class='pull-left' alt="">
    </div>

     <div class="col-sm-8">
    
     <h2>{{$blog->BlogHeader}}</h2>
      <p>{{$blog->BlogBody}}</p>   
      
      
     
     </div>

     <div class="col-sm-2">
     <form action="" method='post' >
     <button type="submit" value='{{$blog->id}}' name='DelSubmit' class='btn btn-danger btn-lg'>Delete</button>
     {{ csrf_field() }}
     </form>
      
     </div>


    
   
    

   </div>
 </div>
 


@endforeach
   
  
 



</div>




</div>



@endsection