@extends('layout.principal')

@section('title')
	Neumonía
@endsection

@section('styles')
@endsection

@section('content')
	@include('website.banner')
	<div class="container main-neumo pt-5 pb-5">
		<div class="row">
			<div class="col-6">
				<h2>¿Qué es la Neumonía?</h2>
			</div>
			<div class="col-6">
				<p class="text-right back" onclick="goBack()">Regresar <i class="fas fa-arrow-circle-left"></i></p>
			</div>
			<div class="col-md-12 row">
				<div class="col-md-10 offset-1">

					<p class="mt-4 text-justify">La neumonía es un proceso inflamatorio agudo del parénquima pulmonar de origen infeccioso, que se caracteriza por la presencia de síntomas de infección respiratoria baja (tos, expectoración purulenta, fiebre, entre otros) y se confirma con la presencia de infiltrados pulmonares en una imagen de tórax (Imagen 1).</p>

					<p class="mt-4 text-justify">Esta infección se puede adquirir en la comunidad o en el entorno hospitalario (intra-hospitalaria) y puede transmitirse por microorganismos aspirados o inhalados, siendo estas las rutas más frecuentes para adquirir la infección.</p>

					<p class="mt-4 text-justify">La neumonía puede estar causada por diferentes microorganismos, siendo los más frecuentes las bacterias, en especial Streptococcus pneumoniae (neumococo), y los virus respiratorios como influenza virus A. Rara vez esta patología es causada por hongos o parásitos.</p>

					<p class="text-center mt-3 w100">
						<img src="https://via.placeholder.com/500x300" class="img-intro" data-aos="zoom-in" data-aos-duration="1000">
					</p>

				</div>
				
			</div>
			<div class="col-6 offset-6">
				<p class="text-right back" onclick="goBack()">Regresar <i class="fas fa-arrow-circle-left"></i></p>
			</div>

		</div>
	</div>
	
@endsection

<style>
	
</style>

@section('scripts')
	<script>
			
		function goBack(){
			window.location.replace(direction+"neumonia");
		}

	</script>
@endsection

