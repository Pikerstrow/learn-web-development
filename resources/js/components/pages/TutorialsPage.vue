<template>
  <div class="tutorials-page-container d-flex flex-column justify-content-between">
    <main class="tutorials-info-section d-flex flex-column align-items-center">
      <div class="app-container">
        <div class="breadcrumbs">
          <ul>
            <li>
              <router-link :to="{name: 'main'}">Main</router-link>
              <i class="fa-xs fas fa-chevron-right"></i>
            </li>
            <li>Tutorials</li>
          </ul>
        </div>

        <div class="row d-flex justify-content-between tutorials-list-container row-no-margin">
          <router-link
            v-for="(tutorialInfo, index) in tutorialsList"
            :key="index"
            :to="{name: 'tutorial', params: {tutorial: tutorialInfo.attributes.slug.toLowerCase()}}"
          >
            <tutorial-card
              :ratingInfo="tutorialInfo.attributes.ratingInfo"
              :title="tutorialInfo.attributes.title"
              :description="tutorialInfo.attributes.description"
              :info="tutorialInfo.attributes.info"
              :styles="tutorialInfo.attributes.styles"
              :key="index"
            ></tutorial-card>
          </router-link>
        </div>
        <pagination-links v-if="paginationInfo" :data="paginationInfo"></pagination-links>
        <!-- <pagination-test v-if="paginationInfo" :data="paginationInfoTest"></pagination-test> -->

      </div>
    </main>
  </div>
</template>

<script>
import TutorialCard from "../page_sections/tutorials_page/TutorialCard";
import AppPagination from "../page_sections/shared/AppPagination";
import * as helpers from "../../helpers/functions";

import AppPaginationTest from "../page_sections/shared/AppPaginationTest";

export default {

  components: {
    "tutorial-card": TutorialCard,
    "pagination-links": AppPagination,
    "pagination-test": AppPaginationTest
  },
  computed: {
    tutorialsFromDatabase() {
      return this.$store.getters.tutorials;
    },
    paginationInfo() {
      return this.tutorialsFromDatabase
        ? this.tutorialsFromDatabase.meta
        : null;
    },
    tutorialsList() {
      return this.tutorialsFromDatabase
        ? this.tutorialsFromDatabase.data
        : null;
    },
    paginationInfoTest(){
        return {
            currentPage: this.paginationInfo.current_page,
            onEachSide: 1,
            totalPages: Math.ceil(this.paginationInfo.total / this.paginationInfo.per_page)
        }
    }
  },
  watch: {
    $route() {
      this.$store.dispatch("tutorialIndex", this.$route.query.page);
      helpers.scrollToTop();
    }
  },
  mounted() {
    this.$store.dispatch("tutorialIndex", this.$route.query.page);
    helpers.moveToTop();
  }
};
</script>

<style lang="scss" scoped>
.tutorials-info-section {
  padding-top: 100px;
  padding-bottom: 50px;
  background-color: whitesmoke;
}

.tutorials-list-container {
  a {
    text-decoration: none;
    color: inherit;
    width: 49%;
  }

  .tutorial-block {
    width: 100% !important;
  }
}

.tutorials-page-header {
  width: 100%;
}

@media screen and (max-width: 1024px) {
  .tutorials-list-container {
    justify-content: center !important;

    a {
      text-decoration: none;
      color: inherit;
      width: 95%;
    }
  }
}
</style>
