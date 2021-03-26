<template>
    <div class="content blog">

        <!-- title -->
        <div class="title">
            <span>Blog</span>
        </div>

        <!-- content -->
        <div class="row">
            <div>
                <i class="fas fa-spinner"></i>
            </div>
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
                    <a class="page-numbers" href="#" v-if="page > 1" @click.prevent="prev()">
                        <i class="fa fa-chevron-left"></i>
                    </a>
                    <span class="page-numbers current">{{ page }}</span>
                    <a class="page-numbers" href="#" @click.prevent="next()">
                        <i class="fa fa-chevron-right"></i>
                    </a>
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
            page: 1
        }
    },

    mounted() {
        this.getPage(this.page);
    },

    methods: {
        getPage(page) {
            axios.get('/a/blog?page=' + page)
                .then(r => {
                    this.posts = r.data.data;
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
        }
    }
}
</script>

<style scoped>

</style>
