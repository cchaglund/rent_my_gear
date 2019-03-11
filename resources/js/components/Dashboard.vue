<template>
    <div class="container">
        <div class="d-flex justify-content-center gear_nav">
           <h4 class="m-2" @click="getProducts">Products</h4>
           <h4 class="m-2" @click="getBookings">Bookings</h4>
       </div>

       <div v-if="showProducts">
           <ul>
            <li v-for="product in products_string">
                {{product.name}}
            </li>
           </ul>
       </div>
       <div v-else="showBookings">
           Bookings
       </div>
       
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        props: [
            'products_string', 'bookings_string'
        ],
        computed: {
            products: function() {
                return console.log(this.products_string)
            } 
        },
        data() {
            return {
                showProducts: true,
                showBookings: false,
            }
        },
        methods: {
            getProducts() {
                this.showProducts = true
                this.showBookings = false
                axios.get('/')
            },
            getBookings() {
                this.showProducts = false
                this.showBookings = true
            }
        }
    }
</script>

<style>
.gear_nav {
    width: 100vw;
}
</style>
