
<script setup>
import {
    RectangleGroupIcon,
    AcademicCapIcon,
    IdentificationIcon,
    DocumentTextIcon,
    ChartBarIcon
} from '@heroicons/vue/24/outline'

defineProps({
    dataStateSidebar:{
        type:Boolean
    },
})

</script>

<template>
    <!-- give the sidebar z-50 class so its higher than the navbar if you want to see the logo -->
    <!-- you will need to add a little "X" button next to the logo in order to close it though -->
    <div class="w-1/2 md:w-1/3 lg:w-64 fixed md:left-0 h-screen lg:block bg-white border-r z-30" :class="dataStateSidebar ? '' : 'hidden'" id="main-nav">

        <div class="w-full  flex flex-col px-2 items-center justify-center py-[25px]">
            <button></button>
            <img src="/assets/images/perfil-defaut.jpg" class="w-[120px] h-[120px] rounded-full border-gray-400 border-[2px] mb-2" alt="">
            <p class="text-primary text-xl font-bold">{{ $page.props.auth.user.name }}</p>
            <p class="text-gray-400 text-sm">{{ $page.props.auth.user.email }}</p>
            <p class="text-blue text-xl font-bold p-6">ADMINISTRADOR</p>
            <svg xmlns="http://www.w3.org/2000/svg" width="71" height="3" viewBox="0 0 71 3" fill="none">
                <path d="M2 1.5L69.0075 1.5" stroke="#006CB5" stroke-width="3" stroke-linecap="round"/>
            </svg>
        </div>

        <div class="mb-4 px-4">
            <div class="w-full flex items-center text-white h-10 pl-4 bg-primary hover:bg-blue-600 rounded-xl cursor-pointer">
                <RectangleGroupIcon class="h-6 w-6 mr-2"/>
                <span >Dashboard</span>
            </div>
            <div class="w-full flex items-center text-primary h-10 pl-4 hover:bg-gray-200 rounded-xl cursor-pointer">
                <AcademicCapIcon class="h-6 w-6 mr-2"/>
                <span>Faculdades</span>
            </div>
            <div class="w-full flex items-center text-primary h-10 pl-4 hover:bg-gray-200 rounded-xl cursor-pointer">
                <IdentificationIcon class="h-6 w-6 mr-2"/>
                <span>Avaliadores</span>
            </div>
            <div class="w-full flex items-center text-primary h-10 pl-4 hover:bg-gray-200 rounded-xl cursor-pointer">
                <DocumentTextIcon class="h-6 w-6 mr-2"/>
                <span >Avaliações</span>
            </div>
            <div class="w-full flex items-center text-primary h-10 pl-4 hover:bg-gray-200 rounded-xl cursor-pointer">
                <ChartBarIcon class="h-6 w-6 mr-2"/>
                <span >Resultados</span>
            </div>
        </div>
    </div>
</template>

