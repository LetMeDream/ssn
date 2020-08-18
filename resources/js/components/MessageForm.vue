<template>


    <div class='el'>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

        <transition name='opened'>

            <div class="formWrapper" v-if='opened'>

                <div class="head">
                    <div class="status">Desconectado</div>
                    <div class="msg text-light">
                        Rellene el formulario a continuación y le contestaremos lo antes posible.
                    </div>
                </div>
                <div class="body">
                    <form  class="formulario" v-on:submit.prevent='submitIt'>
                                <input autocomplete="off" type="text" class="form-control item" placeholder='* Nombre' v-model='nombre' v-on:keydown='activate'>
                                <input autocomplete="off" type="email" class="form-control item" placeholder="* Correo" v-model='correo' v-on:keydown='activate'>
                                <textarea autocomplete="off" name="" id="" cols="30" rows="10" class="form-control item" placeholder='Deje su mensaje (opcional)' v-model='mensaje'></textarea>
                                <button type="submit" disabled id='submitBtn' class="newBtn item form-control">Enviar</button>
                    </form>
                </div>

            </div>

        </transition>


        <div class="chatBtn" id='popBtn' v-on:click='open'></div>

        <div class="chatBtnClose" id='popBtn2' v-on:click='open' ></div>

    </div>

</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.');

        },
        data: function(){
            return {
                opened: false,
                active: false,
                nombre: '',
                correo: '',
                mensaje: ''
            }
        }
        ,
        computed:{
            properName: function(){
                return this.nombre.charAt(0).toUpperCase() + this.nombre.slice(1);
            },
            lenName: function(){
                return this.nombre.length;
            },
            lenMail: function(){
                return this.correo.length;
            }
        },

        methods: {

            open: function(){
                let button = document.getElementById('popBtn2');

                /* Change it's background image to reflex it's opened */

                if (!this.opened){
                    button.style.zIndex = "40";

                } else{
                    button.style.zIndex = "0";
                }

                this.opened = !this.opened;


            },

            submitIt: function(){
                alert('It doesn work yet, ' + this.properName);

                this.opened = !this.opened;
                this.nombre = '';
                this.correo = '';
                this.mensaje = '';
                let button = document.getElementById('popBtn2');
                button.style.zIndex = "0";
            },

            activate: function(){

                console.log(this.lenName);

                if(this.lenName >= 2 && this.lenMail >= 2){
                    document.getElementById('submitBtn').disabled = false;
                } else{
                    document.getElementById('submitBtn').disabled = true;
                }

            }

        }
    }
</script>

<style>

    .el{
        z-index:100;
    }
    /* Two buttons, because of problems getting img's urls right back from Laravel */
    .chatBtn, .chatBtnClose{
        position:fixed;
        bottom: 20px;
        right: 20px;
        border-radius: 100%;
        height: 60px;
        width: 60px;
        cursor: pointer;
        background-position: center;
        background-repeat: no-repeat;
        background-color: #FC57B1;
        filter: invert(100%);
    }

    .chatBtn{
        background-image: url('../../../public/css/img/chat.png');
        background-size:50% 50%;

        z-index: 10;
    }

    .chatBtnClose{
        background-image: url('../../../public/css/img/close2.png');
        background-size:40% 40%;

        z-index: 0;
    }

    /* Now, the form itself */
    .formWrapper{

        position:fixed;
        bottom: 90px;
        right: 10px;

        z-index: 100;
        height: 440px;
        width:340px;
        max-width:90%;
        border-radius: 7.5px;
        border: .01px solid rgba(128, 128, 128,.4);

        /* Lets try to set it up with grids */

        display: grid;

        grid-template-columns: 1fr;
        grid-template-rows: 122px auto;
    }
    .head{
        /* background-color: #FC57B1; */
        background-color: #03A84E;
        font-family: 'Roboto', sans-serif;
        padding: 0 10px;
        border-radius: 6px 6px 0px 0px;
    }
    .head .status{
        color:white;
        margin-top: 10px;
    }
    .head .msg{
        color:white;
        width:90%;
        text-align: center;
        margin-left:5%;
        margin-top:34px;
        font-size:13px;
        font-weight: 100;
    }


    .body{
        /* border: 1px solid blue; */
        background-color: white;
        border-radius: 0 0 7px 7px;

        display:flex;
        justify-content: center;
        align-items: center;
    }
    .body .formulario{
        width:90%;
        height:80%;
        border: 1px solid rgba(0, 0, 0,.1);
        border-radius: 1px;
    }
    .formulario{

        display:flex;
        flex-direction: column;

        justify-content: space-around;
        align-items: center;

    }
    .formulario .item{
        width:80%;
    }
    textarea.item{
        height: 100px;
    }

    /* Styling button */
    .newBtn{
        /* create a small space when buttons wrap on 2 lines */
        margin: 2px 0;

        /* invisible border (will be colored on hover/focus) */
        border: solid 1px transparent;
        border-radius: 3px;

        /* size comes from text & padding (no width/height) */
        padding: 0.5em 1em;

        /* make sure colors have enough contrast! */
        color: #ffffff;
        background-color: #03A84E;

        transition: .6s;
    }
    .newBtn:not(:disabled):hover{
        color:#03A84E;
        border-color: currentColor;
        background-color: white;
    }
    .newBtn:active {
        transform: translateY(1px);
        filter: saturate(150%);
    }


    .opened-enter-active, .opened-leave-active {
    transition: opacity .5s;
    }
    .opened-enter, .opened-leave-to /* .fade-leave-active below version 2.1.8 */ {
    opacity: 0;
    }


</style>