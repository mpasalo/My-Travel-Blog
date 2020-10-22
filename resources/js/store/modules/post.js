export const actions = {
    create(context, data) {
        axios.post("/posts", data.formData).then(response => {
            if (response.data.message) {
                var arr = [].concat.apply(
                    [],
                    [response.data.message.title, response.data.message.body]
                );
                let error_fields = arr.filter(function(e) {
                    if (e) {
                        return e;
                    } else {
                        return null;
                    }
                });
                Vue.swal({
                    title: "Blog Post",
                    html: error_fields,
                    icon: "error",
                    confirmButtonText: "Ok"
                });
            } else {
                Vue.swal({
                    title: "Blog Post",
                    html: "Post Created Succesfully",
                    icon: "success",
                    confirmButtonText: "Ok"
                }).then(response => {
                    location.assign("/posts");
                });
            }
        });
    },

    update(context, data) {
        axios.put(`/posts/${data.postId}`, data.formData).then(response => {
            if (response.data.message) {
                var arr = [].concat.apply(
                    [],
                    [response.data.message.title, response.data.message.body]
                );
                let error_fields = arr.filter(function(e) {
                    if (e) {
                        return e;
                    } else {
                        return null;
                    }
                });
                Vue.swal({
                    title: "Blog Post",
                    html: error_fields,
                    icon: "error",
                    confirmButtonText: "Ok"
                });
            } else {
                Vue.swal({
                    title: "Blog Post",
                    html: "Post Updated Succesfully",
                    icon: "success",
                    confirmButtonText: "Ok"
                }).then(response => {
                    location.assign("/posts");
                });
            }
        });
    },

    delete(context, postId) {
        axios.delete(`/posts/${postId}`).then(response => {
            Vue.swal({
                title: "Blog Post",
                html: "Post Deleted Succesfully",
                icon: "success",
                confirmButtonText: "Ok"
            }).then(response => {
                location.assign("/posts");
            });
        });
    }
};
