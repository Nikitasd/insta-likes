<template>
  <section class="home-about-area pt-100">
    <div class="container-fluid">
      <div class="row align-items-center justify-content-left">
        <div class="col-lg-6 col-md-6 col-sm-6 c home-about-left">
          <h1>
            Did not find your Package? <br>
            Feel free to ask us. <br>
            We‘ll make it for you
          </h1>
          <p>
            inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed.
          </p>
          <a href="#" class="primary-btn text-uppercase">request custom price</a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 ol-xs-6 home-about-right no-padding">

          <form @submit.prevent="login" @keydown="form.onKeydown($event)" class="form-wrap">
            <h3 class="text-center mb-40">Введите ваш Логин</h3>
            <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed.
            </p>
            <div class="input-group d-flex flex-row">
              <input v-model="form.username" :class="{ 'is-invalid': form.errors.has('username') }" required class="common-input mb-20 form-control" name="username" placeholder="Пример: nikitatest">
              <has-error :form="form" field="username"/>

              <v-button :loading="form.busy" class="btn btn-success">
                <span class="lnr lnr-location "></span>
                {{ $t('login') }}
              </v-button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
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
                username: '',
            }),
            remember: false,
            isExist: false,
            formData: {},
        }),

        methods: {
            async login () {
                this.formData = await this.form.post('/api/login')

               // this.isExist = true;
                this.$store.dispatch('auth/saveToken', {
                    token: this.formData.data.token,
                    remember: this.remember
                })


                // Fetch the user.
                await this.$store.dispatch('auth/fetchUser')
                // Redirect home.
                this.$router.push({ name: 'home' })
            },
            /*
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
*/
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
