<template>
    <div>
    </div>
</template>

<script>
export default {
    name: "BlogPopup",

    methods: {
        open(slug) {
            $('#blog-popup-open').click();
            $('#blog-popup').html('Loading...');

            axios.get('/a/blog/' + slug)
                .then(r => {
                    $('#blog-popup').html(this.format(r.data.data));
                });
        },

        format(data) {
            return `
<div class="content">
    <div class="image h-100">
        <img src="${data.featured}" alt="">
    </div>
    <div class="desc">
        <div class="post-box">
            <h1>${data.title}</h1>
            <div class="blog-detail">
                <span class="date">${data.date}</span>
            </div>
            <div class="blog-content px-3">
                ${data.content}
            </div>
        </div>
    </div>
</div>`;
        }
    }
}
</script>

<style scoped>

</style>
