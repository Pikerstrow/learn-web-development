<template>
   <div class="tutorials-page-container d-flex flex-column justify-content-between">
      <main class="tutorials-info-section d-flex flex-column align-items-center">
         <div class="app-container">
            <bread-crumbs :root="'main'"></bread-crumbs>
            <div class="row d-flex justify-content-between tutorials-list-container row-no-margin">
               <div v-for="(tutorialInfo, index) in availableTutorials">
                  <router-link :to="{name: 'tutorial', params: {tutorial: tutorialInfo.title.toLowerCase()}}">
                     <tutorial-card :ratingInfo="tutorialInfo.ratingInfo"
                        :title="tutorialInfo.title"
                        :description="tutorialInfo.description"
                        :info="tutorialInfo.info"
                        :styles="tutorialInfo.styles"
                        :key="index"
                     ></tutorial-card>
                  </router-link>
               </div>
            </div>
         </div>
      </main>
      <footer class="d-flex flex-column justify-content-between">
         <landing-footer></landing-footer>
      </footer>
   </div>
</template>

<script>
    import LandingFooter from "./page_sections/LandingFooter";
    import TutorialCard from "./page_sections/page_sections_components/TutorialCard";
    import BreadCrumbs from "./page_sections/page_sections_components/BreadCrumbs";

    export default {
        name: "Tutorials",
        components: {
            'landing-footer': LandingFooter,
            'tutorial-card': TutorialCard,
            'bread-crumbs': BreadCrumbs
        },
        computed: {
            availableTutorials() {
               return this.$store.getters.availableTutorials
            }
        },
        mounted(){
            // console.log(this.$route.matched)
        }
    }
</script>

<style lang="scss" scoped>
   .tutorials-info-section {
      padding-top: 100px;
      padding-bottom: 50px;
      background-color: whitesmoke;

   }
   .tutorials-page-header {
      width: 100%;
   }

   .tutorials-page-container {
      height: 100vh;
   }
</style>