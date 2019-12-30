@extends('layout.master')


@section('content')


<div class="row">

<div class="col-sm-6 col-sm-offset-3">


@foreach( $Catigories as $catigory)

<div class="panel panel-default"  style='border-color:{{$catigory->catigroyColor}}'>
  <div class="panel-body">
    <div class="col-sm-8"><h4>{{$catigory->catigoryName}}</h4></div>
    <div class="col-sm-4"><a class='btn btn-danger pull-right' href="{{ route('Blog.CatigoryDel',['catigoryName'=>$catigory->catigoryName] )}}">X</a></div>
  </div>
</div>

@endforeach



<!-- add catigory form -->
<div class="AddCATfORM">
<form class="form-horizontal" action="{{route('Blog.CatigoryMain')}}" method="post">
<div class="form-group">
<div class="col-sm-3"><label for="CatNameI" class="form-label">catigoryName:</label></div>
<div class="col-sm-8"><input type="text" name='CatNameI' class="form-control" placeholder='Catigory name' required></div>
</div>

<div class="form-group">
<div class="col-sm-3"><label class='form-label' for="catColorI">Color:</label></div>
<div class="col-sm-8"><input type="color" name="catColorI"  class="form-control" required></div>
</div>

<div class="form-group"><div class="col-sm-3"><input type="submit" class="btn btn-primary form-control" ></div></div>

</div>
{{ csrf_field() }}
</form>


<!-- end  add catigory form -->

</div>
</div>



</div>


@endsection