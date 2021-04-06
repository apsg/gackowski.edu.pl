<template>
    <div class="card-inner blog" id="blog-card">
        <div class="card-wrap">

            <!-- Blog -->
            <blog-list></blog-list>
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
    name: "Blog"
}
</script>

<style scoped>

</style>
