<template>
<div>
    <div class="columns">
        <div class="column is-half is-offset-one-quarter">
            <div class="box">
                <article class="media">
                    <div class="media-left">
                    <figure class="image is-64x64">
                        <img src="http://lorempixel.com/128/128/" alt="Image">
                    </figure>
                    </div>
                    <div class="media-content">
                    <div class="content">
                        <p>
                        <strong>{{ UserDetails.name }}</strong> <small>{{ UserDetails.email }}</small> 
                        <br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
                        </p>
                    </div>
                    <nav class="level is-mobile">
                        <div class="level-left">
                        <a class="level-item">
                            <span class="icon is-small"><i class="fa fa-reply"></i></span>
                        </a>
                        <a class="level-item">
                            <span class="icon is-small"><i class="fa fa-retweet"></i></span>
                        </a>
                        <a class="level-item">
                            <span class="icon is-small"><i class="fa fa-heart"></i></span>
                        </a>
                        </div>
                    </nav>
                    </div>
                </article>
            </div>
        </div>

    </div>
    <div class="columns">
        <div class="column is-half is-offset-one-quarter">
            <a class="button" @click='editModalToggle'>Edit</a>
            <a class="button is-danger" @click='deleteModalToggle' >Delete</a>
        </div>
    </div>

    <!-- DELETE MODAL -->
    <div class="modal" :class="{ 'is-active': isActiveDeleteModal }" >
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Delete</p>
                <button class="delete" @click='deleteModalToggle'></button>
                </header>
            <section class="modal-card-body">
                Delete user {{ user.name }}?
            </section>
            <footer class="modal-card-foot">
                <a class="button is-danger" @click='deleteUser' >Delete</a>
                <a class="button" @click='deleteModalToggle'>Cancel</a>
            </footer>
        </div>
    </div>
    <!-- EDIT MODAL -->
    <div class="modal" :class="{ 'is-active': isActiveEditModal }" >
        <div class="modal-background"></div>
        <div class="modal-card">
            <header class="modal-card-head">
                <p class="modal-card-title">Edit</p>
                <button class="delete" @click='editModalToggle'></button>
            </header>
            <section class="modal-card-body">
               <div class="field">
                    <label class="label">User Name</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Text input" 
                            :value='UserDetails.name' 
                            ref='editName'>
                    </div>
                </div>
               <div class="field">
                    <label class="label">Email</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Text input" 
                            :value='UserDetails.email'
                            v-model='UserDetails.email' 
                            ref='editEmail'>
                    </div>
                </div>
            </section>
            <footer class="modal-card-foot">
                <a class="button is-primary" @click='editUser'>Save</a>
                <a class="button" @click='editModalToggle'>Cancel</a>
            </footer>
        </div>
    </div>
</div>
</template>

<script>
    export default {
       props: ['user'],
       data(){
           return {
               isActiveDeleteModal: false,
               isActiveEditModal: false,
               UserDetails : {
                   name: '',
                   email: ''
               }
           }
       },
       mounted(){
        this.UserDetails.name = this.user.name;
        this.UserDetails.email = this.user.email;
       },
        methods: {
            deleteModalToggle(){
                    this.isActiveDeleteModal = !this.isActiveDeleteModal;
            },
            editModalToggle(){
                    this.isActiveEditModal = !this.isActiveEditModal;
            },
            deleteUser(){
                var id = this.user.id;
                axios.post('/delete/user/' + id)
                    .then((res) => {
                        console.log(res); 
                        this.isActiveModal = false;
                        window.location = res.data.redirect;
                    });
            },
            editUser(){
                 this.isActiveEditModal = !this.isActiveEditModal;

                 let newName = this.$refs.editName.value;
                 let newEmail = this.$refs.editEmail.value;
                 let id = this.user.id;
                 this.UserDetails.name = newName;
                 this.UserDetails.email = newEmail;

                 axios.post('/user/' + newName + '/' + newEmail + '/' + id);
            }

        }
    }
</script>

<style>
    .box {
        margin-top:10px;
    }
</style>