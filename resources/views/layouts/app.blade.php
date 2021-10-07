<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'UoEmCU') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/dashboard.js') }}" defer></script>
    </head>
    
    <body class="font-sans antialiased">
       
 <div id="preloader">
     
 </div>

<style>
    #preloader{
        background: #fff url(loader.gif) no-repeat center center;
        background-size: 15%;
        height: 100vh;
        width: 100%;
        position: fixed;
        z-index: 100;

    }
    
</style>
        
        
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header> -->

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
    <script>
    
    // var loader = document.getElementById("preloader").addEventListener("load", setTimeout(pageloader, 2000));

    //     function pageloader() {
    //       
    //     }
        var loader = document.getElementById("preloader");
        
        window.addEventListener("load", function pageload(){
            
            
                loader.style.display = "none";
            
            
            
            
        }
        );
        
        
       
    </script>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  
</html>
