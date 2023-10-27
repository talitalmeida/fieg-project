<script setup>
import {ref} from "vue";

const showMenu = ref(false)
</script>

<template>
    <nav class="nav-bar w-full px-12 py-6 mx-auto md:flex md:justify-between md:items-center">
        <div class="flex items-center justify-between">
            <router-link to="/" class=" text-xl font-bold text-gray-800 md:text-2xl hover:text-blue-400">
                <img src="/assets/images/logo-fieg.svg">
            </router-link>
            <!-- Mobile menu button -->
            <div @click="showMenu = !showMenu" class="flex md:hidden">
                <button type="button" class="text-gray-800 hover:text-gray-400 focus:outline-none focus:text-gray-400">
                    <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                        <path fill-rule="evenodd"
                            d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                        </path>
                    </svg>
                </button>
            </div>
        </div>


        <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
        <ul :class="showMenu ? 'flex' : 'hidden'" class="flex-col mt-8 space-y-4 md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0">
            <li class="menu-link font-bold hover:text-blue-400">
                <a href="#">Início</a>
            </li>
            <li class="menu-link  font-bold hover:text-blue-400">
                <a href="#">Contato</a>
            </li>
            <li class="menu-link font-bold hover:text-blue-400">
                <a href="#">sobre</a>
            </li>
            <li>
                <a href="/login" class="btn btn-blue btn-size">Entrar</a>
            </li>
        </ul>
    </nav>
</template>

<style scoped>
.btn-size{
    padding: 10px 20px;
    width: 210px;
    height: 75px;
    font-size: 32px;
}
.nav-bar{
    background-color: var(--color-bg);
}

.menu-link{
    color: var(--color-primary);
    font-family: Montserrat,serif;
    font-size: 18px;
    line-height: normal;
}
</style>
