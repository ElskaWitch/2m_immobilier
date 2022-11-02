@props(['image', 'title', 'description'])

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
</div>
