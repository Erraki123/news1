<div class="container">
        <h1>{{ $annonce->name }}</h1>
        <p><strong>Description:</strong> {{ $annonce->description }}</p>
        <p><strong>Date:</strong> {{ $annonce->date }}</p>

        @if ($annonce->photo)
            <img src="{{ Storage::url($annonce->photo) }}" alt="Photo de l'annonce" class="img-fluid">
        @endif

        <a href="{{ route('annonces.index') }}" class="btn btn-secondary mt-3">Retour à la liste</a>
    </div>
