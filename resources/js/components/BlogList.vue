<template>
    <div class="content blog">

        <!-- title -->
        <div class="title">
            <span>Blog</span>
        </div>

        <!-- content -->
        <div class="row"
             v-infinite-scroll="loadMore"
             infinite-scroll-disabled="busy"
             infinite-scroll-distance="500">
            <!-- blog item -->
            <div v-for="post in posts" :key="post.id" class="col col-lg-6 col-md-12 col-sm-12">
                <div class="box-item">
                    <div class="image" v-if="post.thumb">
                        <a :href="'/blog/' + post.slug"
                           @click.prevent="openPopup(post.slug)"
                           class="ajax-popup-link">
                            <img :src="post.thumb" :alt="post.title"/>
                        </a>
                    </div>
                    <div class="desc">
                        <a :href="'/blog/' + post.slug"
                           @click.prevent="openPopup(post.slug)">
                            <span class="date">{{ post.date }}</span>
                        </a>
                        <a :href="'/blog/' + post.slug"
                           @click.prevent="openPopup(post.slug)"
                           class="name ajax-popup-link"
                           v-html="post.title">
                            {{ post.title }}
                        </a>
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
                    Loading...
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
            posts: [],
            page: 1,
            busy: true
        }
    },

    mounted() {
        this.getPage(this.page);
    },

    methods: {
        getPage(page) {
            axios.get('/a/blog?page=' + page)
                .then(r => {
                    this.posts.push(...r.data.data);
                    this.busy = false;
                });
        },

        next() {
            this.posts = [];
            this.page++;
            this.getPage(this.page);
        },

        prev() {
            this.posts = [];
            this.page--;
            this.page = Math.max(1, this.page);
            this.getPage(this.page);
        },

        loadMore() {
            this.busy = true;
            this.page++;
            this.getPage(this.page);
        },

        openPopup(slug) {
            // this.$refs.popup.open(slug);
            // this.$emit('blog', slug);
            this.$store.dispatch('fetchBlog', slug);
        }
    }
}
</script>

<style scoped>

</style>
