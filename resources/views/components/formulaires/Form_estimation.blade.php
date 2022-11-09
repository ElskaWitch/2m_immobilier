<div class="bg-black text-white rounded-xl">
		<div class="text-center text-2xl font-bold py-10">
				<h2>
						Je souhaite <span class="uppercase">Faire estimer</span>
				</h2>
		</div>
		<form action="" class="text-center" method="POST">
				@csrf
				{{-- type --}}
				<div class="px-3 md:px-0">
						<input class="input w-full max-w-xs" name="type" placeholder="Type de bien*" type="text" />
						<x-error-msg name="type" />
				</div>
				{{-- adresse/ville --}}
				<div class="px-3 md:px-0">
						<div class="text-center text-2xl font-bold py-10">
								<h2>
										Je renseigne <span class="uppercase">l'adresse</span>
								</h2>
						</div>
						<div class="flex justify-center space-x-10">
								{{-- adresse --}}
								<div class="">
										<input class="input w-full max-w-xs" placeholder="Adresse" type="text" />
								</div>
								{{-- ville --}}
								<div class="">
										<input class="input w-full max-w-xs" placeholder="Ville" type="text" />
								</div>
						</div>
				</div>
				{{-- coordoné --}}
				<div class="px-3 md:px-0">
						<div class="text-center text-2xl font-bold py-10">
								<h2>
										Je renseigne <span class="uppercase">mes coordonnées</span>
								</h2>
						</div>
						<div class="flex justify-center space-x-10 pb-10">
								{{-- nom --}}
								<div class="">
										<input class="input w-full max-w-xs" name="nom" placeholder="Nom*" type="text" />
										<x-error-msg name="nom" />
								</div>
								{{-- prenom --}}
								<div class="">
										<input class="input w-full max-w-xs" name="prenom" placeholder="Prenom*" type="text" />
										<x-error-msg name="prenom" />
								</div>
						</div>
						<div class="flex justify-center space-x-10 pb-10">
								{{-- email --}}
								<div class="">
										<input class="input w-full max-w-xs" name="email" placeholder="E-mail*" type="text" />
										<x-error-msg name="email" />
								</div>
								{{-- tel --}}
								<div class="">
										<input class="input w-full max-w-xs" name="tel" placeholder="Téléphone*" type="text" />
										<x-error-msg name="tel" />
								</div>
						</div>
				</div>
				{{-- condition --}}
				<div class="py-5 flex justify-center space-x-3 px-3 md:px-0">
						<input checked="checked" class="checkbox" type="checkbox" />
						<p>J’accepte les conditions d’utilisation des données
								(*)* <br>
								*champ obligatoire
						</p>
				</div>
				{{-- envoyer --}}
				<div class="">
						<button class="bg-white text-xl font-semibold px-3 py-1 rounded-xl text-black">Envoyer</button>
				</div>
		</form>
		<div class="px-3 md:px-32 py-10">
				<p>
						Les informations recueillies sur ce formulaire sont enregistrées dans un fichier informatisé par La Boite Immo
						agissant comme Sous-traitant du traitement pour la gestion de la clientèle/prospects de l'Agence / du Réseau qui
						reste Responsable du Traitement de vos Données personnelles.
						La base légale du traitement repose sur l’intérêt légitime de l'Agence / du Réseau.
						Elles sont conservées jusqu'à demande de suppression et sont destinées à l'Agence / au Réseau.
						Conformément à la loi « informatique et libertés », vous pouvez exercer votre droit d'accès aux données vous
						concernant et les faire rectifier en contactant l'Agence / le Réseau.
						Si vous estimez, après avoir contacté l'Agence / le Réseau, que vos droits « Informatique et Libertés » ne sont
						pas respectés, vous pouvez adresser une réclamation à la CNIL.
						Nous vous informons de l’existence de la liste d'opposition au démarchage téléphonique « Bloctel », sur laquelle
						vous pouvez vous inscrire ici : https://www.bloctel.gouv.fr
						Dans le cadre de la protection des Données personnelles, nous vous invitons à ne pas inscrire de Données sensibles
						dans le champ de saisie libre
				</p>
		</div>
</div>
