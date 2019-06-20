<template>
   <i :style="{color: iconColor}"
      :class="iconClassName"
   ></i>
</template>

<script>
    export default {
        name: "faIcon",
        props: {
            iconClassName: String,
            iconColor: String
        }
    }
</script>

<style scoped>

</style>