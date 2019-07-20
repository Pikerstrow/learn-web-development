<template>
    <div class="lessons-page-container">
        <top-navbar></top-navbar>
        <router-view></router-view>
    </div>
</template>

<script>
import LessonsTopNavbar from "../page_sections/tutorial_lessons/LessonsTopNavbar";

export default {
    components: {
        'top-navbar': LessonsTopNavbar
    }
}
</script>


<style lang="scss" scoped>
    .lessons-page-container {
        display: flex;
        flex-direction: column;
        justify-content: start;
    }
</style>
