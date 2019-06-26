<template>
   <div>
      <header class="header-background d-flex flex-column align-items-center justify-content-start">
         <div class="app-container d-flex flex-column justify-content-center">
            <main-page-search></main-page-search>
            <div class="row d-flex justify-content-center align-content-start moto-container">
               <div class="col-12 text-center">
                  <img class="icon-coding" src="../../../../images/icon-coding.png">
                  <h1 class="page-title">A free Web Development tutorials for beginners!</h1>
                  <span class="description">Learn with us! Code with us! Become a master with us!</span>
               </div>
               <div class="col-12 d-flex justify-content-center">
                  <a href="#" class="start-button text-center">choose tutorial</a>
               </div>
            </div>
         </div>
      </header>
   </div>

</template>

<script>
   import SearchElement from './elements/SearchElement';

    export default {
        name: "HeaderSection",
        components: {
            'main-page-search': SearchElement
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