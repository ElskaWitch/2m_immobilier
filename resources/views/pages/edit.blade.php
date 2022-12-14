<x-main-layout title="Edit">
		<div class="container">
				<h2 class="text-center text-xl md:text-4xl py-10 font-semibold text-black">Modifier le bien immobilier</h2>
				<form action="{{ route('houses.update', $house->id) }}" enctype="multipart/form-data" method="POST">
						@csrf
						@method('PUT')
						<div class="px-3 md:px-96 space-y-5">
								{{-- title --}}
								<input class="block w-full rounded-xl border-gray-400" name="title" placeholder="Titre du bien immobilier"
										type="text" value="{{ old('title', $house->title) }}">
								<x-error-msg name="title" />
								{{-- description --}}
								<textarea class="mt-5 block w-full rounded-xl border-gray-400" cols="30" id="" name="description"
								  placeholder="Votre contenu..." rows="10">{{ old('description', $house->description) }}</textarea>
								<x-error-msg name="description" />
								{{-- location --}}
								<input class="block w-full rounded-xl border-gray-400" name="location" placeholder="lieux"
										type="text" value="{{ old('location', $house->location) }}">
								<x-error-msg name="location" />
								{{-- price --}}
								<input class="block w-full rounded-xl border-gray-400" name="price" placeholder="prix"
										type="text" value="{{ old('price', $house->price) }}">
								<x-error-msg name="price" />
								{{-- ref --}}
								<input class="block w-full rounded-xl border-gray-400" name="ref" placeholder="ref" type="text"
										value="{{ old('ref', $house->ref) }}">
								<x-error-msg name="ref" />
								{{-- img --}}
								<div class="py-3">
										<label for="">Choisir une image:</label>
										<input class="block" id="" name="image" type="file">
										<x-error-msg name="image" />
								</div>
								{{-- envoyer --}}
								<div class="text-center">
										<button class="btn btn-primary" type="submit">Envoyer</button>
								</div>
						</div>
				</form>
		</div>
</x-main-layout>
