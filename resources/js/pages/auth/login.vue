<template>
  <div class="whole-wrap">
    <div class="container">
      <div class="section-top-border">

        <div class="row justify-content-center">
          <div class="col-md-4 text-center">
            <h3 class="mb-30">Добро Пожаловать</h3>
            <p class="mt-5"> Для входа/регистрации введите имя пользователя.</p>
            <form action="#">
              <div class="mt-10">
                <input v-model="form.name" :class="{ 'is-invalid': form.errors.has('name') }" required class="single-input" name="name" placeholder="Пример: nikitatest">
                <has-error :form="form" field="name"/>

              </div>
            </form>
          </div>
          <!---
          <div class="col-md-4 mt-sm-30 element-wrap">

              <div class="row">
                <div class="col-md-3">
                  <img src="img/elements/d.jpg" alt="" class="img-fluid">
                </div>
              </div>
          </div>

              ---->
        </div>
      </div>
    </div>
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
