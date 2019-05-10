<template>
  <div class="row single-post" v-if="article">
    <div class="col-lg-3 col-md-3 meta-details">
      <div class="user-details row">
        <p class="date col-lg-12 col-md-12 col-6"><a href="#">12 Dec, 2017</a> <span class="lnr lnr-calendar-full"></span></p>
        <p class="view col-lg-12 col-md-12 col-6"><a href="#">{{ article.view_count }} views</a> <span class="lnr lnr-eye"></span></p>
      </div>
    </div>
    <div class="col-lg-9 col-md-9">
      <router-link class="posts-title" :to="{name: 'article.show', params: {slug: article.slug }}">
        <h4>{{ article.title }}</h4>
      </router-link>
      <p class="excert">
        {{ article.content | truncate(contentTruncate) }}
      </p>
    </div>
  </div>

</template>

<script>
export default {
  name: 'ArticleContent',

  props: {
      article: {
          type: Object,
      },
     contentTruncate: {
         type: Number,
         required: false
     }
  },


    filters: {
        truncate: function (text, length) {
            if(length > 50)
                return text.substring(0, length);
            else
                return text;
        },
    }

}
</script>
