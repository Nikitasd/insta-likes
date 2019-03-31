<template>
    <div>
        <div class="section padding-bottom-smaller background-light over-hide">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 hidden-sm-down" data-scroll-reveal="enter bottom move 80px over 1s after 0.2s" data-scroll-reveal-id="7" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                        <img src="http://funky/img/woman.png" alt="" class="img-fluid">
                    </div>

                    <div class="col-md-7 mt-0 mt-lg-5 mb-5 mb-md-0">
                        <div class="row">
                            <div class="col-lg-8 ">
                                <div class="shop-box-1 no-img-effect rounded over-hide">
                                    <div class="section product-padding clearfix pt-2 mt-4">
                                        <i class="fa fa-star active-nav"></i>
                                        <i class="fa fa-star active-nav ml-2"></i>
                                        <i class="fa fa-star active-nav ml-2"></i>
                                        <i class="fa fa-star active-nav ml-2"></i>
                                        <i class="fa fa-star-half-o active-nav ml-2"></i>
                                    </div>

                                    <div class="clear"></div>
                                    <div class="separator-wrap product-padding pt-4 pb-4">
                                        <span class="separator"><span class="separator-line dashed"></span></span>
                                    </div>
                                    <div class="section product-padding clearfix">

                                        Username: @SeregaBro
                                        <v-button :nativeType="'button'"
                                                  :type="'primary btn-sm'"
                                                  data-toggle="modal"
                                                  :data-target="'#' + modal.changeUsername">
                                            изменить
                                        </v-button>

                                        <modal :id="modal.changeUsername">
                                            <h3 slot="header">Изменить имя</h3>
                                            <div slot="body">
                                                <div class="subscribe-box-1 light for-hero mt-5">
                                                    <input type="text" placeholder="Username" class="form-control" autocomplete="off">
                                                </div>
                                            </div>
                                        </modal>

                                    </div>
                                    <div class="separator-wrap product-padding pt-4 pb-4">
                                        <span class="separator"><span class="separator-line dashed"></span></span>
                                    </div>

                                    <div class="section product-padding" >
                                        Пароль: *********
                                        <v-button :nativeType="'button'"
                                                  :type="'warning btn-sm'"
                                                  data-toggle="modal"
                                                  :data-target="'#' + modal.changePassword">
                                            изменить
                                        </v-button>

                                        <modal :id="modal.changePassword">
                                            <h3 slot="header">Изменить пароль</h3>
                                            <div slot="body">
                                                <div class="subscribe-box-1 light for-hero mt-5">
                                                    <input type="text" placeholder="Старый пароль" class="form-control" autocomplete="off">
                                                </div>
                                                <div class="subscribe-box-1 light for-hero mt-3">
                                                    <input type="password" placeholder="Новый пароль" class="form-control" autocomplete="off">
                                                </div>
                                            </div>
                                        </modal>
                                    </div>

                                    <div class="separator-wrap product-padding pt-4 pb-4">
                                        <span class="separator"><span class="separator-line dashed"></span></span>
                                    </div>

                                    <div class="section product-padding">
                                        <ul class="post-social">
                                            <li>
                                                <strong>Соц. сети:</strong>
                                            </li>
                                            <li class="twitter">
                                                <a href="#">Instagram</a>
                                            </li>
                                            <li class="google">
                                                <a href="#" >google</a>
                                            </li>
                                        </ul>
                                        <p class="text-center">Изменить</p>
                                    </div>
                                    <div class="clear"></div>
                                    <ul class="list-style circle product-padding pb-0 mb-0">
                                        <li>
                                            Баланс: 25 coins
                                        </li>
                                        <li>
                                            Заработано сегодня: 80 coins
                                        </li>
                                    </ul>



                                    <div class="clear"></div>
                                    <div class="separator-wrap product-padding pt-4 pb-4">
                                        <span class="separator"><span class="separator-line dashed"></span></span>
                                    </div>
                                    <div class="product-padding checkbox primary line-icon on-light">
                                        <input id="checkboxForm" type="checkbox">
                                        <label for="checkboxForm">
                                            Могут видеть другие пользователи:
                                        </label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="section padding-bottom-small z-bigger-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <h5>Последние публикации мои:</h5>
                        <ul class="list-style mt-4 pl-3">
                            <li><i class="fa fa-user-circle"></i><p class="d-inline-block mb-2">Client: Envato</p></li>
                            <li><i class="fa fa-code"></i><p class="d-inline-block mb-2">Services: Web design, Photo</p></li>
                            <li><i class="fa fa-link"></i><p class="d-inline-block mb-2">Website: www.themeforest.net</p></li>
                            <li><i class="fa fa-envelope-open-o"></i><p class="d-inline-block mb-2">Email: info@funky.com</p></li>
                            <li><i class="fa fa-phone"></i><p class="d-inline-block mb-2">Phone: +1 325 832 3623</p></li>
                            <li><i class="fa fa-mobile-phone"></i><p class="d-inline-block mb-2">Mobile: +1 23 424 4742</p></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <img src="http://funky/img/portfolio/project-1/1-2.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-4 mt-4 mt-lg-0">
                        <img src="http://funky/img/portfolio/project-1/1-2.jpg" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

        <div class="section padding-bottom-small ">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="call-box-3 text-center text-md-left">
                            <h5 class="mb-3">Design must reflect the practical and aesthetic in business.</h5>
                            <p class="mb-0">Some people think design means how it looks. But of course, if you<br>dig deeper, it's really how it works.</p>
                        </div>
                    </div>
                    <div class="col-md-3 mt-4 mt-md-0">
                        <div class="call-box-3 text-center text-md-right">
                            <a href="portfolio-masonry-3col.html" class="btn btn-primary btn-long mt-0 mt-md-4" >Опубликовать мою запись</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    import Form from 'vform'
    import { mapGetters } from 'vuex'
    import Modal from '~/components/Modal'

    export default {
        scrollToTop: false,

        components: {
            Modal
        },

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
