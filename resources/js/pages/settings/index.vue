<template>
<div>
    <!-- End banner Area -->

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
