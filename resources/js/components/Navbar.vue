<template>
  <nav class="navbar navbar-expand-lg navbar-light bg-inverse bg-faded">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false">
        <span class="navbar-toggler-icon"/>
      </button>

      <a class="navbar-brand" href="index.html">
        <img src="http://spa/img/logo.png" alt="" class="">
      </a>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavMenuMain">

        <ul class="navbar-nav ml-auto">
          <locale-dropdown/>

          <li class="nav-item">
            <router-link to="/" class="nav-link">Home</router-link>
          </li>
          <li class="nav-item">
            <router-link to="/page" class="nav-link">Page</router-link>
          </li>
          <li class="nav-item">
            <router-link to="/page/detail" class="nav-link">Page Detail</router-link>
          </li>
          <li class="nav-item">
            <router-link to="/page/add" class="nav-link">Page Add</router-link>
          </li>

          <li class="nav-item">
            <router-link :to="{ name: 'login' }" class="nav-link" >Login</router-link>
          </li>

          <li class="nav-item">
            <router-link to="/profile" class="nav-link" >Profile</router-link>
          </li>
          <li class="nav-item">
            <router-link :to="{ name: 'settings.profile' }" class="nav-link" >Profile Setting</router-link>
          </li>
          <li class="nav-item">
            <router-link :to="{ name: 'settings.publication' }" class="nav-link" >Settings publication</router-link>
          </li>
        </ul>
      </div>

    </div>
  </nav>


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
