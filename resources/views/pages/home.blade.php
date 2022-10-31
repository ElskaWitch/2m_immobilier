<x-main-layout title="Accueil">
		<div class="">
				<h2 class="text-center text-4xl py-10 font-semibold text-[#6d5ba1]">2M Immobilier</h2>
				<div class="grid grid-cols-4 justify-items-center gap-7" id="container_card">
						@forelse ($houses as $house)
								<a class="card w-80 bg-base-100 shadow-xl py-7 rounded-xl"  href="houses/{{ $house->id }}">
										<x-cards.Card-house :description="$house->description" :title="$house->title" :image="$house->image" />
								</a>
						@empty
								<p class="text-xl text-[#0e0037]">Pas d'habitation actuellement</p>
						@endforelse
				</div>
				<div class="pt-10">
						{{ $houses->links('pagination::tailwind') }}
				</div>
		</div>
</x-main-layout>
