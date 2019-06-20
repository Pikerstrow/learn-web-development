<template>
   <section class="tutorials-info-section d-flex flex-column align-items-center">
      <div class="app-container">
         <div class="row d-flex justify-content-center row-no-margin">
            <div class="col-12 section-heading-container">
               <h2 class="text-center section-heading">Available tutorials</h2>
            </div>
         </div>
         <div class="row d-flex justify-content-between tutorials-list-container row-no-margin">

            <div class="tutorial-block d-flex flex-column align-items-center justify-content-between">
               <div class="tutorial-block-header header-html d-flex flex-column align-items-center">
                  <h5>HTML 5</h5>
                  <div class="tutorial-i-container d-flex flex-column align-items-center">
                     <div class="tutorial-i-emblem d-flex flex-column align-items-center justify-content-center">
                        <i class="fa-10x fab fa-html5 i-html"></i>
                     </div>
                  </div>
               </div>
               <div class="tutorial-block-body">
                  <div class="tutorial-info-container d-flex flex-column align-items-center">
                     <div class="tutorial-info">
                        <p>
                           HTML is the very first technology, that everyone who wants to learn web development should
                           know.
                           This tutorial is made for beginners who want to start learning web development from the
                           scratch!
                        </p>
                     </div>
                     <div class="tutorial-stats text-center">
                        <p>Sections: 4</p>
                        <p>Lessons: 18</p>
                        <p>Quiz: 4</p>
                        <p>Type: text</p>
                     </div>
                  </div>
               </div>
               <div class="tutorial-block-footer d-flex justify-content-between align-items-center">
                  <div class="rating d-flex flex-column align-items-center">
                     <stars-rating
                        :options="{readOnly:true, rating: tutorial.rating, starsQuantity: 5, size: 30}"></stars-rating>
                     <small class="tutorial-rating">Average rating: {{ tutorial.rating }} (35)</small>
                  </div>
                  <div class="start-tutorial-button">
                     <a href="#" class="start-button">Start learning</a>
                  </div>
               </div>
            </div>

            <div class="tutorial-block d-flex flex-column align-items-center justify-content-between">
               <div class="tutorial-block-header header-css d-flex flex-column align-items-center">
                  <h5>CSS 3</h5>
                  <div class="tutorial-i-container d-flex flex-column align-items-center">
                     <div class="tutorial-i-emblem d-flex flex-column align-items-center justify-content-center">
                        <i class="fa-10x fab fa-css3-alt i-css"></i>
                     </div>
                  </div>
               </div>
               <div class="tutorial-block-body">
                  <div class="tutorial-info-container d-flex flex-column align-items-center">
                     <div class="tutorial-info">
                        <p>
                           CSS is the second of the two core technologies for building web pages and describes how html
                           elements
                           should be displayed on screens. This tutorial is well suited for those who are just finished
                           learn
                           html and is about to start learning css!
                        </p>
                     </div>
                     <div class="tutorial-stats text-center">
                        <p>Sections: 4</p>
                        <p>Lessons: 18</p>
                        <p>Quiz: 4</p>
                        <p>Type: text</p>
                     </div>
                  </div>
               </div>
               <div class="tutorial-block-footer d-flex justify-content-between align-items-center">
                  <div class="rating d-flex flex-column align-items-center">
                     <stars-rating
                        :options="{readOnly:true, rating: tutorial.rating, starsQuantity: 5, size: 30}"></stars-rating>
                     <small class="tutorial-rating">Average rating: {{ tutorial.rating }} (35)</small>
                  </div>
                  <div class="start-tutorial-button">
                     <a href="#" class="start-button">Start learning</a>
                  </div>
               </div>
            </div>

            <div class="tutorial-block d-flex flex-column align-items-center justify-content-between">
               <div class="tutorial-block-header header-js d-flex flex-column align-items-center">
                  <h5>JavaScript</h5>
                  <div class="tutorial-i-container d-flex flex-column align-items-center">
                     <div class="tutorial-i-emblem d-flex flex-column align-items-center justify-content-center">
                        <i class="fa-7x fab fa-js i-js"></i>
                     </div>
                  </div>
               </div>
               <div class="tutorial-block-body">
                  <div class="tutorial-info-container d-flex flex-column align-items-center">
                     <div class="tutorial-info">
                        <p>
                           JavaScript is one of the most popular today's programming language which is widely used in
                           web development.
                           This tutorial is made for beginners who has no experience in programming but want to start
                           learn JavaScript.
                        </p>
                     </div>
                     <div class="tutorial-stats text-center">
                        <p>Sections: 4</p>
                        <p>Lessons: 18</p>
                        <p>Quiz: 4</p>
                        <p>Type: text</p>
                     </div>
                  </div>
               </div>
               <div class="tutorial-block-footer d-flex justify-content-between align-items-center">
                  <div class="rating d-flex flex-column align-items-center">
                     <stars-rating
                        :options="{readOnly:true, rating: tutorial.rating, starsQuantity: 5, size: 30}"></stars-rating>
                     <small class="tutorial-rating">Average rating: {{ tutorial.rating }} (35)</small>
                  </div>
                  <div class="start-tutorial-button">
                     <a href="#" class="start-button">Start learning</a>
                  </div>
               </div>
            </div>

            <div class="tutorial-block d-flex flex-column align-items-center justify-content-between">
               <div class="tutorial-block-header header-php d-flex flex-column align-items-center">
                  <h5>PHP</h5>
                  <div class="tutorial-i-container d-flex flex-column align-items-center">
                     <div class="tutorial-i-emblem d-flex flex-column align-items-center justify-content-center">
                        <i class="fa-7x fab fa-php i-php"></i>
                     </div>
                  </div>
               </div>
               <div class="tutorial-block-body">
                  <div class="tutorial-info-container d-flex flex-column align-items-center">
                     <div class="tutorial-info">
                        <p>
                           PHP is a general-purpose programming language which was designed and widely used in
                           "server-side" web development.
                           This tutorial will introduce you with PHP and teach how to build web pages dynamically!
                        </p>
                     </div>
                     <div class="tutorial-stats text-center">
                        <p>Sections: 4</p>
                        <p>Lessons: 18</p>
                        <p>Quiz: 4</p>
                        <p>Type: text</p>
                     </div>
                  </div>
               </div>
               <div class="tutorial-block-footer d-flex justify-content-between align-items-center">
                  <div class="rating d-flex flex-column align-items-center">
                     <stars-rating
                        :options="{readOnly:true, rating: tutorial.rating, starsQuantity: 5, size: 30}"></stars-rating>
                     <small class="tutorial-rating">Average rating: {{ tutorial.rating }} (35)</small>
                  </div>
                  <div class="start-tutorial-button">
                     <a href="#" class="start-button">Start learning</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="row d-flex justify-content-center row-no-margin">
            <div class="col-12 d-flex justify-content-center align-items-center">
               <a href="#" class="more">more...</a>
            </div>
         </div>
      </div>
   </section>
