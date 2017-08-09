<template>
    <nav class="navbar">

            <div @click='menuClick' class="navbar-burger" v-bind:class='{"is-active" : isActive}' data-target="navMenuExample">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <div id="navMenuExample" class="navbar-menu" v-bind:class='{"is-active" : isActive}'>
                <div class="navbar-end">
                    <a class="navbar-item " href="/">
                       Home
                    </a>
                    <a class="navbar-item " href="#">
                        About Us
                    </a>
                    <a class="navbar-item " href="#">
                        Contact
                    </a>
                    <a class="navbar-item " href="#">
                        User
                    </a>
                </div>
            </div>
        
    </nav>
</template>

<script>
    export default {
        data() {
            return {
                isActive: false
            }
        },
        mounted() {
            
        },
        methods: {
            menuClick(){
                this.isActive = !this.isActive;
            }
        }
    }
</script>
