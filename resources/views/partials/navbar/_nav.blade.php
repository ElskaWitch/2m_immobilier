@php
		$styleLink = 'bg-white text-black font-semibold px-3 py-1 rounded-xl hover:bg-blue-200 ';
@endphp

<nav class="bg-black text-white px-16 py-3 flex justify-between items-center">
		<div>
				<a class="text-2xl" href="/" id="logo">2M Immobilier</a>
		</div>
		<div class="">
				<img alt="" src="img/logoSite.png">
		</div>
		<div class=" space-x-4 flex items-center" id="navitem">
				{{-- menu --}}
				<div class="dropdown dropdown-end">
						<label class="{{ $styleLink }}" tabindex="0">Menu</label>
						<ul class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52 text-black" tabindex="0">
								<li><a>Qui sommes nous ?</a></li>
								<li><a>Estimation</a></li>
								<li><a>Nos biens</a></li>
								<li><a>Contact</a></li>
						</ul>
				</div>
				{{-- end menu --}}
				@guest
						<div class="{{ $styleLink }}">
								<a href=" {{ route('login') }} ">Connexion</a>
						</div>
						<div class="{{ $styleLink }}">
								<a href=" {{ route('register') }} ">Inscription</a>
						</div>
				@endguest
				@auth
						<div class=" space-x-4 flex items-center">
								<div class="{{ $styleLink }}">
										<a href="{{ route('dashboard') }}">Dashboard</a>
								</div>
								<x-btn-logout />
						</div>
				@endauth
		</div>
</nav>
