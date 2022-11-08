@php
		$styleLink = 'bg-white text-black font-semibold px-3 py-1 rounded-xl hover:bg-blue-200 ';
@endphp

<nav class="bg-black text-white md:px-16 py-3 md:flex justify-between items-center">
		<div>
				<a class="md:text-2xl" href="/" id="logo">2M Immobilier</a>
		</div>
		<div class="">
				<a href="/">
						<img alt="" src="img/logoSite.png">
				</a>
		</div>
		<div class="place-content-center pt-4 md:pt-0 md:pl-0 space-x-4 flex items-center" id="navitem">
				{{-- menu --}}
				<div class="dropdown dropdown-end">
						<label class="{{ $styleLink }}" tabindex="0">Menu</label>
						<ul class="dropdown-content menu p-2 shadow bg-base-100 rounded-box w-52 text-black" tabindex="0">
								<li><a href="/">Acceuil</a></li>
								<li><a href="pages.about">Qui sommes nous ?</a></li>
								<li><a href="pages.estimation">Estimation</a></li>
								<li><a href="pages.immobilier">Nos biens</a></li>
								<li><a href="pages.contact">Contact</a></li>
						</ul>
				</div>
				{{-- end menu --}}
				@guest
						<div class="{{ $styleLink }}">
								<a href=" {{ route('login') }} ">Connexion</a>
						</div>
						{{-- <div class="{{ $styleLink }}">
								<a href=" {{ route('register') }} ">Inscription</a>
						</div> --}}
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
