<template>

    <div class="chatBtn"></div>

</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style>

    .chatBtn{
        position:fixed;

        background-color: green;
        border-radius: 100%;
        height: 60px;
        width: 60px;

    }

</style>