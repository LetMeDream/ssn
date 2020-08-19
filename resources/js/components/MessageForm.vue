<template>

    <div class='el'>

        <!-- Meta data, for the cors on VUE  -->
        <meta name="csrf-token" :content="content">
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
                    <form class="formulario" v-on:submit.prevent='submitIt'>
                                <input autocomplete="off" type="text" class="form-control item" placeholder='* Nombre' v-model='nombre' v-on:keydown='activate'>
                                <input autocomplete="off" type="email" class="form-control item" placeholder="* Correo" v-model='correo' v-on:keydown='activate'>
                                <textarea autocomplete="off" name="" id="" cols="30" rows="10" class="form-control item" placeholder='Deje su mensaje (opcional)' v-model='mensaje'>

                                </textarea>
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
                mensaje: '',
                myJson:{
                    name: this.nombre,
                    email: this.correo,
                    message: this.mensaje
                },
                /* Izitoast */
                notificationSystem: {
                    options: {
                            show: {
                                theme: "dark",
                                icon: "icon-person",
                                position: "topCenter",
                                progressBarColor: "rgb(0, 255, 184)",
                                buttons: [
                                [
                                    "<button>Ok</button>",
                                    function(instance, toast) {
                                    alert("Hello world!");
                                    },
                                    true
                                ],
                                [
                                    "<button>Close</button>",
                                    function(instance, toast) {
                                    instance.hide(
                                        {
                                        transitionOut: "fadeOutUp",
                                        onClosing: function(instance, toast, closedBy) {
                                            console.info("closedBy: " + closedBy);
                                        }
                                        },
                                        toast,
                                        "buttonName"
                                    );
                                    }
                                ]
                                ],
                                onOpening: function(instance, toast) {
                                console.info("callback abriu!");
                                },
                                onClosing: function(instance, toast, closedBy) {
                                console.info("closedBy: " + closedBy);
                                }
                            },
                            ballon: {
                                balloon: true,
                                position: "center"
                            },
                            info: {
                                position: "bottomLeft"
                            },
                            success: {
                                position: "bottomCenter"
                            },
                            warning: {
                                position: "topLeft"
                            },
                            error: {
                                position: "topRight"
                            },
                            question: {
                                timeout: 20000,
                                close: false,
                                overlay: true,
                                toastOnce: true,
                                id: "question",
                                zindex: 999,
                                position: "center",
                                buttons: [
                                [
                                    "<button><b>YES</b></button>",
                                    function(instance, toast) {
                                    instance.hide({ transitionOut: "fadeOut" }, toast, "button");
                                    },
                                    true
                                ],
                                [
                                    "<button>NO</button>",
                                    function(instance, toast) {
                                    instance.hide({ transitionOut: "fadeOut" }, toast, "button");
                                    }
                                ]
                                ],
                                onClosing: function(instance, toast, closedBy) {
                                console.info("Closing | closedBy: " + closedBy);
                                },
                                onClosed: function(instance, toast, closedBy) {
                                console.info("Closed | closedBy: " + closedBy);
                                }
                            }
                    }
                }
            }
        },
        props:['content', 'url'],
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
                /* Closing box */
                this.opened = !this.opened;
                /* Creating the json to be sent to Laravel */
                this.myJson.name = this.nombre;
                this.nombre = '';
                this.myJson.email = this.correo;
                this.correo = '';
                this.myJson.message = this.mensaje;
                this.mensaje = '';
                /* Switching to 'open' button */
                let button = document.getElementById('popBtn2');
                button.style.zIndex = "0";

                /* Connecting with Axios */
                axios.post(this.url,this.myJson)
                .then(res  => {
                    console.log(res);
                    this.$toast.success('¡Mensaje enviado!', 'Éxito', this.notificationSystem.options.success);
                })
                .catch(err => {
                    this.$toast.error('Algo salió mal', 'Error', this.notificationSystem.options.success);
                });



            },

            activate: function(){
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
        box-shadow: 18px 21px 5px 0px rgba(0,0,0,0.75);
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