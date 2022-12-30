<?php
require 'src/templates/base.php';
?>

<title>BoatShop - Home</title>

<div class="w-full mt-20">
    <nav class="bg-white shadow-lg">
        <div class="md:flex items-center justify-between px-8 md:px-12">
            <div class="flex justify-between items-center">
                <div class="md:hidden">
                    <button type="button" class="block text-gray-800 hover:text-gray-700 focus:text-gray-700 focus:outline-none">
                        <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                            <path class="hidden" d="M16.24 14.83a1 1 0 0 1-1.41 1.41L12 13.41l-2.83 2.83a1 1 0 0 1-1.41-1.41L10.59 12 7.76 9.17a1 1 0 0 1 1.41-1.41L12 10.59l2.83-2.83a1 1 0 0 1 1.41 1.41L13.41 12l2.83 2.83z"/>
                            <path d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>
    <div class="flex bg-white" style="height:600px;">
        <div class="flex items-center text-center lg:text-left px-8 md:px-12 lg:w-1/2">
            <div>
                <h2 class="text-3xl font-semibold text-gray-800 md:text-4xl">Location de bateaux <span class="text-indigo-600">luxueux</span>!</h2>
                <p class="mt-2 text-sm text-gray-500 md:text-base">Louez dès maintenant des bateaux luxueux pour vos voyages entre amis ou en famille ! Chacun de nos bateaux sont en parfait état et contrôlés régulièrement par nos équipes d'experts.</p>
                <div class="flex justify-center lg:justify-start mt-6">
                    <a class="px-4 py-3 bg-gray-900 text-gray-200 text-xs font-semibold rounded hover:bg-gray-800" href="#">Lever les voiles</a>
                    <a class="mx-4 px-4 py-3 bg-gray-300 text-gray-900 text-xs font-semibold rounded hover:bg-gray-400" href="/products">Nos bateaux</a>
                </div>
            </div>
        </div>
        <div class="hidden lg:block lg:w-1/2" style="clip-path:polygon(10% 0, 100% 0%, 100% 100%, 0 100%)">
            <div class="h-full object-cover" style="background-image: url('../../../assets/troudanslacoque.webp')">
                <div class="h-full bg-black opacity-25"></div>
            </div>
        </div>
    </div>
</div>

<?php require 'src/templates/component/footer.php'?>