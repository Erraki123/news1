    <h1>تفاصيل الرسالة</h1>
    <p><strong>الاسم:</strong> {{ $contact->name }}</p>
    <p><strong>البريد الإلكتروني:</strong> {{ $contact->email }}</p>
    <p><strong>الرسالة:</strong> {{ $contact->message }}</p>
    <a href="{{ route('contacts.index') }}">العودة إلى جميع الرسائل</a>

<style>
 /* Conteneur principal */
.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 30px;
    background-color: #f4f6f9;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

/* Titre principal */
h1 {
    text-align: center;
    font-size: 2rem;
    color: #333;
    margin-bottom: 20px;
    text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1);
}

/* Détails du message */
p {
    font-size: 1rem;
    color: #555;
    line-height: 1.6;
    margin-bottom: 10px;
}

/* Label pour chaque section */
strong {
    color: #333;
    font-weight: bold;
}

/* Lien de retour */
a {
    display: inline-block;
    padding: 8px 15px;
    background-color: #007bff;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    text-align: center;
    margin-top: 20px;
    font-size: 1rem;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

/* Lien de retour au survol */
a:hover {
    background-color: #0056b3;
    transform: translateY(-2px);
}


</style>
