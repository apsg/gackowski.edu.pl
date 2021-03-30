<template>

    <!--
        Blog Single
    -->
    <div class="content blog-single">

        <!-- title -->
        <div class="title">Blog Post</div>

        <!-- content -->
        <div class="row border-line-v">
            <div class="col col-m-12 col-t-12 col-d-12">
                <div class="post-box">

                    <!-- blog detail -->
                    <h1 class="h-title">{{ title }}</h1>
                    <div class="blog-detail">
                        <span class="date">{{ date }}</span>
                        <!--                        <span class="cat-links"><a href="#">Design</a>, <a href="#">Music</a></span>-->
                    </div>

                    <!-- blog image -->
                    <div class="blog-image" v-if="image">
                        <img :src="this.image" alt=""/>
                    </div>

                    <!-- blog content -->
                    <div class="blog-content" v-html="content">
                        {{ content }}
                    </div>

<!--                    <div class="post-text-bottom">-->
<!--                        <div class="social-share">-->
<!--                            <span>Share</span>-->
<!--                            <a class="share-btn share-btn-facebook" title="Share on Facebook"><i-->
<!--                                class="ion ion-social-facebook"></i></a>-->
<!--                            <a class="share-btn share-btn-twitter" title="Share on Twitter"><i-->
<!--                                class="ion ion-social-twitter"></i></a>-->
<!--                            <a class="share-btn share-btn-linkedin" title="Share on Linkedin"><i-->
<!--                                class="ion ion-social-linkedin"></i></a>-->
<!--                            <a class="share-btn share-btn-reddit" title="Share on Reddit"><i-->
<!--                                class="ion ion-social-reddit"></i></a>-->
<!--                            <a class="share-btn share-btn-pinterest" title="Share on Pinterest"><i-->
<!--                                class="ion ion-social-pinterest"></i></a>-->
<!--                        </div>-->
<!--                        &lt;!&ndash;                        <span class="tags-links">Taggs: <a href="#">code</a><a href="#">html</a><a href="#">plugin</a><a&ndash;&gt;-->
<!--                        &lt;!&ndash;                            href="#">wordpress</a></span>&ndash;&gt;-->
<!--                    </div>-->

                </div>
            </div>
        </div>

        <nav class="navigation post-navigation">
            <div class="nav-links">
                <div class="nav-previous"><a href="/blog"><span class="post-nav-next post-nav-text">Back</span></a></div>
<!--                <div class="nav-next"><a href="#"><span class="post-nav-prev post-nav-text">Next</span></a></div>-->
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
