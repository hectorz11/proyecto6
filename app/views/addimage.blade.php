<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale-1.0">
	<title>Laravel PHP Framework</title>
	<!-- Lstest compiled and minified CSS -->
	{{HTML::style('css/bootstrap.min.css')}}
	<!-- Latest compiled and minified JavaScript -->
	{{HTML::script('js/bootstrap.min.css')}}
</head>
<body>
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
			<form name="addimagetoalbum" method="post" action="{{URL::route('add_image_to_album')}}" enctype="multipart/form-data">
				<input type="hidden" name="album_id" value="{{$album->id}}" />
				<fieldset>
					<legend>Add an Image to {{$album->name}}</legend>
					<div class="form-group">
						<label for="description">Image Description</label>
						<textarea name="description" type="text" class="form-control" placeholder="Image Description"></textarea>
					</div>
					<div class="form-group">
						<label for="image">Select an Image</label>
						{{Form::file('image')}}
					</div>
					<button type="submit" class="btn btn-default">Add Image!</button>
				</fieldset>
			</form>
		</div>
	</div><!-- /container -->
</body>
</html>