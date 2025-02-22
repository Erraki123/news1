
    <div class="container">
        <h1>Modifier l'annonce</h1>

        <form action="{{ route('annonces.update', $annonce) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $annonce->name }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="form-control" required>{{ $annonce->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="photo">Photo</label>
                <input type="file" name="photo" id="photo" class="form-control">
                @if ($annonce->photo)
                    <img src="{{ Storage::url($annonce->photo) }}" alt="Photo actuelle" class="img-fluid mt-2" width="100">
                @endif
            </div>

            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" name="date" id="date" class="form-control" value="{{ $annonce->date }}" required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Mettre à jour</button>
        </form>
    </div>

<style>
    /* Conteneur principal */
.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 30px;
    background-color: #f8f9fa;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

/* Titre principal */
h1 {
    text-align: center;
    font-size: 2rem;
    color: #333;
    margin-bottom: 20px;
    text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1);
}

/* Formulaire */
form {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Groupes de champs */
.form-group {
    margin-bottom: 20px;
}

/* Labels */
label {
    display: block;
    font-size: 1rem;
    color: #495057;
    margin-bottom: 5px;
}

/* Champs de saisie */
input[type="text"], input[type="date"], textarea, input[type="file"] {
    width: 100%;
    padding: 10px;
    font-size: 1rem;
    border: 1px solid #ced4da;
    border-radius: 5px;
    background-color: #f1f3f5;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

input[type="text"]:focus, input[type="date"]:focus, textarea:focus, input[type="file"]:focus {
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    transform: translateY(-3px);
}

/* Texte des zones de texte */
textarea {
    height: 150px;
    resize: vertical;
}

/* Bouton de soumission */
.btn {
    display: inline-block;
    padding: 10px 20px;
    font-size: 1rem;
    font-weight: bold;
    color: white;
    background-color: #007bff;
    border-radius: 5px;
    text-align: center;
    text-decoration: none;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, background-color 0.3s ease;
}

.btn:hover {
    background-color: #0056b3;
    transform: translateY(-3px);
}

/* Image actuelle */
.img-fluid {
    display: block;
    max-width: 100%;
    height: auto;
    margin-top: 10px;
}

/* Ajouter un effet 3D sur le bouton et les champs du formulaire */
input[type="text"], input[type="date"], textarea, input[type="file"], .btn {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease-in-out;
}

input[type="text"]:focus, input[type="date"]:focus, textarea:focus, input[type="file"]:focus {
    transform: translateY(-4px);
}

input[type="text"], input[type="date"], textarea, input[type="file"] {
    transform: translateY(0);
}


</style>
