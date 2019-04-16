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
                       <li class="nav-item">
                           <a class="nav-link active show" id="flight-tab" data-toggle="tab" href="#flight" role="tab" aria-controls="flight" aria-selected="true">Flights</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" id="hotel-tab" data-toggle="tab" href="#hotel" role="tab" aria-controls="hotel" aria-selected="false">Hotels</a>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" id="holiday-tab" data-toggle="tab" href="#holiday" role="tab" aria-controls="holiday" aria-selected="false">Holidays</a>
                       </li>
                   </ul>
                   <div class="tab-content" id="myTabContent">
                       <div class="tab-pane fade active show" id="flight" role="tabpanel" aria-labelledby="flight-tab">
                           <form class="form-wrap">
                               <input type="text" class="form-control" name="name" placeholder="Ссылка на запись" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ссылка на запись'">
                               <input type="text" class="form-control" name="to" placeholder="Стоимость" onfocus="this.placeholder = ''" onblur="this.placeholder = 'To'">
                               <input type="text" class="form-control" name="to" placeholder="Кол-во" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Кол-во'">
                               <button class="primary-btn text-uppercase">Search flights</button>
                           </form>
                       </div>
                       <div class="tab-pane fade" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
                           <form class="form-wrap">
                               <input type="text" class="form-control" name="name" placeholder="From " onfocus="this.placeholder = ''" onblur="this.placeholder = 'From '">
                               <input type="text" class="form-control" name="to" placeholder="To " onfocus="this.placeholder = ''" onblur="this.placeholder = 'To '">
                               <a href="#" class="primary-btn text-uppercase">Search Hotels</a>
                           </form>
                       </div>
                       <div class="tab-pane fade" id="holiday" role="tabpanel" aria-labelledby="holiday-tab">
                           <form class="form-wrap">
                               <input type="text" class="form-control" name="name" placeholder="From " onfocus="this.placeholder = ''" onblur="this.placeholder = 'From '">
                               <input type="text" class="form-control" name="to" placeholder="To " onfocus="this.placeholder = ''" onblur="this.placeholder = 'To '">
                               <a href="#" class="primary-btn text-uppercase">Search Holidays</a>
                           </form>
                       </div>
                   </div>
               </div>
           </div>
       </div>

       <section class="recent-blog-area section-gap">
           <div class="container">
               <div class="row">
                   <div class="col-md-4" v-for="n in 3">
                       <div class="single-destination relative" >
                           <div class="thumb relative">
                               <div class="overlay overlay-bg"></div>
                               <img class="img-fluid" src="/img/d1.jpg" alt="" style="height: 291px;">
                           </div>
                           <div class="desc">
                               <a href="#" class="price-btn">$150</a>
                               <h4>Mountain River</h4>
                               <p>Paraguay</p>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>
   </div>

</template>

<script>

export default {

  metaInfo () {
    return { title: this.$t('settings') }
  },
}
</script>
