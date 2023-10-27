<script setup>
import NavBar from "@/Components/NavBar.vue";
import {Head} from "@inertiajs/vue3";
import TheFooter from "@/Components/TheFooter.vue";

defineProps({
    showMenu:{
        type:Boolean
    }
})
</script>

<template>
    <Head title="Homepage" />
    <nav-bar></nav-bar>

    <div class="w-full flex flex-col ">
        <div class="flex px-12 bg-content w-full justify-around md:space-x-10 space-x-8">
            <div class=" flex flex-col justify-center pl-20">
                <h1 class="title-1">Inovação e <br><span class="title-2">Tecnologia</span></h1>
                <p class="sub-title-1">Escala de maturidade do nível de inovação em cursos de graduação</p>
                <button class="btn btn-blue btn-size">Mais informações</button>
            </div>
            <div class="">
                <img src="assets/images/image-home.svg">
            </div>
        </div>

        <div class="flex px-12 w-full justify-center space-l ">
            <div class="pl-12">
                <img src="assets/images/charts.svg">
            </div>
            <div class=" flex flex-col justify-center  ">
                <p class="p-content">Acompanhar o Nível de Inovação dos Cursos de Graduação Tecnológica</p>
                <p class="sub-title-1">Gráficos de análises de resultados de comparações</p>
            </div>
        </div>
        <div class="flex flex-col px-12 w-full justify-center items-center space-xxl">
            <h2 class="title-3 font-bold">O que é a escala de maturidade?</h2>
            <p class="sub-title-2 space-s">É um instrumento usado para avaliar o grau de evolução de um curso de graduação tecnológica, na perspectiva da inovação educacional.</p>
        </div>
        <div class="px-12 w-full justify-center items-center bg-card ">
            <div class="flex flex-col gap-20 card-box">
                <div class="flex justify-center md:space-x-10  w-full">
                    <div class="card">
                        <div class="flex items-center">
                            <img src="assets/images/icon-card-1.svg">
                            <a href="#">
                                <h5 class="mb-2 card-title tracking-tight  dark:text-white">Por que?</h5>
                            </a>
                        </div>
                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Propor instrumentos para melhoria dos cursos, no que tange a inovação educacional. Isto considera desde o ambiente de aprendizagem até a coordenação dos cursos, potencialmente chegando até o nível de direção da faculdade.</p>
                    </div>

                    <div class="card">
                        <div class="flex  items-center">
                            <img src="assets/images/icon-card-1.svg">
                            <a href="#">
                                <h5 class="mb-2 card-title tracking-tight  dark:text-white">Como?</h5>
                            </a>
                        </div>
                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Propor instrumentos para melhoria dos cursos, no que tange a inovação educacional. Isto considera desde o ambiente de aprendizagem até a coordenação dos cursos, potencialmente chegando até o nível de direção da faculdade.</p>
                    </div>
                </div>
                <div class="max-w-full flex justify-center">
                    <div class="card">
                        <div class="flex  items-center">
                            <img src="assets/images/icon-card-1.svg" alt="">
                            <a href="#">
                                <h5 class="mb-2 card-title tracking-tight  dark:text-white">Quem aplica?</h5>
                            </a>
                        </div>
                        <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">Propor instrumentos para melhoria dos cursos, no que tange a inovação educacional. Isto considera desde o ambiente de aprendizagem até a coordenação dos cursos, potencialmente chegando até o nível de direção da faculdade.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col px-12 w-full justify-center items-center space-s">
            <h2 class="title-3 font-bold space-l">Modelo de Maturidade da ACATECH</h2>
            <img src="assets/images/scale-graph.svg">
        </div>
        <TheFooter/>
    </div>

</template>
<style scoped>
.bg-card{
    @aplly w-full;
    height: 650px;
    flex-shrink: 0;
    background-color: var(--colo-bg-card);
}
.space-xxl{
    padding-bottom: 120px
}
.card-box{
    position: relative;
    top:-100px;

}

.card {
    @apply max-w-xl p-6 bg-white shadow dark:bg-gray-800 dark:border-gray-700;
    border-top-color: var(--color-primary);
    border-top-width: 8px;
    border-bottom-right-radius: 30px;
    border-bottom-left-radius: 30px;
    filter: drop-shadow(-20px -20px 10px rgba(0, 0, 0, 0.03)) drop-shadow(20px 20px 10px rgba(0, 0, 0, 0.03));
    backdrop-filter: blur(2px);

}
.card-title{
    color: #455A64;
    text-align: center;
    font-family: Montserrat,serif;
    font-size: 38px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
}

.space-s{
    padding-top: 30px;
    padding-bottom: 30px;
}
.space-l{
    padding-top: 100px;
    padding-bottom: 100px;
}
.bg-content{
    background-color: var(--color-bg);
    border-bottom-right-radius: 474px;
}
.p-content{
    color: #47466D;
    font-family: Montserrat,serif;
    font-size: 55px;
    font-style: normal;
    font-weight: bold;
    line-height: normal;
    width: 750px;
    height: 262px;
    flex-shrink: 0;
}
.title-3{
    color: #47466D;
    text-align: center;
    font-family: Montserrat,serif;
    font-size: 64px;
    line-height: normal;
}

.title-1{
    color: #455A64;
    font-family: Montserrat,serif;
    font-size: 96px;
    font-style: normal;
    font-weight: bold;
    line-height: 100px;
    padding-bottom: 100px;
}
.title-2{
    color: #006CB5;
    font-family: Montserrat,serif;
    font-size: 96px;
    font-style: normal;
    font-weight: bold;
    line-height: 100px;
}
.sub-title-1{
    width: 538px;
    color: #47466D;
    font-family: Montserrat,serif;
    font-size: 32px;
    font-style: normal;
    font-weight: 550;
    line-height: normal;
    padding-bottom: 90px;
}
.sub-title-2{
    width: 780px;
    color: #000;
    text-align: center;
    font-family: Montserrat,serif;
    font-size: 24px;
    font-style: normal;
    font-weight: 500;
    line-height: normal;
}
.btn-size{
    width: 372px;
    height: 92px;
    font-size: 32px;
    flex-shrink: 0;
}
</style>
