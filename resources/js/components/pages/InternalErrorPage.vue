<template>
   <div class="int-err-container d-flex flex-column align-items-center justify-content-between">
      <div class="app-container">
         <div class="int-err-message d-flex flex-column justify-content-center align-items-center">
            <h1 class="text-center">500</h1>
            <p>
               Something went wrong
            </p>
         </div>
      </div>
   </div>
</template>

<script>
    export default {
        name: "InternalErrorPage",
    }
</script>

<style lang="scss" scoped>
   .int-err-container {
      padding-top: 100px;
      width: 100vw;
      height: 100vh;

      .int-err-message {
         height: 100%;
      }
   }
</style>
