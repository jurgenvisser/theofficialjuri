<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="theofficialjuri" />
    <link rel="manifest" href="/site.webmanifest" />
    <meta name="description" content="Welkom bij JURI. Ontdek, deel en groei met JURI. Volg JURI voor updates, exclusieve content en om je muzikale reis te starten." />
    <link rel="stylesheet" href="css/app.css">
    <meta name="theme-color" content="#000000">
    <!-- Add your CSS and JS files here with Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <title>@yield('title', 'Homepage')</title>
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-XY51HGHY1G"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-XY51HGHY1G');
</script>
<body class="bg-black">
    
        <!-- Navigation of the page -->
        @include('layouts.header')

        <!-- Main information of the page -->
        <div class="content">
            @yield('content') <!-- The content of the specific page is loaded here -->
        </div>

        <!-- Footer of the page -->
        @include('layouts.footer')

</body>
</html>