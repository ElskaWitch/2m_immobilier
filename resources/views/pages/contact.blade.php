<x-main-layout title="Contact">
		<div class="py-24 px-3 md:px-32">
				@include('components.sections.Section-contact')
		</div>
    <div class="px-3 md:px-72">
				@include('components.sections.Section-map')
		</div>
		  <div class="px-3 md:px-32 pt-24">
				@include('components.formulaires.Form_contact')
		</div>
</x-main-layout>