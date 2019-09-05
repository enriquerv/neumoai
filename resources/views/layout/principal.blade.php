<!DOCTYPE html>
<html lang="{{ \App::getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> {{ env('APP_NAME') }} | @yield('title') </title>
        {{-- Bootstrap v4.3.1 --}}
        {{ Html::style('assets/plugins/bootstrap/bootstrap.min.css') }}
        {{-- DataTables v1.10.19 --}}
        {{ Html::style('assets/plugins/datatables/jquery.dataTables.min.css') }}
        {{-- FormValidation v0.8.1 --}}
        {{ Html::style('assets/plugins/formvalidation/dist/css/formValidation.min.css') }}
        {{-- jQuery UI v1.12.1 --}}
        {{ Html::style('assets/plugins/jquery-ui/jquery-ui.min.css') }}
        {{-- TimePicker v1.3.5 --}}
        {{ Html::style('assets/plugins/timepicker/jquery.timepicker.min.css') }}
        {{-- Core CSS file --}}
        {{ Html::style( 'assets/css/core.css?'.filemtime('assets/css/core.css') ) }}
        {{-- Custom CSS file --}}
        {{ Html::style( 'assets/css/custom.css?'.filemtime('assets/css/custom.css') ) }}
        <script> var direction = "{{ config('app.path') }}" </script>
        @yield('styles')
    </head>
    <body>
        @include('layout.menus.principal')

        @yield('content')

        @include('layout.menus.footer')
        {{-- jQuery v3.3.1 --}}
        {{ Html::script('assets/plugins/jquery/jquery.min.js') }}
        {{-- jQuery UI v1.12.1 --}}
        {{ Html::script('assets/plugins/jquery-ui/jquery-ui.min.js') }}
        {{-- Bootstrap v4.3.1 --}}
        {{ Html::script('assets/plugins/bootstrap/bootstrap.bundle.min.js') }}
        {{-- Popper v4.1.3 --}}
        {{ Html::script('assets/plugins/bootstrap/popper.js') }}
        {{-- Bootstrap Wizard v1.4.2 --}}
        {{ Html::script('assets/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}
        {{-- DataTables v1.10.19 --}}
        {{ Html::script('assets/plugins/datatables/jquery.dataTables.min.js') }}
        {{-- FormValidation v0.8.1 --}}
        {{ Html::script("assets/plugins/formvalidation/dist/js/formValidation.min.js") }}
        {{-- FormValidation v0.8.1 --}}
        {{ Html::script("assets/plugins/formvalidation/dist/js/framework/bootstrap.min.js") }}
        @if(\App::getLocale() == 'es')
            {{ Html::script("assets/plugins/formvalidation/dist/js/language/es_ES.js") }}
        @else
            {{ Html::script("assets/plugins/formvalidation/dist/js/language/en_US.js") }}
        @endif

        {{-- DateTimePicker plugin --}}
        {{ Html::script("assets/plugins/datetimepicker/datepicker.js") }}
        @if(\App::getLocale() == 'es')
            {{ Html::script("assets/plugins/datetimepicker/i18n/datepicker-es.js") }}
        @endif

        {{-- TimePicker plugin --}}
        {{ Html::script("assets/plugins/timepicker/jquery.timepicker.min.js") }}
        {{ Html::script("assets/plugins/timepicker/timepicker.call.js") }}
        {{-- Font Awesome --}}
        {{ Html::script("https://use.fontawesome.com/releases/v5.8.1/js/all.js") }}
        {{-- Custom Script --}}
        {{ Html::script( "assets/js/script.js?".filemtime("assets/js/script.js") ) }}

        @yield('scripts')
        @include('notifications')
    </body>
</html>
