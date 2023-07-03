<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Humble Remedies</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        <script src="https://kit.fontawesome.com/f75ab26951.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet"
        >
        @livewireStyles

        <style>
            .footer{
                background-color: rgb(17, 17, 78);
                color: white;
            }
        </style>
        
        <script src="{{ asset('js/jquery.slim.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            <div style="top:0;" class="fixed w-full">
                @livewire('navigation-menu')
            </div>

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main style="margin-top: 60px">
                {{ $slot }}
            </main>
        </div>
        <footer class="footer">
            <div style="display: grid; grid-template-columns: 25% 25% 25% 25%; padding:50px; padding-left:300px;">
                <div>
                    <h4>heading for something</h4>
                    <ul>
                        <li><a href="">something</a></li>
                        <li><a href="">something</a></li>
                        <li><a href="">something</a></li>
                        <li><a href="">something</a></li>
                        <li><a href="">something</a></li>
                    </ul>
                </div>
                <div>
                    <h4>heading for thing</h4>
                    <ul>
                        <li><a href="">thing</a></li>
                        <li><a href="">thing</a></li>
                        <li><a href="">thing</a></li>
                        <li><a href="">thing</a></li>
                        <li><a href="">thing</a></li>
                    </ul>
                </div>
                <div>
                    <h4>heading for that</h4>
                    <ul>
                        <li><a href="">that</a></li>
                        <li><a href="">that</a></li>
                        <li><a href="">that</a></li>
                        <li><a href="">that</a></li>
                        <li><a href="">that</a></li>
                    </ul>
                </div>
                <div>
                    <h4>heading for this</h4>
                    <ul>
                        <li><a href="">this</a></li>
                        <li><a href="">this</a></li>
                        <li><a href="">this</a></li>
                        <li><a href="">this</a></li>
                        <li><a href="">this</a></li>
                    </ul>
                </div>
            </div>
            <div align="center">
                <x-section-border/>
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> Humble Remedies
                <br>Developed by <a class="text-red-500" href="https://www.linkedin.com/in/tumelo-petsane-00b991134/">Tumelo</a>
            </div>
        </footer>

        @stack('modals')

        @livewireScripts
    </body>
</html>
