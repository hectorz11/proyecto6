<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>{{$album->name}}</title>
	<!-- Lstest compiled and minified CSS -->
	{{HTML::style('css/bootstrap.min.css')}}
	<!-- Latest compiled and minified JavaScript -->
	{{HTML::script('js/bootstrap.min.css')}}
	<style type="text/css">
		body {
			padding-top: 50px;
		}
		.starter-template{
			padding: 40px 15px;
			text-align: center;
		}
	</style>
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
	<div class="container">
		<div class="starter-template">
			<div class="media">
				<img src="/albums/{{$album->cover_image}}" class="media-object pull-left"
				alt="{{$album->name}}" width="350px">
				<div class="media-body">
					<h2 class="media-heading" style="font-size: 26px;">Album Name:</h2>
					<p>{{$album->name}}</p>
				<div class="media">
					<h2 class="media-heading" style="font-size: 26px;">Album Description</h2>
					<p>{{$album->description}}</p>
					<a href="{{URL::route('add_image',array('id'=>$album->id))}}">
						<button type="button" class="btn btn-primary btn-large">Add New Image to Album</button>
					</a>
					<a href="{{URL::route('delete_album',array('id'=>$album->id))}}" onclick="return confirm('Are you sure?')">
						<button type="button" class="btn btn-denger btn-large">Delete Album</button>
					</a>
				</div>
				</div>
			</div>
		</div><!-- /.container -->
		<div class="row">
			@foreach($album->Photos as $photo)
			<div class="col-lg-3">
				<div class="thumbnail" style="max-height: 350px; min-height:350px";>
					<img src="/albums/{{$photo->image}}" alt="{{$album->name}}">
					<div class="caption">
						<p>{{$photo->description}}</p>
						<p><p>Created date: {{date("d F Y",strtotime($photo->created_at))}}
						at {{date("g:ha",strtotime($photo->created_at))}}</p></p>
						<a href="{{URL::route('delete_image',array('id'=>$photo->id))}}" onclick="return confirm">
							<button type="button" class="btn btn-danger btn-small">Delete Image</button>
						</a>
						<!--
						<p>Move image to another Album:</p>
						<form name="movephoto" method="post" action="{{URL::route('move_image')}}">
							<select name="new_album">
							@foreach($album->Photos as $others)
								<option value="{{$others->id}}">{{$others->description}}</option>
							@endforeach
							</select>
							<input type="hidden" name="photo" value="{{$photo->id}}" />
							<button type="submit" class="btn btn-small btn-info" onclick="return confirm('Are you sure?')">
								Move Image!
							</button>
						</form>
						-->
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</body>
</html>