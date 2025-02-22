@extends("dashboard")
@section('content')


    <div class="container">
        <h1>Liste des Annonces</h1>
        <a href="{{ route('annonces.create') }}" class="btn btn-primary">Ajouter une annonce</a>

        @if (session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($annonces as $annonce)
                    <tr>
                        <td>{{ $annonce->name }}</td>
                        <td>{{ $annonce->description }}</td>
                        <td>{{ $annonce->date }}</td>
                        <td>
                            <a href="{{ route('annonces.show', $annonce) }}" class="btn btn-info btn-sm">Voir</a>
                            <a href="{{ route('annonces.edit', $annonce) }}" class="btn btn-warning btn-sm">Modifier</a>
                            <form action="{{ route('annonces.destroy', $annonce) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-center mt-4">
        {{ $annonces->links() }}
    </div>
<style>
    /* تنسيق الحاوية الرئيسية */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

/* تنسيق العنوان */
h1 {
    text-align: center;
    font-size: 2rem;
    color: #333;
    margin-bottom: 30px;
    text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1);
}

/* تنسيق الأزرار */
.btn {
    display: inline-block;
    padding: 10px 20px;
    font-size: 1rem;
    font-weight: bold;
    text-decoration: none;
    border-radius: 5px;
    text-align: center;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, background-color 0.3s ease;
}

/* زر "Ajouter une annonce" */
.btn-primary {
    background-color: #007bff;
    color: white;
}

.btn-primary:hover {
    background-color: #0056b3;
    transform: translateY(-3px);
}

/* تنسيق زر "Voir" */
.btn-info {
    background-color: #17a2b8;
    color: white;
}

.btn-info:hover {
    background-color: #138496;
    transform: translateY(-3px);
}

/* تنسيق زر "Modifier" */
.btn-warning {
    background-color: #ffc107;
    color: black;
}

.btn-warning:hover {
    background-color: #e0a800;
    transform: translateY(-3px);
}

/* تنسيق زر "Supprimer" */
.btn-danger {
    background-color: #dc3545;
    color: white;
}

.btn-danger:hover {
    background-color: #c82333;
    transform: translateY(-3px);
}

/* تنسيق رسائل النجاح */
.alert-success {
    background-color: #28a745;
    color: white;
    padding: 10px;
    border-radius: 5px;
    text-align: center;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* تنسيق الجدول */
.table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 30px;
}

.table th, .table td {
    padding: 12px;
    text-align: center;
    border: 1px solid #ddd;
}

.table th {
    background-color: #f8f9fa;
    color: #495057;
}

.table tbody tr {
    background-color: white;
    transition: background-color 0.3s ease;
}

.table tbody tr:hover {
    background-color: #f1f1f1;
}

/* تنسيق الحواف */
.table td a {
    margin: 0 5px;
}

/* إضافة تأثير 3D على الجدول */
.table th, .table td {
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transform: translateZ(0);
}

.table tbody tr:hover {
    transform: scale(1.02);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
}

</style>
@endsection
