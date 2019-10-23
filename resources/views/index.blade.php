@extends('layout.principal')

@section('title')
	Inicio
@endsection

@section('styles')
@endsection

@section('content')

  @include('website.banner')

  <section class="container pt-60 pb-60">
  	<div class="row">
  		<div class="col-md-6 mt-3 text-center" data-aos="zoom-in" data-aos-duration="1000">
  			<img src="https://via.placeholder.com/400x250" alt="">
  		</div>
  		<div class="col-md-6 mt-3">
  			<p class="p-center text-justify">
  				La neumonía es un proceso inflamatorio agudo del parénquima pulmonar de origen
          infeccioso, que se caracteriza por la presencia de síntomas de infección respiratoria
          baja (tos, expectoración purulenta, fiebre, entre otros) y se confirma con la presencia
          de infiltrados pulmonares en una imagen de tórax. Esta infección se puede
          adquirir en la comunidad o en el entorno hospitalario (intra-hospitalaria) y puede
          transmitirse por microorganismos aspirados o inhalados, siendo estas las rutas más
          frecuentes para adquirir la infección.
          La neumonía puede estar causada por diferentes microorganismos, siendo los más
          frecuentes las bacterias, en especial Streptococcus pneumoniae (neumococo), y los
          virus respiratorios como influenza virus A. Rara vez esta patología es causada por
          hongos o parásitos.
  			</p>
  		</div>
  		<div class="col-md-12 mt-5">
  			<p class="p-center text-justify">
  				<strong>NEUMOAI</strong> es el acrónimo de la Asociación de Apoyo e Información a Familiares y
				Pacientes con Neumonía, una entidad sin ánimo de lucro creada en Julio de 2019 e
				inscrita como tal en el Registro Nacional de Asociaciones con el número (pendiente). Si
				quieres puedes descargar o consultar nuestros <a href="{{ env('APP_URL') }}/assets/files/ESTATUTOS.pdf" target="_blank">Estatutos</a>.
  			</p>
  		</div>
  		<div class="col-md-12 mt-5 row">
  			<div class="col-md-8 offset-2 mt-5 row d-none">

				<div class="col-md-12 mb-4">
					<h1>La Neumonía en primera persona</h1>
					<h4 class="mt-3">Profesionales y pacientes te explican cómo se convive con la enfermedad</h4>
				</div>

  				<div class="col-md-6 text-center mt-5 mb-4" data-aos="flip-left" data-aos-duration="1000">
  					<img src="https://via.placeholder.com/400x250" width="100%">
  				</div>	
  				<div class="col-md-6 mt-5 mb-4">
  					<p>
  						La neumonía se puede prevenir con unas medidas de higiene básicas como una buena higiene de manos o con una mascarilla, 
  						si una persona tiene una tos productiva.
  					</p>
  				</div>

  				<div class="col-md-6 mt-5 mb-4">
  					<p>
  						A una persona que le han diagnosticado neumonía lo primero que le diría es que tuviera confianza en el equipo médico que le atiende. Y lo más importante, sí que le recomendaría que, por cualquier motivo que fuera, no fume.
  					</p>
  				</div>
  				<div class="col-md-6 text-center mt-5 mb-4" data-aos="flip-right" data-aos-duration="1000">
  					<img src="https://via.placeholder.com/400x250" width="100%">
  				</div>	
  			</div>


  		</div>
  	</div>
  </section>

@endsection

@section('scripts')
@endsection
