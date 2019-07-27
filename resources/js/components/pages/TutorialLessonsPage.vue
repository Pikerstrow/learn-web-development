<template>
  <div class="main-container">
    <div class="sidebar-container"></div>
    <div class="lessons-page-container">
      <div class="container-header">
        <div class="breadcrumbs-container">
          <div v-if="dataIsLoaded" class="breadcrumbs">
            <ul>
              <li>
                <router-link :to="{name: 'main'}">Main</router-link>
                <i class="fa-xs fas fa-chevron-right"></i>
              </li>
              <li>
                <router-link :to="{name: 'tutorials', query: {page: 1}}">Tutorials</router-link>
                <i class="fa-xs fas fa-chevron-right"></i>
              </li>
              <li>
                <router-link :to="{name: 'tutorial'}">{{ tutorial.attributes.title }}</router-link>
                <i class="fa-xs fas fa-chevron-right"></i>
              </li>
              <li>{{  }}</li>
            </ul>
          </div>
        </div>
        <div class="top-navbar-container">
          <top-navbar></top-navbar>
        </div>
      </div>

      <div class="content-container">
        <router-view></router-view>
      </div>
    </div>
  </div>
</template>

<script>
import LessonsTopNavbar from "../page_sections/tutorial_lessons/LessonsTopNavbar";

export default {
    computed: {
        tutorial(){
            return this.$store.getters['tutorials/tutorial'];
        },
        dataIsLoaded(){
            return this.tutorial ? true : false;
        }
    },
  components: {
    "top-navbar": LessonsTopNavbar
  },
  created(){
      this.$store.dispatch("tutorials/tutorialShow", this.$route.params.tutorial);
      console.log(this.$route.params.tutorial)
  }
};
</script>


<style lang="scss" scoped>
.main-container {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  width: 100%;
  height: 100%;
  position: relative;

  .sidebar-container {
    display: flex;
    justify-content: flex-start;
    align-items: flex-start;
    width: 280px;
    background-color: white;
    color: white;
    min-height: 100%;
  }

  .lessons-page-container {
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    width: calc(100% - 280px);
    height: 100%;
    background-color: rgb(223, 223, 223);

    .container {
      display: flex;
      justify-content: space-between;
      align-items: flex-start;
    }

    .container-header {
      width: 100%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      height: auto;
      padding: 0px 50px;
    }
  }
}
</style>
