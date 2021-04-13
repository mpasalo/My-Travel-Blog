<template>
    <div class="blog-post">
        <div class="d-flex flex-row align-items-center">
            <h2 class="blog-post-title">
                <a :href="`/posts/${post.id}`">
                    {{ post.title }}
                </a>
            </h2>
            <div v-if="user.id == post.user_id">
                <ion-icon
                    name="create-outline"
                    class="btn btn-secondary btn-sm m-2"
                    @click="editPost()"
                ></ion-icon>
                <ion-icon
                    name="trash-outline"
                    class="btn btn-danger btn-sm m-2"
                    @click="deletePost()"
                ></ion-icon>
            </div>
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
    props: ["post", "user"],

    methods: {
        deletePost: function() {
            this.$store.dispatch("post/delete", this.post.id);
        },

        editPost: function() {
            location.assign(`/posts/${this.post.id}/edit`);
        }
    }
};
</script>
