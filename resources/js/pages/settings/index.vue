<template>
<div>
  <card>
    <div class="section over-hide">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="project-nav-wrap">
                <router-link v-for="tab in tabs" :key="tab.route" :to="{ name: tab.route }" active-class="active">
                  <div class="default-nav" >{{ tab.name }}</div>
                </router-link>
            </div>
          </div>
        </div>
      </div>
    </div>
  </card>
      <transition nive="fade" mode="out-in">
        <router-view/>
      </transition>
</div>
</template>

<script>
export default {
  middleware: 'auth',

  computed: {
    tabs () {
      return [
        {
          icon: 'user',
          name: "Профиль",
          route: 'settings.profile'
        },/*
        {
          icon: 'lock',
          name: "Расходы",
          route: 'settings.publications'
        },
        */
          {
              icon: 'lock',
              name: "Публикации ",
              route: 'settings.publication'
          }

      ]
    }
  }
}
</script>
