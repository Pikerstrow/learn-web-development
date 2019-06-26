<template>
   <div class="not-found-container d-flex flex-column align-items-center justify-content-between">
      <div class="app-container">
         <bread-crumbs :root="'main'"></bread-crumbs>
         <div class="not-found-message d-flex flex-column justify-content-center align-items-center">
            <h1 class="text-center">404</h1>
            <p>
               Page Not Found
            </p>
         </div>
      </div>
      <landing-footer></landing-footer>
   </div>
</template>

<script>
    import LandingFooter from "./page_sections/shared/AppFooter";
    import BreadCrumbs from "./page_sections/shared/AppBreadCrumbs";
    export default {
        name: "NotFound",
        components: {
            'landing-footer': LandingFooter,
            'bread-crumbs': BreadCrumbs
        },
    }
</script>

<style lang="scss" scoped>
   .not-found-container {
      padding-top: 100px;
      width: 100vw;
      height: 100vh;

      .not-found-message {
         height: 100%;
      }
   }
</style>