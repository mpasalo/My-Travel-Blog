<template>
    <div class="col-md-8 blog-main">
        <div class="text-center m-2">
            <button class="btn btn-primary" @click="goToCreatePost()">
                Create A Post
            </button>
        </div>
        <div v-if="posts.length > 0">
            <div v-for="post in posts" :key="post.id">
                <post-component :post="post"></post-component>
            </div>
        </div>
        <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
        </nav>
    </div>
</template>

<script>
import PostComponent from "./PostComponent.vue";

export default {
    props: ["posts"],

    components: {
        "post-component": PostComponent
    },

    methods: {
        goToCreatePost: function() {
            location.assign("/posts/create");
        }
    }
};
</script>
