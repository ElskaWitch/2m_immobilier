<!-- Authentication -->
<form action="{{ route('logout') }}" method="POST">
		@csrf

		<button class="bg-white text-black font-semibold px-3 py-1 rounded-xl hover:bg-blue-200 " type="submit">Déconnexion</button>
</form>
