<template>
  <div>
    <header id="header">
      <div class="header-top">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6 col-sm-6 col-6 header-top-left">
              <ul>
                <li><a href="#">Visit Us</a></li>
                <li><a href="#">Buy Tickets</a></li>
              </ul>
            </div>
            <div class="col-lg-6 col-sm-6 col-6 header-top-right">
              <div class="header-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-dribbble"></i></a>
                <a href="#"><i class="fa fa-behance"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
          <div id="logo">
            <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
          </div>
          <nav id="nav-menu-container">
            <ul class="nav-menu">
              <locale-dropdown/>
              <template v-if="user" >
                <li><router-link :to="{ name: 'home' }" active-class="active">Home</router-link></li>
                <li><router-link :to="{ name: 'settings.profile' }" active-class="active">Profile Setting</router-link></li>
                <li><router-link :to="{ name: 'settings.publication' }" class="nav-link" active-class="active">Settings publication</router-link></li>
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
          </nav><!-- #nav-menu-container -->
        </div>
      </div>
    </header><!-- #header -->
    <section class="about-banner relative">
      <div class="overlay overlay-bg"></div>
      <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
          <div class="about-content col-lg-12">
            <h1 class="text-white">
              Insurance
            </h1>
            <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="insurance.html"> Insurance</a></p>
          </div>
        </div>
      </div>
    </section>
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
            appName: window.config.appName
        }),

        computed: mapGetters({
            user: 'auth/user'
        }),

        methods: {
            async logout () {
                // Log out the user.
                await this.$store.dispatch('auth/logout')

                // Redirect to login.
                this.$router.push({ name: 'login' })
            }
        }
    }
</script>
