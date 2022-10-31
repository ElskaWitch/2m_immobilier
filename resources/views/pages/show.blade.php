<x-main-layout :title="$house->title">
		<div class="container">
				<h2 class="text-center text-4xl py-10 font-semibold text-[#6d5ba1]">{{ $house->title }}</h2>
				<div class="grid place-items-center">
						<img alt="{{ $house->title }}" class="rounded-xl w-96 " src="{{ asset('storage/' . $house->image) }}">
						<p class="text-center px-96 py-10">{!! nl2br(e($house->description)) !!}</p>
						<p>{!! nl2br(e($house->location)) !!}</p>
						<p>{!! nl2br(e($house->price)) !!}</p>
						<p>{!! nl2br(e($house->ref)) !!}</p>
				</div>
				@auth
						<div class="pt-6 flex justify-center space-x-5">
								<div>
										<x-btn-delete :item="$house" routeItem="houses.destroy" />
								</div>
								<div>
										<a class="btn btn-success" href="{{ $house->id }}/edit">Modifier</a>
								</div>
						</div>
				@endauth
		</div>
</x-main-layout>
