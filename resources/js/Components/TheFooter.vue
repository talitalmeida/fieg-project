<script setup>

</script>

<template>
    <footer class="flex justify-center">
        <div class="flex container justify-evenly justify-items-center">
        <div>
            <h3 class="font-bold text-xl">Sobre nós</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae lorem ut arcu malesuada tempus quis non lacus. Morbi non pellentesque risus, ac mollis mauris. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
        </div>
        <div>
            <h3 class="font-bold text-xl">Mapa do site</h3>
            <ol>
                <li class="">
                    <a href="#">Contato</a>
                </li>
                <li>
                    <a href="#">Sobre</a>
                </li>
            </ol>
        </div>
        <div>
            <h3 class="font-bold text-xl">Siga-nos</h3>
            <ol>
                <li>
                    <a href="#">Instaram</a>
                </li>
                <li>
                    <a href="#">Linkedin</a>
                </li>
                <li>
                    <a href="#">Youtube</a>
                </li>
            </ol>
        </div>
        <div>
            <img src="assets/images/logo-fieg.png" alt="">
        </div>
        </div>
    </footer>
</template>

<style scoped>
footer li{
    padding: 5px;
    color: var(--colo-text);
    font-family: Montserrat,serif;
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
    text-decoration-line: underline;
}
footer{
    margin-top: 50px;
    background-color: var(--colo-bg-card);
    padding-bottom: 20px;
    padding-top: 50px;
}



footer p{
    width: 336px;
    color: #455A64;
    text-align: justify;
    font-family: Montserrat,serif;
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
}
</style>
