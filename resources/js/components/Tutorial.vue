<template>
   <div class="tutorial-page-container d-flex flex-column justify-content-between">
      <main class="tutorial-info-section d-flex flex-column align-items-center">
         <div class="app-container">
            <bread-crumbs :root="'main'"></bread-crumbs>
            <h1 class="text-center">{{ tutorialTitle }}</h1>
         </div>
      </main>
      <footer class="d-flex flex-column justify-content-between">
         <landing-footer></landing-footer>
      </footer>
   </div>
</template>

<script>
    import BreadCrumbs from "./page_sections/page_sections_components/BreadCrumbs";
    export default {
        name: "Tutorial",
        data(){
            return {
                tutorialTitle: null
            }
        },
        components: {
            'bread-crumbs': BreadCrumbs
        },
        mounted(){
            this.tutorialTitle = this.$route.params.tutorial
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