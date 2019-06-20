<template>
   <div style="width:inherit">
<!--      <bread-crumbs :root="'main'"></bread-crumbs>-->
      <header-section></header-section>
      <main class="d-flex flex-column justify-content-between">
         <tutorials-block></tutorials-block>
         <students-feedbacks></students-feedbacks>
         <motivation></motivation>
      </main>
      <footer class="d-flex flex-column justify-content-between">
         <landing-footer></landing-footer>
      </footer>
   </div>
</template>

<script>
    import HeaderSection from './page_sections/HeaderSection';
    import TutorialsBlock from './page_sections/TutorialsBlock';
    import StudentsFeedbacks from './page_sections/StudentsFeedbacks';
    import StarsRating from "stars-rating-component-vue";
    import LandingFooter from "./page_sections/LandingFooter";
    import Motivation from "./page_sections/Motivation";
    import BreadCrumbs from "./page_sections/page_sections_components/BreadCrumbs";

    export default {
        data() {
            return {
                query: null,
            }
        },
        components: {
            'header-section': HeaderSection,
            'tutorials-block': TutorialsBlock,
            'students-feedbacks': StudentsFeedbacks,
            'motivation': Motivation,
            'landing-footer': LandingFooter,
            'stars-rating': StarsRating,
            'bread-crumbs': BreadCrumbs
        },
        mounted(){
            console.log(this.$route);
        }
    }
</script>

<style lang="scss" scoped>
   .app-container {
      width: 70%;
      height: 100vh;
   }

   .social-share-container {
      margin-top: 40px;
      width: 300px;
   }

   .search-container {
      min-height: 100px;
      height: calc(35vh - 30px);

      .search-round {
         height: 25%;
         min-height: 80px;
         background-color: rgba(0,0,0, 0.1);
      }

      input.main-search {
         height: 40px;
         font-size: 17px;
         border: 0px solid grey;
         border-radius: 5px;

         &::-webkit-input-placeholder { /* Chrome/Opera/Safari */
            color: grey;
            font-family: "Roboto", sans-serif;
            font-size: 15.5px;

         }
         &::-moz-placeholder { /* Firefox 19+ */
            color: grey;
            font-family: "Roboto", sans-serif;
            font-size: 15.5px;

         }
         &:-ms-input-placeholder { /* IE 10+ */
            color: grey;
            font-family: "Roboto", sans-serif;
            font-size: 15.5px;

         }
         &:-moz-placeholder { /* Firefox 18- */
            color: grey;
            font-family: "Roboto", sans-serif;
            font-size: 15.5px;
         }

      }

      span.find-btn {
         display: block;
         height: 40px;
         background-color: royalblue;
         font-family: "Roboto", sans-serif;
         letter-spacing: 1.5px;
         border: 1px solid grey;
         margin-left: 20px;
         color: white;
         padding: 0px 15px;
         text-transform: uppercase;
         border-radius: 5px;
         cursor: pointer;
         transition-duration: .3s;

         &:hover {
            background-color: #3154a8;
         }
      }

   }

   .icon-coding {
      width: 80px;
   }
   h1.page-title {
      font-family: 'Dosis', sans-serif;
      font-weight: bold;
      font-size: 50px;
      margin-bottom: 25px;
   }


   .welcome {
      font-size: 40px;
   }

   .description {
      font-family: "Roboto", sans-serif;
      font-size: 17px;
      color: #575757;
   }


   .header-background {
      padding-top: 60px;
      position: relative;
      width: 100% !important;
      height: 100vh;
      min-height: 530px;
      background-image: linear-gradient(to bottom, #f0c837, #f3d24c, #f7dc5f, #fbe572, #ffef84);
   }

   .moto-container {
      height: calc(65vh - 30px);
      min-height: calc(65vh - 30px);

      img {
         margin-bottom: 20px;
      }

      a.start-button {
         border: 1px solid black;
         padding: 10px 20px;
         text-decoration: none;
         display: block;
         color: black;
         margin-top: 40px;
         text-transform: uppercase;
         font-size: 17.5px;
         font-family: "Roboto", sans-serif;
         letter-spacing: 1.2px;
         transition-duration: .5s;
         border-radius: 7px;

         &:hover {
            /*background-color: #fffdd1;*/

            background-color: #f7dc5f;
         }
      }

   }


   @media screen and (max-width: 1524px) {
      .app-container {
         width: 80%;
      }
   }

   @media screen and (max-width: 1024px) {
      h1.page-title {
         font-size: 40px;
      }
      .app-container {
         width: 90%;
      }
   }

   @media screen and (max-width: 767px) {
      .header-image {
         display: none;
      }
      h1.page-title {
         font-size: 35px;
      }
      .start-button {
         font-size: 17px !important;
         padding: 8px 0px;
      }
      .icon-coding {
         width: 60px;
      }
      .search-container {
         display: none !important;
      }
   }

   @media screen and (max-width: 450px) {
      .header-image {
         display: none;
      }
      h1.page-title {
         font-size: 30px;
      }
      .app-container {
         width: 95%;
      }
      .start-button {
         font-size: 16px !important;
      }
   }
</style>
