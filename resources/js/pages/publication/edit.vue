<template>
    <section class="about-info-area section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 info-left">
                    <img class="img-fluid" src="/img/about/info-img.jpg" alt="">
                </div>
                <div class="col-lg-6 info-right">
                    <h6>About Us</h6>
                    <h1>Who We Are?</h1>
                    <p>
                        Here, I focus on a range of items and features that we use in life without giving them a second thought. such as Coca Cola. Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                    </p>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    import Form from 'vform'
    import { mapGetters } from 'vuex'

    export default {
        scrollToTop: false,
        layout: 'basic',


        metaInfo () {
            return { title: this.$t('settings') }
        },

        data: () => ({
            form: new Form({
                name: '',
            }),
            modal: {
                changeUsername: "changeUsername",
                changePassword: "changePassword"
            },
        }),

        computed: mapGetters({
            user: 'auth/user'
        }),

        created () {
            // Fill the form with user data.
            this.form.keys().forEach(key => {
                this.form[key] = this.user[key]
            })
        },

        methods: {
            async update () {
                const { data } = await this.form.patch('/api/settings/profile')

                this.$store.dispatch('auth/updateUser', { user: data })
            }
        }
    }
</script>
