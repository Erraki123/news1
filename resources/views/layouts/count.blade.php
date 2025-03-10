<div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-4">
    <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow">
        <h3 class="text-lg font-semibold dark:text-white">Annonces</h3>
        <p class="text-2xl font-bold dark:text-white">{{ $annoncesCount ?? 'N/A' }}</p>
    </div>
    <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow">
        <h3 class="text-lg font-semibold dark:text-white">Messages</h3>
        <p class="text-2xl font-bold dark:text-white">{{ $contactsCount ?? 'N/A' }}</p>
    </div>
    <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow">
        <h3 class="text-lg font-semibold dark:text-white">Users</h3>
        <p class="text-2xl font-bold dark:text-white">{{ $usersCount ?? 'N/A' }}</p>
    </div>
</div>

    
