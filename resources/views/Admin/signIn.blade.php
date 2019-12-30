@extends('layout.master')



@section('content')

<div class="row">

<!-- start sign in  form  -->

<div class="col-sm-6 col-sm-offset-3">

<h3>admin Sign in form</h3>
<br><br>
<form method='POST' class="form-horizontal">

<!-- start UserName input -->
<div class="form-group"><div class="col-sm-2"><label for="AdminUserI" class="form-label">Username:</label></div><div class="col-sm-8"><input type="text" name='AdminUserI' class='form-control'></div></div>
<!-- end username input -->

<!-- start password input -->
<div class="form-group"><div class="col-sm-2"><label for="AdminPassI" class="form-label">Password:</label></div><div class="col-sm-8"><input type="text" name="AdminPassI" class='form-control'></div></div>
<!-- end password input -->

<!-- start submit input -->
<div class="form-grou"><div class="col-sm-3 col-sm-offset-2"><input type="submit" class='btn btn-primary'></div></div>
<!-- end submit input -->
{{ csrf_field() }}

</form>



</div>



<!-- end sign in form -->


</div>



@endsection