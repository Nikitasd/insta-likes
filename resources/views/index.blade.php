@php
  $config = [
      'appName' => config('app.name'),
      'locale' => $locale = app()->getLocale(),
      'locales' => config('app.locales'),
      'githubAuth' => config('services.github.client_id'),
  ];

  $polyfills = [
      'Promise',
      'Object.assign',
      'Object.values',
      'Array.prototype.find',
      'Array.prototype.findIndex',
      'Array.prototype.includes',
      'String.prototype.includes',
      'String.prototype.startsWith',
      'String.prototype.endsWith',
  ];
@endphp
        <!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>{{ config('app.name') }}</title>


  <!-- Web Fonts
  ================================================== -->
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i" rel="stylesheet"/>

  <link rel="stylesheet" href="{{ mix('css/app.css') }}">

  <link rel="stylesheet" href="{{ asset('css/mind-icons-line.css') }}" />
  <link rel="stylesheet" href="{{ asset("css/funky-style.css") }}"/>

  <link rel="stylesheet" href="{{ asset("css/colors/color-green.css") }}"/>
</head>
<body>
<div id="app"></div>

{{-- Global configuration object --}}
<script>window.config = @json($config);</script>

{{-- Polyfill JS features via polyfill.io --}}
<script src="https://cdn.polyfill.io/v2/polyfill.min.js?features={{ implode(',', $polyfills) }}"></script>

{{-- Load the application scripts --}}
@if (app()->isLocal())
  <script src="{{ mix('js/app.js') }}"></script>
@else
  <script src="{{ mix('js/manifest.js') }}"></script>
  <script src="{{ mix('js/vendor.js') }}"></script>
  <script src="{{ mix('js/app.js') }}"></script>
@endif

<script type="text/javascript" src="{{ asset("js/tether.min.js") }}"></script>

</body>
</html>
