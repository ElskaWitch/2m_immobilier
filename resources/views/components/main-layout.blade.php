@props(['title'])

<!DOCTYPE html>
<html lang="fr">

<head>
		<meta charset="UTF-8">
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<meta content="ie=edge" http-equiv="X-UA-Compatible">
		<title>2M Immobilier | {{ $title }}</title>
		{{-- favicon --}}
		<link href="img/favicon.jpg" rel="icon" type="image/png" />
		{{-- font awesome --}}
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
		<!-- Fonts -->
		<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
		{{-- font Oswald --}}
		<link href="https://fonts.googleapis.com" rel="preconnect">
		<link crossorigin href="https://fonts.gstatic.com" rel="preconnect">
		<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
		<!-- import Tailwind -->
		@vite('resources/css/app.css')
		{{-- scrollreveal --}}
		<script src="https://unpkg.com/scrollreveal"></script>
</head>

<body>
		@include('partials.navbar._nav')
		<!-- hero -->
		<div class=" bg-fixed py-72 bg-center" style="background-image: url('img/treport-hero1.jpg')">
				<div class="text-black text-center ">
						<h2 class="text-9xl py-10 font-bold">2M Immobilier</h2>
						<div class="text-7xl font-semibold ">
								<p>Le Tréport</p>
						</div>
				</div>
				<div class="py-7">
					@include('partials._session')
					{{ $slot }}
				</div>
			</div>
		@include('partials.footer._footer')

		@vite('resources/js/app.js')
</body>

</html>
