@extends('layout.principal')

@section('title')
	Publicaciones
@endsection

@section('styles')
@endsection

@section('content')

	@include('website.banner')

	<div class="container publish mt-5">
		<div class="row">
			<div class="col-md-2 text-center">
				<a href="{{ env('APP_URL') }}/assets/files/diptico.pdf" target="_blank">
					<p><i class="far fa-file-pdf icon"></i></p>
					<p>Díptico neumonia</p>	
				</a>
			</div>
		</div>
	</div>

	<style>
		.publish { min-height: 500px; }
		.icon{ font-size: 75px; }
		a{ text-decoration: none; cursor: pointer; color: #000;}
	</style>	
@endsection

@section('scripts')
@endsection