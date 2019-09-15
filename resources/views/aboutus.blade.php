@extends('layout.principal')

@section('title')
	Nosotros
@endsection

@section('styles')
@endsection

@section('content')
	<header class="masthead2 text-center">
		<div class="masthead-content">
			<div class="container">
				<p class="masthead-heading mb-0">NOSOTROS</p>
				{{-- <h4 class="masthead-subheading mb-0">Asociación de Apoyo e Información a Familiares y Pacientes con Neumonía</h4> --}}
			</div>
		</div>
		<div class="bg-circle-1 bg-circle"></div>
		<div class="bg-circle-2 bg-circle"></div>
		<div class="bg-circle-3 bg-circle"></div>
		<div class="bg-circle-4 bg-circle"></div>
	</header>
	<div class="container-fluid">
		<div class="row mt-5">
			<div class="col-md-8 offset-md-2">
				<div class="col-md-12">
		  			<p class="p-center2 text-justify">
		  				<strong>NEUMOAI</strong> es el acrónimo de la Asociación de Apoyo e Información a Familiares y
						Pacientes con Neumonía, una entidad sin ánimo de lucro creada en Julio de 2019 e
						inscrita como tal en el Registro Nacional de Asociaciones con el número (pendiente). Si
						quieres puedes descargar o consultar nuestros <a href="http://afectadoscancerdepulmon.com/wp-content/uploads/2019/07/AEACaP_Estatutos.pdf" target="_blank">Estatutos</a>.
		  			</p>
		  			<p class="p-center2 text-justify mt-3">
		  				Pero si has llegado hasta aquí seguramente sea porque tú mismo o uno de los tuyos
		  				ha sido diagnosticado de neumonía y estas interesado en saber más sobre esta
		  				infección pulmonar.
		  			</p>
				</div>


				<div class="col-md-12 p-center2 text-justify mt-5">
					<h3 class="">OBJETIVOS</h3>
					<ul class="mt-2">
						<li>Dar información sobre la neumonía, desde su diagnóstico, tratamiento y evolución clínica</li>
						<li>Prestar apoyo, asesorar y orientar a los pacientes y/ o familiares</li>
						<li>Contribuir a la prevención de la neumonía concienciando a los grupos de riesgo</li>
						<li>Impulsar la investigación clínica en esta enfermedad para poder mejorar su manejo clinico.</li>
					</ul>
				</div>


				<div class="col-md-12 p-center2 text-justify mt-5 mb-5 row">
					<h3 class="col-md-12">JUNTA DIRECTIVA</h3>

					<div class="col-md-4 mt-3 text-center div-directive">
						<img src="{{ env('APP_URL') }}/assets/images/aboutus/catia.jpg">
						<h3>Presidenta</h3>
						<h4>Dra. Catia Cilloniz Campos</h4>
					</div>
					<div class="col-md-4 mt-3 text-center div-directive">
						<img src="https://via.placeholder.com/230x250&text=foto">
						<h3>Vice-Presidente</h3>
						<h4>Sr. Xavier Cruz Rubio</h4>
					</div>
					<div class="col-md-4 mt-3 text-center div-directive">
						<img src="https://via.placeholder.com/230x250&text=foto">
						<h3>Secretaria</h3>
						<h4>Sra. Laura Moreno Gimenez</h4>
					</div>
					<div class="col-md-4 mt-3 text-center div-directive">
						<img src="https://via.placeholder.com/230x250&text=foto">
						<h3>Socio Fundador</h3>
						<h4>Dr. Antoni Torres</h4>
					</div>
					<div class="col-md-4 mt-3 text-center div-directive">
						<img src="https://via.placeholder.com/230x250&text=foto">
						<h3>Socio Fundador</h3>
						<h4>Dr. Arturo Huerta</h4>
					</div>
					<div class="col-md-4 mt-3 text-center div-directive">
						<img src="https://via.placeholder.com/230x250&text=foto">
						<h3>Socia Fundadora</h3>
						<h4>Dra. Rosario Menéndez</h4>
					</div>
				</div>
				

				<div class="col-md-12 p-center2 text-justify mt-5 mb-5 row">
					<h3 class="col-md-12">CONSEJO ASESOR</h3>

					<div class="col-md-4 mt-3 text-center div-directive">
						<img src="{{ env('APP_URL') }}/assets/images/aboutus/antoni.jpg">
						<h3>Dr. Antoni Torres</h3>
						<h4> Servicio de Neumología</h4>
					</div>
					<div class="col-md-4 mt-3 text-center div-directive">
						<img src="https://via.placeholder.com/230x250&text=foto">
						<h3>Dra. Rosario Menéndez</h3>
						<h4>Jefa del Servicio de Neumología</h4>
					</div>
					<div class="col-md-4 mt-3 text-center div-directive">
						<img src="{{ env('APP_URL') }}/assets/images/aboutus/arturo.jpg">
						<h3>Dr. Arturo Huerta</h3>
						<h4>Especialista del Servicio de Urgencias</h4>
					</div>
					<div class="col-md-4 mt-3 text-center div-directive">
						<img src="{{ env('APP_URL') }}/assets/images/aboutus/catia.jpg">
						<h3>Dra. Catia Cilloniz</h3>
						<h4>Coordinaddora de la línea de investigación</h4>
					</div>
					<div class="col-md-4 mt-3 text-center div-directive">
						<img src="https://via.placeholder.com/230x250&text=foto">
						<h3>Dra. Carolina Garcia-Vidal</h3>
						<h4>Especialista del Servicio de Enfermedades Infecciosas</h4>
					</div>
				</div>

			</div>
		</div>
	</div>
	
@endsection

@section('scripts')
@endsection