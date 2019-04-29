<template>

   <div class="container">
       <div class="section-top-border">
           <div class="row">
               <div class="col-md-5 banner-left">
                   <h3 class="text-dark">Away from monotonous life</h3>
                   <p class="text-dark">
                       If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each.
                   </p>
                   <a href="#" class="primary-btn text-uppercase">Get Started</a>
               </div>
               <div class="col-md-6 banner-right">
                   <ul class="nav nav-tabs" id="myTab" role="tablist">
                       <li class="nav-item" v-for="(tab, index) in tabList" :key="index">
                           <a class="nav-link text-dark" :class="{active: tab.active}" data-toggle="tab" :href="'#'+ tab.id" role="tab" :aria-controls="tab.id" :aria-selected="tab.active">{{ tab.title }}</a>
                       </li>
                   </ul>
                   <div class="tab-content" id="myTabContent">
                       <div class="tab-pane fade active show" id="flight" role="tabpanel" aria-labelledby="flight-tab">
                           <form class="form-wrap" @submit.prevent="load">
                               <input type="text" class="form-control" v-model="form.link" @click="setData" placeholder="Ссылка на страницу" >
                               <input type="text" class="form-control" v-model="form.cost" placeholder="Стоимость" >
                               <input type="text" class="form-control" v-model="form.count" placeholder="Кол-во" >
                               <button class="primary-btn text-uppercase">Search flights</button>
                           </form>
                       </div>
                       <div class="tab-pane fade " id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
                           <form class="form-wrap">
                               <input type="text" class="form-control" placeholder="Ссылка на запись" >
                               <input type="text" class="form-control" placeholder="Стоимость" >
                               <input type="text" class="form-control" placeholder="Кол-во" >
                           </form>
                       </div>
                       <div class="tab-pane fade" id="holiday" role="tabpanel" aria-labelledby="holiday-tab">
                           <form class="form-wrap">
                               <input type="text" class="form-control" placeholder="Ссылка на запись" >
                               <textarea type="text" class="form-control" placeholder="Ключевые слова(через запятую)" ></textarea>
                               <input type="text" class="form-control" placeholder="Стоимость">
                               <a href="#" class="primary-btn text-uppercase">Search Holidays</a>
                           </form>
                       </div>
                   </div>
               </div>
           </div>
       </div>

       <section class="recent-blog-area section-gap" v-if="card.title != '' ">
           <div class="container">
               <div class="row">
                   <div class="col-md-4"></div>
                   <div class="col-md-4">
                       <card :card="card" ></card>
                   </div>
               </div>
           </div>
       </section>
   </div>

</template>

<script>
import Form from 'vform'
import axios from 'axios'

const path = "https://api.instagram.com/oembed/?url=";

export default {

  metaInfo () {
    return { title: this.$t('settings') }
  },
    data: () => ({
        tabList: [
            {
                title: 'Подписчики',
                id: 'flight',
                active: true,

            },
            {
                title: 'Лайки',
                id: 'hotel',
                active: false,

            },
            {
                title: 'Комментарии',
                id: 'holiday',
                active: false,

            },
        ],

        form: new Form({
            link: '',
            cost: '',
            count: '',
        }),

        response: {},

        card: {
            title: "",
            cost: '',
            route: '',
            thumbnail_url: '',
            views: 0
        },

    }),

    methods: {

       load (link) {
            axios.get(path + link).then(response => {
                this.response = {...response.data};
            })
        },

        setData() {

            axios.get('/api/articles').then(response => {
                console.log(response.data);
            })

        }
    }
}

/*
                    fetch("http://jsonplaceholder.typicode.com/todos").then(function (response) {
                return response.json();
        }).then(function (result) {
         this.todos =  result;
        });
                */

</script>
