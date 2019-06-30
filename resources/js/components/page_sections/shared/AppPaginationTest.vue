<template>
  <nav aria-label="page pagination" class="pagination_links">
    <ul ref="paginationUl" v-if="data" class="pagination">
      <li :class="{'disabled': data.currentPage === 1}" class="page-item">
        <span class="page-link" aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </li>

      <li
        @click="pageNumber = n"
        v-for="(link, index) in paginationLinks"
        :key="index"
        class="page-item"
      >
        <span class="page-link">{{ link.value }}</span>
      </li>

      <li :class="{'disabled': data.current_page === data.totalPages}" class="page-item">
        <span class="page-link" aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </li>
    </ul>
  </nav>
</template>

<script>
export default {
  props: {
    data: {
      type: Object,
      default: function() {
        return {
          currentPage: 1,
          onEachSide: 1,
          totalPages: 10
        };
      }
    }
  },
  data() {
    return {
      dotsPushed: false,
      pageNumber: 1
    };
  },
  computed: {
    paginationLinks() {
      let links = [];

      for (let i = 1; i <= this.data.totalPages; i++) {

        if (i <= 2 || i > this.data.totalPages - 2) {
          links.push({ value: i });
        } else if (i > 2 && i < this.pageNumber - this.data.onEachSide) {
          if (this.dotsPushed) {
            links.push({ value: "..." });
            this.dotsPushed = false;
          }
        } else if (i >= this.pageNumber - this.data.onEachSide && i <= this.pageNumber + this.data.onEachSide ) {
          links.push({ value: i });
          this.dotsPushed = false;
        } else {
          if (!this.dotsPushed) {
            links.push({ value: "..." });
            this.dotsPushed = true;
          }
        }
      }
      return links;
    }
  },
  mounted() {
    this.pageNumber = this.data.currentPage;
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


