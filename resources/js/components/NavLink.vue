<template>
    <li v-bind:class="{ active: isActive }">
        <a :href="href"
           @click.prevent="goToLink">
            <slot></slot>
        </a>
    </li>
</template>

<script>
export default {
    name: "NavLink",

    props: ['href'],

    methods: {
        goToLink() {
            if (location.pathname !== '/') {
                window.location.href = this.href;
            }

            let name = this.href.replace(window.location.origin + '/', '');

            this.showTab(name);
        },

        showTab(name) {
            console.log(name);
            window.location.pathname = '/' + name;
        }
    },

    computed: {
        isActive() {
            console.log(this.href, window.location.href);
            return this.href === window.location.href;
        }
    }
}
</script>

<style scoped>

</style>
