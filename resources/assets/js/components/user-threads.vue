<template>
    <div class="columns">
        <div class="content column is-half is-offset-one-quarter">
            <h1>Threads</h1>
            
                <div class='box' v-for='thread in threads' :key="thread.id">
                    <div class="content">
                        <div> <strong>Title: </strong></div> 
                        <div>{{ thread.title }}</div>  
                        <div> <strong>Body: </strong></div>
                        <div> {{ thread.body }}</div>  

                        <div class="level-item" >
                            <a class="button" :href='"thread/" + thread.id' >
                                View
                            </a>
                        </div>
                    </div>
                </div> 
               
        </div>    
    </div>


</template>

<script>
    export default {
        props: ['threads'],
        mounted() {
            
        }
    }
</script>
<style>
    .level-item {
        justify-content: flex-end;
    }
</style>