<template>
    <div>
        <section class="top-category-widget-area pt-80 pb-40 ">
        <div class="container">

            <div class="row justify-content-end pb-30">
                <div class="col-lg-2">
                    <router-link :to="{name: 'publication.add'}" class="genric-btn info circle">Добавить</router-link>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4" v-for="category in categories">
                    <div class="single-cat-widget">
                        <div class="content relative">
                            <div class="overlay overlay-bg"></div>
                            <router-link :to="{name: category.route}" >
                                <div class="thumb">
                                    <img class="content-image img-fluid d-block mx-auto" src="/img/blog/cat-widget1.jpg" alt="">
                                </div>
                                <div class="content-details">
                                    <h4 class="content-title mx-auto text-uppercase">{{ category.title }}</h4>
                                    <span></span>
                                    <p>{{ category.description }}</p>
                                </div>
                            </router-link>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center pt-50 ">
                <div class="menu-content  col-lg-8">
                    <div class="title text-center">
                        <h2>Накрутка лайков</h2>
                    </div>
                </div>
            </div>
        </div>
        </section>

        <section class="popular-destination-area pb-80">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-50 col-lg-8">
                        <div class="title">
                            <h3 class="mb-10">Популярные</h3>
                        </div>
                    </div>
                    <div class="menu-content col-lg-2 text-right">
                        <h4><a href="#">Весь список</a></h4>
                    </div>
                </div>
                <div class="row" v-if="cards">
                    <div class="col-md-4" v-for="card in cards.data" :key="card.id">
                        <card :card="card.attributes"></card>
                    </div>
                </div>
            </div>
        </section>

        <section class="popular-destination-area pb-80">
            <div class="container">
                <div class="row" v-if="cards">
                    <div class="menu-content pb-50 col-lg-12">
                        <div class="title">
                            <h3 class="mb-10">Все</h3>
                        </div>
                    </div>
                    <template v-for="n in 4">
                    <div class="col-md-3" v-for="card in cards.data" :key="card.id">
                        <card :card="card.attributes"></card>
                    </div>
                    </template>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    import {mapGetters} from 'vuex';

    export default {
        layout: 'basic',

        data: () => ({
            categories: [
                {   title: 'Лайки',
                   description: 'Где накрутка лайков',
                    route: "",
                },
                {
                    title: 'Подписчики',
                    description: 'Где накрутка подписчиков',
                    route: "",
                },
                {
                    title: 'Комментарии',
                    description: 'Где накрутка комментариев',
                    route: "",
                },

              ],
        }),
        methods: {
            async fetchPublications() {
                // Fetch the article.
                await this.$store.dispatch('publication/getPublications', 10)
            },
        },
        computed: mapGetters({
            cards: 'publication/publication'
        }),


        created() {
            this.fetchPublications();
        }
    }
</script>
