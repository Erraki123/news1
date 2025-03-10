@extends("dashboard")
@section('content')

<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Liste des Annonces</h1>
    <a href="{{ route('annonces.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg mb-4 inline-block">Ajouter une annonce</a>

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <!-- Search Filters -->
    <form method="GET" action="{{ route('annonces.index') }}" class="mb-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <input type="text" name="name" class="form-control" placeholder="Rechercher par nom" value="{{ request('name') }}">
            <input type="text" name="description" class="form-control" placeholder="Rechercher par description" value="{{ request('description') }}">
            <input type="date" name="date" class="form-control" placeholder="Rechercher par date" value="{{ request('date') }}">
        </div>
        <div class="text-center mt-4">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Rechercher</button>
        </div>
    </form>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white dark:bg-gray-800">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b dark:border-gray-700">Nom</th>
                    <th class="py-2 px-4 border-b dark:border-gray-700">Description</th>
                    <th class="py-2 px-4 border-b dark:border-gray-700">Date</th>
                    <th class="py-2 px-4 border-b dark:border-gray-700">Photo</th>
                    <th class="py-2 px-4 border-b dark:border-gray-700">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($annonces as $annonce)
                <tr>
                    <td class="py-2 px-4 border-b dark:border-gray-700">{{ $annonce->name }}</td>
                    <td class="py-2 px-4 border-b dark:border-gray-700">{{ Str::limit($annonce->description, 50) }}</td>
                    <td class="py-2 px-4 border-b dark:border-gray-700">{{ \Carbon\Carbon::parse($annonce->date)->format('d/m/Y') }}</td>
                    <td class="py-2 px-4 border-b dark:border-gray-700">
                            @if ($annonce->photo)
                                <img src="{{ asset('storage/' . $annonce->photo) }}" alt="Photo" width="100">
                            @else
                                Pas de photo
                            @endif
                        </td>
                        <td class="py-2 px-4 border-b dark:border-gray-700">
                            <button onclick="showAnnonceDetails({{ $annonce->id }})" class="bg-blue-500 text-white px-4 py-2 rounded-lg mr-2">Voir</button>
                            <a href="{{ route('annonces.edit', $annonce) }}" class="bg-green-500 text-white px-4 py-2 rounded-lg mr-2">Modifier</a>
                            <form action="{{ route('annonces.destroy', $annonce) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette annonce ?')">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $annonces->links() }}
    </div>
</div>

<!-- Modal -->
<div id="annonceModal" class="fixed z-10 inset-0 overflow-y-auto hidden">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg w-1/2">
            <h1 class="text-2xl font-bold mb-4 dark:text-white">Détails de l'annonce</h1>
            <div id="annonceDetails">
                <!-- Annonce details will be loaded here -->
            </div>
            <button onclick="closeModal()" class="bg-blue-500 text-white px-4 py-2 rounded-lg mt-4">Fermer</button>
        </div>
    </div>
</div>

<script>
    function showAnnonceDetails(annonceId) {
        fetch(`/annonces/${annonceId}`)
            .then(response => response.json())
            .then(data => {
                document.getElementById('annonceDetails').innerHTML = `
                    <p class="text-lg dark:text-white"><strong>Nom:</strong> ${data.name}</p>
                    <p class="text-lg dark:text-white"><strong>Description:</strong> ${data.description}</p>
                    <p class="text-lg dark:text-white"><strong>Date:</strong> ${new Date(data.date).toLocaleDateString()}</p>
                    ${data.photo ? `<img src="/storage/${data.photo}" alt="Photo" class="mt-4">` : '<p class="text-lg dark:text-white">Pas de photo</p>'}
                `;
                document.getElementById('annonceModal').classList.remove('hidden');
            });
    }

    function closeModal() {
        document.getElementById('annonceModal').classList.add('hidden');
    }
</script>

@endsection
