
<script setup>
import {
    RectangleGroupIcon,
    AcademicCapIcon,
    IdentificationIcon,
    DocumentTextIcon,
    ChartBarIcon,
    ChevronLeftIcon
} from '@heroicons/vue/24/outline'
import NavLink from "@/Components/NavLink.vue";
import {ref} from "vue";

let stateSidebar = ref(true)
function openCloseSidebar(){
    stateSidebar.value = !stateSidebar.value
}



</script>

<template>
    <div
         class="fixed md:left-0 h-screen lg:block bg-white border-r transition-all duration-500"
         :class="stateSidebar ? ' md:w-1/3 lg:w-[256px] ' : 'md:w-1/3 lg:w-[90px] '" id="main-nav">
        <div class="flex py-[40px]">
            <div class="w-full  flex flex-col px-2 items-center" :class="stateSidebar ? 'pl-5' : '' ">
                <img :class="stateSidebar ? 'w-[120px] h-[120px] ' : 'w-[50px] h-[50px]  ' "
                    src="/assets/images/perfil-defaut.jpg"
                     class="rounded-full border-gray-400 border-[2px] mb-2 transition-all duration-500" alt="">
                <p :class="stateSidebar ? '' : 'opacity-0' " class="text-primary text-xl font-bold">{{ $page.props.auth.user.name }}</p>
                <p :class="stateSidebar ? '' : 'opacity-0' " class="text-gray-400 text-sm">{{ $page.props.auth.user.email }}</p>
                <p :class="stateSidebar ? '' : 'opacity-0' " class="text-blue text-xl font-bold p-6">ADMINISTRADOR</p>
                <p :class="stateSidebar ? 'hidden' : '' " class="text-blue text-xl font-bold p-6">ADM</p>
                <div>
                    <svg class="" :viewBox="stateSidebar? '0 0 71 3' : '0 0 33 3' " :width="stateSidebar ? '71' : '33'"  xmlns="http://www.w3.org/2000/svg" height="3" fill="none">
                        <path :d="stateSidebar ? 'M2 1.5L69.0075 1.5' : 'M2 1.5H31.5'" stroke="#006CB5"  stroke-width="3" stroke-linecap="round"/>
                    </svg>
                </div>
            </div>
            <button :class="stateSidebar ? '' : 'hidden' " class="relative border w-9 h-20 rounded-l-lg bg-primary right-[1.18rem] text-white" @click="openCloseSidebar">
                <ChevronLeftIcon class="h-8 w-8 "/>
            </button>
        </div>
        <div class="mb-4 px-4">
            <NavLink :href="route('dashboard')" :active="route().current('dashboard')">
                <RectangleGroupIcon  class="h-6 w-6 mr-2"/>
                <span class="transition-all duration-500 " :class="stateSidebar ? 'visible' : 'hover:visible hidden' " >Dashboard</span>
            </NavLink>
            <NavLink :href="route('faculdades')" :active="route().current('faculdades')">
                <AcademicCapIcon class="h-6 w-6 mr-2"/>
                <span class="transition-all duration-500" :class="stateSidebar ? 'visible' : 'hidden' " >Faculdades</span>
            </NavLink>
            <NavLink :href="route('avaliadores')" :active="route().current('avaliadores')">
                <IdentificationIcon class="h-6 w-6 mr-2"/>
                <span class="transition-all duration-500" :class="stateSidebar ? '' : 'hidden' " >Avaliadores</span>
            </NavLink>
            <NavLink :href="route('avaliacoes')" :active="route().current('avaliacoes')">
                <DocumentTextIcon class="h-6 w-6 mr-2"/>
                <span class="transition-all duration-500" :class="stateSidebar ? '' : 'hidden' " >Avaliações</span>
            </NavLink>
            <NavLink :href="route('resultados')" :active="route().current('resultados')">
                <ChartBarIcon class="h-6 w-6 mr-2"/>
                <span class="transition-all duration-500" :class="stateSidebar ? '' : 'hidden' " >Resultados</span>
            </NavLink>
        </div>
    </div>
</template>

