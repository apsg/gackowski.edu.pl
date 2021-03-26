<template>
    <div class="content blog">

        <!-- title -->
        <div class="title">
            <span>Blog</span>
        </div>

        <!-- content -->
        <div class="row">
            <!-- blog item -->
            <div v-for="post in posts" :key="post.id" class="col col-lg-6 col-md-12">
                <div class="box-item">
                    <div class="image">
                        <a :href="'/blog/' + post.slug">
                            <img :src="post.thumb" :alt="post.title"/>
                        </a>
                    </div>
                    <div class="desc">
                        <a :href="'/blog/' + post.slug">
                            <span class="date">{{ post.date }}</span>
                        </a>
                        <a :href="'/blog/' + post.slug" class="name" v-html="post.title">{{ post.title }}</a>
                        <div class="text text-justify" v-html="post.excerpt">
                            {{ post.excerpt }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>

        <div class="pager">
            <nav class="navigation pagination">
                <div class="nav-links">
                    <span class="page-numbers current">1</span>
                    <a class="page-numbers" href="#">2</a>
                    <a class="next page-numbers" href="#">Next</a>
                </div>
            </nav>
        </div>

    </div>
</template>

<script>
export default {
    name: "BlogList",

    data() {
        return {
            posts: []
        }
    },

    mounted() {
        this.getPage(1);
    },

    methods: {
        getPage(page) {
            axios.get('/a/blog?page=' + page)
                .then(r => {
                    this.posts = r.data.data;
                });
        }
    }
}
</script>

<style scoped>

</style>
