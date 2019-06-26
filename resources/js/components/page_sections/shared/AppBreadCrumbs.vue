<template>
   <div class="bread-crumbs-container">
      <ul class="bread-crumbs-ul">
         <li v-if="breadcrumbs !== []" v-for="(breadcrumb, index) in breadcrumbs" :key="index" class="bread-crumb-li">
            <router-link v-if="breadcrumb.link" :to="{name: breadcrumb.link}">{{ breadcrumb.name }}</router-link>
            <div v-else>
               <span v-if="slug">{{ slug }}</span>
               <span v-else>{{ breadcrumb.name }}</span>
            </div>
         </li>
      </ul>
   </div>
</template>

<script>
    export default {
        name: "BreadCrumbs",
        data(){
            return {
                registeredRoutes: [],


            }
        },
        computed: {
            breadcrumbs(){
                let breadcrumbs = [];

                let routeFullPath    = this.$route.fullPath;
                let routeMatch       = this.$route.matched[0].path;
                let routeParams      = this.$route.params;


                /*Adding main page to the breadcrumbs*/
                if(this.registeredRoutes && routeFullPath !== 'undefined'){
                    this.registeredRoutes.forEach(function (route) {
                        if(route.path && route.path === "/"){
                            let breadcrumb = {
                                name: route.name,
                                path: route.path
                            };
                            breadcrumbs.push(breadcrumb)
                        } else if (route.path && routeFullPath.indexOf(route.path) !== -1) {
                            let breadcrumb = {
                                name: route.name,
                                path: route.path
                            };
                            breadcrumbs.push(breadcrumb)
                        }
                    })
                    console.log(breadcrumbs)
                }





            }
        },
        mounted(){


            let availableRoutes = this.$router.options.routes;
            availableRoutes.forEach((r) => {
                let route = {
                    name: r.name,
                    path: r.path
                }
                this.registeredRoutes.push(route);
            })



        }

    }
</script>

<style lang="scss" scoped>

</style>