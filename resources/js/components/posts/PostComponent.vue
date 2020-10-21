<template>
    <div class="blog-post">
        <div class="d-flex flex-row align-items-center">
            <h2 class="blog-post-title">
                <a :href="`/posts/${post.id}`">
                    {{ post.title }}
                </a>
            </h2>

            <ion-icon
                name="trash-outline"
                class="btn btn-danger btn-sm m-4"
                @click="deletePost()"
            ></ion-icon>
        </div>
        <p class="blog-post-meta">
            {{ post.user.name }} on

            {{ post.created_at }}
        </p>
        {{ post.body }}
    </div>
</template>

<script>
export default {
    name: "PostComponent",
    props: ["post"],

    methods: {
        deletePost: function() {
            this.$store.dispatch("post/delete", this.post.id);
        }
    }
};
</script>
