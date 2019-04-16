<template>
    <!-- End banner Area -->

    <!-- Start insurence-one Area -->
    <section class="insurence-one-area section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 insurence-left">
                    <img class="img-fluid img-one" src="img/insurence/i1.jpg" alt="">
                </div>
                <div class="col-lg-6 insurence-right">
                    <h6 class="text-uppercase">Need to know</h6>
                    <h1>Insurance for journey</h1>
                    <p>
                        Here, I focus on a range of items and features that we use in life without giving them a second thought. such as Coca Cola. Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                    </p>
                    <div class="list-wrap">
                        <ul>
                            <li>Strategic approach towards redesigning brand.</li>
                            <li>logo design strategy ensures a perfectly crafted
                                logo for your business.</li>
                            <li>Branding that stands out in the crowd.</li>
                            <li>Modern and evergreen logo for your business.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    import Form from 'vform'
    import { mapGetters } from 'vuex'
    import Modal from '~/components/Modal'

    export default {
        scrollToTop: false,
        layout: 'default',
        components: {
            Modal
        },

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
