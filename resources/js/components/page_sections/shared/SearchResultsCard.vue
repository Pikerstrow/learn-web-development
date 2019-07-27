<template>
  <div class="search-result-card">
    <div class="card-num">
        {{ num }}.
    </div>
    <div class="card-text">
        <p>
      <span class="search-paragraph-heading">Tutorial:</span>
      <span class="search-result-text">PHP</span>
    </p>
    <p>
      <span class="search-paragraph-heading">Section:</span>
      <span class="search-result-text">Loops and their applies</span>
    </p>
    <p>
      <span class="search-paragraph-heading">Lesson:</span>
      <span class="search-result-text">While loop!</span>
    </p>
    <p>
      <span class="search-paragraph-heading">Context:</span>
      <span class="search-result-text">
        ...Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud...
      </span>
    </p>
    </div>
  </div>
</template>

<script>
export default {
    props: {
        num: {
            type: Number,
            required: true
        }
    }
};
</script>

<style lang="scss" scoped>
.search-result-card {
  width: 100%;
  height: auto;
  border-bottom: 1px solid white;
  margin-top: 20px;
  margin-bottom: 20px;
  line-height: 20px;
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  padding-bottom: 20px;
}
.card-num {
    margin-right: 10px;
}
.search-paragraph-heading {
    font-weight: bold;
}
</style>
