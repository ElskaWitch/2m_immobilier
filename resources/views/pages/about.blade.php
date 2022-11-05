<x-main-layout title="Qui sommes nous ?">
		{{-- section about --}}
		<div class="px-72">
				@include('components.sections.Section-about')
		</div>
		{{-- section map --}}
		<div class="px-32 pt-24">
				@include('components.sections.Section-map')
		</div>
</x-main-layout>
