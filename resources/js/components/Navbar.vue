<template>
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
                <li><router-link :to="{ name: 'article' }" >Article users</router-link></li>
                <li><router-link :to="{ name: 'publication' }" >Publication users</router-link></li>
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
