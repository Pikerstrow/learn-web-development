<template>
   <div class="row search-container d-flex justify-content-center align-items-center">
      <div class="col-11 col-md-9 col-lg-7 d-flex justify-content-center align-items-center search-round">
         <input v-model="query" placeholder="Search on Learn Web Development" class="col-8 main-search" type="text">
         <span class="find-btn d-flex align-items-center">Search</span>
      </div>
   </div>
</template>

<script>
    export default {
        name: "SearchElement",
        data() {
            return {
                query: null
            }
        }
    }
</script>

<style lang="scss" scoped>
   .search-container {
      min-height: 100px;
      height: calc(35vh - 30px);

      .search-round {
         height: 25%;
         min-height: 80px;
         background-color: rgba(0, 0, 0, 0.1);
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

   @media screen and (max-width: 767px) {
      .search-container {
         display: none !important;
      }
   }
</style>