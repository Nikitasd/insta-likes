<template>
    <div class="container">
        <div class="row pt-30">
            <div class="col-lg-1"></div>
            <div class="col-lg-3">
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
            <div class="col-lg-5">
                <form class="form-area contact-form text-right" id="myForm" action="mail.php" method="post">

                    <div class="input-group pt-20 " v-for="v in 3">
                        <div class="input-group-prepend ">
                            <div class="input-group-text ">Email</div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email"
                               onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
    import ItemCard from "../../components/ItemCard";


    export default {
        components: {
            'item-card': ItemCard
        },
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