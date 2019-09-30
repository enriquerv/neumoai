@extends('layout.principal')

@section('title')
	Contacto
@endsection

@section('styles')
@endsection

@section('content')
	@include('website.banner')
	<section>
		<div class="container text-justify mt-5 mb-5">	

			<div class="container mt-5 mb-5">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2993.3062039596107!2d2.149536915176092!3d41.38915610384895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4a284f065d6ab%3A0x250b65138e0e18e8!2sCalle%20Villarroel%2C%20170%2C%2008036%20Barcelona%2C%20Espa%C3%B1a!5e0!3m2!1ses-419!2smx!4v1568959296963!5m2!1ses-419!2smx" frameborder="0" style="border:0;" allowfullscreen="" width="100%" height="250"></iframe>
			</div>	

			<div class="row">
				<div class="col-md-6">
					<b style="font-size: 20px;">INFORMACIÓN CONTACTO</b> <br><br>
					<p>Dra Catia Cilloniz Campos, PhD, FERS</p>
					<p>Departamento de Neumologia, Hospital Clinic de Barcelona, España</p>
					<p>Profesora Asociada de la Universidad de Barcelona</p>
					<p>Presidenta de NEUMOAI</p>
					<p>Tel: 0034 932275400 EXT 2887</p>
					<p>E-mail: catia cilloniz@yahoo.com / cilloniz@clinic.cat</p>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-4">
							<input type="text" class="form-control" placeholder="Nombre" id='name'>
						</div>
						<div class="col-4">
							<input type="text" class="form-control" placeholder="Email" id='email'>
						</div>
						<div class="col-4">
							<input type="text" class="form-control" placeholder="Teléfono" id='phone'>
						</div>
						<div class="col-12 mt-3">
							<textarea class="form-control" placeholder="Mensaje" rows="10" id='tarea'></textarea>
						</div>
						<div class="col-12 mt-3 text-center">
							<button class="btn btn-primary" id="btn-modal" style="padding: 5px 50px; font-size: 18px;">
								Enviar
							</button>
						</div>
						{{-- <div class="col-12">
							<div class="alert alert-danger" style="opacity: 0; transition: 0.5s" id='error-f'>
								Favor de llenar todos los campos
							</div>
						</div> --}}
					</div>
				</div>
			</div>

		</div>
	</section>
@endsection

@section('scripts')
@endsection
<p>