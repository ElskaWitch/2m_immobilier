<x-main-layout title="Qui sommes nous ?">
		{{-- section about --}}
		<div class="px-3 md:px-72">
				@include('components.sections.Section-about')
		</div>
		{{-- section map --}}
		<div class="px-3 md:px-72 pt-24">
				@include('components.sections.Section-map')
		</div>
</x-main-layout>
