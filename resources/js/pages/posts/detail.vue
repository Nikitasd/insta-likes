<template>
  <card>
    <a class="btn btn-warning btn-sm" @click="$router.go(-1)">back</a>

    <div class="row justify-content-center">
      <div class="col-lg-5 col-md-12">

        <div class="section drop-shadow rounded">
          <div class="blog-box-1 blog-home background-white over-hide">
            <img src="https://images.pexels.com/photos/237018/pexels-photo-237018.jpeg?cs=srgb&dl=asphalt-autumn-beauty-237018.jpg&fm=jpg" alt="" class="blog-home-img">
            <div class="padding-in">
              <p class="mt-4">Nullam id dolor id nibh ultricies vehicula ut id elit. Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.
                Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Donec id elit non mi porta gravida at eget metus.
                Vestibulum id ligula porta felis euismod semper.
              </p>
              <div class="clear"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="sidebar-box background-white drop-shadow rounded">
          <h6 class="mb-3">Tags</h6>
          <a href="#" class="btn btn-primary btn-sm ml-0 mr-1 mb-1">design</a>
          <a href="#" class="btn btn-primary btn-sm ml-0 mr-1 mb-1">business</a>
          <a href="#" class="btn btn-primary btn-sm ml-0 mr-1 mb-1">responsive</a>
          <a href="#" class="btn btn-primary btn-sm ml-0 mr-1 mb-1">video</a>
          <div class="clear"></div>
          <div class="separator-wrap my-5">
            <span class="separator"><span class="separator-line dashed"></span></span>
          </div>
          <div class="clear"></div>
          <h6 class="mb-3">Другие публикации автора</h6>
          <ul class="list-style circle-o pl-4 pb-0">
            <li>
              <a href="#" class="btn-link btn-primary pl-0">august 2017</a>
            </li>
            <li>
              <a href="#" class="btn-link btn-primary pl-0">july 2017</a>
            </li>
            <li>
              <a href="#" class="btn-link btn-primary pl-0">june 2017</a>
            </li>
            <li>
              <a href="#" class="btn-link btn-primary pl-0">may 2017</a>
            </li>
          </ul>
          <div class="clear"></div>
        </div>
      </div>
    </div>
  </card>
</template>

<script>

export default {

  metaInfo () {
    return { title: this.$t('settings') }
  },
}
</script>
