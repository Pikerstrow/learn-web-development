<template>
   <section class="motivation-section d-flex flex-column align-items-center">
      <div class="app-container">
         <div class="row d-flex justify-content-center align-items-center">
            <div class="col-12 section-heading-container">
               <h2 class="text-center section-heading">Be persistent! Never give up! </h2>
            </div>
         </div>
         <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center">
               <div class="speech-container d-flex flex-column justify-content-between align-items-center">
                  <div class="speech col-12 col-lg-9">
                     <i class="fas fa-10x fa-quote-left motivation-quote"></i>
                     <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aspernatur consequatur cum
                        cumque deserunt dolores earum explicabo fuga fugit harum ipsam minima, nostrum, optio
                        perspiciatis porro quam quidem soluta vero.
                     </p>
                     <p>
                        Aperiam aspernatur deserunt dolores explicabo facilis nobis perspiciatis, quaerat quas suscipit
                        vel. Ab aperiam, assumenda, cum deserunt distinctio dolorum et ex hic laborum molestias mollitia
                        nam natus neque perspiciatis, quidem!
                     </p>
                     <p>
                        Ad at consequatur fugiat magnam numquam odio sed! Ab beatae dignissimos esse est eum, ipsa
                        laudantium necessitatibus nulla omnis pariatur perferendis quisquam quo quod reiciendis rem vero
                     </p>
                  </div>
                  <div class="col-12 col-lg-9">
                     <div class="author-container d-flex justify-content-end align-items-center">
                        <div class="speech-author d-flex flex-column justify-content-end align-items-center">
                           <div class="author-name">
                              Oleksandr Mishchuk
                           </div>
                           <div class="author-job">
                              Founder of "Learn Web Development"
                           </div>
                        </div>
                        <div class="author-avatar">
                           <img width="80" src="../../../../images/author-avatar.jpg">
                        </div>
                     </div>
                  </div>


               </div>
            </div>
         </div>
      </div>
   </section>
</template>

<script>
    export default {
        name: "FromTheFounder"
    }
</script>

<style lang="scss" scoped>
   .motivation-section {
      padding-top: 50px;
      padding-bottom: 50px;
      background-color: whitesmoke;

      .speech {
         background-color: white;
         padding: 30px;
         border-radius: 15px;
         position: relative;

         .motivation-quote {
            position: absolute;
            top: 5px;
            left: 30px;
            color: rgba(0, 94, 255, .05);
         }

         &:after {
            content: '';
            display: block;
            width: 20px;
            height: 20px;
            background-color: white;
            transform: rotate(45deg);
            position: absolute;
            right: 250px;
            bottom: -10px;
         }

         p {
            z-index: 2;
            position: relative;
            font-size: 22px;
            /*font-size: 18px;*/
            /*font-style: italic;*/
            font-family: 'Marck Script', cursive;
            line-height: 1.2;
            margin-bottom: 15px;
            color: #636363;
            text-align: justify;
            text-indent: 50px;
         }
      }

      .author-container {
         margin-top: 20px;
         padding: 0px 30px;

         .author-name {
            font-size: 21px;
            font-weight: bold;
            font-family: "Roboto", sans-serif;
            letter-spacing: 2px;
            position: relative;
            color: #3e3e3e;

            &:before {
               content: '';
               display: block;
               width: 40px;
               height: 1px;
               background-color: #3e3e3e;
               position: absolute;
               left: -45px;
               top: 50%;
            }
         }

         .author-job {
            font-size: 15px;
            font-style: italic;
            color: #858585;
         }

         .author-avatar img {
            border-radius: 50%;
            margin-left: 10px;
         }
      }

   }
</style>