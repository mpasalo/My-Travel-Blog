<template>
    <div class="col-md-8 blog-main">
        <h1 class="title">Edit Post</h1>
        <div class="form-group">
            <label class="label" for="title">Post Title</label>
            <input
                type="text"
                class="input form-control"
                name="title"
                placeholder="Post Title"
                v-model="form.title"
            />
        </div>
        <div class="form-group">
            <label class="label" for="body">Blog Content</label>
            <textarea
                name="body"
                class="textarea form-control"
                placeholder="Blog Content"
                v-model="form.body"
            ></textarea>
        </div>
        <div class="form-group">
            <div class="control">
                <button @click="updateBlogPost()" class="btn btn-danger">
                    Save Changes
                </button>
            </div>
        </div>
    </div>
</template>

<script>
import Form from "vform";
import objectToFormData from "object-to-formdata";

window.objectToFormData = objectToFormData;

export default {
    name: "EditPostComponent",
    props: ["post"],
    data() {
        return {
            form: new Form({
                title: this.post.title,
                body: this.post.body
            })
        };
    },

    methods: {
        updateBlogPost: function() {
            let data = {
                postId: this.post.id,
                formData: this.form
            };

            this.$store.dispatch("post/update", data);
        }
    }
};
</script>
