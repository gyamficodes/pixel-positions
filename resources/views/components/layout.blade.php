<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Position</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body class=" bg-black   text-white ">
    <div class=" px-10">
         <nav class="  border-b border-white/25 py-4 ">
            <div class=" w-[97%] lg:w-[80%] mx-auto h-full">
               <div class="flex  items-center justify-between ">
                <div>
                    <a href="/">
                        <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Logo">
                    </a>
                </div>
                <div class=" float-start items-center space-x-2 font-[700]">
                    <a href="">Jobs</a>
                    <a href="">Careers</a>
                    <a href="">Salaries</a>
                    <a href="">Companies</a>
                </div>
                <div>
                    <a href="">Post A Job</a>
                </div>
               </div>
            </div>
       
         </nav>


         <main class=" mt-10  w-[97%] lg:w-[80%] mx-auto">
        {{$slot}}
         </main>
    </div>


</body>
</html>