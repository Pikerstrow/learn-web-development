<template>
   <div class="tutorial-block d-flex flex-column align-items-center justify-content-between">
      <div :style="{backgroundImage: styles.headerBackground}" class="tutorial-block-header d-flex flex-column align-items-center">
         <h5>{{ title }}</h5>
         <div class="tutorial-i-container d-flex flex-column align-items-center">
            <div class="tutorial-i-emblem d-flex flex-column align-items-center justify-content-center">
               <tutorial-icon :iconColor="styles.iconColor" :iconClassName="styles.iconClass"></tutorial-icon>
            </div>
         </div>
      </div>
      <div class="tutorial-block-body">
         <div class="tutorial-info-container d-flex flex-column align-items-center">
            <div class="tutorial-info">
               <p v-html="description"></p>
            </div>
            <div class="tutorial-stats text-center">
               <p>Sections: {{ info.sections }}</p>
               <p>Lessons: {{ info.lessons }}</p>
               <p>Quiz: {{ info.quiz }}</p>
               <p>Type: {{ info.type }}</p>
            </div>
         </div>
      </div>
      <div class="tutorial-block-footer d-flex justify-content-between align-items-center">
         <div class="rating d-flex flex-column align-items-center">
            <stars-rating
               :options="ratingInfo"></stars-rating>
            <small class="tutorial-rating">Average rating: {{ ratingInfo.rating }} ({{ ratingInfo.votes }})</small>
         </div>
         <div class="start-tutorial-button">
            <a href="#" class="start-button">Start learning</a>
         </div>
      </div>
   </div>
</template>

<script>
    import StarsRating from "stars-rating-component-vue";
    import TutorialIcon from "./TutorialIcon";

    export default {
        name: "TutorialCard",
        props: {
            ratingInfo: {
                type: Object,
                validator(value) {
                    if (!value.hasOwnProperty('readOnly')) {
                        value.readOnly = true
                    }
                    if (!value.hasOwnProperty('starsQuantity')) {
                        value.starsQuantity = 5
                    }
                    if (!value.hasOwnProperty('size')) {
                        value.size = 30
                    }
                    if (!value.hasOwnProperty('rating')) {
                        value.rating = 0
                    }
                    if (!value.hasOwnProperty('votes')) {
                        value.votes = 0
                    }
                    return value;
                },
                default() {
                    return {
                        rating: 0,
                        readOnly: true,
                        starsQuantity: 5,
                        size: 30,
                        votes: 0
                    }
                }
            },
            title: String,
            description: String,
            info: {
                type: Object,
                default() {
                    return {
                        sections: 0,
                        lessons: 0,
                        quiz: 0,
                        type: 'text'
                    }
                }
            },
            styles: {
                type: Object,
                default() {
                    return {
                        headerBackground: "",
                        iconClass: "",
                        iconColor: "",
                    }
                }
            }
        },
        components: {
            'stars-rating': StarsRating,
            'tutorial-icon': TutorialIcon
        }
    }
</script>

<style lang="scss" scoped>
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