@extends('layout.principal')

@section('title')
	Neumonía
@endsection

@section('styles')
@endsection

@section('content')
	@include('website.banner')
  <section class="container-custom pt-60 pb-60">
  	<div class="row">
  		<div class="col-md-12"><h1>{{ trans('home.title') }}</h1></div>
  	</div>
  </section>
@endsection

@section('scripts')
@endsection
