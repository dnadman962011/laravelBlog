@extends('layout.master')



@section('content')

<form action="{{route('Blog.AddBlog')}}" class='form-horizontal' method="post">

<!--start blog head input -->
<div class="form-group">
<div class="col-sm-2"><label for="BlogHeadI" class='form-label'>Blog Head:</label></div>
<div class="col-sm-8"><input type="text" name='BlogHeadI' class='form-control'></div>
</div>
<!-- end blog head input -->


<!-- start blog Thumbnail input -->
<div class="form-group">
<div class="col-sm-2"><label for="thumbnailI" class='form-label'>Thumbnail image:</label></div>
<div class="col-sm-8"><input class='form-control' type="text" name="BlogThumbnailI" class="form-group"></div>
</div>
<!-- end blog thumbnail input -->



<!-- start blog body input -->
<div class="form-group">
<div class="col-sm-2"><label for="BlogBodyI">Blog Body:</label></div>
<div class="col-sm-8"><textarea type="text" name='BlogBodyI' class='form-control'rows='10'></textarea></div>
</div>
<!-- end blog body input -->



<!-- start catigory input -->
<div class="form-group">
<div class="col-sm-2"><label for="BlogCatigoryI" class="label-form">Blog catigory</label></div>
<div class="col-sm-8">


@foreach( $Catigories as $Catigory)
<input type='radio' name='BlogCatigoryI' value='{{$Catigory->id}}' >{{$Catigory->catigoryName}}
@endforeach


</div>
</div>
<!-- end catigory input -->


<!-- start author input -->
<div class="form-group">
<div class="col-sm-2"><label for="authorI" class="form-label">author:</label></div>
<div class="col-sm-8"><input type="text" name='BlogAuthorI' class="form-control"></div>
</div>
<!-- end author input -->


<!-- start submit input -->
<div class="form-group">
<div class="col-sm-2 col-sm-offset-2"><input type="submit"  class="btn btn-primary"></div>
</div>
<!-- end submit input -->
{{ csrf_field() }}
</form>


@endsection