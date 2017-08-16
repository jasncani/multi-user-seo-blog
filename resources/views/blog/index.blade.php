@extends('layouts.app')
@section('content')

<main class="container-fluid">
	<div class="row">
		<div class="jumbotron">
			<h1>Latest blog posts</h1>
		</div>
		<div class="col-sm-10 col-sm-offset-1">
			@foreach ($blogs as $blog)
				<article>
					<h2>{{ $blog->title }}</h2>
					<p>{{ $blog->body }}</p>
				</article>
			@endforeach
		</div>
	</div>

</main>



@endsection