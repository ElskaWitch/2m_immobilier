@props(['image', 'title', 'description', 'price', 'ref'])

	<div class="">
			<div class="grid place-content-center ">
					<img alt="{{ $title }}" class="rounded-xl w-72 h-48 " src="{{ asset('storage/' . $image) }}">
			</div>
			<div class="card-body p-5 ">
					<h2 class="card-title text-center text-xl uppercase font-bold">{{ $title }}</h2>
					<div class="pt-3">
							<p>{{ Str::substr($description, 0, 100) }}</p>
					</div>
			</div>
			<div class="flex justify-between px-5 py-2 font-semibold">
					<div class="">
							<p>Prix: {{ $price }}€</p>
					</div>
					<div class="">réf: {{ $ref }}</div>
			</div>
			{{-- <div class="grid grid-cols-2 px-5 py-5 space-y-2 items-center">
					<div class="flex space-x-2">
							<div class="badge badge-lg">1</div>
							<p>garage</p>
					</div>
					<div class="flex space-x-2">
							<div class="badge badge-lg">3</div>
							<p>chambre</p>
					</div>
					<div class="flex space-x-2">
							<div class="badge badge-lg">2</div>
							<p>chambre</p>
					</div>
			</div> --}}
	</div>


