<template>
    <div>
        <section class="popular-destination-area pt-90">
            <div class="container">

                <div class="row d-flex justify-content-center">
                    <div class="col-lg-9">
                    <div class="menu-content pb-70 col-lg-9">
                        <div class="title">
                            <h2>Выполняется</h2>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-2">
                        <h4><a href="#">Весь список</a></h4>
                    </div>
                </div>
            </div>
        </section>

        <section class="popular-destination-area section-gap">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-20 col-lg-9">
                        <div class="title text-center">
                            <h1 class="mb-10">Последние мои публикации</h1>
                            <p>With the exception of Nietzsche, no other madman has contributed so much to human sanity
                                as has.</p>
                        </div>
                    </div>
                </div>
                <div class="row" v-if="cards">
                        <div class="col-md-3" v-for="card in cards.data" :key="card.id">
                            <card :card="card.attributes"></card>
                        </div>
                </div>
            </div>
        </section>

    </div>
</template>

<script>
    import {mapGetters} from 'vuex';

    export default {
        scrollToTop: false,
        layout: 'basic',

        methods: {
            async fetchArticles () {
                // Fetch the article.
                await this.$store.dispatch('article/fetchArticles', 3)
            },

            async fetchPublications() {
                // Fetch the article.
                await this.$store.dispatch('publication/getPublications', 10)
            },
        },

        computed: mapGetters({
            articles: 'article/article',
            cards: 'publication/publication'
        }),

        created() {
            this.fetchArticles();
            this.fetchPublications();
        },
    }
</script>
