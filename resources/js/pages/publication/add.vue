<template>
    <div class="container">
        <div class="section-top-border">
            <div class="row">
                <div class="col-md-5 banner-left">
                    <h3 class="text-dark">Away from monotonous life</h3>
                    <p class="text-dark">
                        If you are looking at blank cassettes on the web, you may be very confused at the difference in
                        price. You may see some for as low as $.17 each.
                    </p>
                    <a href="#" class="primary-btn text-uppercase">Get Started</a>
                </div>
                <div class="col-md-6 banner-right">
                        <tab :tabs="tabs" :initialTab="initialTab">
                            <template slot="tab-head-subscribers">
                                Подписчики
                            </template>
                            <template slot="tab-panel-subscribers">

                                <div class="tab-pane fade active show" id="flight" role="tabpanel"
                                     aria-labelledby="flight-tab">
                                    <form class="form-wrap">
                                        <input type="text" class="form-control" v-model="form.link" placeholder="Ссылка на запись" >
                                        <input type="number" class="form-control" v-model="form.cost" placeholder="Стоимость" >
                                        <input type="number" class="form-control" v-model="form.count" placeholder="Кол-во" >

                                        <button class="primary-btn text-uppercase" @click.prevent="subscribe">Предпросмотр</button>
                                    </form>
                                </div>
                            </template>
                            <template slot="tab-head-likes">
                                Лайки
                            </template>
                            <template slot="tab-panel-likes">

                                <form class="form-wrap">
                                    <input type="text" class="form-control" v-model="form.link" placeholder="Ссылка на запись" >
                                    <input type="number" class="form-control" v-model="form.cost" placeholder="Стоимость" >
                                    <input type="number" class="form-control" v-model="form.count" placeholder="Кол-во" >

                                    <button class="primary-btn text-uppercase">Предпросмотр</button>

                                </form>
                            </template>
                            <template slot="tab-head-comments">
                                Комментарии
                            </template>
                            <template slot="tab-panel-comments">
                                <form class="form-wrap">
                                    <input type="text" class="form-control" v-model="form.link" placeholder="Ссылка на запись" >
                                    <textarea type="text" class="form-control" v-model="form.words" placeholder="Ключевые слова(через запятую)" ></textarea>
                                    <input type="text" class="form-control" v-model="form.cost" placeholder="Стоимость">

                                    <button class="primary-btn text-uppercase" >Предпросмотр</button>

                                </form>
                            </template>
                        </tab>
                </div>
            </div>
        </div>

        <section class="recent-blog-area section-gap" v-if="preview">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <h3 class="text-center mb-60">Предпросмотр: </h3>
                        <card :card="card">
                            <template slot="footer">
                                <div class="check">
                                    <button class="genric-btn info circle small">Проверить</button>
                                </div>

                                <div class="move">
                                    <a :href="card.link">
                                        <button class="genric-btn primary circle small arrow">Перейти</button>
                                    </a>
                                </div>
                            </template>
                        </card>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    import Form from 'vform'

    export default {
        data() {
            return {
                initialTab: 'subscribers',
                tabs: ['subscribers', 'likes', 'comments'],
                form: new Form({
                    link: '',
                    cost: '',
                    count: '',
                    words: '',
                }),
                //
                card: {
                    title: "",
                    cost: "",
                    link: "",
                    thumbnail_url: "",
                    views: 0
                },
                photoData: [],
                preview: false,
            };
        },

        methods: {
            async subscribe () {
                let vm = this;
                let path = "https://api.instagram.com/oembed/?url=";

                vm.photoData = await fetch(path + vm.form.link).then(function (response) {
                    return response.json();
                }).then(photoData => photoData)

                vm.card = {...vm.form};

                vm.card.title = vm.photoData.author_name;
                vm.card.thumbnail_url = vm.photoData.thumbnail_url;

                vm.preview = true;
            },
        },
    }
</script>