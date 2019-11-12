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
			<div class="col-md-3 text-center">
				<a href="{{ env('APP_URL') }}/assets/files/que_es_neumonia.pdf" target="_blank">
					<p class="mb-2"><i class="far fa-file-pdf icon"></i></p>
					<p>¿Qué es la neumonía?</p>	
				</a>
			</div>
			<div class="col-md-3 text-center">
				<a href="{{ env('APP_URL') }}/assets/files/que_necesitas_saber.pdf" target="_blank">
					<p class="mb-2"><i class="far fa-file-pdf icon"></i></p>
					<p>¿Qué necesitas saber?</p>	
				</a>
			</div>
			<div class="col-md-3 text-center">
				<a href="{{ env('APP_URL') }}/assets/files/recomendaciones.pdf" target="_blank">
					<p class="mb-2"><i class="far fa-file-pdf icon"></i></p>
					<p>Recomendaciones</p>	
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