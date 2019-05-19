<template>
    <section class="post-content-area single-post-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">

                    <template v-if="article">
                        <article-content :article="article.attributes"></article-content>
                    </template>

                    <div class="comments-area background-white mt-100" v-if="comments">
                        <h4>3 Comments</h4>

                        <article-comment
                                v-for="(comment, index) in comments.data"
                                :key="index"
                                :comment="comment.attributes"
                                :user="comments.included[index]">
                        </article-comment>

                    </div>

                    <div class="comment-form">
                        <h4>Leave a Comment</h4>
                        <form>
                            <div class="form-group">
                                <textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                            </div>
                            <a href="#" class="primary-btn text-uppercase">Post Comment</a>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 sidebar-widgets">
                    <div class="widget-wrap">
                        <div class="single-sidebar-widget search-widget">
                            <form class="search-form" action="#">
                                <input placeholder="Search Posts" name="search" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'" >
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="single-sidebar-widget user-info-widget">
                            <img src="/img/blog/user-info.png" alt="">
                            <a href="#"><h4>Charlie Barber</h4></a>
                            <p>
                                Senior blog writer
                            </p>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-github"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                            <p>
                                Boot camps have its supporters andit sdetractors. Some people do not understand why you should have to spend money on boot camp when you can get. Boot camps have itssuppor ters andits detractors.
                            </p>
                        </div>
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
                        <div class="single-sidebar-widget ads-widget">
                            <a href="#"><img class="img-fluid" src="img/blog/ads-banner.jpg" alt=""></a>
                        </div>

                        <div class="single-sidebar-widget tag-cloud-widget">
                            <h4 class="tagcloud-title">Tag Clouds</h4>
                            <ul>
                                <li v-for="n in 4"><a href="#">Fashion</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
    import ArticleComment from './Comment'

    import {mapGetters} from 'vuex';
    import axios from 'axios'


    export default {

        layout: 'basic',

        components: { ArticleComment },

        data: function() {
            return {
                comments: [],
            }
        },
        methods: {
            async fetchArticle () {
                // Fetch the articles.
                await this.$store.dispatch('article/fetchArticle', this.$route.params.slug)
            },
            async fetchComments(){
                this.comments = await axios.get('/api/articles/' + this.$route.params.slug + '/comments')
                    .then(comments => comments.data);

                console.log(this.comments);
            },

        },

        computed: {
            ...mapGetters({
                article: 'article/article'
            }),

        },


        mounted() {
            this.fetchArticle();

            this.fetchComments();
        },

    }

</script>