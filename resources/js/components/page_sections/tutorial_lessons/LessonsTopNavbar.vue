<template>
  <div class="main-top-navbar-container">
    <div>
        <top-search class="search-component" :background="'white'"></top-search>
    </div>
    <div>
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
