<template>
    <div class="container">
                 <section class="section">
                    <div class="container">
                        <h1 class="title">Threads</h1>
                        <h2 class="subtitle">
                            Title
                        </h2>
                        <p>
                            {{ thread.title }}
                        </p>
                        <h2 class="subtitle">
                            Body
                        </h2>
                        <p>
                            {{ thread.body }}
                        </p>
                        </div>
                </section>
    </div>
</template>

<script>
    export default {
        props: ['thread'],
        mounted() {
            
        }
    }
</script>
