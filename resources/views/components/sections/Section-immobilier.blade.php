<div class="px-16 py-10 ">
		<div class="text-center text-white text-4xl font-bold py-10 uppercase">
				<h2>Nos biens immobilier</h2>
		</div>
		<div class="grid grid-cols-4 justify-items-center gap-7 p-5" id="container_card">

				@forelse ($houses as $house)
						<a class="card w-80 bg-base-100 shadow-xl py-7 rounded-xl " href="houses/{{ $house->id }}">
								<x-cards.Card-house :description="$house->description" :title="$house->title" :image="$house->image" :price="$house->price" :ref="$house->ref"/>
						</a>
				@empty
						<p class="text-xl text-black font-semibold">Pas d'habitation actuellement</p>
				@endforelse
		</div>
		<div class="py-5 px-6 ">
				{{ $houses->links('pagination::tailwind') }}
		</div>
</div>
