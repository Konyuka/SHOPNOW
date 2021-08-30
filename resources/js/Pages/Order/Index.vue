<template>
<div>
    <div>
        <main class="w-full flex-grow p-6">
            <h1 class="text-3xl text-black">Orders</h1>

            <div class="w-full mt-2">
                <!-- <div class="grid grid-cols-4 py-4 max-w-full">
                    <button class="py-3 px-2 bg-black text-white font-bold w-auto sm:w-32 mr-2 text-xs sm:text-lg">
                        Done
                    </button>
                    <button class="py-3 px-2 bg-blue-500 hover:bg-black text-white font-bold w-auto sm:w-32 mr-2 text-xs sm:text-lg">
                        Ready
                    </button>
                    <button class="py-3 px-2 bg-blue-500 hover:bg-black text-white font-bold w-auto sm:w-32 mr-2 text-xs sm:text-lg">
                        Shipped
                    </button>
                    <button class="py-3 px-2 bg-blue-500 hover:bg-black text-white font-bold w-auto sm:w-32 text-xs sm:text-lg">
                        Pending
                    </button>
                </div> -->

                <p class="text-xl pb-3 flex items-center">
                    <i class="fas fa-list mr-3"></i> Confirmed Orders
                </p>
                <div class="bg-white overflow-auto">
                    <table class="min-w-full bg-white">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Client Name</th>
                                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Phone Number</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Order Time</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">City</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            <tr v-for="order in orders" :key="order._id">
                                <td class="w-1/3 text-left py-3 px-4"> {{ order.name }} </td>
                                <td class="w-1/3 text-left py-3 px-4"> {{ order.phone }} </td>
                                <td class="w-1/3 text-left py-3 px-4"> {{ moment(order.updated_at) }} </td>
                                <td class="w-1/3 text-left py-3 px-4">{{ order.city }}</td>
                                <td class="w-1/3 text-left py-3 px-4">
                                    <span class="flex flex-row justify-around">
                                    <inertia-link :href="route('order.view', order._id)">
                                    <a href="" class="mr-5"> <i class="fas fa-eye mr-3 text-blue-600"></i> View </a>   
                                    </inertia-link>    
                                    <a href=""> <i class="fas fa-truck mr-3 text-blue-600"></i> Deliver </a> 
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</div>
</template>

<script>
import Layout from '../Dashboard'
import moment from 'moment';

export default {
    name:'Orders',
    layout: Layout,
    props: {
        orders:Array,
    },
    mounted () {
    },
    computed: {
    },
    data () {
        return {
            products:[],
            name:'',
            phone:'',
            address:''
        }
    },
    methods: {
        setOrders(){
            this.orders.filter(obj => {
                var found = obj.products.filter(x => x.account_id == this.$page.props.auth.user.account.id )
                found.filter(obj => {
                    this.products.push(obj) 
                    // return obj.b === 6
                })
            })

            this.$page.props.orderDetails.filter(obj => { 
                this.name = obj.name
                this.phone = obj.phone
                this.address = obj.address
            })
        },
        moment: function (time) {
            return moment(time);
            },

    }
    
}
</script>

<style scoped>

</style>