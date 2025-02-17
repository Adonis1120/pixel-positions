<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    @vite('resources/css/app.css', 'resources/js/app.js')
</head>
<body class="bg-black text-white">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/20">
            <div>
                <a href="">
                    <img src="{{ Vite::asset('resources/images/aimperial-design-new-logo.png') }}" alt="" class="w-8">
                </a>
            </div>
            <div class="space-x-6 font-bold">
                <a href="http://">Jobs</a>
                <a href="http://">Careers</a>
                <a href="http://">Salaries</a>
                <a href="http://">Companies</a>
            </div>
            <div>
                <a href="http://">Post a Job</a>
            </div>
        </nav>
        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>
</html>