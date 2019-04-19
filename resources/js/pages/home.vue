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
                        <router-link :to="{name: 'posts.add'}" class="btn btn-success">Добавить</router-link>
                </div>

            </div>
            <div class="row">

                <div class="col-md-4 pt-20" v-for="n in 3">
                    <div class="single-destination relative">
                        <div class="thumb relative">
                            <div class="overlay overlay-bg"></div>
                            <img class="img-fluid" src="https://instagram.fods1-1.fna.fbcdn.net/vp/341f1dcc791fad4452cede960f7535e3/5D77E4D9/t51.2885-15/sh0.08/e35/s640x640/52559123_202955073997138_5638415260691332924_n.jpg?_nc_ht=instagram.fods1-1.fna.fbcdn.net"
                                 alt="">
                        </div>
                        <div class="priceFixed">
                            <h4 class="text-dark text-italic">+150</h4>
                        </div>
                        <div class="desc">
                            <h4>Mountain River</h4>
                            <p>Paraguay</p>
                        </div>
                        <div class="check">
                            <button href="#" class="btn-xs btn-warning ">Проверка</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 pt-20" v-for="n in 4">
                    <div class="single-destination relative">
                        <a href="instagram.com" target="_blank">
                        <div class="thumb relative">
                            <div class="overlay overlay-bg"></div>
                            <img class="img-fluid" src="img/d1.jpg" alt="" >
                        </div>
                        </a>
                        <div class="priceFixed">
                            <h4 class="text-light">+150</h4>
                        </div>
                        <div class="desc">
                            <h4>Mountain River</h4>
                        </div>

                        <div class="check">
                            <button href="#" class="btn-xs btn-warning ">Проверка</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>


