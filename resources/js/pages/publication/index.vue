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

        <section class="popular-destination-area pb-40">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-30 col-lg-8">
                        <div class="title">
                            <h2>Популярные</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4" v-for="(card, index) in cards" :key="index">
                        <card :card="card"></card>
                    </div>
                </div>
            </div>
        </section>

        <section class="popular-destination-area pb-80">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-50 col-lg-8">
                        <div class="title">
                            <h3 class="mb-10">Менее популярные</h3>
                        </div>
                    </div>
                    <div class="menu-content col-lg-2 text-right">
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

    </div>
</template>

<script>

    export default {
        scrollToTop: false,
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
            cards: [
                {   title: 'Charles Wilson',
                    cost: null,
                    route: "#",
                    thumbnail_url: 'https://justifiedgrid.com/wp-content/gallery/life/biking/137646854.jpg',
                    views: 312
                },
                {   title: 'Charles Wilson',
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
                {   title: 'Charles Wilson',
                    cost: null,
                    route: "#",
                    thumbnail_url: 'https://justifiedgrid.com/wp-content/gallery/life/biking/137646854.jpg',
                    views: 312
                },
                {   title: 'Charles Wilson',
                    cost: 32,
                    route: "#",
                    thumbnail_url: 'https://justifiedgrid.com/wp-content/gallery/life/biking/137646854.jpg',
                    views: 312
                },
                {   title: 'Charles Wilson',
                    cost: null,
                    route: "#",
                    thumbnail_url: 'https://justifiedgrid.com/wp-content/gallery/life/biking/137646854.jpg',
                    views: 312
                },
                {   title: 'Charles Wilson',
                    cost: 32,
                    route: "#",
                    thumbnail_url: 'https://justifiedgrid.com/wp-content/gallery/life/biking/137646854.jpg',
                    views: 312
                },
            ]
        }),
    }
</script>
