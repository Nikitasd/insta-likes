<template>
<div>
        <section class="post-content-area pt-20">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-70 col-lg-9">
                        <div class="title text-center">
                            <h2 class="mb-10">Мои публикации</h2>
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
                    <div class="col-lg-8">
                        <div class="single-post row" v-for="n in 4">
                            <div class="col-lg-3 col-md-3 meta-details">
                                <div class="user-details row">
                                    <p class="date col-lg-12 col-md-12 col-6"><a href="#">12 Dec, 2017</a> <span class="lnr lnr-calendar-full"></span></p>
                                    <p class="view col-lg-12 col-md-12 col-6"><a href="#">1.2M Views</a> <span class="lnr lnr-eye"></span></p>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 ">
                                <a class="posts-title" href="blog-single.html"><h4>Astronomy Binoculars A Great Alternative</h4></a>
                                <p class="excert">
                                    MCSE boot camps have its supporters and its detractors.
                                    Some people do not understand why you should have to spend money on boot camp when you can get the MCSE
                                    study materials yourself at a fraction.
                                </p>
                            </div>
                        </div>
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-left"></span>
		                                    </span>
                                    </a>
                                </li>
                                <li class="page-item"><a href="#" class="page-link">01</a></li>
                                <li class="page-item active"><a href="#" class="page-link">02</a></li>
                                <li class="page-item"><a href="#" class="page-link">03</a></li>
                                <li class="page-item"><a href="#" class="page-link">04</a></li>
                                <li class="page-item"><a href="#" class="page-link">09</a></li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-right"></span>
		                                    </span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-4 ">
                        <div class="widget-wrap">
                            <div class="single-sidebar-widget popular-post-widget">
                                <h4 class="popular-title">Popular Posts</h4>
                                <div class="popular-post-list">
                                    <div class="single-post-list d-flex flex-row align-items-center">
                                        <div class="thumb">
                                            <img class="img-fluid" src="img/blog/pp1.jpg" alt="">
                                        </div>
                                        <div class="details">
                                            <a href="blog-single.html"><h6>Space The Final Frontier</h6></a>
                                            <p>02 Hours ago</p>
                                        </div>
                                    </div>
                                    <div class="single-post-list d-flex flex-row align-items-center">
                                        <div class="thumb">
                                            <img class="img-fluid" src="img/blog/pp2.jpg" alt="">
                                        </div>
                                        <div class="details">
                                            <a href="blog-single.html"><h6>The Amazing Hubble</h6></a>
                                            <p>02 Hours ago</p>
                                        </div>
                                    </div>
                                    <div class="single-post-list d-flex flex-row align-items-center">
                                        <div class="thumb">
                                            <img class="img-fluid" src="img/blog/pp3.jpg" alt="">
                                        </div>
                                        <div class="details">
                                            <a href="blog-single.html"><h6>Astronomy Or Astrology</h6></a>
                                            <p>02 Hours ago</p>
                                        </div>
                                    </div>
                                    <div class="single-post-list d-flex flex-row align-items-center">
                                        <div class="thumb">
                                            <img class="img-fluid" src="img/blog/pp4.jpg" alt="">
                                        </div>
                                        <div class="details">
                                            <a href="blog-single.html"><h6>Asteroids telescope</h6></a>
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

</div>
</template>

<script>
    import ItemCard from "../../components/ItemCard";


    export default {
        components: {
            'item-card': ItemCard
        },
        data: function() {
            return {
                filter: '',
                sort: null,
                options: [
                    { text: 'Sort by', value: null, disabled: true },
                    { text: 'Default', value: 'none' },
                    { text: 'Most Viewed', value: 'views' },
                ],
                cards: [
                    {   title: 'Charles Wilson',
                        countLike: 20,
                        link: "#",
                        image: 'https://justifiedgrid.com/wp-content/gallery/life/biking/137646854.jpg',
                        views: 312
                    },
                    {
                        title: 'Tony Domo',
                        countLike: 25,
                        link: "#",
                        image: 'https://justifiedgrid.com/wp-content/gallery/life/biking/137646854.jpg',
                        views: 23
                    },
                    {
                        title: 'Rump Baker',
                        link: "#",
                        countLike: 20,
                        image: 'https://justifiedgrid.com/wp-content/gallery/life/biking/137646854.jpg',
                        views: 231
                    },
                    {
                        title: 'Brad Pitt',
                        link: "#",
                        countLike: 20,
                        image: 'https://justifiedgrid.com/wp-content/gallery/life/biking/137646854.jpg',
                        views: 443
                    },
                    {
                        title: 'Kermit the Frog',
                        link: "",
                        countLike: 20,
                        image: 'https://justifiedgrid.com/wp-content/gallery/life/biking/137646854.jpg',
                        views: 403
                    },
                    {
                        title: 'Taylor Swift',
                        link: "",
                        countLike: 20,
                        image: 'https://justifiedgrid.com/wp-content/gallery/life/biking/137646854.jpg',
                        views: 8843
                    },
                    {
                        title: 'Братан',
                        countLike: 20,
                        image: 'https://justifiedgrid.com/wp-content/gallery/life/biking/137646854.jpg',
                        views: 884
                    }
                ]
            }
        },
        computed: {
            getCards() {

                var cards = this.cards.filter((player) => {
                    return player.title.toLowerCase().includes(this.filter.toLowerCase());
                });

                if (this.sort == 'views') {
                    return cards.sort(function(a, b) {
                        return b.views - a.views
                    });
                } else {
                    return cards;
                }

            }
        }
    }
</script>