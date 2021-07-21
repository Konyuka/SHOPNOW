<template>
    <div>

        <div class="bg-gray-100 font-family-karla flex">

            <aside class="relative bg-blue-800 h-screen w-64 hidden sm:block shadow-xl">
                <div v-if="$page.props.auth.user.owner" class="p-6">
                    <a href="index.html" class="text-white text-sm font-semibold uppercase hover:text-gray-300">{{ this.$page.props.auth.user.account.name }}</a>
                </div>
                <div v-if="!$page.props.auth.user.owner" class="p-6">
                    <a href="index.html" class="text-white text-sm font-semibold uppercase hover:text-gray-300">{{ this.$page.props.auth.user.name }}</a>
                </div>
                <nav v-if="$page.props.auth.user.owner" class="text-white text-base font-semibold pt-3">
                    <inertia-link inertia-link :href="route('profile')">
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
                    <inertia-link :href="route('orders')">
                    <a @click="setMenu('orders')" v-bind:class="{'bg-black': menuItem == 'orders'}" class="flex items-center text-white hover:opacity-75 py-4 pl-6 nav-item">
                        <i class="fas fa-cash-register mr-3"></i>
                        Orders
                    </a>
                    </inertia-link>
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
                <nav v-if="!$page.props.auth.user.owner" class="text-white text-base font-semibold pt-3">
                    <inertia-link inertia-link :href="route('clientProfile')">
                    <a @click="setMenu('profile')" :class="isUrl('clientProfile') ? 'bg-black' : ''" class="flex items-center text-white hover:opacity-75 py-4 pl-6 nav-item">
                        <i class="fas fa-id-badge mr-3"></i>
                        Profile
                    </a>
                    </inertia-link>
                    <inertia-link :href="route('products')">
                    <a @click="setMenu('products')" :class="isUrl('products') ? 'bg-black' : ''" class="flex items-center text-white hover:opacity-75 py-4 pl-6 nav-item">
                        <i class="fas fa-box-open mr-3"></i>
                        Orders
                    </a>
                    </inertia-link>
                    <inertia-link :href="route('orders')">
                    <a @click="setMenu('orders')" v-bind:class="{'bg-black': menuItem == 'orders'}" class="flex items-center text-white hover:opacity-75 py-4 pl-6 nav-item">
                        <i class="fas fa-truck-moving mr-3"></i>
                        Delivery
                    </a>
                    </inertia-link>
                    <a @click="setMenu('discount')" v-bind:class="{'bg-black': menuItem == 'discount'}" class="flex items-center text-white hover:opacity-75 py-4 pl-6 nav-item">
                        <i class="fas fa-star mr-3"></i>
                        Wishlist
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
                        <a v-if="this.$page.props.auth.user.owner" @click="setMenu('profile')"  v-bind:class="{'bg-black': menuItem == 'profile'}" class="flex items-center text-white hover:opacity-75 py-4 pl-6 nav-item">
                        <i class="fas fa-id-badge mr-3"></i>
                        Profile
                        </a>
                        <a v-if="this.$page.props.auth.user.owner" @click="setMenu('products')" v-bind:class="{'bg-black': menuItem == 'products'}" class="flex items-center text-white hover:opacity-75 py-4 pl-6 nav-item">
                        <i class="fas fa-table mr-3"></i>
                        Products
                        </a>
                        <a v-if="this.$page.props.auth.user.owner" @click="setMenu('orders')" v-bind:class="{'bg-black': menuItem == 'orders'}" class="flex items-center text-white hover:opacity-75 py-4 pl-6 nav-item">
                            <i class="fas fa-sticky-note mr-3"></i>
                            Orders
                        </a>
                        <a v-if="this.$page.props.auth.user.owner" @click="setMenu('discount')" v-bind:class="{'bg-black': menuItem == 'discount'}" class="flex items-center text-white hover:opacity-75 py-4 pl-6 nav-item">
                            <i class="fas fa-calendar mr-3"></i>
                            Discount
                        </a>
                        <a v-if="this.$page.props.auth.user.owner" @click="setMenu('customer')" v-bind:class="{'bg-black': menuItem == 'customer'}" class="flex items-center text-white hover:opacity-75 py-4 pl-6 nav-item">
                            <i class="fas fa-align-left mr-3"></i>
                            Customers
                        </a>
                        <a v-if="this.$page.props.auth.user.owner" @click="setMenu('analytics')" v-bind:class="{'bg-black': menuItem == 'analytics'}" class="flex items-center text-white hover:opacity-75 py-4 pl-6 nav-item">
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
            
                <div class="realtive w-full overflow-x-hidden border-t flex flex-col">
                    <div class="flex flex-row justify-center mt-5">
                    <flash-messages />
                    </div>
                    <div v-if="welcome" class="absolute flex-col items-center justify-center hidden h-screen w-full pb-8 mt-48 md:relative md:w-auto md:bg-transparent md:border-none md:mt-12 md:ml-52  md:flex-row md:p-0 md:items-end md:flex md:justify-between">
                        <svg class="absolute top-0 left-0 hidden w-screen max-w-3xl -mt-64 -ml-12 lg:block"
                            viewBox="0 0 818 815" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs>
                                <linearGradient x1="0%" y1="0%" x2="100%" y2="100%" id="c">
                                    <stop stop-color="#E614F2" offset="0%" />
                                    <stop stop-color="#FC3832" offset="100%" />
                                </linearGradient>
                                <linearGradient x1="0%" y1="0%" x2="100%" y2="100%" id="f">
                                    <stop stop-color="#657DE9" offset="0%" />
                                    <stop stop-color="#1C0FD7" offset="100%" />
                                </linearGradient>
                                <filter x="-4.7%" y="-3.3%" width="109.3%" height="109.3%" filterUnits="objectBoundingBox"
                                    id="a">
                                    <feOffset dy="8" in="SourceAlpha" result="shadowOffsetOuter1" />
                                    <feGaussianBlur stdDeviation="8" in="shadowOffsetOuter1" result="shadowBlurOuter1" />
                                    <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.15 0" in="shadowBlurOuter1" />
                                </filter>
                                <filter x="-4.7%" y="-3.3%" width="109.3%" height="109.3%" filterUnits="objectBoundingBox"
                                    id="d">
                                    <feOffset dy="8" in="SourceAlpha" result="shadowOffsetOuter1" />
                                    <feGaussianBlur stdDeviation="8" in="shadowOffsetOuter1" result="shadowBlurOuter1" />
                                    <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0" in="shadowBlurOuter1" />
                                </filter>
                                <path
                                    d="M160.52 108.243h497.445c17.83 0 24.296 1.856 30.814 5.342 6.519 3.486 11.635 8.602 15.12 15.12 3.487 6.52 5.344 12.985 5.344 30.815v497.445c0 17.83-1.857 24.296-5.343 30.814-3.486 6.519-8.602 11.635-15.12 15.12-6.52 3.487-12.985 5.344-30.815 5.344H160.52c-17.83 0-24.296-1.857-30.814-5.343-6.519-3.486-11.635-8.602-15.12-15.12-3.487-6.52-5.343-12.985-5.343-30.815V159.52c0-17.83 1.856-24.296 5.342-30.814 3.486-6.519 8.602-11.635 15.12-15.12 6.52-3.487 12.985-5.343 30.815-5.343z"
                                    id="b" />
                                <path
                                    d="M159.107 107.829H656.55c17.83 0 24.296 1.856 30.815 5.342 6.518 3.487 11.634 8.602 15.12 15.12 3.486 6.52 5.343 12.985 5.343 30.816V656.55c0 17.83-1.857 24.296-5.343 30.815-3.486 6.518-8.602 11.634-15.12 15.12-6.519 3.486-12.985 5.343-30.815 5.343H159.107c-17.83 0-24.297-1.857-30.815-5.343-6.519-3.486-11.634-8.602-15.12-15.12-3.487-6.519-5.343-12.985-5.343-30.815V159.107c0-17.83 1.856-24.297 5.342-30.815 3.487-6.519 8.602-11.634 15.12-15.12 6.52-3.487 12.985-5.343 30.816-5.343z"
                                    id="e" />
                            </defs>
                            <g fill="none" fill-rule="evenodd" opacity=".9">
                                <g transform="rotate(65 416.452 409.167)">
                                    <use fill="#000" filter="url(#a)" xlink:href="#b" />
                                    <use fill="url(#c)" xlink:href="#b" />
                                </g>
                                <g transform="rotate(29 421.929 414.496)">
                                    <use fill="#000" filter="url(#d)" xlink:href="#e" />
                                    <use fill="url(#f)" xlink:href="#e" />
                                </g>
                            </g>
                        </svg>
                    </div>
                    
                    <slot v-else />
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
           isVendor:'',
           welcome:''
       } 
    },
    mounted () {
        this.isVendor = this.$page.props.auth.user.owner
        this.checkRoute()
    },
    computed: {
    
    },
    methods: {
        checkRoute(){
            // let currentRoute = this.route().current()
            if(this.route().current() == 'dashboard'){
                this.welcome = true
            }else{
                this.welcome = false
            }
        },
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