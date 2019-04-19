<template>
    <div>
        <section class="popular-destination-area section-gap">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-70 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">Popular Destinations</h1>
                            <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, day.</p>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-4 pt-20" v-for="n in 3">
                        <div class="single-destination relative">
                            <a href="instagram.com" target="_blank">
                                <div class="thumb relative">
                                    <div class="overlay overlay-bg"></div>
                                    <img class="img-fluid" src="https://instagram.fods1-1.fna.fbcdn.net/vp/341f1dcc791fad4452cede960f7535e3/5D77E4D9/t51.2885-15/sh0.08/e35/s640x640/52559123_202955073997138_5638415260691332924_n.jpg?_nc_ht=instagram.fods1-1.fna.fbcdn.net"
                                         alt="" >
                                </div>
                            </a>
                            <div class="priceFixed">
                                <h4 class="text-success">Success</h4>
                            </div>
                            <div class="desc">
                                <h4>Mountain River</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <section class="other-issue-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-9">
                    <div class="title text-center">
                        <h1 class="mb-10">Последние статьи</h1>
                        <p>We all live in an age that belongs to the young at heart. Life that is.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6" v-for="n in 4">
                    <div class="single-other-issue">
                        <div class="thumb">
                            <img class="img-fluid" src="/img/o1.jpg" alt="">
                        </div>
                        <a href="#">
                            <h4>Rent a Car</h4>
                        </a>
                        <p>
                            The preservation of human life is the ultimate value, a pillar of ethics and the foundation.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    </div>
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
