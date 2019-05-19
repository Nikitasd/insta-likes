<template>
    <div class="container">
        <div class="section-top-border">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Popular Destinations</h1>
                        <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, day.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 banner-right">
                    <tab :tabs="tabs" :initialTab="initialTab">
                        <template slot="tab-head-likes">
                            Лайки
                        </template>
                        <template slot="tab-panel-likes">
                            <form class="form-wrap">
                                <input type="text" class="form-control" v-model="form.link" placeholder="Ссылка на запись" >
                                <input type="number" class="form-control" v-model="form.cost" placeholder="Стоимость" >
                                <input type="number" class="form-control" v-model="form.amount" placeholder="Кол-во" >

                                <button class="genric-btn primary small" @click.prevent="like">Предпросмотр</button>
                            </form>
                        </template>

                        <template slot="tab-head-subscribers">
                            Подписчики
                        </template>
                        <template slot="tab-panel-subscribers">

                            <div class="tab-pane fade active show" id="flight" role="tabpanel"
                                 aria-labelledby="flight-tab">
                                <form class="form-wrap" >
                                    <input type="text" class="form-control" v-model="form.link"
                                           placeholder="Ссылка на запись автора">
                                    <input type="number" class="form-control" v-model="form.cost" placeholder="Стоимость" >
                                    <input type="number" class="form-control" v-model="form.amount" placeholder="Кол-во" >
                                    <button class="genric-btn primary small" @click.prevent="subscribe">Предпросмотр</button>
                                </form>
                            </div>
                        </template>
                        <template slot="tab-head-comments">
                            Комментарии
                        </template>
                        <template slot="tab-panel-comments">
                            <form class="form-wrap">
                                <input type="text" class="form-control" placeholder="Ссылка на запись" >
                                <textarea type="text" class="form-control" placeholder="Ключевые слова(через запятую)" ></textarea>
                                <input type="text" class="form-control" placeholder="Стоимость">

                                <button class="primary-btn text-uppercase" >Предпросмотр</button>

                            </form>
                        </template>
                    </tab>
                </div>
                <div class="col-lg-4 col-md-5 mt-50">
                    <h4 class="text-center mb-30">{{ card.page_type }}</h4>
                    <card :card="card">
                        <template slot="footer">
                            <div class="check">
                                <button class="genric-btn info circle small">Проверить</button>
                            </div>
                            <div class="move">
                                <a href="#move">
                                    <button class="genric-btn primary circle small arrow">Перейти</button>
                                </a>
                            </div>
                        </template>
                    </card>
                </div>
                <div class="col-lg-3 col-md-4 mt-50 element-wrap">
                    <div class="single-element-widget">
                        <form @submit.prevent="addPublication" @keydown="form.onKeydown($event)">
                            <h4 class="mb-30">Настройки</h4>
                            <div class="switch-wrap d-flex justify-content-between" >
                                <p>01. Отображать мой nickname</p>
                                <div class="confirm-switch">
                                    <input type="checkbox" id="display-nickname" v-model="checkbox.displayNickname">
                                    <label for="display-nickname"></label>
                                </div>
                            </div>
                            <div class="switch-wrap d-flex justify-content-between">
                                <p>02. Отображать фотографию</p>
                                <div class="primary-switch">
                                    <input type="checkbox" id="display-photo" v-model="checkbox.displayPhoto">
                                    <label for="display-photo"></label>
                                </div>
                            </div>

                            <v-button :loading="form.busy" class="btn btn-success">
                                <span class="lnr lnr-location "></span>
                                {{ $t('login') }}
                            </v-button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Form from 'vform'
    import axios from 'axios'

    export default {
        data() {
            return {
                initialTab: 'likes',
                tabs: ['likes', 'subscribers', 'comments'],
                form: new Form({
                    link: '',
                    cost: '',
                    amount: '',
                }),
                checkbox: {
                    displayNickname: true,
                    displayPhoto: true,
                },
                //
                card: {
                    title: "instagram",
                    link: "",
                    cost: 15,
                    amount: "0/200",
                    thumbnail_url: "",
                    media_id: "",
                    page_type: "",
                    gain: 0,
                },
                imageData: [],
            };
        },

        methods: {

            async getPublication(link) {
                this.imageData = await fetch("https://api.instagram.com/oembed/?url=" + link).then(function (response) {
                    return response.json();
                }).then(imageData => imageData)

                return this.imageData;

            },
           async like () {
                let vm = this,
                    path = "https://api.instagram.com/oembed/?url=";

                vm.photoData = await fetch(path + vm.form.link).then(function (response) {
                    return response.json();
                }).then(photoData => photoData)

                vm.card = {...vm.form};

                vm.card.title = vm.photoData.author_name;
                vm.card.thumbnail_url = vm.photoData.thumbnail_url;
                vm.card.media_id = vm.photoData.media_id;

                vm.card.gain = 0;

                vm.card.page_type = "likes";

            },

           async subscribe () {
                let vm = this,
                    path = "https://api.instagram.com/oembed/?url=";

                vm.photoData = await fetch(path + vm.form.link).then(function (response) {
                    return response.json();
                }).then(photoData => photoData)

                vm.card.link = vm.photoData.author_url;

                vm.card.cost = vm.form.cost;
                vm.card.amount = vm.form.amount;
                vm.card.title = vm.photoData.author_name;
                vm.card.thumbnail_url = '';
                vm.card.media_id = vm.photoData.media_id;

                vm.card.type = "subscribers";

            },
            async addPublication() {

                await axios.post('/api/publications/add', this.card);
                // this.$store.dispatch('publication/addPublication', data)

                this.$router.push({ name: 'home' })
            }
        },
    }
</script>