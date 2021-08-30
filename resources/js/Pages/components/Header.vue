<template>
  <div>
    <header class="relative z-50 w-full h-14 shadow-2xl">
        <div
            class="relative container flex items-center justify-center h-full max-w-6xl px-2 mx-auto sm:justify-between xl:px-0">

            <a href="/" class="relative flex items-center inline-block h-5 h-full font-black leading-none">
                <svg class="w-auto h-6 text-indigo-600 fill-current" viewBox="0 0 194 116"
                    xmlns="http://www.w3.org/2000/svg">
                    <g fill-rule="evenodd">
                        <path
                            d="M96.869 0L30 116h104l-9.88-17.134H59.64l47.109-81.736zM0 116h19.831L77 17.135 67.088 0z" />
                        <path d="M87 68.732l9.926 17.143 29.893-51.59L174.15 116H194L126.817 0z" />
                    </g>
                </svg>
                <span class="ml-3 text-xl text-gray-800">SHOPIFIE<span class="text-pink-500">.</span></span>
            </a>

            <!-- Search Form -->
            <div class="relative ml-10 hidden md:flex">
            <span class="absolute inset-y-0 left-0 pl-3 flex items-center">
                <svg class="h-5 w-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                    <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </span>
            <input v-model="form.search" @keyup.enter="search" class="text-sm w-96  border rounded-md pl-10 pr-4 py-2 focus:border-blue-500 focus:outline-none focus:shadow-outline" type="text" placeholder="Search Products, Brands, Categories">
            <button @click="search" class="ml-2 bg-transparent hover:bg-indigo-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
             Search
            </button>
            <button @click="mail" class="ml-2 bg-transparent hover:bg-indigo-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
             Send Mail
            </button>
            </div>

            <nav id="nav"
                v-if="showMenu"
                class="ml-10 absolute top-0 left-0 z-50 flex flex-col items-center justify-between w-full h-64 pt-5 mt-24 text-sm text-gray-800 bg-white border-t border-gray-200 md:w-auto md:flex-row md:h-24 lg:text-base md:bg-transparent md:mt-0 md:border-none md:py-0 md:flex md:relative">
               
                <div v-if="noAuth" class="ml-10">
                    <a @click="regModal = !regModal" href="#"
                        class="mr-0 font-bold duration-100 md:mr-3 lg:mr-8 transition-color text-indigo-600 hover:text-black">Register</a>     
                    <a href="/login"
                        class="mr-0 font-bold duration-100  transition-color text-pink-600 hover:text-black">Login</a>
                </div>   
                <div v-else>
                    <a href="/admin"
                        class="mr-10 font-bold duration-100 transition-color text-pink-600 hover:text-black">Dashboard</a>
                </div> 

                

                <div class="flex flex-col block w-full font-medium border-t border-gray-200 md:hidden">
                    <inertia-link href="#" class="w-full py-2 font-bold text-center text-pink-500">Filters</inertia-link>
                    <inertia-link :href="route('cart')">    
                    <a href="#" class="relative inline-block w-full px-5 py-3 text-sm leading-none text-center text-white bg-indigo-700 fold-bold">
                        <span> <i class="fa fa-shopping-cart"> </i> Cart </span> 
                    </a>
                    <svg class="flex-1 w-8 h-8 fill-current" viewbox="0 0 24 24">
                    <path d="M17,18C15.89,18 15,18.89 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20C19,18.89 18.1,18 17,18M1,2V4H3L6.6,11.59L5.24,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42A0.25,0.25 0 0,1 7.17,14.75C7.17,14.7 7.18,14.66 7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.58 17.3,11.97L20.88,5.5C20.95,5.34 21,5.17 21,5A1,1 0 0,0 20,4H5.21L4.27,2M7,18C5.89,18 5,18.89 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20C9,18.89 8.1,18 7,18Z"/>
                    </svg>
                    <span class="absolute right-0 top-0 rounded-full bg-black w-4 h-4 top right p-0 m-0 text-white font-mono text-sm  leading-tight text-center">
                        {{ cartNumber }}
                    </span>
                    </inertia-link> 
                </div>

            </nav>
            

            
            <inertia-link class="hidden md:flex" :href="route('cart')">
                <a href="#" role="button" class="group relative flex z-40 px-2 py-2 text-lg font-bold text-indigo-600 md:mt-0">
                    <span class="mr-1 font-bold duration-100 transition-color text-indigo-600 group-hover:text-black">Cart</span>
                    <svg class="group-hover:text-black flex-1 w-8 h-8 fill-current" viewbox="0 0 24 24">
                    <path d="M17,18C15.89,18 15,18.89 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20C19,18.89 18.1,18 17,18M1,2V4H3L6.6,11.59L5.24,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42A0.25,0.25 0 0,1 7.17,14.75C7.17,14.7 7.18,14.66 7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.58 17.3,11.97L20.88,5.5C20.95,5.34 21,5.17 21,5A1,1 0 0,0 20,4H5.21L4.27,2M7,18C5.89,18 5,18.89 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20C9,18.89 8.1,18 7,18Z"/>
                    </svg>
                    <span class="absolute right-0 top-0 rounded-full bg-black group-hover:bg-indigo-600 w-4 h-4 top right p-0 m-0 text-white font-mono text-sm  leading-tight text-center">
                        {{ cartNumber }}
                    </span>
                </a>
            </inertia-link>

            <!-- <div
                class="absolute left-0 flex-col items-center justify-center hidden w-full pb-8 mt-48 border-b border-gray-200 md:relative md:w-auto md:bg-transparent md:border-none md:mt-0 md:flex-row md:p-0 md:items-end md:hidden md:justify-between">
                <inertia-link :href="route('cart')">
                <a href="#" role="button" class="relative flex z-40 px-2 py-2 text-lg font-bold text-pink-500 lg:text-white  md:mt-0">
                    <svg class="flex-1 w-8 h-8 fill-current" viewbox="0 0 24 24">
                    <path d="M17,18C15.89,18 15,18.89 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20C19,18.89 18.1,18 17,18M1,2V4H3L6.6,11.59L5.24,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42A0.25,0.25 0 0,1 7.17,14.75C7.17,14.7 7.18,14.66 7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.58 17.3,11.97L20.88,5.5C20.95,5.34 21,5.17 21,5A1,1 0 0,0 20,4H5.21L4.27,2M7,18C5.89,18 5,18.89 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20C9,18.89 8.1,18 7,18Z"/>
                    </svg>
                    <span class="absolute right-0 top-0 rounded-full bg-black w-4 h-4 top right p-0 m-0 text-white font-mono text-sm  leading-tight text-center">
                        {{ cartNumber }}
                    </span>
                </a>
                </inertia-link>
                <a href="#_"
                    class="ml-16 relative z-40 inline-block w-auto h-full px-3 py-3 text-sm font-bold leading-none text-white bg-indigo-700 rounded shadow-md fold-bold lg:bg-white lg:text-indigo-700 sm:w-full lg:shadow-none hover:shadow-xl">
                    <span class="text-xs"> <i class="fa fa-search mr-1"> </i> Filters </span> 
                </a>
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
            </div> -->

            <div @click="showMenu = !showMenu" id="nav-mobile-btn"
                class="absolute top-0 right-0 z-50 block w-6 mt-8 mr-10 cursor-pointer select-none md:hidden sm:mt-10">
                <span class="block w-full h-1 mt-2 duration-200 transform bg-gray-800 rounded-full sm:mt-1"></span>
                <span class="block w-full h-1 mt-1 duration-200 transform bg-gray-800 rounded-full"></span>
            </div>

        </div>

        <!-- <Categories /> -->

    </header>

    <!-- Reg Modal -->
    <div v-if="regModal" class="min-w-screen h-screen animated fadeIn faster  fixed  left-0 top-0 flex justify-center items-center inset-0 z-50 outline-none focus:outline-none bg-no-repeat bg-center bg-cover"  id="modal-id">
        <div class="absolute bg-black opacity-80 inset-0 z-0"></div>
        <div class="w-full  max-w-lg p-5 relative mx-auto my-auto rounded-xl shadow-lg  bg-white ">
        <!--content-->
        <div class="">
            <!--body-->
            <div class="text-center p-5 flex-auto justify-center">
                    <svg class="w-16 h-16 flex items-center text-indigo-500 mx-auto" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path></svg>
                    <h2 class="text-xl font-bold py-4 ">Choose Registration Type</h2>
                    <p class="text-sm text-gray-500 px-8">Select your prefered account. <br> Register either as a <b>Vendor</b> or a <b>Client</b> </p>    
            </div>
            <!--footer-->
            <div class="p-3  mt-2 text-center space-x-4 md:block">
                <inertia-link :href="route('registerClient')">
                <button class="mb-2 md:mb-0 bg-indigo-600 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-black">
                    Client Registration
                </button>
                </inertia-link>
                <inertia-link :href="route('registerVendor')">
                <button class="mb-2 md:mb-0 bg-indigo-600 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-black">
                    Vendor Registration
                </button>
                </inertia-link>
            </div>
        </div>
        </div>
    </div>


  </div>
