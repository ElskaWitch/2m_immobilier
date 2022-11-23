<div class="md:px-16 py-5 md:py-10">
		<div class="text-center text-white md:text-4xl font-bold py-24 uppercase">
				<h2>Nos biens immobilier</h2>
		</div>
		<div class="md:grid grid-cols-4 justify-items-center md:gap-7 md:p-5 space-y-7 md:space-y-0 px-3 md:px-0" id="container_card">
				@forelse ($houses as $house)
					<a class="card md:w-80 bg-base-100 shadow-xl py-7 rounded-xl " href="houses/{{ $house->id }}">
							<x-cards.Card-house :description="$house->description" :title="$house->title" :image="$house->image" :price="$house->price" :ref="$house->ref"/>
					</a>
				@empty
						<p class="text-xl text-white text-center font-semibold">Pas d'habitation actuellement</p>
				@endforelse
		</div>
		<div class="py-24 px-6 ">
				{{ $houses->links('pagination::tailwind') }}
		</div>
</div>
