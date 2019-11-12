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
				<h2>Epidemiología</h2>
			</div>
			<div class="col-6">
				<p class="text-right back" onclick="goBack()">Regresar <i class="fas fa-arrow-circle-left"></i></p>
			</div>
			<div class="col-md-12 row">
				<div class="col-md-10 offset-1">

					<p class="mt-4 text-justify">A nivel mundial la neumonía adquirida en la comunidad (NAC) es un problema serio de salud que afecta a todos los grupos de edad y que se asocia con tasas altas  de morbilidad, complicaciones a largo y corto plazo,  y mortalidad. Asimismo, está asociada a un moderado gasto de recursos en salud. 

					<p class="mt-4 text-justify">Según la Organización Mundial de la Salud (OMS) en 2016, de los 56.4 millones de muertes a nivel mundial, 3.9 millones corresponden a infecciones de las vías respiratorias bajas (IVRB). La neumonía fue la primera causa de muerte en las economías de bajos ingresos, la tercera causa de muerte en las economías de ingreso medio-bajo, la quinta causa de muerte en las economías de ingresos medios, y la sexta en las economías de altos ingresos. Como estos datos revelan, la epidemiología mundial de la NAC varía notablemente según la región.</p>

					<p class="mt-4 text-justify">En una revisión sistemática de 16 estudios llevados a cabo en 7 países europeos, reportan que la incidencia anual de NAC en adultos oscilaba entre 1.07 - 1.2 casos por 1000 personas-año y 1.54 - 1.7 casos por 1000 habitantes. Los datos también revelaron que dicha incidencia se incrementa a medida que aumenta la edad y con la presencia de comorbilidades previas. En adultos mayores de 65 años la incidencia reportada fue de 14 casos por 1000 personas-año. En los pacientes con enfermedad pulmonar obstructiva crónica (EPOC) la incidencia estimada fue de 22.4 casos por 1000 personas-año, mientras que en pacientes infectados por el virus de la inmunodeficiencia humana (VIH) la incidencia fue de 12,0 casos por 1000 personas-año. Adicionalmente, un estudio recientemente publicado sobre el impacto de la NAC en atención primaria, reportó que la incidencia fue de 4.63 casos por 1000 personas-año, y que esta aumenta progresivamente con la edad, variando de 1.98 casos por 1000 personas-año en pacientes en el grupo de edad 18-20 años, a 23.74 casos por 1000 personas-año en pacientes mayores de 90 años de edad. Este estudio también muestra que la incidencia de la NAC fue mayor en los pacientes varones (5.04 casos/1000/año) que en las mujeres (4.26 casos/ 1000/año). </p>

					<p class="mt-4 text-justify">Por otro lado, dos importantes estudios de norteamericanos reportan que la incidencia anual de NAC que requirió hospitalización fue de 6.4 casos por 1000 adultos/año, lo que correspondería aproximadamente a 1.5 millones de hospitalizaciones anuales; cursando con una mortalidad durante la hospitalización de 6.5%. Esto se traduce en aproximadamente 100000 muertes al año durante la hospitalización por un episodio de NAC en los Estados Unidos. Adicionalmente, la mortalidad reportada a los 30 días, 6 meses y al año de ingreso fue de  13%, 23.4%, y 30.6%, respectivamente.</p>

					<p class="mt-4 text-justify">Un estudio Sudafricano publicado en 2015 reportó una incidencia de IVRB en personas mayores de 15 años de 4 casos por 1000 habitantes/año, siendo esta más alta en el grupo de edad  25 a 64 años, que a su vez es el grupo de edad con la tasa más alta de infección por el VIH. Datos recientes sobre la mortalidad en este país, reportan que la gripe y la neumonía se consideran la sexta causa de muerte en adultos. Otros países como Japón reportan una incidencia anual de NAC en pacientes adultos de 16.9 casos por 1000 pacientes-año, siendo esta mayor en varones (15.6 casos por 1000 personas/año) que en mujeres (9.3 casos por 1000 personas/año). La incidencia más alta se observó en los mayores de 85 años (79.3 casos por 1000 personas/año). La tasa de hospitalización reportada fue de 5.3 casos por 1000 personas/año, con una tasa de mortalidad hospitalaria de 0.7 casos por 1000 personas/año. </p>

					<p class="mt-4 text-justify">El costo médico de un episodio de NAC ha sido analizado en varios estudios, sin embargo estos costos varían de acuerdo a la edad del paciente y el tipo de cuidado que requiera, como es ilustrado en un estudio Holandés el cual reporta que, durante un periodo de 4 años, el costo total de 195372 episodios de NAC correspondían a 711 millones de euros. Los costos variaban desde 344 euros por episodio para el grupo de 0-9 años tratados ambulatoriamente hasta 10284 euros para aquellos episodios de NAC de pacientes entre los 50–54 años que requerían ingreso a la unidad de cuidados intensivos (UCI). Así mismo, un estudio Francés reportó que, el costo medio de un episodio de NAC tratado en atención primaria es de 118.8 euros; costo que se eleva hasta 3522 euros si paciente requiere ser hospitalizado. </p>

					<p class="mt-4 text-justify">A pesar de la heterogeneidad de los diversos estudios que reportan datos sobre mortalidad de la NAC, la evidencia actual sugiere que, en general, hay una lenta pero progresiva disminución de la mortalidad no obstante, datos de un estudio reciente, revelan que la mortalidad de la neumonía neumocócica no se ha modificado desde hace más de 20 años. Lo que si se tiene claro es que se observa un incremento de la mortalidad en los adultos mayores, sobre todo en aquellos con  múltiples comorbilidades. Ejemplo de esto lo da un estudio Argentino que incluyó datos de 6205 pacientes, donde se investigó el impacto de la edad y las comorbilidades en la mortalidad de la NAC; Alli reportan tasas de mortalidad de 8% en los pacientes de edad 65 – 74 años y hasta de un 14% en aquellos mayores de 80 años.  Los autores observaron que los dos factores que incrementan la mortalidad fueron, la presencia de al menos una comorbilidad y  pertenecer al grupo de edad ≥80 años.</p>

					<p class="mt-4 text-justify">El programa de auditoría de la Sociedad Torácica Británica (BTS) evaluó el impacto en la mortalidad de la NAC enfocada en  puntos clave de las guías BTS 2009: la realización de una radiografía de tórax en las primeras 4 horas de admisión,  la evaluación de la severidad mediante el score de severidad CURB65, y la administración de la primera dosis de antibiótico dentro de las primeras 4 horas de admisión en urgencias del paciente. Basado en estos datos, el estudio de Daniel reportó una disminución significativa del 14% en la mortalidad a 30 días, a pesar de que no se observaran cambios en la gravedad de la NAC  al ingreso y a pesar del aumento en la edad media de los pacientes en el estudio. Estos resultados se atribuyeron a la administración temprana de antibióticos y el diagnostico precoz por la radiografía de tórax.</p>

					<p class="text-center mt-3 w100">
						{{-- <img src="{{ env('APP_URL') }}/assets/images/neumonia/radiog1.png" class="img-intro" data-aos="zoom-in" data-aos-duration="1000"> --}}
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

