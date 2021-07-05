<template>
    <div>

        <div class="bg-gray-100 font-family-karla flex">

            <aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
                <div class="p-6">
                    <a href="index.html" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
                </div>
                <nav class="text-white text-base font-semibold pt-3">
                    <inertia-link :href="route('profile')">
                    <a @click="setMenu('profile')" :class="isUrl('profile') ? 'bg-black' : ''" class="flex items-center text-white hover:opacity-75 py-4 pl-6 nav-item">
                        <i class="fas fa-id-badge mr-3"></i>
                        Profile
                    </a>
                    </inertia-link>
                    <inertia-link :href="route('products')">
                    <a @click="setMenu('products')" :class="isUrl('products') ? 'bg-black' : ''" class="flex items-center text-white hover:opacity-75 py-4 pl-6 nav-item">
                        <i class="fas fa-box-open mr-3"></i>
                        Products
                    </a>
                    </inertia-link>
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
                <a href="/" class="absolute w-full upgrade-btn bottom-0 active-nav-link text-white flex items-center justify-center py-4">
                    <i class="fas fa-arrow-circle-up mr-3"></i>
                    Back to main site
                </a>
            </aside>

            <div class="w-full flex flex-col h-screen overflow-y-hidden">
                <!-- Desktop Header -->
                <header class="w-full items-center bg-white py-2 px-6 hidden sm:flex">
                    <div class="w-1/2"></div>
                    <div x-data="{ isOpen: false }" class="relative w-1/2 flex justify-end">
                        <inertia-link :href="route('logout')"  method="delete">
                        <button class="realtive z-10 w-8 h-8 rounded-full overflow-hidden bg-white hover:bg-black border-2 border-black hover:border-red-800 focus:border-gray-300 focus:outline-none">
                            <i class="fa fa-power-off text-red-600"> </i>
                        </button>
                        </inertia-link>
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
                        <inertia-link href="/">
                        <button class="w-full bg-white cta-btn font-semibold py-2 mt-3 rounded-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                            <i class="fas fa-arrow-circle-up mr-3"></i> Back to Main Site
                        </button>
                        </inertia-link>
                    </nav>
                    <!-- <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                        <i class="fas fa-plus mr-3"></i> New Report
                    </button> -->
                </header>
            
                <div class="w-full overflow-x-hidden border-t flex flex-col">
                    <div class="flex flex-row justify-center mt-5">
                    <flash-messages />
                    </div>
                    <slot />
                </div>
                
            </div>
            
        </div>
    </div>
</template>

<script>
import FlashMessages from './components/FlashMessages.vue'

export default {
    name:"Dashboard",
    components: {
        FlashMessages 
    },
    data(){
       return{
           isOpen:false,
           menuItem:'',
       } 
    },
    methods: {
        isUrl(...urls) {
            let currentUrl = this.$page.url.substr(1)
            if (urls[0] === '') {
                return currentUrl === ''
            }
            return urls.filter(url => currentUrl.startsWith(url)).length
        },
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