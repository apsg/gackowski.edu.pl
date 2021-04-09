<template>
    <div class="modal-popup" v-if="shouldShow" @click="close">
        <div class="image w-100 h-100 d-flex align-items-center justify-content-center p-3">
            <a href="#" class="btn btn-secondary hide-preview" @click="close">
                <i class="fa fa-times"></i>
            </a>
            <div class="modal-content bg-white" v-html="content" @click="onClick">{{ content }}</div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Modal",

    data() {
        return {
            shouldShowToggle: false,
        }
    },

    methods: {
        close(e) {
            e.stopPropagation();
            console.log('close');
            this.$store.commit('popupClose');
        },

        open(html) {
            this.$store.commit('popup', html);
            this.shouldShowToggle = true;
        },

        blog(slug) {
            this.open('<p>Loading...</p>');
            this.blogService.grab(slug)
                .then(data => {
                    this.open(data);
                    this.$store.commit('loading', false);
                })
        },

        noClose(e) {
            e.stopPropagation();
        },

        onClick(e) {
            if (e.target.className.includes('wp-image')) {
                this.openSingleImage(e.target.parentNode.href);
            }

            e.preventDefault();
            e.stopPropagation();

            console.log(e.target.parentNode.href, e.target.className);
        },

        openSingleImage(href) {
            this.$store.commit('popup', `<img src="${href}" class="w-100" />`);
        }
    },

    computed: {
        shouldShow() {
            return this.$store.state.loading
                || this.shouldShowToggle
                || this.$store.getters.current;
        },

        content() {
            return this.$store.getters.current;
        }
    }
}
</script>

<style lang="scss" scoped>
.modal-popup {
    position: fixed;
    z-index: 2000;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    display: block;
    transition: opacity 0.5s ease;

    .hide-preview {
        position: absolute;
        top: 0;
        right: 0;
        z-index: 2100;
    }

    .modal-content {
        overflow-y: auto;
        max-height: 100%;
    }
}
</style>
