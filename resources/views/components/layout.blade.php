<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
        
    <title>{{ $title ?? 'Untitled' }} | {{ config('app.name') }}</title>

    <style>
        .custom-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('/iam_os-Gr7q7kqfnVU-unsplash.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            z-index: -50;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.50);
            z-index: -40;
            backdrop-filter: blur(12px);
        }
    </style>
</head>

<body>
    
    <div class="custom-bg"></div>
    <div class="overlay"></div>
    
    <main class="relative z-50 flex justify-center items-center text-gray-800 min-h-screen">
        {{ $slot }}
    </main>

</body>

</html>
