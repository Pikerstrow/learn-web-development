<template>
  <div>
    <div @click="toggleSearchModal" :style="{backgroundColor: background}" class="search-container">
      <i class="fas fa-search fa-lg"></i>
    </div>

    <!-- Search modal -->
    <div :class="{'active': isModalOpened}" class="search-modal-container">
      <div @click="toggleSearchModal" class="close-modal">
        <i class="fas fa-times fa-lg"></i>
      </div>

      <div class="search-from">
          <input v-model="searchRequest" type="text" placeholder="Search for..." />
      </div>

      <div v-if="searchRequest" class="search-results">
          <h4 class="text-center">Search results</h4>

          <SearchResultsCard v-for="n in 5" :num="n" :key="n"/>

      </div>
    </div>
  </div>
</template>

<script>
import SearchResultsCard from '../shared/SearchResultsCard';

export default {
  props: {
    background: {
      type: String,
      default: "transparent"
    }
  },
  data() {
    return {
        isModalOpened: false,
        searchRequest: null
    }
  },
  methods: {
    toggleSearchModal() {
      this.isModalOpened = !this.isModalOpened;
    }
  },
  components: {
      SearchResultsCard
  }
};
</script>

<style lang="scss" scoped>
.search-container {
  width: 44px;
  height: 44px;
  padding: 5px;
  display: flex;
  justify-content: center;
  align-items: center;
  border: 1px solid black;
  border-radius: 5px;
  cursor: pointer;
}

.search-modal-container {
  position: fixed;
  top: 0;
  left: 0;
  min-width: 100vw;
  min-height: 100vh;
  background-color: rgba(33, 33, 33, 0.9) !important;
  z-index: 100;
  flex-direction: column;
  justify-content: flex-start;
  align-items: center;
  -webkit-transition: 0.3s;
    -moz-transition: 0.3s;
    -o-transition: 0.3s;
    transition: 0.3s;
  transition-timing-function: ease-in-out;
  display: flex;
  opacity: 0;
  transform: scale(0.4,0.4);

    .search-from{
        width: 70%;

        input {
            height: 45px;
            width: 100%;
            padding-left: 20px;

                 &::-webkit-input-placeholder { /* Chrome/Opera/Safari */
                    color: grey;
                    font-family: "Roboto", sans-serif;
                    text-transform: uppercase;
                    letter-spacing: 2px;
                    font-size: 15.5px;
                }
                &::-moz-placeholder { /* Firefox 19+ */
                    color: grey;
                    font-family: "Roboto", sans-serif;
                    text-transform: uppercase;
                    letter-spacing: 2px;
                    font-size: 15.5px;
                }
                &:-ms-input-placeholder { /* IE 10+ */
                    color: grey;
                    font-family: "Roboto", sans-serif;
                    text-transform: uppercase;
                    letter-spacing: 2px;
                    font-size: 15.5px;
                }
                &:-moz-placeholder { /* Firefox 18- */
                    color: grey;
                    font-family: "Roboto", sans-serif;
                    text-transform: uppercase;
                    letter-spacing: 2px;
                    font-size: 15.5px;
                }
        }

    }

  .close-modal {
      width: 45px;
      height: 45px;
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
      border: 3px solid white;
      align-self: flex-end;
      margin: 25px;
      cursor: pointer;
  }

  .search-results {
      width: 70%;
      height: calc(100vh - 220px);
      overflow: auto;
      color: white;
      border: 3px solid white;
      background-color: transparent;
      margin-top: 50px;
      padding: 20px;
  }
}


.active {
//   display: flex;
  opacity: 1;
  transform: scale(1, 1)
}

@media screen and (max-width: 767px) {
      .search-from{
    width: 90% !important;
    align-self: center;
   }
   .search-results {
      width: 90% !important;
   }

}
</style>

