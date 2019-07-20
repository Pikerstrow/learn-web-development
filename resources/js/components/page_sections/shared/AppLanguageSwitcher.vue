<template>
    <div class="switcher-container">
        <img @click="switchLanguage" width="35" src="../../../../icons/ru-flag.svg">
        <i ref="arrow" class="fas fa-chevron-down"></i>
    </div>
</template>

<script>
export default {
    data(){
        return {

        }
    },
    methods: {
        switchLanguage(){
            this.$refs.arrow.style.transform = "rotate(180deg)"
        }
    }
}
</script>

<style lang="scss" scoped>
.switcher-container {
    padding: 7px;
    height: fit-content;
    border: .5px solid black;
    display: flex;
    align-items: center;
    justify-content: center;

    i {
        padding-left: 10px;
        cursor: pointer;
    }
}
</style>


