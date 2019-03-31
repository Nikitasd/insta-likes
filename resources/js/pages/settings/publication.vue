<template>

    <card>
            <div class="row">
                <div class="col-lg-3 pt-3">
                    <div class="sidebar-box background-white drop-shadow rounded">
                        <div class="subscribe-box-1">
                            <input type="text" value="" placeholder="type" class="form-control">
                            <button class="btn btn-primary subscribe-1 btn-sm" type="submit" value="">
                                search
                            </button>
                        </div>
                        <div class="clear"></div>
                        <hr>
                        <h6 class="mb-3">Tags</h6>
                        <a href="#" class="btn btn-default btn-sm ml-0 mr-1 mb-1">Все записи</a>
                        <a href="#" class="btn btn-default btn-sm ml-0 mr-1 mb-1">Активные</a>
                        <a href="#" class="btn btn-default btn-sm ml-0 mr-1 mb-1">Популярные</a>
                        <div class="clear"></div>
                        <div class="separator-wrap my-5">
                            <span class="separator"><span class="separator-line dashed"></span></span>
                        </div>
                        <div class="clear"></div>
                        <h6 class="mb-3">Archives</h6>
                        <ul class="list-style circle-o pl-4 pb-0">
                            <li>
                                <a href="#" class="btn-link btn-primary pl-0">august 2017</a>
                            </li>
                            <li>
                                <a href="#" class="btn-link btn-primary pl-0">july 2017</a>
                            </li>
                            <li>
                                <a href="#" class="btn-link btn-primary pl-0">june 2017</a>
                            </li>
                            <li>
                                <a href="#" class="btn-link btn-primary pl-0">may 2017</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="grid-wraper clearfix">
                        <div class="grid-box float-inline third with-margin">
                            <div class="shop-box-1 background-white rounded over-hide">
                                <div class="sale">sale</div>
                                <a href="product.html">
                                    <img src="https://instagram.fods1-1.fna.fbcdn.net/vp/d7e656965907c6b3a13ac142a3e8b96d/5D439E3B/t51.2885-15/sh0.08/e35/s640x640/53859476_669804643422572_4755845080822706387_n.jpg?_nc_ht=instagram.fods1-1.fna.fbcdn.net" alt="">
                                </a>
                                <a href="product.html">
                                    <h5 class="mt-3 mb-0">women shirts</h5>
                                </a>
                                <p class="mb-4"><em>spring 2018</em></p>
                                <div class="link-block pt-3">
                                    <a href="#" class="btn btn-sm btn-primary">cart <i class="fa fa-shopping-bag"></i></a>
                                    <a href="product.html" class="btn btn-sm btn-primary float-right">view <i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-box float-inline third with-margin">
                            <div class="shop-box-1 background-white rounded over-hide">
                                <a href="product.html">
                                    <img src="https://instagram.fods1-1.fna.fbcdn.net/vp/739dff5a71143b096483837e24551ebe/5D2A28B4/t51.2885-15/sh0.08/e35/s640x640/53425017_1037566136439299_5820755954718491256_n.jpg?_nc_ht=instagram.fods1-1.fna.fbcdn.net" alt="">
                                </a>
                                <a href="product.html">
                                    <h5 class="mt-3 mb-0">women shoes</h5>
                                </a>
                                <p class="mb-4"><em>spring 2018</em></p>
                                <div class="link-block pt-3">
                                    <a href="#" class="btn btn-sm btn-primary">cart <i class="fa fa-shopping-bag"></i></a>
                                    <a href="product.html" class="btn btn-sm btn-primary float-right">view <i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-box float-inline third with-margin">
                            <div class="shop-box-1 background-white rounded over-hide">
                                <a href="product.html">
                                    <img src="https://instagram.fods1-1.fna.fbcdn.net/vp/739dff5a71143b096483837e24551ebe/5D2A28B4/t51.2885-15/sh0.08/e35/s640x640/53425017_1037566136439299_5820755954718491256_n.jpg?_nc_ht=instagram.fods1-1.fna.fbcdn.net" alt="">
                                </a>
                                <a href="product.html">
                                    <h5 class="mt-3 mb-0">women shirts</h5>
                                </a>
                                <p class="mb-4"><em>spring 2018</em></p>
                                <div class="link-block pt-3">
                                    <a href="#" class="btn btn-sm btn-primary">cart <i class="fa fa-shopping-bag"></i></a>
                                    <a href="product.html" class="btn btn-sm btn-primary float-right">view <i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="grid-box float-inline third with-margin">
                            <div class="shop-box-1 background-white rounded over-hide">
                                <a href="product.html">
                                    <img src="https://instagram.fods1-1.fna.fbcdn.net/vp/739dff5a71143b096483837e24551ebe/5D2A28B4/t51.2885-15/sh0.08/e35/s640x640/53425017_1037566136439299_5820755954718491256_n.jpg?_nc_ht=instagram.fods1-1.fna.fbcdn.net" alt="">
                                </a>
                                <a href="product.html">
                                    <h5 class="mt-3 mb-0">women shirts</h5>
                                </a>
                                <p class="mb-4"><em>spring 2018</em></p>
                                <div class="link-block pt-3">
                                    <a href="#" class="btn btn-sm btn-primary">cart <i class="fa fa-shopping-bag"></i></a>
                                    <a href="product.html" class="btn btn-sm btn-primary float-right">view <i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </card>
</template>

<script>
    import Form from 'vform'
    import { mapGetters } from 'vuex'

    export default {
        scrollToTop: false,

        metaInfo () {
            return { title: this.$t('settings') }
        },

        data: () => ({
            form: new Form({
                name: '',
                email: ''
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
