@extends('layout.principal')

@section('title')
	Inicio
@endsection

@section('styles')
@endsection

@section('content')

  @include('website.banner')

  <section class="container pt-60">
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

  <section class="container mt-4 mb-5">
    <div class="row">
      <div class="col-12 mb-5"><h1 class="mBold">NOTICIAS</h1></div>
      <div class="col-8 offset-2">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            {{-- <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> --}}
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="{{ env('APP_URL') }}/assets/images/index/dmn.png" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <h1 class="nt-1 mBold">12 DE NOVIEMBRE</h1>
                <h3 class="nt-1 mBold">DÍA MUNDIAL DE LA NEUMONÍA</h3>
                <a href="{{ env('APP_URL') }}/assets/files/dmn.pdf" target="_blank"><p class="nt-1 strong">VER MÁS</p></a>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ env('APP_URL') }}/assets/images/index/dmn.png" alt="Second slide">
              <div class="carousel-caption d-none d-md-block">
                <h3 class="nt-1 mBold">DÍA MUNDIAL DE LA NEUMONÍA</h3>
                <h1 class="nt-1 mBold">12 DE NOVIEMBRE</h1>
                <a href="{{ env('APP_URL') }}/assets/files/dmn.pdf" target="_blank"><p class="nt-1 strong">VER MÁS</p></a>
              </div>
            </div>
            {{-- <div class="carousel-item">
              <img class="d-block w-100" src="https://via.placeholder.com/400x250" alt="Second slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>...</h5>
                <p>...</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://via.placeholder.com/400x250" alt="Third slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>...</h5>
                <p>...</p>
              </div>
            </div>
          </div> --}}
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
    
    
  </section>

  <style>
    .nt-1{color: #005f9c;}
    .carousel-control-prev-icon {
      background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%092030' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E") !important;
    }
    .carousel-control-next-icon {
      background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%092030' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E") !important;
    }
    .carousel-indicators li {
      background-color: #0078c6 !important;
    }
  </style>

@endsection

@section('scripts')
@endsection
