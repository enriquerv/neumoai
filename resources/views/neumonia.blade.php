@extends('layout.principal')

@section('title')
	Neumonía
@endsection

@section('styles')
@endsection

@section('content')
	@include('website.banner')
	
	<div class="container-fluid">
		<div class="menu_neumo mt-5 mb-5">
			<p class="{{ $type == 'intro' ? 'active' : '' }}"><a href="{{ route('neumonia', 'intro') }}">Introducción</a></p>
			<p class="{{ $type == 'definition' ? 'active' : '' }}"><a href="{{ route('neumonia', 'definition') }}">Definición</a></p>
			<p class="{{ $type == 'causes' ? 'active' : '' }}"><a href="{{ route('neumonia', 'causes') }}">Causas y factores de riesgo</a></p>
			<p class="{{ $type == 'symptom' ? 'active' : '' }}"><a href="{{ route('neumonia', 'symptom') }}">Sintomas</a></p>
			<p class="{{ $type == 'diagnosis' ? 'active' : '' }}"><a href="{{ route('neumonia', 'diagnosis') }}">Diagnóstico</a></p>
			<p class="{{ $type == 'treatment' ? 'active' : '' }}"><a href="{{ route('neumonia', 'treatment') }}">Tratamiento</a></p>
			<p class="{{ $type == 'prevention' ? 'active' : '' }}"><a href="{{ route('neumonia', 'prevention') }}">Prevención</a></p>
			<p class="{{ $type == 'evolution' ? 'active' : '' }}"><a href="{{ route('neumonia', 'evolution') }}">Evolución de la enfermedad</a></p>
			<p class="{{ $type == 'live-with' ? 'active' : '' }}"><a href="{{ route('neumonia', 'live-with') }}">Vivir con la enfermedad</a></p>
			<p class="{{ $type == 'investigation' ? 'active' : '' }}"><a href="{{ route('neumonia', 'investigation') }}">Lineas de investigación</a></p>
			<p class="{{ $type == 'faq' ? 'active' : '' }}"><a href="{{ route('neumonia', 'faq') }}">Preguntas frecuentes</a></p>
		</div>
		<div class="info_menu mt-5 mb-5">
			@if ($type == 'intro') @include('neumonia.intro') @endif
			@if ($type == 'definition') @include('neumonia.definition') @endif
			@if ($type == 'causes') @include('neumonia.causes') @endif
		</div>
	</div>
	<div style="clear: both;"></div>
@endsection

<style>
	.row{
		margin-right: 0 !important;
		margin-left: 0 !important;
	}
</style>

@section('scripts')
@endsection
