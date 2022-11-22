@php
$styleLink = 'bg-black px-3 py-1 rounded-xl hover:bg-blue-200 hover:text-black text-white';
@endphp

<x-main-layout title="Dashboard">
		<x-slot name="header">
				<h2 class="font-semibold text-xl text-gray-800 leading-tight">
						{{ __('Dashboard') }}
				</h2>
		</x-slot>

		<div class="pt-24">
				<h1 class="text-center text-5xl font-semibold text-white bg-black py-4">Bienvenue {{ Auth::user()->name }} sur ton
						Dashboard</h1>
				<div class="py-10 text-center space-x-5 ">
						<a class=" {{ $styleLink }} " href=" {{ route('houses.create') }} ">Nouveau bien immobilier</a>
						<a class="{{ $styleLink }} " href="pages.immobilier">Liste des biens immobilier</a>
				</div>
		</div>
</x-main-layout>
