<style>

.pie{
    color: white;
    text-align: center;
}

.redes{
    padding: 10px 20px;
    margin-top: 20px;
}

</style>
<template>
    <div class="pie">
        <a href="" target="_blank">
            <img class="redes" src="https://bckt-letsnews.s3-us-west-2.amazonaws.com/correos/bttn-fb-gray.png" alt="">
        </a>
        <a href="" target="_blank">
            <img class="redes" src="https://bckt-letsnews.s3-us-west-2.amazonaws.com/correos/bttn-ig-gray.png" alt="">
        </a>
        <a href="" target="_blank">
            <img class="redes" src="https://bckt-letsnews.s3-us-west-2.amazonaws.com/correos/bttn-tw-gray.png" alt="">
        </a>
        <p>Proyecto hecho por Josè Daniel Contreras Medina - Capacitación</p>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
