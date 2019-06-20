<template>
   <section class="students-feedbacks d-flex flex-column align-items-center">
      <div class="app-container">
         <div class="row d-flex justify-content-center row-no-margin">
            <div class="col-12 section-heading-container d-flex flex-column align-items-center">
               <i class="fa-3x fas fa-medal"></i>
               <h2 class="text-center section-heading">Students feedbacks</h2>
               <div class="feedbacks-subtitle">
                  <p class="text-center">See what our students think about our tutorials</p>
               </div>
            </div>
         </div>
         <div class="row d-flex justify-content-center reviews-container">
            <div class="col-10 col-xl-4 d-flex flex-column align-items-center justify-content-between review-container">
               <div class="review-header">
                  <div class="rating">
                     <stars-rating :options="{starsQuantity: 5, readOnly: true, rating: customer.rating}"></stars-rating>
                  </div>
                  <div class="review-text">
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus consectetur libero quidem quo repellat.
                     A amet assumenda commodi delectus deleniti dolores earum labore nobis, pariatur provident quia quis quos sed?
                  </div>
               </div>
               <div class="review-author d-flex justify-content-start align-items-center">
                  <div class="author-avatar">
                     <div class="avatar-container">
                        <img class="user-avatar" src="https://place-hold.it/70x70">
                     </div>
                  </div>
                  <div class="author-info d-flex flex-column justify-content-between align-items-start">
                     <div class="author-name">Mister Pupkin</div>
                     <div class="review-date">5 days ago at <span class="review-link">PHP</span></div>
                  </div>
               </div>
            </div>
            <div class="col-10 col-xl-4 d-flex flex-column align-items-center justify-content-between review-container">
               <div class="review-header">
                  <div class="rating">
                     <stars-rating :options="{starsQuantity: 5, readOnly: true, rating: customer.rating}"></stars-rating>
                  </div>
                  <div class="review-text">
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus consectetur libero quidem quo repellat.
                     A amet assumenda commodi delectus deleniti dolores earum labore nobis, pariatur provident quia quis quos sed?
                  </div>
               </div>
               <div class="review-author d-flex justify-content-start align-items-center">
                  <div class="author-avatar">
                     <div class="avatar-container">
                        <img class="user-avatar" src="https://place-hold.it/70x70">
                     </div>
                  </div>
                  <div class="author-info d-flex flex-column justify-content-between align-items-start">
                     <div class="author-name">Mister Pupkin</div>
                     <div class="review-date">5 days ago at <span class="review-link">HTML</span></div>
                  </div>
               </div>
            </div>
            <div class="col-10 col-xl-4 d-flex flex-column align-items-center justify-content-between review-container">
               <div class="review-header">
                  <div class="rating">
                     <stars-rating :options="{starsQuantity: 5, readOnly: true, rating: customer.rating}"></stars-rating>
                  </div>

                  <div class="review-text">
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus consectetur libero quidem quo repellat.
                     A amet assumenda commodi delectus deleniti dolores earum labore nobis, pariatur provident quia quis quos sed?
                  </div>
               </div>
               <div class="review-author d-flex justify-content-start align-items-center">
                  <div class="author-avatar">
                     <div class="avatar-container">
                        <img class="user-avatar" src="https://place-hold.it/70x70">
                     </div>
                  </div>
                  <div class="author-info d-flex flex-column justify-content-between align-items-start">
                     <div class="author-name">Mister Pupkin</div>
                     <div class="review-date">5 days ago at <span class="review-link">PHP</span></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row d-flex justify-content-center more-reviews-container">
            <div class="col-12 d-flex justify-content-center align-items-center">
               <div class="start-tutorial-button">
                  <a href="#" class="start-button">More reviews</a>
               </div>
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
                customer: {
                    rating: 4.5
                }
            }
        },
        components: {
            'stars-rating': StarsRating
        }
    }
</script>

<style lang="scss" scoped>
   .students-feedbacks {
      background-color: white;
      padding-top: 50px;
      padding-bottom: 100px;

      .review-container {
         margin-top: 30px;
      }

      .rating {
         margin-bottom: 10px;
      }
      .review-text {
         font-size: 16px;
         line-height: 25px;
         margin-bottom: 5px;
         color: #949494;
         font-style: italic;
         text-align: justify;
      }

      .review-link {
         color: darkgreen;
         font-weight: bold;
         font-size: 16px;
      }

      .review-author {
         width: 100%;
         margin-top: 10px;

         .author-name {
            font-size: 18px;
            line-height: 18px;
            font-weight: bold;
         }

         .review-date {
            font-size: 15px;
            color: #949494;
            font-style: italic;
         }
      }

      .avatar-container {
         width: 80px;
         height: 80px;
         margin-right: 10px;

         .user-avatar {
            border-radius: 50%;
         }
      }

      i {
         margin-bottom: 15px;
      }

      h2.section-heading {
         font-family: 'Raleway', sans-serif;
         line-height: 1;
         font-size: 36px;
         font-weight: bold;
         margin-bottom: 10px;
         color: black;
      }

      .feedbacks-subtitle {
         width: 100%;
         p {
            font-family: 'Raleway', sans-serif;
            line-height: 1.8em;
            font-size: 22px;
         }
      }

      .start-tutorial-button {
         margin-top: 80px;
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
            color: #dcb536;
            border: 1px solid #dcb536;
         }

      }
   }
   @media screen and (max-width: 767px) {
      .feedbacks-subtitle p {
         font-size: 18px !important;
         line-height: 1.1 !important;
      }

      .section-heading-container {
         margin-bottom: 10px;
      }

      .review-container {
         position: relative;
         margin-bottom: 40px;

         &:after {
            content: "";
            display: block;
            width: 90%;
            height: 1px;
            background-color: lightgrey;
            bottom: -10px;
            position: absolute;
            border-bottom: .5px solid rgba(0, 0, 0, 0.1);
            box-shadow: 0 1px 0 rgba(255, 255, 255, 0.1);
         }
      }

   }

   @media screen and (max-width: 450px) {
      .review-container {
         padding: 0px 20px;
      }

   }
</style>