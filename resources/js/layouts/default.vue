<template>
  <div class="main-layout">
    <div id="menu-wrap" class="cbp-af-header white-menu-background-1st-trans menu-fixed-padding-small menu-shadow bg-white">
      <navbar/>
    </div>
    <child/>
  </div>
</template>

<script>
    import Navbar from '~/components/Navbar'

    export default {
        name: 'MainLayout',

        components: {
            Navbar
        }
    }
</script>
