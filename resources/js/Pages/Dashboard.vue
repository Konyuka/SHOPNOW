<template>
    <div>

        <div class="bg-gray-100 font-family-karla flex">

            <aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
                <div class="p-6">
                    <a href="index.html" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
                </div>
                <nav class="text-white text-base font-semibold pt-3">
                    <a @click="setMenu('profile')"  v-bind:class="{'bg-black': menuItem == 'profile'}" class="flex items-center text-white hover:opacity-75 py-4 pl-6 nav-item">
                        <i class="fas fa-id-badge mr-3"></i>
                        Profile
                    </a>
                    <a @click="setMenu('products')" v-bind:class="{'bg-black': menuItem == 'products'}" class="flex items-center text-white hover:opacity-75 py-4 pl-6 nav-item">
                        <i class="fas fa-box-open mr-3"></i>
                        Products
                    </a>
                    <a @click="setMenu('orders')" v-bind:class="{'bg-black': menuItem == 'orders'}" class="flex items-center text-white hover:opacity-75 py-4 pl-6 nav-item">
                        <i class="fas fa-cash-register mr-3"></i>
                        Orders
                    </a>
                    <a @click="setMenu('discount')" v-bind:class="{'bg-black': menuItem == 'discount'}" class="flex items-center text-white hover:opacity-75 py-4 pl-6 nav-item">
                        <i class="fas fa-tags mr-3"></i>
                        Discount
                    </a>
                    <a @click="setMenu('customer')" v-bind:class="{'bg-black': menuItem == 'customer'}" class="flex items-center text-white hover:opacity-75 py-4 pl-6 nav-item">
                        <i class="fas fa-users mr-3"></i>
                        Customers
                    </a>
                    <a @click="setMenu('analytics')" v-bind:class="{'bg-black': menuItem == 'analytics'}" class="flex items-center text-white hover:opacity-75 py-4 pl-6 nav-item">
                        <i class="fas fa-chart-line mr-3"></i>
                        Analytics
                    </a>
                </nav>
                <a href="#" class="absolute w-full upgrade-btn bottom-0 active-nav-link text-white flex items-center justify-center py-4">
                    <i class="fas fa-arrow-circle-up mr-3"></i>
                    Back to main site
                </a>
            </aside>

            <div class="w-full flex flex-col h-screen overflow-y-hidden">
                <!-- Desktop Header -->
                <header class="w-full items-center bg-white py-2 px-6 hidden sm:flex">
                    <div class="w-1/2"></div>
                    <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
                        <button @click="isOpen = !isOpen" class="realtive z-10 w-12 h-12 rounded-full overflow-hidden border-4 border-gray-400 hover:border-gray-300 focus:border-gray-300 focus:outline-none">
                            <img src="https://source.unsplash.com/uJ8LNVCBjFQ/400x400">
                        </button>
                        <button v-show="isOpen" @click="isOpen = false" class="h-full w-full fixed inset-0 cursor-default"></button>
                        <div v-show="isOpen" class="absolute w-32 bg-white rounded-lg shadow-lg py-2 mt-16">
                            <a href="#" class="block px-4 py-2 account-link hover:text-white">Account</a>
                            <a href="#" class="block px-4 py-2 account-link hover:text-white">Support</a>
                            <a href="#" class="block px-4 py-2 account-link hover:text-white">Sign Out</a>
                        </div>
                    </div>
                </header>

                <!-- Mobile Header & Nav -->
                <header x-data="{ isOpen: false }" class="w-full bg-sidebar py-5 px-6 sm:hidden">
                    <div class="flex items-center justify-between">
                        <a href="index.html" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
                        <button @click="isOpen = !isOpen" class="text-white text-3xl focus:outline-none">
                            <i x-show="!isOpen" class="fas fa-bars"></i>
                            <i x-show="isOpen" class="fas fa-times"></i>
                        </button>
                    </div>

                    <!-- Dropdown Nav -->
                    <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">
                        <a @click="setMenu('profile')"  v-bind:class="{'bg-black': menuItem == 'profile'}" class="flex items-center text-white hover:opacity-75 py-4 pl-6 nav-item">
                        <i class="fas fa-id-badge mr-3"></i>
                        Profile
                        </a>
                        <a @click="setMenu('products')" v-bind:class="{'bg-black': menuItem == 'products'}" class="flex items-center text-white hover:opacity-75 py-4 pl-6 nav-item">
                        <i class="fas fa-table mr-3"></i>
                        Products
                        </a>
                        <a @click="setMenu('orders')" v-bind:class="{'bg-black': menuItem == 'orders'}" class="flex items-center text-white hover:opacity-75 py-4 pl-6 nav-item">
                            <i class="fas fa-sticky-note mr-3"></i>
                            Orders
                        </a>
                        <a @click="setMenu('discount')" v-bind:class="{'bg-black': menuItem == 'discount'}" class="flex items-center text-white hover:opacity-75 py-4 pl-6 nav-item">
                            <i class="fas fa-calendar mr-3"></i>
                            Discount
                        </a>
                        <a @click="setMenu('customer')" v-bind:class="{'bg-black': menuItem == 'customer'}" class="flex items-center text-white hover:opacity-75 py-4 pl-6 nav-item">
                            <i class="fas fa-align-left mr-3"></i>
                            Customers
                        </a>
                        <a @click="setMenu('analytics')" v-bind:class="{'bg-black': menuItem == 'analytics'}" class="flex items-center text-white hover:opacity-75 py-4 pl-6 nav-item">
                            <i class="fas fa-tablet-alt mr-3"></i>
                            Analytics
                        </a>
                        <button class="w-full bg-white cta-btn font-semibold py-2 mt-3 rounded-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                            <i class="fas fa-arrow-circle-up mr-3"></i> Back to Main Site
                        </button>
                    </nav>
                    <!-- <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                        <i class="fas fa-plus mr-3"></i> New Report
                    </button> -->
                </header>
            
                <div class="w-full overflow-x-hidden border-t flex flex-col">
                    <Profile v-if="menuItem == 'profile' " />
                    <Products v-if="menuItem == 'products' " />
                    <Orders v-if="menuItem == 'orders' " />
                    <Discount v-if="menuItem == 'discount' " />
                    <Customer v-if="menuItem == 'customer' " />
                    <Analytics v-if="menuItem == 'analytics' " />
                </div>
                
            </div>
            
        </div>
    </div>
</template>

<script>
import Profile from "./components/Profile";
import Products from "./components/Products";
import Orders from "./components/Orders";
import Discount from "./components/Discount";
import Customer from "./components/Customer";
import Analytics from "./components/Analytics";

export default {
    name:"Dashboard",
    components: {
        Profile, 
        Products,
        Orders,
        Discount,
        Customer,
        Analytics,
    },
    data(){
       return{
           isOpen:false,
           menuItem:'orders',
       } 
    },
    methods: {
        setMenu(value){
            this.menuItem = value
        },   
    }
    
}
</script>

<style scoped>
 @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');
        .font-family-karla { font-family: karla; }
        .bg-sidebar { background: #3d68ff; }
        .cta-btn { color: #3d68ff; }
        .upgrade-btn { background: #1947ee; }
        .upgrade-btn:hover { background: #0038fd; }
        .active-nav-link { background: #1947ee; }
        .nav-item:hover { background: #1947ee; }
        .account-link:hover { background: #3d68ff; }
</style>