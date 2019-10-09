
@if($header[0] == 'index')
  <header class="masthead text-center">
    <div class="masthead-content">
      <div class="container" data-aos="zoom-in">
        <p class="masthead-heading mb-0"><img src="{{ env('APP_URL') }}/assets/images/logo_neumoai.png" alt="" width="75%"></p>
        <h4 class="masthead-subheading mb-0">Asociación de Apoyo e Información a Familiares y Pacientes con Neumonía</h4>
      </div>
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
  </header>
@else
  <header class="masthead2 text-center">
    <div class="masthead-content">
      <div class="container">
        <p class="masthead-heading mb-0">{{ $header[1] }}</p>
        {{-- <h4 class="masthead-subheading mb-0">Asociación de Apoyo e Información a Familiares y Pacientes con Neumonía</h4> --}}
      </div>
    </div>
    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
  </header>
@endif
