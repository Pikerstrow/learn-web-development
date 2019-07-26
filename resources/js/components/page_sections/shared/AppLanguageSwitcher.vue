<template>
  <div style="position: relative">
    <div class="switcher-container">
      <div class="falgs-container">
          <div v-if="currentLocale === 'en'" class="flags-contaier">
        <img width="30" :src="flag('en')" /> English
      </div>
      <div v-else class="flags-contaier">
        <img width="30" :src="flag('ru')" /> Русский
      </div>
      </div>

      <span class="vertical-divider"></span>

      <span @click="showLanguages" :class="{'opened': isOpened}" class="arrow-container">
        <i class="fas fa-chevron-down"></i>
      </span>
    </div>
    <ul class="language-list" :class="{'opened': isOpened}">
      <li v-for="(locale, index) in filteredLocales" :key="index">
        <router-link @click.native="toggleLanguage(locale.short)" :to="{params: {locale: locale.short}}">
          <img width="30" :src="flag(locale.short)" /> {{ locale.full }}
        </router-link>
      </li>
    </ul>
  </div>
</template>

<script>
import AppLocalStorage from "../../../helpers/AppLocalStorage";
const FLAGS_PATH = "/images/";

export default {
  data() {
    return {
      isOpened: false,
      locale: undefined
    };
  },
  computed: {
    currentLocale: {
        get(){
            this.locale = AppLocalStorage.has("locale")
                    ? AppLocalStorage.get("locale")
                    : undefined;

            return this.locale && this.locale === "ru" ? "ru" : "en";
        },
        set(value){
            this.locale = value;
        }

    },
    filteredLocales(){
        let allLocales = [{short: "en", full: "English"}, {short: "ru", full: "Русский"}];
        return allLocales.filter((locale) => {
            return locale.short !== this.locale;
        })
    }
  },
  methods: {
    showLanguages() {
      this.isOpened = !this.isOpened;
    },
    flag(locale){
        return FLAGS_PATH + locale + '.svg';
    },
    toggleLanguage(newLocale) {
        this.isOpened = !this.isOpened;
        this.currentLocale = newLocale;
    }
  },
};
</script>

<style lang="scss" scoped>
.switcher-container {
  width: 135px;
  height: 44px;
  padding: 5px;
  border: 1px solid black;
  display: flex;
  align-items: center;
  justify-content: flex-start;
  border-radius: 5px;
  position: relative;
  z-index: 3;
  background-color: white;

  .falgs-container {
      width: 80%;
      display: flex;
      justify-content: space-between;
      align-items: center;
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

  .vertical-divider {
    height: 25px;
    width: 1px;
    display: inline-block;
    background-color: rgba(0, 0, 0, 0.2);
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.1);
    margin: 0px 5px !important;
  }

}
.language-list {
	  position: absolute;
      width: 135px;
	  margin: 0;
      padding: 0;
      left: 0;
      border: 1px solid black;
      border-radius: 5px;
      transform: translateY(-36px);
      opacity: 0;
      transition: all 0.3s;
      transition-timing-function: ease-in-out;
      z-index: 2;
      background-color: white;

      li {
        list-style: none !important;
        padding: 5px;
        height: 40px;
        display: flex;
        align-items: center;
      }

      a {
          color: inherit;
          text-decoration: none;
      }
  }

  .language-list.opened {
      transform: translateY(0);
      opacity: 1;
  }
</style>


