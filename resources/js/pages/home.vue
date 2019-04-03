<template>
<card>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="call-box-3 text-center text-md-left">
                    <h5 class="mb-3">Design must reflect the practical and aesthetic in business.</h5>
                    <p class="mb-0">Some people think design means how it looks. But of course, if you<br>dig deeper, it's really how it works.</p>
                </div>
            </div>
            <div class="col-md-3 mt-4 mt-md-0">
                <div class="call-box-3 text-center text-md-right">
                    <router-link :to="{name: 'posts.add'}" class="btn btn-primary btn-long mt-0 mt-md-4">Добавить</router-link>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="grid-wraper with-margin clearfix">
                <div class="grid-box float-inline third with-margin" v-for="(post, index) in posts" :key="index">
                        <div class="portfolio-box-1 rounded">
                            <img :src="post.image" alt="">
                            <div class="portfolio-mask-3 rounded"></div>
                            <h5 class="on-center text-center">{{post.title}}</h5>
                            <p class="on-center text-center">
                             <button>
                                поставить лайк
                            </button>
                                <router-link :to="{name: post.src}" class="btn btn-success btn-sm">More</router-link>
                            </p>
                        </div>
                </div>
            </div>

        </div>
        <h3 class="text-center">Случайные инстаграмы</h3>
        <div class="section pt-5 pt-md-0 pb-5 pb-md-0 background-white z-bigger-2" style="margin-top:170px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 transform-y-120">
                        <div class="services-box-1 background-white drop-shadow">
                            <i class="funky-ui-icon icon-Conference"></i>
                            <h5 class="mt-2">agaaga</h5>
                            <a href="#" class="btn-link btn-primary">subscribe</a>
                        </div>
                    </div>
                    <div class="col-md-2 transform-y-120 mt-2 mt-md-0">
                        <div class="services-box-1 background-white drop-shadow">
                            <i class="funky-ui-icon icon-Aerobics"></i>
                            <h5 class="mt-2">sfdfds</h5>
                            <a href="#" class="btn-link btn-primary">subscribe</a>
                        </div>
                    </div>
                    <div class="col-md-2 transform-y-120 mt-2 mt-md-0">
                        <div class="services-box-1 background-white drop-shadow">
                            <i class="funky-ui-icon icon-Dove"></i>
                            <h5 class="mt-2">bezaga</h5>
                            <a href="#" class="btn-link btn-primary">subscribe</a>
                        </div>
                    </div>

                    <div class="col-md-2 transform-y-120 mt-2 mt-md-0">
                        <div class="services-box-1 background-white drop-shadow">
                            <i class="funky-ui-icon icon-Dove"></i>
                            <h5 class="mt-2">bezaga</h5>
                            <a href="#" class="btn-link btn-primary">subscribe</a>
                        </div>
                    </div>

                    <div class="col-md-2 transform-y-120 mt-2 mt-md-0">
                        <div class="services-box-1 background-white drop-shadow">
                            <i class="funky-ui-icon icon-Dove"></i>
                            <h5 class="mt-2">bezaga</h5>
                            <a href="#" class="btn-link btn-primary">subscribe</a>
                        </div>
                    </div>

                    <div class="col-md-2 transform-y-120 mt-2 mt-md-0">
                        <div class="services-box-1 background-white drop-shadow">
                            <i class="funky-ui-icon icon-Dove"></i>
                            <h5 class="mt-2">bezaga</h5>
                            <a href="#" class="btn-link btn-primary">subscribe</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</card>
</template>

<script>
export default {

  metaInfo () {
    return { title: this.$t('home') }
  },
    data() {
        return {
            posts: [
                {
                    image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ94PnH1c1b5DCGWxPpl3fsVQjsJoZ1cL7WpHEh8li2tJ5RAMcfZQ",
                    title: "design, motion",
                    src: "posts.detail"
                },
                {
                    image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ94PnH1c1b5DCGWxPpl3fsVQjsJoZ1cL7WpHEh8li2tJ5RAMcfZQ",
                    title: "design, motion2",
                    src: "posts.detail"
                },
                {
                    image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ94PnH1c1b5DCGWxPpl3fsVQjsJoZ1cL7WpHEh8li2tJ5RAMcfZQ",
                    title: "design, motion3",
                    src: "posts.detail"
                },
                {
                    image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ94PnH1c1b5DCGWxPpl3fsVQjsJoZ1cL7WpHEh8li2tJ5RAMcfZQ",
                    title: "design, motion4",
                    src: "posts.detail"
                },
                {
                    image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ94PnH1c1b5DCGWxPpl3fsVQjsJoZ1cL7WpHEh8li2tJ5RAMcfZQ",
                    title: "design, motion5",
                    src: "posts.detail"
                },
                {
                    image: "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ94PnH1c1b5DCGWxPpl3fsVQjsJoZ1cL7WpHEh8li2tJ5RAMcfZQ",
                    title: "design, motion6",
                    src: "posts.detail"
                },
            ],
            modal: {
                more: "more",
            },
        }
    }
}
</script>

<style>
    .portfolio-box-1 img{
        width: 291px;
        height: 291px;
    }
</style>