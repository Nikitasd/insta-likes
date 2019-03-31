<template>
  <card class="section full-height over-hide">
    <div class="hero-center-wrap z-bigger">
      <div class="container">
        <div class="row">
          <div class="col-md-12 error-page text-center parallax-fade-top">
            <h1>404</h1>
            <p class="mt-3 mb-5">{{ $t('page_not_found') }}</p>
            <router-link :to="{ name: 'welcome' }" class="btn-link btn-primary mt-5">
              {{ $t('go_home') }}
            </router-link>
          </div>
        </div>
      </div>
    </div>
  </card>
</template>

<script>
export default {
  name: 'NotFound'
}
</script>
