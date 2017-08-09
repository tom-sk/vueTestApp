<template>
    <div class="container">
        <div class="columns">
            <div class="content column is-half is-offset-one-quarter">
                <h1>Users</h1>
                <ol>
                    <li v-for='user in test' :key="user.id">
                        <a :href='"user/" + user.id'>
                            {{ user.name }}
                        </a>
                    </li> 
                </ol>    
            </div>   
        </div>
    </div>
</template>

<script>
    export default {
        props: ['test'],
        mounted() {
            
        }
    }
</script>
