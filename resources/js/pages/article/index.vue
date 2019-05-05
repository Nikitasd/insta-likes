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

            <b-row>
                <div class="col-md-3"></div>
                <div class="col-md-3">
                    <b-form-input placeholder="Enter your title" class="mb-4" v-model="filter"></b-form-input>
                </div>
                <div class="col-md-3">
                    <b-form-select v-model="sort" :options="options"></b-form-select>
                </div>

            </b-row>
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-8 pb-100" >
                    <div class="single-post row " v-for="(article, index) in articles.data" :key="index">
                            <div class="col-lg-3 col-md-3 meta-details">
                                <div class="user-details row">
                                    <p class="date col-lg-12 col-md-12 col-6"><a href="#">12 Dec, 2017</a> <span class="lnr lnr-calendar-full"></span></p>
                                    <p class="view col-lg-12 col-md-12 col-6"><a href="#">{{ article.attributes.view_count }} Views</a> <span class="lnr lnr-eye"></span></p>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 ">
                                <router-link class="posts-title" :to="{name: 'article.show', params: {slug: article.slug }}">
                                    <h4>{{ article.attributes.title }}</h4>
                                </router-link>

                                <p class="excert">
                                    {{ article.attributes.content | truncate(220, '....') }}
                                </p>

                            </div>
                        </div>

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


    export default {
        layout: 'basic',

        data: function() {
            return {
                filter: '',
                sort: null,
                options: [
                    { text: 'Sort by', value: null, disabled: true },
                    { text: 'Default', value: 'none' },
                    { text: 'Most Viewed', value: 'views' },
                ],
                articles: [],
                nextEnable: true,
                perPage: 10

            }
        },
        created() {
            this.fetchData();
        },
        methods: {
            async fetchData() {
                this.articles = await fetch(`/api/articles?limit=${this.perPage}`)
                    .then(res => {

                        return res.json();

                    }).then(articles => articles)
            },
          nextPage(){
                if(this.perPage < this.articlesTotal) {
                    this.perPage += 4;

                  this.fetchData();
                } else
                    this.nextEnable = false;

            },

        },
        computed: {
            articlesTotal() {
                return this.articles.meta.total;
            }
        },

        filters: {
            truncate: function (text, length, suffix) {
                return text.substring(0, length) + suffix;
            },
        }
    }
</script>