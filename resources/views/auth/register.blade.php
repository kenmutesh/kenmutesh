<head>
<title>UoEM CU Registration</title>
<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--Font Awesome Icons--->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>    
     <div class="row" style="
     width:100%;background:white; top:0px; height:80px; ">
       <div class="col-md-4" style="padding-right:20px;">
            <!--  <a href="/">-->
            <!-- <img src="logo-1.png" alt="UOEM CU Regustraion Portal" width='100' height="100">-->
            <!--</a>-->
       </div>
        <div class="col-md-8" style="padding-top:24px;color:blue;">
            <span style="font-size:28px; padding-top:34px;">University of Embu CU Registration   Portal</span>
        </div>
</div>
<div class="row"></div>
    
<x-guest-layout>
   
    <x-auth-card>
       
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-1 h-1 fill-current text-gray-500" />
            </a>
        </x-slot>
            
  
  

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

         <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="mt-4">
                <x-label for="name" :value="__('Name')" />

                <x-input id="nam" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-label for="email" :value="__('Year')" />
                        <select autocomplete="off" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="year" name="year">  
                        <option selected="true" disabled="disabled">Choose year</option>  
                            <option value="1">Year 1</option>
                            <option value="2">Year 2</option>
                            <option value="3">Year 3</option>
                            <option value="4">Year 4</option>
                        </select>
            </div>

            <div class="mt-4">
                <x-label for="semester" :value="__('Semester')" />
                        <select autocomplete="off" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="semester" name="semester" >  
                        <option selected="true" disabled="disabled">Choose Semester</option>  
                            <option value="1">Semester 1</option>
                            <option value="2">Semester 2</option>
                            <option value="2">Semester 3</option>
                        </select>
            </div>

            <div class="mt-4">
                <x-label for="ministry" :value="__('Ministry')" />
                        <select autocomplete="off" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="ministry" name="ministry" >  
                        <option selected="true" disabled="disabled">Choose Ministry</option>  
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
<div class="row" style="background:url(links.png); padding:80px; color:white;">
    <div class="col-md-4">
       <p style="border-bottom:2px solid #62b319; width:80%; font-size:18px;">Get in Touch</p> <br><br>
       <i class="fa fa-home"></i>&ensp;University of Embu C.U<br><br>
                <i class="fa fa-envelope-open"></i>&ensp;P.O Box 6 - 60100,
                Embu<br><br>
                <i class="fa fa-phone"></i>&ensp;0729-653-737<br><br>
                <i class="fa fa-envelope"></i>&ensp;info@uoemcu.co.ke<br><br>
                <i class="fa fa-globe"></i>&ensp;www.uoemcu.co.ke
        </div>
    <div class="col-md-4">
        <p style="border-bottom:2px solid #62b319; width:80%; font-size:18px;">Quick Links</p> <br><br>
           <a href="https://uoemcu.co.ke/" target="_blank" >Main Website</a><br><br>
           <a href=""target="_blank">About Us</a><br><br>
           <a href="https://uoemcu.co.ke/blog/"target="_blank">Our Blog</a><br><br>
           <a href="https://uoemcu.co.ke/leaders/"target="_blank">Leadership</a><br><br>
           <a href="https://uoemcu.co.ke/contact-us/" target="_blank">Contact Us</a>
    </div>
    
    <div class="col-md-4">
        <p style="border-bottom:2px solid #62b319; width:80%; font-size:18px;">Our Programs</p> <br><br>
                <p>Mon:Class Fellowship 7- 8.30PM</p>
                <p>Tue:Anza Fyt(1st Years) 7- 8.30PM</p>
                <p>Wed:Commitment Class 7 - 8.30PM</p>
                <p>Thur:Faith Foundation 7 - 8.30PM</p>
                <p>Fri:Fellowship 7 - 8.30PM</p>
                <p>Sat:Sunday Preparations 10 - 6PM</p><br>
                
                <p style=" width:40%; font-size:14px;">Follow Us:</p>
                <a href="https://web.facebook.com/uoemcu.co.ke" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>&ensp;&ensp;
                <a href="https://www.youtube.com/channel/UCKm310sHTa5Dhws3Q3mvoWQ" target="_blank"><i class="fa fa-twitter-square fa-2x"></i></a>&ensp;&ensp;
                <a href="https://www.youtube.com/channel/UCKm310sHTa5Dhws3Q3mvoWQ" target="_blank"><i class="fa fa-youtube-square fa-2x"></i></a>
    </div>
    
</div>
