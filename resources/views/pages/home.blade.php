<x-main-layout title="Accueil">
		{{-- section welcome --}}
		<div class="py-24 px-64">
				@include('components.sections.Section-welcome')
		</div>
		{{-- section services --}}
		<div class="bg-white py-1">
				@include('components.sections.Section-service')
		</div>
		{{-- section immobilier --}}
		<div class="pt-24">
				<div class="bg-[#000000]">
						@include('components.sections.Section-immobilier')
				</div>
		</div>
		{{-- section alerte email --}}
		<div class="py-24 px-56">
				@include('components.sections.Section-alerte-email')
		</div>
</x-main-layout>
