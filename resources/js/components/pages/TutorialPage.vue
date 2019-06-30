<template>
  <div class="tutorial-page-container d-flex flex-column justify-content-between">
    <main class="tutorial-info-section d-flex flex-column align-items-center">
      <div class="app-container">

          <div class="breadcrumbs">
            <ul>
                <li>
                    <router-link :to="{name: 'main'}">Main</router-link> <i class="fa-xs fas fa-chevron-right"></i>
                </li>
                <li>
                    <router-link :to="{name: 'tutorials', query: {page: 1}}">Tutorials</router-link> <i class="fa-xs fas fa-chevron-right"></i>
                </li>
                <li>
                    {{ tutorial ? tutorial.attributes.title : null }}
                </li>
            </ul>
        </div>
        <h1 class="text-center">{{ tutorial ? tutorial.attributes.title : null}}</h1>
      </div>
    </main>
  </div>
</template>

<script>
export default {
  computed: {
    tutorial() {
      return this.$store.getters.tutorial;
    }
  },
mounted() {
   this.$store.dispatch("tutorialShow", this.$route.params.tutorial);
  }
};
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
