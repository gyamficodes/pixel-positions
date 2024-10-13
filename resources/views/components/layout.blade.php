<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Position</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body>
    <div>
         <nav>
            <div>
                <a href="#">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Logo">
                </a>
            </div>
            <div>Links</div>
            <div>Post A Job</div>
         </nav>


         <main>
        {{$slot}}
         </main>
    </div>


</body>
</html>