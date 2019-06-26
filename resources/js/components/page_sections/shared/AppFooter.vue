<template>
   <section class="footer-section d-flex flex-column align-items-center">
      <div class="app-container">
         <div class="row">
            <div class="col-12 col-lg-4 d-flex flex-column justify-content-start align-items-start">
               <div class="logo-container">
                  <img class="logo-image logo-footer" src="../../../../images/logo-white.png">
               </div>
               <div class="site-description">
                  <p>
                     <b>Learn Web Development</b> is a place where you can start to learn web development <span class="highlight">for free.</span>
                  </p>
                  <p>
                     Since we keep the site on a <span class="highlight">volunteer basis</span>, we do not have as much material as other more popular
                     resources. But we will add new lessons as often as possible.
                  </p>
                  <p>
                     All our tutorials are under <a href="https://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons BY-NC-SA 4.0 International License.</a>
                  </p>
               </div>
               <div class="d-flex justify-content-start social-share-container">
                  <div class="facebook-buttons">
                     <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width=""
                          data-layout="button" data-action="like" data-size="large" data-show-faces="true" data-share="true">
                     </div>
                  </div>
                  <div class="tweeter-button" style="margin-left: 3px;">
                     <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-size="large" data-lang="en" data-show-count="false">Tweet</a>
                  </div>
               </div>
            </div>
            <div class="col-12 col-lg-4 d-flex flex-column justify-content-start align-items-center footer-column">
               <h4>Follow us on</h4>
               <div class="social-list d-flex justify-content-between align-items-center">
                  <a href="">
                     <div class="social-logo social-logo-tweeter d-flex justify-content-center align-items-center">
                        <i class="fab fa-twitter twitter-logo fa-2x"></i>
                     </div>
                  </a>
                  <a href="">
                     <div class="social-logo social-logo-facebook d-flex justify-content-center align-items-center">
                        <i class="fab fa-facebook-f facebook-logo fa-2x"></i>
                     </div>
                  </a>
                  <a href="">
                     <div class="social-logo social-logo-youtube d-flex justify-content-center align-items-center">
                        <i class="fab fa-youtube youtube-logo fa-2x"></i>
                     </div>
                  </a>
               </div>
            </div>
            <div class="col-12 col-lg-4 d-flex flex-column justify-content-start align-items-center footer-column">
               <h4>Support us</h4>
               <p class="support-us">
                  If this website <span class="highlight">is valuable to you</span>,  you can always <span class="highlight">support us</span> by buying us a cup of a coffee :)
               </p>
               <p style="margin-top: 20px;">
                  <a class="bmc-button d-flex justify-content-between align-items-center" target="_blank" href="https://www.buymeacoffee.com/pikerstrow">
                     <img src="https://www.buymeacoffee.com/assets/img/BMC-btn-logo.svg" alt="Buy me a coffee">
                     <span style="margin-left:5px">Buy us a coffee</span>
                  </a>
               </p>

            </div>
         </div>
      </div>
      <div class="footer-footer d-flex flex-column align-items-center">
         <div class="app-container">
            <div class="row">
               <div class="col-12 d-flex justify-content-center align-items-center">
                  <p class="text-center">Learn Web Development by Oleksandr Mishchuk! All rights reserved! &copy; {{ year }}</p>
               </div>
            </div>
         </div>
      </div>
   </section>
</template>

<script>
    export default {
        name: "Footer",
        data() {
            return {

            }
        },
        computed: {
            year() {
                let now = new Date();
                return now.getFullYear();
            }
        }
    }
</script>

<style lang="scss" scoped>
   .footer-section {
      background-color: #363636;
      padding-top: 50px;

      .social-share-container {
         width: 100%;
         margin-bottom: 30px;
         margin-top: 10px;
      }

      .highlight {
         color: #70e065;
      }

      .logo-footer {
         width: 250px;
      }

      h4 {
         font-family: "Roboto", sans-serif;
         letter-spacing: 1px;
         margin-bottom: 25px;
         color: #a8a8a8;
         font-size: 22px;
         line-height: 1.2;

      }

      p, p.support-us{
         color: #a8a8a8;
         font-size: 16px;
         line-height: 1.2;
         text-align: justify;
      }

      .site-description {
         padding: 30px 0px;
         padding-bottom: 0;


         a {
            text-decoration: none;
            color: #36a3f5;

            &:hover {
               color: #36a3f5;
               text-decoration: none;
            }
         }
      }

      .social-list {
         .social-logo {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            border: 2px solid #a8a8a8;
            margin: 0px 10px;
            transition-duration: .3s;
         }
         a {
            text-decoration: none;
            color: #a8a8a8;

            &:hover {
               .social-logo {
                  background-color: white;
               }

               .social-logo-tweeter {
                  border: 2px solid #4cc6ea;
               }

               .social-logo-facebook {
                  border: 2px solid #157dc3;
               }

               .social-logo-youtube {
                  border: 2px solid #f8251c;
               }

               .twitter-logo {
                  color: #4cc6ea;
               }
               .facebook-logo {
                  color: #157dc3;
               }
               .youtube-logo {
                  color: #f8251c;
               }
            }

            i {
               transition-duration: .3s;
            }

         }
      }

      .footer-footer {
         background-color: #252525;
         width: 100%;
         padding: 10px 0px;

         p {
            color: white;
            margin: 0;
         }
      }
   }

   .bmc-button img {
      width: 27px !important;
      margin-bottom: 1px !important;
      box-shadow: none !important;
      border: none !important;
      vertical-align: middle !important;
   }

   .bmc-button {
      line-height: 36px !important;
      /*height: 37px !important;*/
      text-decoration: none !important;
      display: inline-flex !important;
      color: #ffffff !important;
      border: 1px solid #ffffff !important;
      background-color: #FF813F !important;
      /*background-color: #FF813F !important;*/
      /*border-radius: 3px !important;*/
      /*border: 1px solid transparent !important;*/
      padding: 5px 25px !important;
      font-size: 22px !important;
      letter-spacing: 0.6px !important;
      margin: 0 auto !important;
      font-family: 'Cookie', cursive !important;
      -webkit-box-sizing: border-box !important;
      box-sizing: border-box !important;
      -o-transition: 0.3s all linear !important;
      -webkit-transition: 0.3s all linear !important;
      -moz-transition: 0.3s all linear !important;
      -ms-transition: 0.3s all linear !important;
      transition: 0.3s all linear !important;
   }

   .bmc-button:hover, .bmc-button:active, .bmc-button:focus {
      text-decoration: none !important;
      opacity: 0.85 !important;
      color: #ffffff !important;
   }

   @media screen and (max-width: 992px) {
      .footer-column {
            margin-top: 40px !important;
      }
      .logo-container {
         align-self: center !important;
      }

   }

</style>