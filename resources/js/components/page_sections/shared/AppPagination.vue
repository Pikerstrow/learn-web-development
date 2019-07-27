<template>
  <nav v-if="this.totalPagesNumber > 2" aria-label="page pagination" class="pagination_links">
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

      <li v-for="(link, index) in paginationLinks" :key="index" class="page-item">
        <router-link v-if="link.value !== '...'" :to="{name: 'tutorials', query: {page: link.value}}" class="page-link" >{{ link.value }}</router-link>
        <span v-else class="page-link">{{ link.value }}</span>
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
      dotsPushed: false,
      onEachSide: 1
    };
  },
  computed: {
    totalPagesNumber() {
      return Math.ceil(this.data.total / this.data.per_page);
    },
    paginationLinks() {
      let links = [];

      if (this.totalPagesNumber > 9) {

        for (let i = 1; i <= this.totalPagesNumber; i++) {
          if (i <= 2 || i > this.totalPagesNumber - 2) {
            links.push({ value: i });
            this.dotsPushed = false;
          } else if (i > 2 && i < this.data.current_page - this.onEachSide) {

            if (!this.dotsPushed) {
              links.push({ value: "..." });
              this.dotsPushed = true;
            }

          } else if (i >= this.data.current_page - this.onEachSide && i <= this.data.current_page + this.onEachSide) {
            links.push({ value: i });
            this.dotsPushed = false;
          } else {
            if (!this.dotsPushed) {
              links.push({ value: "..." });
              this.dotsPushed = true;
            }
          }
        }
      } else {
          for (let i = 1; i <= this.totalPagesNumber; i++) {
              links.push({ value: i });
          }
      }
      return links;
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


