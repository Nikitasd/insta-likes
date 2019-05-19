<template>

    <div class="single-destination relative pb-20">
            <div class="thumb relative">
                <div class="overlay overlay-bg"></div>
                <img class="img-fluid"  :src="card.thumbnail_url || thumbnail_url" :alt="card.title">
            </div>
        <div class="priceFixed" v-if="card.cost > 0">
            <a :href="card.link">
                <button class="btn btn-sm btn-warning" >+{{ card.cost }}</button>
            </a>
        </div>

        <div class="countFixed" v-if="card.amount">
            <button class="btn btn-sm btn-success" >{{ card.gain +"/"+ card.amount }}</button>
        </div>

        <div class="desc" v-if="card.title">
            <h4>{{ card.title }}</h4>

            <p>{{ card.view_count }} views</p>

        </div>

        <div class="footer">
            <slot name="footer"></slot>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'Card',
        props: {
            card: Object
        },
        data() {
            return {
                thumbnail_url: "http://www.kbae.com.au/images/no_user_image.png",
            }
        }
    }
</script>

<style scoped>
    /*-------- start Popular-destination Area ------------*/
    .single-destination {
        -webkit-transition: all 0.3s ease 0s;
        -moz-transition: all 0.3s ease 0s;
        -o-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
    }

    .single-destination .overlay-bg {
        background: rgba(4, 9, 30, 0.4);
        -webkit-transition: all 0.3s ease 0s;
        -moz-transition: all 0.3s ease 0s;
        -o-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
        opacity: 0;
    }

    .single-destination .thumb {
        position: relative;
    }

    .single-destination .thumb img {
        width: 100%;
        height:271px;
    }

    .single-destination .desc{
        text-align: center;
        position: absolute;
        width: 100%;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
    }
    .single-destination .priceFixed{
        text-align: center;
        position: absolute;
        width: 100%;
        left: 53%;
        top: 10%;
        transform: translate(-15%, -50%); /*-10 было*/
    }

    .single-destination .countFixed{
        text-align: center;
        position: absolute;
        width: 100%;
        right: 23%;
        top: 10%;
        transform: translate(-15%, -50%); /*-10 было*/
    }

    .single-destination .check {
        text-align: center;
        position: absolute;
        width: 100%;
        left: 23%;
        bottom: 5%;
        transform: translate(-50%, -50%);
    }

    .single-destination .move {
        text-align: center;
        position: absolute;
        width: 100%;
        left: 75%;
        bottom: 5%;
        transform: translate(-50%, -50%);
    }

    /**/


    .single-destination .desc .price-btn {
        background: #f8b600;
        text-align: center;
        color: #222;
        padding: 6px 30px;
        font-size: 14px;
        font-weight: 600;
        display: inline-block;
        margin: 10px;
        opacity: 0;
        -webkit-transition: all 0.3s ease 0s;
        -moz-transition: all 0.3s ease 0s;
        -o-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
    }

    .single-destination .desc h4 {
        color: #fff;
    }

    .single-destination .desc p {
        color: #fff;
        font-size: 14px;
        font-weight: 300;
        margin-bottom: 0px;
    }

    .single-destination:hover .price-btn {
        opacity: 1;
    }

    .single-destination:hover .overlay-bg {
        opacity: 1;
    }
</style>