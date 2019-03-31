<template>
  <div class="section padding-top padding-bottom-small background-white over-hide" id="scroll-top">
    <div class="section padding-top-bottom background-dark over-hide">
      <div class="container">
        <div class="row">
          <div class="clear"></div>
          <div class="col-lg-8 mt-lg-5 mt-xl-0">
            <div class="video-section">
              <div class="video-wrapper">
                <figure class="vimeo rounded-2 img-raised over-hide">

                  <iframe width="500" height="281" src="https://www.youtube.com/embed/yrTNDYsG-RU" frameborder="0"
                          allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>

                  </iframe>
                </figure>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0 mt-xl-4" data-scroll-reveal="enter bottom move 40px over 0.8s after 0.2s" data-scroll-reveal-id="4" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
            <div class="call-box-5 dark">
              <h4 class="color-white">Unique and truly responsive!</h4>
              <p class="mt-3 mb-5">Design must reflect the practical and aesthetic in business but above all... good design must primarily serve people. Build beautiful websites in mere minutes.</p>
              <router-link :to="{ name: 'login' }" class="btn-link btn-primary"> {{ $t('ok') }} </router-link>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</template>


