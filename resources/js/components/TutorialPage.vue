<template>
   <div class="tutorial-page-container d-flex flex-column justify-content-between">
      <main class="tutorial-info-section d-flex flex-column align-items-center">
         <div class="app-container">
            <bread-crumbs></bread-crumbs>
            <h1 class="text-center">{{ tutorial ?  tutorial.attributes.title : null}}</h1>
         </div>
      </main>
      <footer class="d-flex flex-column justify-content-between">
         <landing-footer></landing-footer>
      </footer>
   </div>
</template>

<script>
    import BreadCrumbs from "./page_sections/shared/AppBreadCrumbs";
    import LandingFooter from "./page_sections/shared/AppFooter";

    export default {
        computed: {
            tutorial(){
                return this.$store.getters.tutorial
            }
        },
        components: {
            'bread-crumbs': BreadCrumbs,
            'landing-footer': LandingFooter
        },
        mounted(){
            this.$store.dispatch('tutorialShow', this.$route.params.tutorial)
        }
    }
</script>

<style lang="scss" scoped>
   .tutorial-page-container {
      padding-top: 100px;
      padding-bottom: 50px;
      background-color: whitesmoke;
      width: 100%;
      height: 100vh;

   }
</style>