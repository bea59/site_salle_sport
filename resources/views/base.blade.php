<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous" defer></script>
    <title>{{ config('app.name') }} - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
<header>
    <section class="content">
        <h1>site_salle_sport</h1>
        <h2>BEAFIT PARK</h2>
        <div>
            <ul>
                <li>
                    <a href="{{ route('main.accueil') }}">accueil</a> 
                </li>
                <li>
                    <a href="{{ route('main.cours') }}">cours</a>
                </li>
                <li>
                    <a href="{{ route('main.tarifs') }}">tarifs</a>
                </li>
                <li>
                    <a href="{{ route('main.contact') }}">contact</a>
                </li>
                <li>
                    <a href="{{ route('main.Mentions_Legales') }}">mentions_légales</a>
                </li>
            </ul>
        </div>
    </section>
</header>
@yield('content')    
<footer>
    <link rel="mentions_légales" href="mentions_légales">
</footer>
</body>
</html>