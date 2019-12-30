@extends('layout.master')



@section('content')


<h4>update blog view2</h4>





<form action="" class='form-horizontal' method="post">

<!--start blog head input -->
<div class="form-group">
<div class="col-sm-2"><label for="BlogHeadI" class='form-label'>Blog Head:</label></div>
<div class="col-sm-8"><input value='{{$Blog->BlogHeader}}' type="text" name='BlogHeadI' class='form-control'></div>
</div>
<!-- end blog head input -->


<!-- start blog Thumbnail input -->
<div class="form-group">
<div class="col-sm-2"><label for="thumbnailI" class='form-label'>Thumbnail image:</label></div>
<div class="col-sm-8"><input value='{{$Blog->BlogThumbnail}}' class='form-control' type="text" name="BlogThumbnailI" class="form-group"></div>
</div>
<!-- end blog thumbnail input -->



<!-- start blog body input -->
<div class="form-group">
<div class="col-sm-2"><label for="BlogBodyI">Blog Body:</label></div>
<div class="col-sm-8"><textarea value='{{$Blog->BlogBody}}' type="text" name='BlogBodyI' class='form-control'rows='10'></textarea></div>
</div>
<!-- end blog body input -->



<!-- start catigory input -->
<div class="form-group">
<div class="col-sm-2"><label for="BlogCatigoryI" class="label-form">Blog catigory</label></div>
<div class="col-sm-8">

<select name="CatigoryIdI"  class='form-control'>

@foreach($Catigories as $catigory)

<option value="{{ $catigory->CatigoryId}}">{{ $catigory->catigoryName }}</option>

@endforeach

</select>


</div>
</div>
<!-- end catigory input -->


<!-- start author input -->
<div class="form-group">
<div class="col-sm-2"><label for="authorI" class="form-label">author:</label></div>
<div class="col-sm-8"><input  value='{{ $Blog->BlogAuthor}}' type="text" name='BlogAuthorI' class="form-control"></div>
</div>
<!-- end author input -->


<!-- start submit input -->
<div class="form-group">
<div class="col-sm-2 col-sm-offset-2"><button name='updateSubmit' value='{{ $Blog->id }}'  class="btn btn-primary" >submit</button></div>
</div>
<!-- end submit input -->
{{ csrf_field() }}
</form>







@endsection