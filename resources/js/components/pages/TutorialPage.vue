<template>
  <div class="tutorial-page-container d-flex flex-column justify-content-between">
    <main v-if="tutorial" class="tutorial-info-section d-flex flex-column align-items-center">
      <div class="app-container app-conteiner-two-parts">
        <div class="breadcrumbs">
          <ul>
            <li>
              <router-link :to="{name: 'main'}">Main</router-link>
              <i class="fa-xs fas fa-chevron-right"></i>
            </li>
            <li>
              <router-link :to="{name: 'tutorials', query: {page: 1}}">Tutorials</router-link>
              <i class="fa-xs fas fa-chevron-right"></i>
            </li>
            <li>{{ tutorial.attributes.title }}</li>
          </ul>
        </div>
        <h1 class="text-center">{{ tutorial.attributes.title }}</h1>
        <div class="tutorial-description">{{ tutorial.attributes.description }}</div>
        <sections-list
          v-for="(section, index) in tutorial.attributes.sections"
          :key="index"
          :section="section"
          :tutorialSlug="tutorial.attributes.slug"
          :sectionNumber="index + 1"
          class="sections-list"
        ></sections-list>
      </div>
    </main>
  </div>
</template>

<script>
import TutorialSectionLessonsList from "../page_sections/tutorial_page/TutorialSectionLessonsList";
import * as helpers from "../../helpers/functions";

export default {
  computed: {
    tutorial() {
      return this.$store.getters['tutorials/tutorial'];
    }
  },
  components: {
    "sections-list": TutorialSectionLessonsList
  },
  mounted() {
    this.$store.dispatch("tutorials/tutorialShow", this.$route.params.tutorial);
    helpers.moveToTop();
  }
};
</script>

<style lang="scss" scoped>
.tutorial-page-container {
  padding-top: 100px;
  padding-bottom: 50px;
  width: 100%;

  .tutorials-lessons {
    width: 100%;
  }
  .tutorial-description {
    margin: 40px 0px;
    text-align: justify;
  }
  .sections-list {
    margin-bottom: 40px;
  }
}
</style>
