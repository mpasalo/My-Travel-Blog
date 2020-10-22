<template>
    <div class="col-md-8 blog-main">
        <h1>{{ post.title }}</h1>
        <p>by {{ post.user.name }} on {{ post.created_at }}</p>
        <p>{{ post.body }}</p>
        <hr />
        <div class="comments">
            <ul class="list-group">
                <div v-for="comment in post.comments" :key="comment.id">
                    <li class="list-group-item">
                        <strong> {{ comment.created_at }}: </strong>
                        {{ comment.body }}
                    </li>
                </div>
            </ul>
        </div>
        <hr />
        <div class="card">
            <div class="card-block">
                <div class="form-group">
                    <textarea
                        name="body"
                        placeholder="Your comment here"
                        class="form-control"
                        v-model="form.body"
                    >
                    </textarea>
                </div>
                <div class="form-group">
                    <button @click="saveComment()" class="btn btn-primary">
                        Add Comment
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Form from "vform";
import objectToFormData from "object-to-formdata";

window.objectToFormData = objectToFormData;

export default {
    name: "ShowPostComponent",
    props: ["post"],
    data() {
        return {
            form: new Form({
                body: ""
            })
        };
    },

    methods: {
        saveComment: function() {
            let formData = new FormData();

            formData.append("body", this.form.body);

            let data = {
                formData: formData,
                postId: this.post.id
            };

            this.$store.dispatch("comment/create", data).then(response => {
                this.$swal({
                    title: "Blog Post Comment",
                    html: "Comment Added Succesfully",
                    type: "success",
                    confirmButtonText: "Ok"
                }).then(response => {
                    location.reload();
                });
            });
        }
    }
};
</script>
