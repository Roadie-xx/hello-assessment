<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - HelloContainer - Boek nu moeiteloos zeecontainers met HelloContainer!</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        nav.navbar {
            background-color: #292f33 !important;
            border-bottom: solid 1px #979797;
            padding: 1.8rem 2rem;
        }

        #background {
            position: absolute;
            z-index: -1;
        }

        .logo {
            width: 100%;
            max-width: 193px;
            min-height: 29px;
            display: inline-block;
        }
            
        /* Colored definition list: https://codepen.io/mlegakis/pen/MrVQga */
        .colored-definition-list {margin-top: 0;}
        .colored-definition-list dt {background: #0095c5; color: #fff; margin-top: 0; padding: 10px 1em;}
        .colored-definition-list dt:first-child {border-radius: 3px 3px 0 0;}
        .colored-definition-list dd {
            background-color: #fff;
            border-left: 1px solid #a2c0ca;
            border-right: 1px solid #a2c0ca;
            margin: 0;
            padding: 12px 1em;
        }
        .colored-definition-list dd + dd {border-top: 1px dashed #a2c0ca;}
        .colored-definition-list dd:last-child {border-bottom: 1px solid #a2c0ca; border-radius: 0 0 3px 3px;}
    </style>
    @yield('style')

</head>
<body>
    <img id="background" class="absolute -left-20 top-0 max-w-[877px]" src="/images/background.svg" alt="background">
    
    <header>
        <nav class="navbar">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img class="logo" src="/images/logo_white.svg" alt="Bootstrap" width="193" height="29">
                </a>
                <span class="text-light">Robby's Laravel Assessment</span>
            </div>
        </nav>
    </header>

    <main class="container mt-3">
        @yield('content')
    </main>

    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>
