<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Awesome Albums</title>
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
			<div "row">
				@foreach($albums as $album)
				<div class="col-lg-3">
					<div class="thumbnail" style="min-height: 514px;">
						<img src="/albums/{{$album->cover_image}}" alt="{{$album->name}}">
						<div class="caption">
							<h3>{{$album->name}}</h3>
							<p>Create date: {{date("d F Y",strtotime($album->create_at))}} at 
							{{date("g:ha",strtotime($album->create_at))}}</p>
							<p><a href="{{URL::route('show_album', array('id'=>$album->id))}}"
							class="btn btn-big btn-default">Show Gallery</a></p>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div><!-- /.container -->
	</div>
</body>
</html>