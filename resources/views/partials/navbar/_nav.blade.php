@php
		$styleLink = 'bg-white text-black font-semibold px-3 py-1 rounded-xl hover:bg-blue-200 ';
@endphp

<nav class="bg-black text-white md:px-16 py-7 md:flex justify-between items-center ">
		<div class="animate__animated animate__fadeInLeft">
				<a class="md:text-2xl px-2 md:px-0" href="/" id="logo">2M Immobilier</a>
		</div>
		<div class="animate__animated animate__flipInX">
				<a href="/">
						<img alt="" src="img/logoSite.png">
				</a>
		</div>
		<div class="pt-4 md:pt-0 md:space-x-4 flex items-center animate__animated animate__fadeInRight" id="navitem">
				{{-- menu --}}
				<div class="dropdown dropdown-end px-2 md:px-0">
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
						<div class="space-x-2 md:space-x-4 flex items-center">
								<div class="{{ $styleLink }}">
										<a href="{{ route('dashboard') }}">Dashboard</a>
								</div>
								<x-btn-logout />
						</div>
				@endauth
		</div>
</nav>
