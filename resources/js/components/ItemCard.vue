<template>
    <div>
        <div class="shop-box-1 background-white rounded over-hide">
            <div class="sale">sale</div>
            <a href="#">
                <img :src="item.logo" alt="">
            </a>
            <h5 class="mt-3 mb-0">{{ item.name }} </h5>

            <p class="mb-4"><em>spring 2018</em></p>
            <div class="link-block pt-3">
                <a href="#" class="btn btn-sm btn-primary">cart <i class="fa fa-shopping-bag"></i></a>
                <a href="#" class="btn btn-sm btn-primary float-right">view <i class="fa fa-search"></i></a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ItemCard",
        props: {
            // this component expects a prop of type object
            item: {
                type: Object,
                required: true
            }
        }
    };
</script>

