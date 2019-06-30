<template>
  <nav aria-label="page pagination" class="pagination_links">
    <ul ref="paginationUl" v-if="data" class="pagination">
      <li :class="{'disabled': data.current_page === 1}" class="page-item">
        <router-link
          class="page-link"
          :to="{name: 'tutorials', query: {page: data.from}}"
          aria-label="Previous"
        >
          <span aria-hidden="true">&laquo;</span>
          <span class="sr-only">Previous</span>
        </router-link>
      </li>

      <li v-for="n in totalPagesNumber" :key="n" class="page-item">
        <router-link class="page-link" :to="{name: 'tutorials', query: {page: n}}">{{ n }}</router-link>
      </li>

      <li :class="{'disabled': data.current_page === data.last_page}" class="page-item">
        <router-link
          class="page-link"
          :to="{name: 'tutorials', query: {page: data.last_page}}"
          aria-label="Next"
        >
          <span aria-hidden="true">&raquo;</span>
          <span class="sr-only">Next</span>
        </router-link>
      </li>
    </ul>
  </nav>
</template>

<script>
export default {
  props: ["data"],
  data() {
    return {
      dotsPlaced: false
    };
  },
  computed: {
    totalPagesNumber() {
      return Math.ceil(this.data.total / this.data.per_page);
    }
  }
};
</script>

<style lang="scss" scoped>
.pagination_links {
  margin: 50px 0px 0px 0px;

  .disabled {
    cursor: not-allowed;
  }
}
</style>


