<template>
  <div v-if="section">
    <h2>{{ section.attributes.title }}</h2>
    <div class="section-description">
        {{ section.attributes.description }}
    </div>
    <ul class="lessons-ul">
        <li v-for="lesson in section.attributes.lessons" :key="lesson.attributes.id">{{ lesson.attributes.title }}</li>
    </ul>
  </div>
</template>

<script>
export default {
    props: {
        section: {
            type: Object,
            required: true
        }
    },
    mounted(){
        console.log(this.section)
    }
};
</script>

<style lang="scss" scoped>
.lessons-ul {
  -webkit-column-count: 3;
  -moz-column-count: 3;
  column-count: 3;
}
</style>

