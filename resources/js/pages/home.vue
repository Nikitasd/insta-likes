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
                <div class="row">
                    <div class="col-md-4" v-for="(card, index) in cards" :key="index">
                        <card :card="card"></card>
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
                <div class="row">
                    <div class="col-md-3" v-for="(card, index) in cards" :key="index">
                        <card :card="card"></card>
                    </div>
                </div>
            </div>
        </section>

    </div>
</template>

<script>
    import {mapGetters} from 'vuex';
    import ArticleContent from "./article/Content";

    export default {
        components: {ArticleContent},
        scrollToTop: false,
        layout: 'basic',

        data: () => ({
            perPage: 3,
            cards: [
                {
                    title: 'Charles Wilson',
                    cost: null,
                    route: "#",
                    thumbnail_url: 'https://justifiedgrid.com/wp-content/gallery/life/biking/137646854.jpg',
                    views: 312
                },
                {
                    title: 'Charles Wilson',
                    cost: 32,
                    route: "#",
                    thumbnail_url: 'https://justifiedgrid.com/wp-content/gallery/life/biking/137646854.jpg',
                    views: 312
                },
                {
                    title: 'Tony Domo',
                    cost: null,
                    route: "#",
                    thumbnail_url: 'https://instagram.fods1-1.fna.fbcdn.net/vp/9638015ab9adc5b8838f1072dd8f6d87/5D718122/t51.2885-15/sh0.08/e35/s640x640/49663039_1174014882765919_6624389624474183525_n.jpg?_nc_ht=instagram.fods1-1.fna.fbcdn.net',
                    views: 23
                },
                {
                    title: 'Tony Domo',
                    cost: null,
                    route: "#",
                    thumbnail_url: 'https://instagram.fods1-1.fna.fbcdn.net/vp/9638015ab9adc5b8838f1072dd8f6d87/5D718122/t51.2885-15/sh0.08/e35/s640x640/49663039_1174014882765919_6624389624474183525_n.jpg?_nc_ht=instagram.fods1-1.fna.fbcdn.net',
                    views: 23
                },
            ]
        }),

        methods: {
            async fetchArticles () {
                // Fetch the article.
                await this.$store.dispatch('article/fetchArticles', this.perPage)
            },
        },

        computed: mapGetters({
            articles: 'article/article'
        }),

        created() {
            this.fetchArticles();
        },
    }
</script>
