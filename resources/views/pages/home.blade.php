<x-main-layout title="Accueil">
		{{-- section welcome --}}
		<div class="py-24 px-3 md:px-64">
				@include('components.sections.Section-welcome')
		</div>
		{{-- section services --}}
		<div class="bg-white py-1">
				@include('components.sections.Section-service')
		</div>
		{{-- section house --}}
		<div class="pt-24">
				<div class="bg-[#000000]">
						@include('components.sections.Section-houses')
				</div>
		</div>
		{{-- section alerte email --}}
		<div class="pt-24 md:px-56 px-5">
				@include('components.sections.Section-alerte-email')
		</div>
</x-main-layout>
