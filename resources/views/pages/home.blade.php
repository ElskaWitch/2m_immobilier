<x-main-layout title="Accueil">
		{{-- section welcome --}}
		<div class="py-16 px-64">
				@include('components.sections.Section-welcome')
		</div>
		{{-- section services --}}
		<div class="">
				@include('components.sections.Section-service')
		</div>
		{{-- biens immobilier --}}
		<div class="px-16 py-16">
				<div class="text-center text-white text-3xl font-bold rounded-t-xl bg-black py-10">
						<h2>Nos biens immobilier</h2>
				</div>
				<div class="grid grid-cols-4 justify-items-center gap-7 bg-black p-5" id="container_card">

						@forelse ($houses as $house)
								<a class="card w-80 bg-base-100 shadow-xl py-7 rounded-xl " href="houses/{{ $house->id }}">
										<x-cards.Card-house :description="$house->description" :title="$house->title" :image="$house->image" />
								</a>
						@empty
								<p class="text-xl text-[#0e0037]">Pas d'habitation actuellement</p>
						@endforelse
				</div>
				<div class="bg-black py-5 px-6 rounded-b-xl">
						{{ $houses->links('pagination::tailwind') }}
				</div>
		</div>
</x-main-layout>
