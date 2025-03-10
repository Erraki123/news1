@extends("dashboard")
@section('content')

@if(session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
@endif

<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Contacts</h1>

    <!-- Search Filters -->
    <form method="GET" action="{{ route('contacts.index') }}" class="mb-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <input type="text" name="name" class="form-control" placeholder="Rechercher par nom" value="{{ request('name') }}">
            <input type="text" name="email" class="form-control" placeholder="Rechercher par email" value="{{ request('email') }}">
            <input type="date" name="date" class="form-control" placeholder="Rechercher par date" value="{{ request('date') }}">
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
            <select name="status" class="form-control">
                <option value="">Tous les messages</option>
                <option value="new" {{ request('status') == 'new' ? 'selected' : '' }}>Nouveaux messages</option>
                <option value="old" {{ request('status') == 'old' ? 'selected' : '' }}>Anciens messages</option>
            </select>
        </div>
        <div class="text-center mt-4">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Rechercher</button>
        </div>
    </form>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white dark:bg-gray-800">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b dark:border-gray-700">الاسم</th>
                    <th class="py-2 px-4 border-b dark:border-gray-700">البريد الإلكتروني</th>
                    <th class="py-2 px-4 border-b dark:border-gray-700">الرسالة</th>
                    <th class="py-2 px-4 border-b dark:border-gray-700">الإجراءات</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td class="py-2 px-4 border-b dark:border-gray-700">{{ $contact->name }}</td>
                        <td class="py-2 px-4 border-b dark:border-gray-700">{{ $contact->email }}</td>
                        <td class="py-2 px-4 border-b dark:border-gray-700">{{ Str::limit($contact->message, 50) }}</td>
                        <td class="py-2 px-4 border-b dark:border-gray-700">
                            <button onclick="showContactDetails({{ $contact->id }})" class="bg-blue-500 text-white px-4 py-2 rounded-lg mr-2">عرض</button>
                            <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg" onclick="return confirm('هل أنت متأكد من الحذف؟')">حذف</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $contacts->links() }}
    </div>
</div>

<!-- Modal -->
<div id="contactModal" class="fixed z-10 inset-0 overflow-y-auto hidden">
    <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg w-1/2">
            <h1 class="text-2xl font-bold mb-4 dark:text-white">تفاصيل الرسالة</h1>
            <div id="contactDetails">
                <!-- Contact details will be loaded here -->
            </div>
            <button onclick="closeModal()" class="bg-blue-500 text-white px-4 py-2 rounded-lg mt-4">إغلاق</button>
        </div>
    </div>
</div>

<script>
    function showContactDetails(contactId) {
        fetch(`/contacts/${contactId}`)
            .then(response => response.json())
            .then(data => {
                document.getElementById('contactDetails').innerHTML = `
                    <p class="text-lg dark:text-white"><strong>الاسم:</strong> ${data.name}</p>
                    <p class="text-lg dark:text-white"><strong>البريد الإلكتروني:</strong> ${data.email}</p>
                    <p class="text-lg dark:text-white"><strong>الرسالة:</strong> ${data.message}</p>
                `;
                document.getElementById('contactModal').classList.remove('hidden');
            });
    }

    function closeModal() {
        document.getElementById('contactModal').classList.add('hidden');
    }
</script>

@endsection

