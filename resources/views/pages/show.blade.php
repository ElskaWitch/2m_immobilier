<x-main-layout :title="$house->title">
	<div class=" px-24">
		<div class="bg-black text-white text-center rounded-xl">
				<h2 class="text-4xl py-10 font-semibold uppercase">{{ $house->title }}</h2>
				<div class="grid place-items-center">
						<img alt="{{ $house->title }}" class="rounded-xl w-96 " src="{{ asset('storage/' . $house->image) }}">
						<p class=" px-96 py-10">{!! nl2br(e($house->description)) !!}</p>
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
