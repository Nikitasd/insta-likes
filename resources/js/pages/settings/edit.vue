<template>
    <section class="post-content-area single-post-area">
    <div class="container">
        <div class="row pt-30">
            <div class="col-lg-4 sidebar-widgets">
                <div class="widget-wrap">
                <div class="single-sidebar-widget post-category-widget">
                    <ul class="cat-list">
                        <li v-for="n in 3">
                            <a href="#" class="d-flex justify-content-between">
                                <p>Technology</p>
                                <p>37</p>
                            </a>
                        </li>
                    </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 banner-right">
            <form class="form-wrap">
                <input type="text" class="form-control" name="name" placeholder="From " onfocus="this.placeholder = ''" onblur="this.placeholder = 'From '" v-for="n in 3">
                <a href="#" class="primary-btn text-uppercase">Search flights</a>
            </form>
    </div>


        </div>
    </div>
    </section>
</template>

<script>

    export default {
        data: function () {
            return {
                filter: '',
                sort: null,
                options: [
                    {text: 'Sort by', value: null, disabled: true},
                    {text: 'Default', value: 'none'},
                    {text: 'Most Viewed', value: 'views'},
                ],
                cards: [
                    {
                        title: 'Charles Wilson',
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
                    return cards.sort(function (a, b) {
                        return b.views - a.views
                    });
                } else {
                    return cards;
                }

            }
        }
    }
</script>