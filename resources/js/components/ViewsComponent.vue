<template>
    <span class="badge bg-danger">{{viewsNumber}} <i class="fa fa-eye"></i></span>
</template>

<script>
export default {
    computed: {
        viewsNumber() {
            return this.$store.getters['article/articleViews'];
        }
    },
    mounted() {
        console.log('Component mounted.')
    }
}
</script>

<style scoped>
</style>
