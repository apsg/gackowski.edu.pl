<template>
    <div class="card-inner" id="works-card">
        <div class="card-wrap">
            <div class="content works">
                <div class="title">Recent Works</div>
                <div class="d-flex flex-wrap align-content-stretch"
                     v-infinite-scroll="loadMore"
                     infinite-scroll-disabled="busy"
                     infinite-scroll-distance="800">

                    <div v-for="image in images" class="p-1 image col-md-6 col-lg-6 col-sm-12">
                        <a :href="image.url" target="_blank" :alt="image.title">
                            <img :src="image.thumb" class="w-100">
                            <div class="text-center meta d-flex align-content-center justify-content-center flex-column">
                                <div class="title">{{ image.title }}</div>
                                <div class="date text-bold">{{ image.date }}</div>
                            </div>
                        </a>
                    </div>

                    <p>Loading...</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Works",

    data() {
        return {
            images: [],
            page: 1,
            busy: true
        }
    },

    mounted() {
        this.getPage(1)
    },

    methods: {
        getPage(page) {
            axios.get('/a/images?page=' + page)
                .then(r => {
                    this.images.push(...r.data.data);
                    this.busy = false;
                });
        },

        loadMore() {
            this.busy = true;
            this.page++;
            this.getPage(this.page);
        },
    }
}
</script>

<style lang="scss" scoped>
.image {
    position: relative;

    .meta {
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        display: flex;
        opacity: 0;
        transition: opacity 0.5s;
        background-color: rgba(255,255,255,0.9);

        &:hover {
            opacity: 1;
        }

        .title{
            position: relative;
            padding: 0;
            min-height: auto;

            &:before,
            &:after{
                display: none;
            }
        }
    }
}
</style>
