export const actions = {
    create(context, data) {
        axios.post('/posts', data.formData);
    },
}
