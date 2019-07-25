<template>
    <div class="lessons-page-container">
        <top-navbar></top-navbar>
        <router-view></router-view>


        <!-- search modal -->
        <div class="search-modal-container">
            <div class="search-from">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="search-button">
                        <i class="fas fa-search fa-lg"></i>
                    </div>
                </div>
            </div>
            <div class="search-results">

            </div>
        </div>
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
        justify-content: flex-start;
    }
    .search-modal-container {

        input {
            height: 45px;
        }

        .search-button {
            height: 45px;
            width: 45px;
            background-color: royalblue;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
            cursor: pointer;
        }
    }
</style>
