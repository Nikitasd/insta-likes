<template>
  <div>
    <header id="header">
      <div class="header-top">
        <b-container>
          <b-row class="align-items-center">
            <b-col cols="6" class="header-top-left">
              <ul>
                <li><a href="#">Visit Us</a></li>
                <li><a href="#">Buy Tickets</a></li>
              </ul>
            </b-col>
            <b-col cols="6" class="header-top-right">
              <div class="header-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-dribbble"></i></a>
                <a href="#"><i class="fa fa-behance"></i></a>
              </div>
            </b-col>
          </b-row>
        </b-container>
      </div>
      <b-container class="main-menu">
        <b-row class="align-items-center justify-content-between d-flex">
          <div id="logo">
            <router-link :to="{ name: 'welcome' }"><img src="/img/logo.png" alt="" title="" /></router-link>
          </div>
          <nav id="nav-menu-container">
            <ul class="nav-menu">
              <locale-dropdown/>
              <template v-if="user" >
                <li><router-link :to="{ name: 'home' }">Home</router-link></li>
                <li><router-link :to="{ name: 'settings.profile' }" >Profile Setting</router-link></li>
                <li><router-link :to="{ name: 'settings.publication' }" >Settings publication</router-link></li>
              </template>
              <template v-else>
                <li>
                  <router-link :to="{ name: 'welcome' }">Home</router-link>
                </li>
                <li>
                  <router-link :to="{ name: 'login' }" active-class="active">Login</router-link>
                </li>
              </template>
            </ul>
          </nav>
        </b-row>
      </b-container>
    </header><!-- #header -->



    <!-- start banner Area -->
    <section class="relative blog-home-banner" v-if="$route.matched[0].path != '/settings'"> <!--Не забудь о консоли. Там ошибка из-за этого--->
      <div class="overlay overlay-bg"></div>
      <div class="container">
        <div class="row">

          <div class="col-lg-1"></div>
          <div class="col-lg-3">
            <div class="about-content blog-header-content  pt-20">
              <img src="/img/blog/user-info.png" alt="">
              <a href="#"><h4>Charlie Barber</h4></a>
              <p class="text-white">
                Senior blog writer aga
              </p>
              <router-link :to="{name: 'settings.edit'}" class="genric-btn info circle">Edit</router-link>
            </div>
          </div>
          <div class="col-lg-1"></div>
          <div class="col-lg-2" v-for="(v, index) in 3">
            <div class="about-content text-center pt-80" >
              <h3 class="text-white">{{ index }}</h3>
              <a href="#" class="text-white">
                Senior blog
              </a>
            </div>
          </div>
        </div>
      </div>
      </section>


    <!-- start banner Area -->
    <section class="relative blog-home-banner" v-else>
      <div class="overlay overlay-bg"></div>
      <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
          <div class="about-content col-lg-12">
            <p class="text-white link-nav"><a @click="$router.go(-1)" href="#back" title="back">{{ $route.name }}</a></p>
          </div>
        </div>
      </div>

    </section>
    <!-- End banner Area -->
  </div>


</template>

<script>
    import { mapGetters } from 'vuex'
    import LocaleDropdown from './LocaleDropdown'

    export default {
        components: {
            LocaleDropdown
        },

        data: () => ({
            appName: window.config.appName,
        }),

        computed: mapGetters({
            user: 'auth/user'
        }),

        methods: {
            async logout() {
                // Log out the user.
                await this.$store.dispatch('auth/logout')

            }
        }
    }
</script>
