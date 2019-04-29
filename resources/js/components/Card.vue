<template>

  <div class="single-destination relative">
    <router-link :to="{name: card.route}">
      <div class="thumb relative">
        <div class="overlay overlay-bg"></div>
        <img class="img-fluid" :src="card.thumbnail_url" :alt="card.title">
      </div>
    </router-link>
    <div class="priceFixed">
      <button class="btn btn-sm btn-warning" v-if="card.cost">+{{ card.cost }}</button>
      <button class="btn btn-sm btn-success" v-else>Выполнено</button>
    </div>
    <div class="desc" v-if="card.title">
      <h4>{{ card.title }}</h4>
      <p>{{ card.views }} views</p>
    </div>

    <div class="check" v-if="cardButton">
      <button class="genric-btn info circle small" >{{ cardButton }}</button>
    </div>

  </div>
</template>

<script>
export default {
  name: 'Card',
    props: {
        card: {
            type: Object,
            required: true
        },
        cardButton: {
            type: String,
            default: null,
        }
    }
}
</script>
