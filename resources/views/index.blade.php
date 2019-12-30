@extends('layout.master')


@section('content')

<style>

.catigoryWidget li {

  border-bottom: 1px #eceef2 solid;
  margin-bottom:13px;

}

.catigoryWidget li a{

  font-size:22px;
  color: #212631;
  text-decoration: none;
}

.catigoryWidget li a span {

  float: right;
    color: #fff;
    padding: 0px 5px;
    font-weight: 600;
    border-radius: 2px;
    


}




</style>

 






<div class="row">


<div class="col-sm-8 ">
 
   @foreach($Blogs as $blog)
  

   
  
     






<a href="/{{$blog->id}}">
 <div class="panel panel-default" style="border-color:{{$blog->getCatigory()}}">
  <div class="panel-body">
    <div class="col-sm-3">
      <img src="{{$blog->BlogThumbnail}}" style='height:100px;width:100px;' class='pull-left img-responsive' alt="">
    </div>

     <div class="col-sm-9">
    
     <h2>{{$blog->BlogHeader}}</h2>
      <p>{{$blog->BlogBody}}</p>   
      
     </div>
   </div>
 </div>
 </a>  
 


@endforeach

</div>


<div class="col-sm-4">
<h2>Catigory</h2>
<ul class='list-unstyled catigoryWidget'>

@foreach ($catigories as $catigory)


<li><a href='#'>{{$catigory->catigoryName}}<span style='background-color:{{$catigory->catigroyColor}}'>{{$catigory->catigoryBlogsNum}}</span></a></li>

@endforeach
</ul>
</div>




</div>



@endsection