import Vue from 'vue'
import store from '~/store'
import router from '~/router'
import i18n from '~/plugins/i18n'
import App from '~/dashboard/App'

import BootstrapVue from 'bootstrap-vue'

Vue.use(BootstrapVue)

import '~/plugins'
import '~/dashboard/components'

Vue.config.productionTip = false

/* eslint-disable no-new */
new Vue({
  i18n,
  store,
  router,
  ...App
})
