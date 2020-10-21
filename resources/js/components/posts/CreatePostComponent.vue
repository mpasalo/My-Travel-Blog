<template>
    <div class="col-md-8 blog-main">
        <h1 class="title">Create A New Post</h1>
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
                <button @click="saveBlogPost()" class="btn btn-danger">
                    Publish Post
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
    name: "CreatePostComponent",
    data() {
        return {
            form: new Form({
                title: "",
                body: ""
            })
        };
    },

    methods: {
        saveBlogPost: function() {
            let formData = new FormData();

            formData.append("title", this.form.title);
            formData.append("body", this.form.body);

            let data = {
                formData: formData
            };

            this.$store.dispatch("post/create", data);
        }
    }
};
</script>
