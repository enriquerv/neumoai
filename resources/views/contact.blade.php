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
				<iframe class="map" src="https://maps.google.com.mx/maps?q=instituto+haller&ll=19.677828,-99.220276&spn=0.279308,0.308647&sll=19.320036399999996,-99.15212780000002&sspn=1.195607100001713,1.7598905899350736&t=m&hq=instituto+haller&z=12&iwloc=A&output=embed" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

			</div>
			<div class="row">
				<div class="col-md-6">
					<b style="font-size: 20px;">INFORMACIÓN CONTACTO</b> <br><br>
					Somos una institución educativa, con 30 años de experiencia. Nuestro legado es formar alumnos (as) críticos, reflexivos, creativos, amantes de la paz, los derechos humanos y socialmente comprometidos con su entorno social y con su país.<br><br>

					<b>CAMPUS TEPOTZOTLÁN</b><br>
					AV.BENITO JUÁREZ N.4 BARRIO SAN MARTÍN TEPOTZOTLÁN.<br>
					TEL: 58-76-66-82 <br><br>			 

					<b>CAMPUS IZCALLI</b><br>
					ANDADOR ILRANDA IT. 58, 59 Y 60<br>
					Col. Centro Urbano Cuautitlán Izcalli<br>
					TEL: 58-73-52-92
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-12">
							<div class="alert alert-danger" style="opacity: 0; transition: 0.5s" id='error-f'>
								Favor de llenar todos los campos
							</div>
						</div>
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
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('scripts')
@endsection
