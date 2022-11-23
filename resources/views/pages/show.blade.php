<x-main-layout :title="$house->title">
	<div class=" md:px-72">
		<div class="bg-black text-white text-center rounded-xl py-24 px-7">
				<h2 class="text-xl md:text-4xl py-10 font-semibold uppercase pb-24">{{ $house->title }}</h2>
				<div class="px-10 md:px-0 md:grid place-items-center">
						<img alt="{{ $house->title }}" class="rounded-xl w-72 md:w-96 pb-16" src="{{ asset('storage/' . $house->image) }}">
						<p class="md:px-24 py-10">{!! nl2br(e($house->description)) !!}</p>
						<p>Lieux : {!! nl2br(e($house->location)) !!}</p>
						<p>Prix : {!! nl2br(e($house->price)) !!}€</p>
						<p>réf : {!! nl2br(e($house->ref)) !!}</p>
				</div>
				@auth
						<div class="py-6 flex justify-center space-x-5">
								<div>
										<x-btn-delete :item="$house" routeItem="houses.destroy" />
								</div>
								<div>
										<a class="btn btn-success" href="{{ $house->id }}/edit">Modifier</a>
								</div>
						</div>
				@endauth
		</div>
	</div>
</x-main-layout>
