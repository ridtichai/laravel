@extends('admin.layouts.template')
@section('content')
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Blank Page</h1>

		<form action="./admin/loginme" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
			USERNAME : <input type="text" name="username"> <br>
			PASSWORD : <input type="password" name="password"><br>

			<input type="submit" name="login" value="Login" >

		</form>

	</div>
	<!-- /.col-lg-12 -->
</div>
@stop