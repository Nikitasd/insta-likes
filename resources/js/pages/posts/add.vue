<template>
  <card>
    <a class="btn btn-warning btn-sm" @click="$router.go(-1)">back</a>
    <div class="row justify-content-center">
      <!--
      <div class="col-lg-12 text-center">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="funky-ui-icon icon-Close"></i></span>
          </button>
         <strong>Помощь:</strong> You successfully read <a href="#" class="alert-link">this important alert message</a>
        </div>
      </div>
      --->
      <div class="col-md-10 col-lg-8 col-xl-6 ml-auto mr-auto">
        <p class="mb-3">Tabs with icons</p>
        <!-- Nav tabs -->
        <div class="tabs-back bg-tab-white">
          <ul class="nav nav-tabs with-border text-center justify-content-center" role="tablist">
            <li class="nav-item">
              <a class="nav-link disabled " data-toggle="tab" href="#tab1" role="tab" aria-expanded="true"><i class="funky-ui-icon icon-Cloud-Moon"></i> Подписчики</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" data-toggle="tab" href="#tab2" role="tab" aria-expanded="false"><i class="funky-ui-icon icon-Cloud-Rain"></i> Лайки</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" data-toggle="tab" href="#tab3" role="tab"><i class="funky-ui-icon icon-Cloud-Sun"></i> Комментарии</a>
            </li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content text-center">
            <div class="tab-pane fade" id="tab1" role="tabpanel" aria-expanded="true">
              <div class="post-comm-box background-white over-hide">
                <div class="clear"></div>
                <div class="subscribe-box-1 mt-4">
                  <input type="text" value="" placeholder="Ссылка на страницу" class="form-control">
                </div>

                <div class="subscribe-box-1 mt-4">
                  <input type="number" value="" placeholder="Цена" class="form-control" required>
                </div>

                <div class="clear"></div>
                <div class="subscribe-box-1 mt-4">
                  <input type="number" value="" placeholder="Кол-во" class="form-control" required>
                </div>

                <div class="clear"></div>
                <div class="checkbox primary line-icon on-light mt-4">
                  <input id="checkboxForm" type="checkbox">
                  <label for="checkboxForm">
                    I'm not a robot
                  </label>
                </div>
                <div class="clear"></div>
                <button class="btn btn-primary btn-round btn-long mt-5" type="button">submit comment</button>
              </div>
            </div>

            <div class="tab-pane fade  active show" id="tab2" role="tabpanel" aria-expanded="false">
              <div class="post-comm-box background-white over-hide">
                <div class="clear"></div>
                <div class="subscribe-box-1 mt-4">
                  <input type="text" value="" placeholder="Ссылка на запись" class="form-control">
                </div>

                <div class="subscribe-box-1 mt-4">
                  <input type="number" value="" placeholder="Цена" class="form-control" required>
                </div>

                <div class="subscribe-box-1 mt-4">
                  <input type="number" value="" placeholder="Кол-во" class="form-control" required>
                </div>

                <div class="clear"></div>
                <div class="checkbox primary line-icon on-light mt-4">
                  <input id="checkboxForm" type="checkbox">
                  <label for="checkboxForm">
                    I'm not a robot
                  </label>
                </div>
                <div class="clear"></div>
                <button class="btn btn-primary btn-round btn-long mt-5" type="button">submit comment</button>
              </div>
            </div>
            <div class="tab-pane fade" id="tab3" role="tabpanel">
              <div class="post-comm-box background-white over-hide">
                <div class="clear"></div>
                <div class="subscribe-box-1 mt-4">
                  <input type="text" value="" placeholder="Ссылка на запись" class="form-control" required>
                </div>
                <div class="subscribe-box-1 mt-4">
                  <input type="text" value="" placeholder="Комментарий" class="form-control" required>
                </div>

                <div class="subscribe-box-1 mt-4">
                  <input type="number" value="" placeholder="Цена" class="form-control" required>
                </div>

                <div class="clear"></div>
                <div class="subscribe-box-1 mt-4">
                  <input type="number" value="" placeholder="Кол-во" class="form-control" required>
                </div>

                <div class="clear"></div>
                <div class="checkbox primary line-icon on-light mt-4">
                  <input id="checkboxForm" type="checkbox">
                  <label for="checkboxForm">
                    I'm not a robot
                  </label>
                </div>
                <div class="clear"></div>
                <button class="btn btn-primary btn-round btn-long mt-5" type="button">submit comment</button>
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
    return { title: this.$t('settings') }
  },
}
</script>
