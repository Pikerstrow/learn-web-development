<template>
  <div class="main-top-navbar-container">
    <!-- <div class="align-self-center logo-div">
      <router-link :to="{name: 'main', params: {locale: locale}}">
        <img class="logo-image" src="../../../../images/logo.png" />
      </router-link>
    </div> -->
    <div>
        <top-search class="search-component"></top-search>
    </div>
    <div style="padding-right: 50px">
        <language-switcher></language-switcher>
    </div>
  </div>
</template>

<script>
import AppLanguageSwitcher from "../shared/AppLanguageSwitcher";
import AppTopNavbarSearch from "../shared/AppTopNavbarSearch";
export default {
    components: {
        'language-switcher': AppLanguageSwitcher,
        'top-search': AppTopNavbarSearch
    }
};
</script>

<style lang="scss" scoped>
.main-top-navbar-container {
  display: flex;
  justify-content: flex-end;
  align-items: center;
  width: 100%;
  padding: 10px;
}
.search-component {
    margin-right: 20px;
}
</style>
