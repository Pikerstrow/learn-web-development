<template>
  <div class="switcher-container">
    <div class="flags-contaier">
      <img width="30" src="../../../../icons/flags/uk.svg" /> English
    </div>

    <span class="vertical-divider"></span>

    <span @click="showLanguages" :class="{'opened': isOpened}" class="arrow-container">
      <i class="fas fa-chevron-down"></i>
    </span>
  </div>
</template>

<script>
import AppLocalStorage from "../../../helpers/AppLocalStorage";

export default {
  data() {
    return {
      isOpened: false,
      flags: ["gb.svg", "ru.svg"]
    };
  },
  computed: {
    currentLocale() {
      let locale = AppLocalStorage.has("locale")
        ? AppLocalStorage.get("locale")
        : null;

      return locale && locale === "ru" ? "ru" : "en";
    }
  },
  methods: {
    showLanguages() {
      this.isOpened = !this.isOpened;
    }
  }
};
</script>

<style lang="scss" scoped>
.switcher-container {
  padding: 5px;
  height: fit-content;
  border: 0.5px solid black;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 5px;

  img {

  }

  i {
    cursor: pointer;
  }

  .arrow-container {
    margin: 0;
    padding: 0;
    display: flex;
    transition: all 0.3s;
    transition-timing-function: ease-in-out;
  }

  .arrow-container.opened {
    transform: rotate(180deg);
  }
}
</style>


