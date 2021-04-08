<template>
    <div class="content blog-single">
        <div class="title">Blog Post</div>
        <div class="row border-line-v">
            <div class="col col-m-12 col-t-12 col-d-12">
                <div class="post-box">

                    <h1 class="h-title">{{ title }}</h1>
                    <div class="blog-detail">
                        <span class="date">{{ date }}</span>
                    </div>

                    <div class="blog-image" v-if="image">
                        <img :src="this.image" alt=""/>
                    </div>

                    <div class="blog-content" v-html="content">
                        {{ content }}
                    </div>
                </div>
            </div>
        </div>

        <nav class="navigation post-navigation">
            <div class="nav-links">
                <div class="nav-previous"><a href="/blog"><span class="post-nav-next post-nav-text">Back</span></a>
                </div>
            </div>
        </nav>

    </div>
</template>

<script>
export default {
    name: "BlogPost",

    props: ['slug'],

    data() {
        return {
            title: null,
            date: null,
            image: null,
            content: null
        }
    },

    mounted() {
        axios.get('/a/blog/' + this.slug)
            .then(r => {
                this.title = r.data.data.title;
                this.date = r.data.data.date;
                this.image = r.data.data.featured;
                this.content = r.data.data.content;
            });
    }
}
</script>

<style scoped>

</style>
