export const actions = {
    create(context, data) {
        axios.post(`/posts/${data.postId}/comments`, data.formData);
    },
}
