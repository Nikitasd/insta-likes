<template>
  <div class="main-layout">
      <navbar/>
      <!-- start banner Area -->
      <section class="relative blog-home-banner">
          <div class="overlay overlay-bg"></div>
          <div class="container">
              <div class="row d-flex align-items-center justify-content-center">
                  <div class="about-content col-lg-12">
                      <p class="text-white link-nav"><a @click="$router.go(-1)" href="#back" title="back">{{ $route.name }}</a></p>
                  </div>
              </div>
          </div>
      </section>

      <router-view></router-view>
  </div>
</template>

<script>
    import Navbar from '~/dashboard/components/shared/Navbar'

    export default {
        name: 'MainLayout',

        components: {
            Navbar
        }
    }
</script>
