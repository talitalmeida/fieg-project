<script setup>
import {ArrowRightOnRectangleIcon} from '@heroicons/vue/24/outline'
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import {Link} from "@inertiajs/vue3";


</script>
<template>
    <div class="sticky top-0 z-40">
        <div class="w-full h-20 px-6 bg-white border-b flex items-center justify-between shadow shadow-blue-100">

            <!-- left navbar -->
            <div class="flex ">
                <div class="relative text-gray-600" >
                    <ApplicationLogo class=""/>
                </div>

                <!-- mobile hamburger -->
<!--                <div class="lg:hidden flex items-center ml-4  ">-->
<!--                    <button class="hover:text-blue-500 hover:border-white focus:outline-none navbar-burger" @click="openCloseSidebar">-->
<!--                        <svg class="h-5 w-5" v-bind:style="{ fill: 'black' }" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>-->
<!--                    </button>-->
<!--                </div>-->

            </div>



            <!-- right navbar -->
            <div class="flex items-center relative">
                <ul :class="showMenu ? 'flex' : 'hidden'" class="flex-col mt-8 space-y-4 md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0 mr-20">
                    <li class="menu-link  hover:text-blue-400">
                        <a href="/">Início</a>
                    </li>
                    <li class="menu-link   hover:text-blue-400">
                        <a href="#">Contato</a>
                    </li>
                    <li class="menu-link  hover:text-blue-400">
                        <a href="#">Sobre</a>
                    </li>
                    <li>
                        <Link :href="route('logout')" method="post" class="flex">
                            Sair
                            <ArrowRightOnRectangleIcon class="h-6 w-6"/>
                        </Link>
                    </li>
                </ul>
            </div>

        </div>

        <!-- dropdown menu -->
        <div class="absolute bg-gray-100 border border-t-0 shadow-xl text-gray-700 rounded-b-lg w-48 bottom-10 right-0 mr-6" :class="dropDownOpen ? '' : 'hidden'">
            <a href="#" class="block px-4 py-2 hover:bg-gray-200" >Account</a>
            <a href="#" class="block px-4 py-2 hover:bg-gray-200">Settings</a>
            <a href="#" class="block px-4 py-2 hover:bg-gray-200">Logout</a>
        </div>
        <!-- dropdown menu end -->
    </div>
</template>


