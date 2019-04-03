<template>
  <div class="section full-height over-hide" >
    <div class="hero-center-wrap z-bigger" v-if="!isExist">
      <form @submit.prevent="login" @keydown="form.onKeydown($event)">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-4 text-center parallax-fade-top">
              <div class="main-title on-light text-center mb-0">
                <h4>Добро пожаловать</h4>
                <div class="main-subtitle-bottom smaller mt-5" > Для входа/регистрации введите имя пользователя.</div>
              </div>
              <div class="subscribe-box-1 light for-hero mt-5">
                <input v-model="form.name" :class="{ 'is-invalid': form.errors.has('name') }" class="form-control" name="name" placeholder="Пример: nikitatest">
                <has-error :form="form" field="name"/>
              </div>
              <div class="clear"></div>
              <v-button :loading="form.busy" class="btn btn-round btn-long mt-4 mb-3">
                {{ $t('login') }}
              </v-button>
              <div class="clear"></div>
              <p class="color-dark p-0 m-0 list-inline-item"><small>Dont have an account yet?</small></p>
              <a href="create-account.html" class="btn-link btn-primary list-inline-item p-0 m-0 ml-1"><small>create account</small></a>
            </div>
          </div>
        </div>
      </form>
    </div>
    <card v-else>
      <div class="row justify-content-center" >
        <div class="col-lg-5 col-md-12">
          <div class="section drop-shadow rounded">
            <div class="blog-box-1 blog-home background-white over-hide">
              <img src="https://yt3.ggpht.com/a-/AAuE7mDaIPSwLi2eUtSdUZ0Knhmpfg6vTCe09VKiLw=s900-mo-c-c0xffffffff-rj-k-no" class="blog-home-img">
              <div class="padding-in">
                <p class="mt-4">arathon. 👠 “My assistant calls it my world tour, which I love, because it sounds like I’m a rapper,” Lindsay says of her fashion month marathon.
                  Lindsay started out as a Teen Vogue (@teenvogue) intern, and as newly appointed editor-in-chief she’s hoping to bring new energy to the magazine.
                  “It’s been about 10 years [since being an intern]. In that time,
                  I’ve dreamed about so many things to change and to make fresh and inclusive,” she says. As an intern, Lindsay learned some valuable lessons e
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="sidebar-box background-white drop-shadow rounded">


            <p class="mb-3 text-dark">Чтобы избегать постоянно этой проверки, Вам необходимо поставить пароль</p>
            <div class="clear"></div>
            <p class="mb-3">Вы должны поставить лайк. Для подтверждения, что это Ваш аккаунт: {{ form.login }}</p>
            <div class="clear"></div>
            <a href="https://www.instagram.com/p/BuR2C3eHn96/" target="_blank">
              https://www.instagram.com/p/BuR2C3eHn96/
            </a>
            <div class="separator-wrap my-5">
              <span class="separator"><span class="separator-line dashed"></span></span>
            </div>
            <p class="text-danger"></p>
            <button class="btn btn-primary btn-round" type="button" @click="like">
              Лайк поставил
            </button>
          </div>
        </div>
      </div>
    </card>
  </div>
</template>

<script>
    import Form from 'vform'

    export default {
        middleware: 'guest',

        metaInfo () {
            return { title: this.$t('login') }
        },

        data: () => ({
            form: new Form({
                name: '',
            }),
            remember: false,
            isExist: false,
            formData: {},
        }),

        methods: {
            async login () {
                this.formData = await this.form.post('/api/login')

                this.isExist = true;
            },
           async like() {

               // Save the token.
               this.$store.dispatch('auth/saveToken', {
                   token: this.formData.data.token,
                   remember: this.remember
               })

               // Fetch the user.
               await this.$store.dispatch('auth/fetchUser')
                // Redirect home.
                this.$router.push({ name: 'home' })
            },

            async register () {
                // Register the user.
                const { data } = await this.form.post('/api/register')

                // Log in the user.
                const { data: { token } } = await this.form.post('/api/login')

                // Save the token.
                this.$store.dispatch('auth/saveToken', { token })

                // Update the user.
                await this.$store.dispatch('auth/updateUser', { user: data })

                // Redirect home.
              //  this.$router.push({ name: 'home' })
            }

        }
    }
</script>