</template>

<script>
// import Categories from './SubNav.vue'
import throttle from 'lodash/throttle'
import mapValues from 'lodash/mapValues'
import pickBy from 'lodash/pickBy'

export default {
  name: 'Header',
  components: {
    //   Categories,
  },
  data(){
    return{
      showMenu: true,
      form: {
        search: '',
      },
      email: this.$inertia.form(
          {
            to:'beatcrime.ke@gmail.com',
            from:'michaelsaiba84@gmail.com',
            subject:'Test',
            title:'Test Mail',
            body:'C',
          },
      ),
      regModal: false,
    }
  },
  watch: {
    //   form: {
    //     deep: true,
    //     handler: throttle(function() {
    //             this.$inertia.get(this.route('product.search'), pickBy(this.form), { preserveState: true })
    //         }, 150),
    //     },
  },
  computed: {
      noAuth(){
        if(this.$page.props.auth.user != null){
            return false
        }else{
            return true
        } 
      }, 
      cartNumber(){
          return this.$store.state.cartItems.length
      },
  },
  methods: {
      mail(){
         this.email.get(this.route('email'))
      },
      search(){
           this.$inertia.get(this.route('product.search'), pickBy(this.form), { preserveState: true })
      },
  }
  
}
</script>

<style scoped>

</style>
