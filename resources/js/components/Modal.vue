<template>
    <div class="modal-popup" v-if="shouldShow" @click="close">
        <div class="image w-100 h-100 d-flex align-items-center justify-content-center p-3">
            <a href="#" class="btn btn-secondary hide-preview" @click="close">
                <i class="fa fa-times"></i>
            </a>
            <div class="modal-content bg-white" v-html="content">{{ content }}</div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Modal",

    data() {
        return {
            shouldShowToggle: true,
        }
    },

    methods: {
        close() {
            this.shouldShowToggle = false;
            this.$store.commit('popup', null);
        },

        open(html) {
            this.content = html;
            this.shouldShowToggle = true;
        },

        blog(slug) {
            console.log(slug);
            this.open('<p>Loading...</p>');
            this.blogService.grab(slug)
                .then(data => {
                    this.open(data);
                })
        },

        noClose(e) {
            e.stopPropagation();
        }
    },

    computed: {
        shouldShow() {
            return this.$store.state.popupContent;
        },

        content() {
            return this.$store.state.popupContent;
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
