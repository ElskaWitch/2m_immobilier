@php
		$styleLink = 'bg-white text-black font-semibold px-3 py-1 rounded-xl hover:bg-blue-200 ';
@endphp

<div class="bg-black text-white px-16 py-4">
		<div class="flex justify-between text-center mx-80">
				<div class=" text-white font-bold">
						<p class="py-4">Espace <br><span class="uppercase">Propriétaire</span></p>
						@guest
								<div class="{{ $styleLink }}">
										<a href=" {{ route('login') }} ">Connexion</a>
								</div>
						@endguest
						@auth
								<div class=" space-x-4 flex items-center">
										<x-btn-logout />
								</div>
						@endauth
				</div>
				<div class=" text-white font-bold">
						<p>Nous <br><span class="uppercase">Adhérons</span></p>
						<div class="py-3">
								<p><span class="text-xl">Inter<span class="text-green-500">Kab</span></span><br>agence membre</p>
						</div>
				</div>
		</div>
		<div class="text-white pt-6 text-center text-xs">
				<p>
						© 2022 | TOUS DROITS RÉSERVÉS | TRADUCTION POWERED BY GOOGLE | NOS HONORAIRES PLAN DU SITE MENTIONS LÉGALES ADMIN
						NOS LIENS
				</p>
		</div>
		<div class="text-center py-5 text-xs">
				<p><span class="font-semibold text-lg">La Boite Immo </span><br> 1er Partenaire des indépendants</p>
		</div>
</div>
