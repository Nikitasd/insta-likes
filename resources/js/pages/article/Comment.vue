<template>
  <div class="comment-list">
    <div class="single-comment justify-content-between d-flex" >
      <div class="user justify-content-between d-flex" >
        <div class="thumb">
          <img :src="user.attributes.avatar" width="60px" height="60">
        </div>
        <div class="desc">
          <h5><a href="#">{{ user.attributes.username }}</a></h5>
          <p class="date">December 4, 2017 at 3:12 pm </p>
          <p class="comment">
            {{ comment.content }}
          </p>
        </div>
      </div>
      <div class="reply-btn">
        <a href="" class="btn-reply text-uppercase">reply</a>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'ArticleComment',

  props: {
      comment: {
          type: Object,
          required: true,
      },
      user:{
          type: Object,
          required: true,
      },
  },

}
</script>
