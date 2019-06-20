<template>
   <div :style="{backgroundColor: styles.backgroundColor, position: styles.position, boxShadow: styles.boxShadow}" class="d-flex align-items-center justify-content-center navbar-container">
      <div class="app-container">
         <div :style="{borderBottom: styles.borderBottom}" class="d-flex justify-content-between main-menu">
            <div class="d-flex menu-div-container">
               <div class="logo-text d-flex">
                  <div class="align-self-center logo-div">
                     <router-link :to="{name: 'main'}">
                        <img class="logo-image" src="../../../images/logo.png">
                     </router-link>
                  </div>
               </div>
            </div>
            <div class="d-flex justify-content-center align-items-center menu-div-container social-container">
               <a href="#">
                  <i class="fab fa-facebook fa-lg"></i>
               </a>
               <a href="#">
                  <i class="fab fa-twitter fa-lg"></i>
               </a>
               <a href="#">
                  <i class="fab fa-github fa-lg"></i>
               </a>
            </div>
            <div class="d-flex justify-content-end align-items-center menu-div-container">
               <div @click="toggleMenu" :class="{'active': isOpened}"
                    class="hamburger d-flex flex-column align-items-center">
                  <div :class="{'active': isOpened}" class="line"></div>
                  <div :class="{'active': isOpened}" class="line"></div>
                  <div :class="{'active': isOpened}" class="line"></div>
               </div>
            </div>
         </div>
         <div :class="{'active': isOpened}"
              class="hidden-menu d-flex flex-column justify-content-center align-items-center">
            <div class="hidden-menu-items-container">
               <ul :class="{'active': isOpened}" class="hidden-menu-ul">
                  <li @click="toggleMenu" class="hidden-menu-li">
                     <router-link tag="a" :to="{name: 'main'}">
                        Main
                     </router-link>
                  </li>
                  <li @click="toggleMenu" class="hidden-menu-li">
                     <router-link tag="a" :to="{name: 'tutorials'}">
                        Tutorials
                     </router-link>
                  </li>
                  <li @click="toggleMenu" class="hidden-menu-li">
                     <router-link tag="a" to="">
                        Guest Book
                     </router-link>
                  </li>
                  <li @click="toggleMenu" class="hidden-menu-li">
                     <router-link tag="a" to="">
                        Blog
                     </router-link>
                  </li>
               </ul>
            </div>
            <div class="hidden-menu__footer d-flex justify-content-center align-items-center">
               <img class="hidden-menu__logo" src="../../../images/logo-white.png">
            </div>
         </div>
      </div>

   </div>
</template>

<script>
    export default {
        props: {
            styles: Object,
        },
        data() {
            return {
                isOpened: false
            }
        },
        methods: {
            toggleMenu() {
                this.isOpened = !this.isOpened;
            }
        }
    }
</script>

<style lang="scss" scoped>
   .navbar-container {
      width: 100%;
      position: absolute;
      z-index: 999;
      top: 0;
      left: 0;
      background-color: transparent;
   }


   .hidden-menu {
      width: 100%;
      height: 100%;
      min-height: 300px;
      background-color: white;
      color: #636363;
      position: fixed;
      top: 0;
      right: 0;
      z-index: 99;
      transform: scale(1, 0);
      transition: .7s cubic-bezier(.77, 0, .175, 1);
      transform-origin: 100% 0;
      transition-delay: .1s;

      &__footer {
         position: absolute;
         left: 0;
         bottom: 0;
         width: 100%;
         height: 10%;
         min-height: 40px;
         background-color: #6b6b6b !important;
         transform: scale(1, 0);
         transition-duration: .3s;

      }

      &__logo {
         width: 150px;
         opacity: 0;
         transition-delay: .8s;
         transition-duration: .3s;
      }

      ul {
         margin: 0;
         padding: 0;
         font-size: 24px;
         text-align: center;

         li {
            list-style: none;
            opacity: 0;
            transition-duration: .2s;
            padding: 10px;

            a {
               text-decoration: none;
               color: inherit;
            }

         }
      }

      ul.active {
         $menu--items--count: 4;

         li {
            opacity: 1;
            transition: opacity .3s ease;
            @for $i from 0 through $menu--items--count {
               &:nth-child(#{$i}) {
                  transition-delay: .4 * $i / 8 + .5 + s;
               }
            }
         }

      }

   }

   .hidden-menu.active {
      transform: scale(1, 1);

      .hidden-menu__footer {
         transform: scale(1, 1);
      }

      .hidden-menu__logo {
         opacity: 1;
      }

   }


   .menu-div-container {
      width: 33.333333%;
      position: relative;
   }

   .logo-div a {
      margin: 0 !important;
   }

   .main-menu {
      min-height: 60px;
      background-color: transparent;
      color: black;
      padding: 10px 0px;
      border-bottom: 1px solid rgba(0, 0, 0, 0.1);
      box-shadow: 0 1px 0 rgba(255, 255, 255, 0.1);

      a {
         margin: 7px;
         color: black;
         text-decoration: none;
         text-shadow: 0 2px 3px rgba(0, 0, 0, 0.3);
         transition-duration: .3s;

         &:hover {
            transform: scale(1.1);
            color: #2f2f2f;
         }
      }

      .menu-li {
         padding: 5px 10px;
         font-family: 'Source Sans Pro', sans-serif;
         font-size: 18px;
      }

      .hamburger.active {
         position: fixed;
      }

      .hamburger {
         width: 46px;
         height: 44px;
         padding: 5px;
         border: 1px solid black;
         border-radius: 5px;
         cursor: pointer;
         position: absolute;
         z-index: 999;


         .line {
            width: 30px;
            height: 3px;
            background-color: black;
            position: absolute;
            left: 7px;
            top: 10px;
            -webkit-transition-duration: .25s;
            -moz-transition-duration: .25s;
            -o-transition-duration: .25s;
            transition-duration: .25s;
         }

         .line:nth-child(2) {
            top: 20px;
         }

         .line:nth-child(3) {
            top: 30px;
         }
      }
   }

   .logo-image {
      width: 200px;
   }

   .hamburger div.active:nth-child(1) {
      top: 20px !important;
      -webkit-transform: rotate(135deg);
      -moz-transform: rotate(135deg);
      -ms-transform: rotate(135deg);
      -o-transform: rotate(135deg);
      transform: rotate(135deg);
      -webkit-transition-duration: .25s;
      -moz-transition-duration: .25s;
      -o-transition-duration: .25s;
      transition-duration: .25s;
   }

   .hamburger div.active:nth-child(2) {
      opacity: 0;
      -webkit-transition-duration: .15s;
      -moz-transition-duration: .15s;
      -o-transition-duration: .15s;
      transition-duration: .15s;
   }

   .hamburger div.active:nth-child(3) {
      top: 20px !important;
      -webkit-transform: rotate(-135deg);
      -moz-transform: rotate(-135deg);
      -ms-transform: rotate(-135deg);
      -o-transform: rotate(-135deg);
      transform: rotate(-135deg);
      -webkit-transition-duration: .25s;
      -moz-transition-duration: .25s;
      -o-transition-duration: .25s;
      transition-duration: .25s;
   }

   @media screen and (max-width: 1024px) {
      .logo-image {
         width: 180px;
      }
   }

   @media screen and (max-width: 767px) {
      .header-background {
         width: 120px;
      }
      .social-container {
         display: none !important;
      }

   }
</style>