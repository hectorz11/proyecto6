<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Create ab Album</title>
	<!-- Lstest compiled and minified CSS -->
	{{HTML::style('css/bootstrap.min.css')}}
	<!-- Latest compiled and minified JavaScript -->
	{{HTML::script('js/bootstrap.min.css')}}
</head>
<body>
	<div class="navbar navbar-inverse navbar navbar-fixed-top">
		<div class="container">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="/" class="navbar-brand">Awesome Albums</a>
			<div>
				<ul class="nav navbar-nav">
					<li><a href="{{URL::route('create_album_form')}}">Create New Album</a></li>
				</ul>
			</div><!-- /.nav-collapse -->
		</div>
	</div>
	<div class="container" style="text-align: center;">
		<div class="span4" style="display: inline-block; margin-top: 100px;">
			@if($errors->has())
			<div class="alert alert-block alert-error fade in" id="error-block">
				<?php $messages = $errors->all('<li>:message</li>') ?>
				<button type="button" class="close" data-dismiss="alert">x</button>
				<h4>Warning!</h4>
				<ul>
					@foreach($messages as $message)
						{{$message}}
					@endforeach
				</ul>
			</div>
			@endif
			<form name="createnewalbum" method="post" action="{{URL::route('create_album')}}" enctype="multipart/form-data"> 
				<fieldset>
					<legend>Create an Album</legend>
					<div class="form-group">
						<label for="name">Album Name:</label>
						<input name="name" type="text" class="form-control" placeholder="Album Name" value="{{Input::old('name')}}">						
					</div>
					<div class="form-group">
						<label for="description">Album Description:</label>
						<textarea name="description" type="text" class="form-control" placeholder="Album Description" value="{{Input::old('description')}}"></textarea>
					</div>
					<div class="form-group">
						<label for="cover_image">Select a Cover Image:</label>
						{{Form::file('cover_image')}}
					</div>
					<button type="submit" class="btn btn-default">Create!</button>
				</fieldset>
			</form>
		</div>
	</div><!-- /container -->
</body>
</html>