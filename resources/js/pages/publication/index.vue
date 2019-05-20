<template>
    <div>
        <section class="top-category-widget-area pt-80 pb-40">
        <div class="container">

            <div class="row justify-content-end pb-30">
                <div class="col-lg-2">
                    <router-link :to="{name: 'publication.add'}" class="genric-btn info circle">Добавить</router-link>
                </div>
            </div>

            <div class="row" v-if="false">
                <div class="col-lg-4" v-for="category in categories">
                    <div class="single-cat-widget">
                        <div class="content relative">
                            <div class="overlay overlay-bg"></div>
                            <router-link :to="{name: category.route}" >
                                <div class="thumb">
                                    <img class="content-image img-fluid d-block mx-auto" src="/img/blog/cat-widget1.jpg" alt="">
                                </div>
                                <div class="content-details">
                                    <h4 class="content-title mx-auto text-uppercase">{{ category.text }}</h4>
                                    <span></span>
                                    <p>{{ category.value }}</p>
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


            <b-row class="d-flex justify-content-center">
                <div class="col-md-3 ">
                    <b-form-input placeholder="Enter your title" class="mb-4" v-model="filter"></b-form-input>
                </div>
                <div class="col-md-3">
                    <b-form-select v-model="sort" :options="categories" @input="fetchPublications(sort)"></b-form-select>
                </div>

            </b-row>
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
                    <div class="col-md-3" v-for="card in cards.data" :key="card.id">
                        <card :card="card.attributes"></card>
                    </div>
                </div>


                <div class="row d-flex justify-content-center">
                    <div class="pb-20 pt-40">
                        <a href="#" class="primary-btn">View More</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    import {mapGetters} from 'vuex';
    import axios from 'axios'

    export default {
        layout: 'basic',

        data: () => ({
            filter: '',
            sort: null,

            categories: [
                {   text: 'Выберите',
                    value: null,
                    disabled: true,
                    route: "",
                },
                {
                    text: 'Новые',
                    value: 'updated_at',
                    route: "",
                },
                {
                    text: 'По стоимости',
                    value: 'cost',
                    route: "",
                },
                {
                    text: 'Популярные',
                    value: 'amount',
                    route: "",
                },

              ],
            query: {
                order_column: 'cost',
                order_direction: 'desc',
                limit: 10,
            },
        }),
        methods: {
            async fetchPublications(sort) {
                // Fetch the article.
                await this.$store.dispatch('publication/getPublications', sort)
            },
        },
        computed: mapGetters({
            cards: 'publication/publication'
        }),

        mounted() {
            this.fetchPublications();
        }
    }
</script>
