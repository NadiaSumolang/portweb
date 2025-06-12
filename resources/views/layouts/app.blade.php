<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Minimalis</title>
    <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    @include('layouts.header')
    
    <main>
        @include('sections.hero')
        @include('sections.about')
        @include('sections.projects')
        @include('sections.contact')
    </main>
    
    @include('layouts.footer')
    
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>