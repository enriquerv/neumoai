@extends('layout.principal')

@section('title')
	Neumonía
@endsection

@section('styles')
@endsection

@section('content')
	@include('website.banner')
	<div class="container-fluid main pt-5">
		<div class="row">
			<div class="col-md-3 col-sm-6 text-center">
				<div class="sq-contain">
					<div><img src="{{ env('APP_URL') }}/assets/images/neumonia/definicion.png"></div>
					<div><p class="p-title">DEFINICIÓN</p></div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 text-center">
				<div class="sq-contain">
					<div><img src="{{ env('APP_URL') }}/assets/images/neumonia/epidemiologia.png"></div>
					<div><p class="p-title">EPIDEMIOLOGÍA</p></div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 text-center">
				<div class="sq-contain">
					<div><img src="{{ env('APP_URL') }}/assets/images/neumonia/etiopatogenia.png"></div>
					<div><p class="p-title">ETIOPATOGENIA Y FISIOPATOLOGÍA</p></div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 text-center">
				<div class="sq-contain">
					<div><img src="{{ env('APP_URL') }}/assets/images/neumonia/riesgos.png"></div>
					<div><p class="p-title">FACTORES DE RIESGO</p></div>
				</div>
			</div>
		</div>
	</div>
	
@endsection

<style>
	.row{
		margin-right: 0 !important;
		margin-left: 0 !important;
	}
	.main{
		background: #f2f2f2;
		min-height: 500px;
	}
	.sq-contain{
		margin: 0 auto;
	    width: 225px;
	    height: 300px;
	    background: #ffffff;
	    cursor: pointer;
	}
	.sq-contain div{ height: 150px; }
	.sq-contain img{ height: 150px; width: 225px; }
	.p-title{
		transform: translateY(-50%);
	    position: relative;
	    top: 50%;
	    text-shadow: 1px 0 0 black;
	    font-size: 20px;
	    padding: 0 10px;
	}
</style>

@section('scripts')
@endsection



	{{-- <div class="container-fluid">
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
			@if ($type == 'symptom') @include('neumonia.symptom') @endif
			@if ($type == 'diagnosis') @include('neumonia.diagnosis') @endif
			@if ($type == 'treatment') @include('neumonia.treatment') @endif
			@if ($type == 'prevention') @include('neumonia.prevention') @endif
			@if ($type == 'evolution') @include('neumonia.evolution') @endif
			@if ($type == 'live-with') @include('neumonia.live-with') @endif
			@if ($type == 'investigation') @include('neumonia.investigation') @endif
			@if ($type == 'faq') @include('neumonia.faq') @endif
		</div>
	</div>
	<div style="clear: both;"></div> --}}