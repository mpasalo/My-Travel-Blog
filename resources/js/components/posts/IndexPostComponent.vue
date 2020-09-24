<template>
    <div class="col-md-8 blog-main">
        <div v-for="post in posts">
            <post-component :post="post"></post-component>
        </div>
        <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
        </nav>
    </div>
</template>

<script>
    import PostComponent from './PostComponent.vue';

    export default {
        props: ['posts'],

        components: {
            'post-component': PostComponent,
        },
    };
</script>