</template>


<script>
    import StarsRating from "stars-rating-component-vue";

    export default {
        data() {
            return {
                tutorial: {
                    rating: 4.6
                }
            }
        },
        components: {
            'stars-rating': StarsRating
        }
    }
</script>

<style lang="scss" scoped>

   a.more {
      margin-top: 40px;
      text-decoration: none;
      color: #484848;
      font-size: 20px;
      text-transform: uppercase;
      padding: 10px 20px;
      transition-duration: .3s;

      &:hover {
         color: royalblue;
      }
   }

   .tutorials-info-section {
      padding-top: 50px;
      padding-bottom: 50px;
      background-color: whitesmoke;

   }

   .tutorial-block {
      height: fit-content;
      width: 49%;
      min-height: 660px;
      background-color: white;
      transition-duration: .3s;
      margin-top: 50px;
      -webkit-box-shadow: 0 0 35px 0 rgba(0, 0, 0, .13);
      -moz-box-shadow: 0 0 35px 0 rgba(0, 0, 0, .13);
      box-shadow: 0 0 35px 0 rgba(0, 0, 0, .13);

      &:hover {
         -webkit-box-shadow: 0 5px 35px 10px rgba(0, 0, 0, .23);
         -moz-box-shadow: 0 5px 35px 10px rgba(0, 0, 0, .23);
         box-shadow: 0 5px 35px 10px rgba(0, 0, 0, .23);
      }

      .header-html {
         background-image: linear-gradient(to top, #b73e3e, #b23b3b, #ae3837, #a93434, #a53131);
      }

      .header-js {
         background-image: linear-gradient(to right top, #f0c837, #f4cc2f, #f8d026, #fbd419, #ffd800);
      }

      .header-css {
         background-image: linear-gradient(to right top, #006eba, #0078c2, #0083ca, #008dd2, #0098d9);
      }

      .header-php {
         background-image: linear-gradient(to bottom, #777bb7, #7276b5, #6d71b2, #676cb0, #6267ad);
      }

      .tutorial-block-header {
         width: 100%;
         height: 140px;
         position: relative;
         padding: 15px;

         h5 {
            font-size: 30px;
            font-weight: bold;
            color: white;
         }

         .tutorial-i-container {
            width: 100%;

            .tutorial-i-emblem {
               position: absolute;
               width: 180px;
               height: 180px;
               background-color: white;
               border-radius: 50%;

               &:after {
                  content: "";
                  display: block;
                  width: 150%;
                  height: 2px;
                  background-color: lightgrey;
                  bottom: -10px;
                  position: absolute;
               }
            }

            i.i-html {
               color: #e02e00;
            }

            i.i-css {
               color: #006eba;
            }

            i.i-php {
               color: #777bb3;
            }

            i.i-js {
               color: #f1d63b;
            }
         }
      }

      .tutorial-block-body {
         width: 100%;
         position: relative;
         padding: 25px;
         padding-top: 130px;

         .tutorial-info {
            text-align: justify;
            font-size: 16.5px;
            line-height: 1.2;
         }

         .tutorial-stats {
            p {
               font-size: 18px;
               line-height: 25px;
               margin-bottom: 5px;
               color: #949494;
            }
         }
      }

      .tutorial-block-footer {
         padding: 25px;
         width: 100%;
         height: fit-content;

         .tutorial-rating {
            color: #949494;
            font-size: 15px;
            margin-top: 3px;
         }

         .start-button {
            color: #949494;
            text-transform: uppercase;
            font-size: 18px;
            text-decoration: none;
            padding: 10px 15px;
            border: 1px solid #949494;
            transition-duration: .3s;

            &:hover {
               color: #949494;
               text-decoration: none;
               color: #a53131;
               border: 1px solid #a53131;
            }

         }
      }

   }


   @media screen and (max-width: 992px) {
      .tutorial-block {
         width: 95%;
      }
      .tutorials-list-container {
         justify-content: center !important;
      }
      .tutorial-block-footer {
         flex-direction: column !important;

         .rating {
            margin-bottom: 25px;
         }
      }

   }

   @media screen and (max-width: 767px) {
      h2.section-heading {
         font-size: 32px !important;
      }

      .section-heading-container {
         margin-bottom: 10px;
      }

   }

   @media screen and (max-width: 450px) {
      h2.section-heading {
         font-size: 28px !important;
      }

      .tutorial-info p {
         font-size: 17px;
         line-height: 22px;
      }

   }


</style>