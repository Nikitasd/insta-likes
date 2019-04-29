<template>
  <div class="main-layout">
    <navbar/>

      <section class="relative blog-home-banner"> <!--Не забудь о консоли. Там ошибка из-за этого--->
          <div class="overlay overlay-bg"></div>
          <div class="container">
              <div class="row">

                  <div class="col-lg-1"></div>
                  <div class="col-lg-3">
                      <div class="about-content blog-header-content pt-20">
                          <img src="/img/blog/user-info.png" alt="">
                          <h4>{{ user.username }}</h4>
                          <p class="text-white">
                              Senior blog writer aga
                          </p>
                          <router-link :to="{name: 'settings.edit'}" class="genric-btn info circle">Edit</router-link>
                      </div>
                  </div>
                  <div class="col-lg-1"></div>
                  <div class="col-lg-2" v-for="(tab) in tabs">
                      <div class="about-content text-center pt-80" >
                          <h3 class="text-white">{{ tab.count }}</h3>
                          <router-link :to="{name: tab.name}" class="text-white">
                              {{ tab.title }}
                          </router-link>
                      </div>
                  </div>
              </div>
          </div>
      </section>

     <child/>
  </div>
</template>

<script>
    import { mapGetters } from 'vuex'
    import Navbar from '~/components/Navbar'

    export default {
        middleware: 'auth',

        components: {
            Navbar
        },
        name: 'BasicLayout',

        data: function() {
            return {
                tabs: [
                    {
                        icon: 'lock',
                        title: "Публикации ",
                        name: 'publication',
                        count: 20
                    },
                    {
                        icon: 'user',
                        title: "Статьи",
                        name: 'article',
                        count: 25
                    }
                ],
            }
        },
        computed: mapGetters({
            user: 'auth/user'
        }),
    }
</script>
