@extends('dashboard')
@section('content')


    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table border="1">
        <tr>
            <th>الاسم</th>
            <th>البريد الإلكتروني</th>
            <th>الرسالة</th>
            <th>الإجراءات</th>
        </tr>
        @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ Str::limit($contact->message, 50) }}</td>
                <td>
                    <a href="{{ route('contacts.show', $contact->id) }}">عرض</a>
                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('هل أنت متأكد من الحذف؟')">حذف</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $contacts->links() }}
<style>
    /* Conteneur principal */
.container {
    max-width: 1000px;
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

/* Message de succès */
p {
    text-align: center;
    font-size: 1rem;
    color: green;
    font-weight: bold;
    margin-bottom: 20px;
}

/* Tableau */
table {
    width: 100%;
    margin-top: 20px;
    border-collapse: collapse;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

/* En-têtes du tableau */
th {
    padding: 15px;
    background-color: #007bff;
    color: white;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 1px;
    box-shadow: 0 3px 5px rgba(0, 0, 0, 0.1);
}

/* Cellules du tableau */
td {
    padding: 12px;
    text-align: center;
    font-size: 1rem;
    border-bottom: 1px solid #ddd;
}

/* Liens dans le tableau */
a {
    display: inline-block;
    padding: 6px 12px;
    background-color: #17a2b8;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: all 0.3s ease;
}

a:hover {
    background-color: #138496;
    transform: translateY(-2px);
}

/* Boutons de suppression */
button[type="submit"] {
    padding: 6px 12px;
    background-color: #dc3545;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: all 0.3s ease;
}

button[type="submit"]:hover {
    background-color: #c82333;
    transform: translateY(-2px);
}

/* Pagination */
.pagination {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

/* Effet 3D pour les éléments */
table, th, td, a, button[type="submit"] {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

table:hover, th:hover, td:hover, a:hover, button[type="submit"]:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
}

</style>
@endsection
