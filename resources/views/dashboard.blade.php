<x-app-layout>
<script>

    document.addEventListener("DOMContentLoaded", function () {
        const themeToggle = document.querySelector(".theme-toggle");
        const body = document.body;

        // Vérifier si le mode sombre est activé dans localStorage
        if (localStorage.getItem("darkMode") === "enabled") {
            body.classList.add("theme-dark");
        }

        themeToggle.addEventListener("click", () => {
            body.classList.toggle("theme-dark");

            // Sauvegarder l'état du mode sombre
            if (body.classList.contains("theme-dark")) {
                localStorage.setItem("darkMode", "enabled");
            } else {
                localStorage.setItem("darkMode", "disabled");
            }
        });
    });
</script>

</script>
    <div class="flex">
        <!-- Sidebar -->
        <div class="sidebar">
            <h2>Admin Panel</h2>
            <ul>
                <li><a href="{{ route('dashboard') }}" class="active">Dashboard</a></li>
                <li><a href="{{ route('annonces.index') }}">Annonces</a></li>
                <li><a href="{{ route('contacts.index') }}">Messages</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <header>
                <h2>Dashboard</h2>
                <button class="theme-toggle">🌙 Mode</button>
            </header>


@yield('content')
        </div>
    </div>
</x-app-layout>
<style>
    /* Mode Sombre */
.theme-dark {
    background: #1e1e1e;
    color: #f1f1f1;
}

/* Appliquer le mode sombre aux éléments */
.theme-dark .sidebar {
    background: #181818;
}

.theme-dark .sidebar ul li a {
    color: #f1f1f1;
}

.theme-dark .sidebar ul li a.active,
.theme-dark .sidebar ul li a:hover {
    background: #333;
}

.theme-dark .main-content {
    background: #222;
    color: #f1f1f1;
}

.theme-dark header {
    background: #333;
}

.theme-dark .card {
    background: #444;
    color: #f1f1f1;
}

    /* Sidebar */
.sidebar {
    width: 250px;
    background: #2c3e50;
    color: white;
    padding: 20px;
    height: 100vh;
    position: fixed;
}

.sidebar h2 {
    text-align: center;
    margin-bottom: 20px;
}

.sidebar ul {
    list-style: none;
    padding: 0;
}

.sidebar ul li {
    padding: 10px;
    margin: 5px 0;
}

.sidebar ul li a {
    color: white;
    text-decoration: none;
    display: block;
    padding: 10px;
}

.sidebar ul li a.active, .sidebar ul li a:hover {
    background: #34495e;
    border-radius: 5px;
}

/* Main Content */
.main-content {
    margin-left: 260px;
    padding: 20px;
    width: 100%;
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: #ecf0f1;
    padding: 15px;
    border-radius: 5px;
}

.cards {
    display: flex;
    gap: 20px;
    margin-top: 20px;
}

.card {
    background: #3498db;
    color: white;
    padding: 20px;
    border-radius: 5px;
    width: 200px;
    text-align: center;
}

/* Effet 3D pour les Boutons */
.button-container {
    margin-top: 30px;
    display: flex;
    gap: 15px;
}

.btn-3d {
    display: inline-block;
    padding: 12px 20px;
    font-size: 16px;
    font-weight: bold;
    color: white;
    text-decoration: none;
    border-radius: 8px;
    box-shadow: 0 4px #999;
    transition: all 0.3s ease-in-out;
}

.btn-3d:active {
    box-shadow: 0 2px #666;
    transform: translateY(4px);
}

/* Couleurs des boutons */
.blue {
    background: #3498db;
}

.blue:hover {
    background: #2980b9;
}

.green {
    background: #2ecc71;
}

.green:hover {
    background: #27ae60;
}

</style>

