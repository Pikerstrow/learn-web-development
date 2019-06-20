<template>
   <div class="bread-crumbs-container">
      <ul class="bread-crumbs-ul">
         <li v-for="(link, index) in uriParts" :key="index" class="bread-crumb-li">
            <router-link  :to="{name: link.toLowerCase()}">
               {{ link }}
            </router-link>
            <span v-if="index < uriParts.length - 1"> / </span>
         </li>
      </ul>
   </div>
</template>

<script>
    export default {
        name: "BreadCrubps",
        props: {
            root: String
        },
        data() {
            return {
                breadCrumbsLinks: []
            }
        },
        watch: {
            '$route'(to, from){
                console.log(to);
            }
        },
        computed: {
            uriParts(){
                let uriPathParts = this.$route.path.split("/");
                // console.log(this.$route);
                // uriPathParts.unshift(this.root);
                return uriPathParts;
            }
        },
        mounted(){
            // console.log(this.uriParts);
        }
    }
</script>

<style lang="scss" scoped>

</style>