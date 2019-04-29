<template>
    <section class="popular-destination-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Popular Destinations</h1>
                        <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, day.</p>
                    </div>
                </div>

                <div class="col-lg-2"></div>
                <div class="col-lg-2 pb-70">
                    <router-link :to="{name: 'publication.add'}" class="btn btn-success">Добавить</router-link>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 pt-30" v-for="(card, index) in cards"  :key="index">
                    <card :card="card" :cardButton="'Проверить'"></card>
                </div>
            </div>
        </div>
    </section>
</template>

<script>

    export default {
        data: () => ({
            cards: [
                {   title: 'Charles Wilson',
                    cost: 20,
                    route: "#",
                    thumbnail_url: 'https://justifiedgrid.com/wp-content/gallery/life/biking/137646854.jpg',
                    views: 312
                },
                {
                    title: 'Tony Domo',
                    cost: 25,
                    route: "#",
                    thumbnail_url: 'https://instagram.fods1-1.fna.fbcdn.net/vp/9638015ab9adc5b8838f1072dd8f6d87/5D718122/t51.2885-15/sh0.08/e35/s640x640/49663039_1174014882765919_6624389624474183525_n.jpg?_nc_ht=instagram.fods1-1.fna.fbcdn.net',
                    views: 23
                },
                {
                    title: 'Rump Baker',
                    route: "#",
                    cost: 20,
                    thumbnail_url: 'https://justifiedgrid.com/wp-content/gallery/life/biking/137646854.jpg',
                    views: 231
                },
                {
                    title: 'Brad Pitt',
                    route: "#",
                    cost: 20,
                    thumbnail_url: 'https://justifiedgrid.com/wp-content/gallery/life/biking/137646854.jpg',
                    views: 443
                },
                {
                    title: 'Kermit the Frog',
                    route: "",
                    cost: 20,
                    thumbnail_url: 'https://justifiedgrid.com/wp-content/gallery/life/biking/137646854.jpg',
                    views: 403
                },
                {
                    title: 'Taylor Swift',
                    route: "",
                    cost: 20,
                    thumbnail_url: 'https://justifiedgrid.com/wp-content/gallery/life/biking/137646854.jpg',
                    views: 8843
                },
                {
                    title: 'Братан',
                    cost: 20,
                    route: "",
                    thumbnail_url: 'https://justifiedgrid.com/wp-content/gallery/life/biking/137646854.jpg',
                    views: 884
                }
            ]
        }),
    }
</script>
