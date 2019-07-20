<template>
  <div class="d-flex flex-column justify-content-between app-component-container">
    <app-navbar v-if="displayMainNavigation" :styles="styles"></app-navbar>
    <router-view></router-view>
    <app-footer></app-footer>
  </div>
</template>

<script>
import AppNavbar from "./page_sections/shared/AppNavbar";
import AppFooter from "./page_sections/shared/AppFooter";

export default {
  data() {
    return {
      defaultMainNavigationStyles: {
        backgroundColor: "transparent",
        borderBottom: "1px solid rgba(0, 0, 0, 0.1)",
        position: "absolute",
        boxShadow: "none",
        display: "block"
      }
    };
  },
  computed: {
    styles() {
      return this.$route.meta.mainNavigationStyles
        ? this.$route.meta.mainNavigationStyles
        : this.defaultMainNavigationStyles;
    },
    displayMainNavigation(){
        return this.$route.meta.hideMainNavigation ? false : true;
    }
  },
  components: {
    "app-navbar": AppNavbar,
    "app-footer": AppFooter
  }
};
</script>

<style lang="scss" scoped>
.app-component-container {
    height: 100%;
}
</style>

