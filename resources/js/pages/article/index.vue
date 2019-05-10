<template>
    <section class="post-content-area pt-20">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-9">
                    <div class="title text-center">
                        <h2 class="mb-10">Мои статьи</h2>
                    </div>
                </div>
            </div>


            <b-row class="d-flex justify-content-center">
                <div class="col-md-3 ">
                    <b-form-input placeholder="Enter your title" class="mb-4" v-model="filter"></b-form-input>
                </div>
                <div class="col-md-3">
                    <b-form-select v-model="sort" :options="options"></b-form-select>
                </div>

            </b-row>

            <div class="row">
                <div class="col-lg-8 pb-100">

                    <template v-if="articles">
                        <article-content
                                v-for="(article, index) in articles.data"
                                :key="index"
                                :article="article.attributes"
                                :contentTruncate="255"
                        ></article-content>
                    </template>

                    <a @click="nextPage" class="primary-btn" v-if="nextEnable">View More</a>

                </div>

                <div class="col-lg-3 ">
                    <div class="widget-wrap">
                        <div class="single-sidebar-widget popular-post-widget">
                            <h4 class="popular-title">Popular Posts</h4>
                            <div class="popular-post-list">
                                <div class="single-post-list d-flex flex-row align-items-center" v-for="n in 3">
                                    <div class="thumb">
                                        <img class="img-fluid" src="img/blog/pp1.jpg" alt="">
                                    </div>
                                    <div class="details">
                                        <a href="blog-single.html"><h6>Space The Final Frontier</h6></a>
                                        <p>02 Hours ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>


<script>

    import ArticleContent from './Content'
    import {mapGetters} from 'vuex';

    export default {
        layout: 'basic',

        components: { ArticleContent },

        data: function() {
            return {
                filter: '',
                sort: null,
                options: [
                    { text: 'Sort by', value: null, disabled: true },
                    { text: 'Default', value: 'none' },
                    { text: 'Most Viewed', value: 'views' },
                ],
                nextEnable: true,
                perPage: 4

            }
        },

        methods: {

            async fetchArticles () {
                // Fetch the article.
                await this.$store.dispatch('article/fetchArticles', this.perPage)
            },

          nextPage(){
                if(this.perPage < 5) {
                    this.perPage += 4;

                 // this.fetchData();
                } else
                    this.nextEnable = false;

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