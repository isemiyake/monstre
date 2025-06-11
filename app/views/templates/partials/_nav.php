<nav
    class="container mx-auto px-4 py-4 mb-16 flex justify-between items-center">
    <div class="flex items-center">
        <a href="?">
            <img
                src="../doc/template/images/Logo_RetroMonsters.png"
                alt="RetroMonsters Logo"
                class="h-32 mr-3 absolute"
                style="top: -28px" />
        </a>
        <a href="#" class="text-white font-bold text-xl hidden">RetroMonsters</a>
    </div>

    <button @click="open = !open" class="text-white md:hidden">
        <i class="fa fa-bars"></i>
    </button>

    <div class="hidden md:flex items-center">
        <a
            class="text-gray-300 hover:text-white px-3 py-2 hover:bg-gray-700"
            href="?monstre">Monstres</a>
        <a
            class="text-gray-300 hover:text-white px-3 py-2 hover:bg-gray-700 active"
            href="?add">Ajouter un monstre</a>
    </div>
</nav>