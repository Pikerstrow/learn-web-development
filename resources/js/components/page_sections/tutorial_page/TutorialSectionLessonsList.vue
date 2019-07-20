<template>
  <div v-if="section">
    <h2>Section {{ sectionNumber }}. <span class="section-title">{{ section.attributes.title }}</span></h2>
    <div class="section-description">{{ section.attributes.description }}</div>
    <span class="divider"></span>
    <ol class="lessons-ul">
      <li v-for="(lesson, index) in section.attributes.lessons" :key="lesson.attributes.id">
        <span class="lesson-number">{{ sectionNumber }}.{{ index + 1}} </span>
        <router-link
          :to="{name: 'lesson', params: {tutorial: tutorialSlug, lesson: lesson.attributes.slug }}"
        >{{ lesson.attributes.title }}</router-link>
      </li>
    </ol>
  </div>
</template>

<script>
export default {
  props: {
    section: {
      type: Object,
      required: true
    },
    tutorialSlug: {
      type: String,
      required: true
    },
    sectionNumber: {
        type: Number,
        required: true
    }
  }
};
</script>

<style lang="scss" scoped>
h2 {
  font-size: 18px;
  font-weight: bold;
  margin: 5px 0px;

  .section-title {
      margin-left: 5px;
  }
}
.lessons-ul {
  -webkit-column-count: 3;
  -moz-column-count: 3;
  column-count: 3;
  list-style: none;

  a {
      text-decoration: none;
      color: rgb(3, 90, 221);
      padding-left: 10px;
  }
}
.section-description {
  text-align: justify;
}
.lesson-number {
    font-size: 14px;
}

@media screen and (max-width: 1100px) {
  .lessons-ul {
    -webkit-column-count: 2;
    -moz-column-count: 2;
    column-count: 2;
  }
}

@media screen and (max-width: 767px) {
  .lessons-ul {
    -webkit-column-count: 1;
    -moz-column-count: 1;
    column-count: 1;
  }
}
</style>

