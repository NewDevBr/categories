<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Categories system</title>
   <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div class="container">
    </div>
        @component('navbar', ["current"=>$current])
        @endcomponent
        <main role="main">
            @hasSection('body')
                @yield('body')
            @endif
        </main>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</body>
</html>