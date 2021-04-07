<template>
    <div class="card-inner blog" id="blog-card">
        <div class="card-wrap">

            <!-- Blog -->
            <blog-list
                v-on:blog="blog"
                v-on:popup="popup"></blog-list>
            <div class="desc d-none">
                <a href="#blog-popup" class="name has-popup-media" id="blog-popup-open">Social Website</a>
                <div class="category">Content</div>
            </div>
            <div id="blog-popup" class="popup-box mfp-fade mfp-hide">
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Blog",

    methods: {
        popup(html) {
            this.$refs.popup.open(html);
        },

        blog(slug) {
            this.$refs.popup.blog(slug);
        }
    }
}
</script>

<style scoped>

</style>
