<template>

    <form @submit="getfilteredData">
        <card>
            <div class="row">
                <div class="col-lg-3 pt-3">
                    <div class="sidebar-box background-white drop-shadow rounded">
                        <div class="subscribe-box-1">
                            <input type="text" class="form-control" placeholder="Enter key word  ..." v-model="search" v-on:keyup="getfilteredData">
                        </div>
                        <hr>

                        <p class="mt-4 mb-3">Success radio</p>
                        <div class="subscribe-box-2" v-for="(stack, index) in stacks" :key="index" >
                            <div class="radio info">
                                <input name="stacks" :id="`stack-${index}`" type="radio" :value="true" v-model="stack.checked" @change="getfilteredData">
                                <label :for="`stack-${index}`">{{stack.value}}</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="grid-wraper clearfix">
                        <div class="grid-box float-inline third with-margin" v-for="(item, index) in filteredData">
                            <item-card :key="index" :item="item"></item-card>
                        </div>
                    </div>

                </div>
            </div>
        </card>
    </form>
</template>

<script>
    import ItemCard from "../../components/ItemCard";


    export default {
        components: {
            'item-card': ItemCard
        },
        data() {
            return {
                filteredData: [],
                search: '',
                result: [
                    {
                        name: 'women-shirts',
                        logo: 'http://res.cloudinary.com/johnayeni/image/upload/v1524501994/vue-logo_uoxef2.png',
                        stack: [ 'Все записи']
                    },
                    {
                        name: 'women-shirts2',
                        logo: 'https://instagram.fods1-1.fna.fbcdn.net/vp/d7e656965907c6b3a13ac142a3e8b96d/5D439E3B/t51.2885-15/sh0.08/e35/s640x640/53859476_669804643422572_4755845080822706387_n.jpg?_nc_ht=instagram.fods1-1.fna.fbcdn.net',
                        stack: [ 'Все записи', 'Активные']
                    },
                    {
                        name: 'nikitos',
                        logo: 'http://res.cloudinary.com/johnayeni/image/upload/v1524501994/vue-logo_uoxef2.png',
                        stack: [ 'Все записи', 'Популярные']
                    },
                    {
                        name: 'nikitosPopular',
                        logo: 'http://res.cloudinary.com/johnayeni/image/upload/v1524501994/vue-logo_uoxef2.png',
                        stack: [ 'Все записи', 'Популярные']
                    },
                    {
                        name: 'serega',
                        logo: 'http://res.cloudinary.com/johnayeni/image/upload/v1524501994/vue-logo_uoxef2.png',
                        stack: [ 'Все записи', 'Популярные']
                    },

                ],
                stacks: [
                    {
                        checked: false,
                        value: 'Все записи'
                    },
                    {
                        checked: false,
                        value: 'Активные'
                    },
                    {
                        checked: false,
                        value: 'Популярные'
                    },
                ]
            };
        },
        computed: {
            selectedFilters: function() {
                let filters = [];
                let checkedFiters = this.stacks.filter(obj => obj.checked);

                checkedFiters.forEach(element => {

                    filters.push(element.value);

                    element.checked = false;

                });
                return filters;
            }
        },

        methods: {
            getfilteredData: function() {

                this.filteredData = this.result;

                let filteredDataByfilters = [];
                let filteredDataBySearch = [];


                if (this.selectedFilters.length > 0) {
                    filteredDataByfilters = this.filteredData.filter(obj => this.selectedFilters.every(val => obj.stack.indexOf(val) > -1));

                    this.filteredData = filteredDataByfilters;
                }
                // then filter according to keyword, for now this only affects the name attribute of each data
                if (this.search !== '') {
                    filteredDataBySearch = this.filteredData.filter(obj => obj.name.indexOf(this.search.toLowerCase()) >= 0);
                    this.filteredData = filteredDataBySearch;
                }
            }
        },
        mounted() {
            this.getfilteredData();
        }
    }
</script>