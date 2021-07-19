<template>
  <div>
    <body class="overflow-x-hidden antialiased">
      <div class="flex flex-col h-screen">
      <!-- Header Section -->
        <header class="relative z-50 w-full h-24 shadow-2xl">
            <div
                class="container flex items-center justify-center h-full max-w-6xl px-8 mx-auto sm:justify-between xl:px-0">

                <a href="/" class="relative flex items-center inline-block h-5 h-full font-black leading-none">
                    <svg class="w-auto h-6 text-indigo-600 fill-current" viewBox="0 0 194 116"
                        xmlns="http://www.w3.org/2000/svg">
                        <g fill-rule="evenodd">
                            <path
                                d="M96.869 0L30 116h104l-9.88-17.134H59.64l47.109-81.736zM0 116h19.831L77 17.135 67.088 0z" />
                            <path d="M87 68.732l9.926 17.143 29.893-51.59L174.15 116H194L126.817 0z" />
                        </g>
                    </svg>
                    <span class="ml-3 text-xl text-gray-800">Multi Vendor<span class="text-pink-500">.</span></span>
                </a>

                <nav id="nav"
                    class="absolute top-0 left-0 z-50 flex flex-col items-center justify-between hidden w-full h-64 pt-5 mt-24 text-sm text-gray-800 bg-white border-t border-gray-200 md:w-auto md:flex-row md:h-24 lg:text-base md:bg-transparent md:mt-0 md:border-none md:py-0 md:flex md:relative">
                    <a href="/"
                        class="ml-0 mr-0 font-bold duration-100 md:ml-12 md:mr-3 lg:mr-8 transition-color hover:text-indigo-600">Home</a>
                    <a href="#features"
                        class="mr-0 font-bold duration-100 md:mr-3 lg:mr-8 transition-color hover:text-pink-600">About</a>
                    <a href="#pricing"
                        class="mr-0 font-bold duration-100 md:mr-3 lg:mr-8 transition-color hover:text-indigo-600">Contacts</a>
                    <div v-if="noAuth">
                        <a @click="regModal = !regModal" href="#"
                            class="mr-0 font-bold duration-100 md:mr-3 lg:mr-8 transition-color text-indigo-600 hover:text-black">Register</a>     
                        <a href="/login"
                            class="mr-0 font-bold duration-100 transition-color text-pink-600 hover:text-black">Login</a>
                    </div>   
                    <div v-else>
                        <a href="/admin"
                            class="mr-0 font-bold duration-100 transition-color text-pink-600 hover:text-black">Dashboard</a>
                    </div>     
                    <div class="flex flex-col block w-full font-medium border-t border-gray-200 md:hidden">
                        <inertia-link href="/admin" class="w-full py-2 font-bold text-center text-pink-500">Admin Login</inertia-link>
                        <a href="#_" class="relative inline-block w-full px-5 py-3 text-sm leading-none text-center text-white bg-indigo-700 fold-bold">
                            <span> <i class="fa fa-shopping-cart"> </i> Cart </span> 
                        </a>
                    </div>
                </nav>

                <div
                    class="absolute left-0 flex-col items-center justify-center hidden w-full pb-8 mt-48 border-b border-gray-200 md:relative md:w-auto md:bg-transparent md:border-none md:mt-0 md:flex-row md:p-0 md:items-end md:flex md:justify-between">
                    
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

                <div id="nav-mobile-btn"
                    class="absolute top-0 right-0 z-50 block w-6 mt-8 mr-10 cursor-pointer select-none md:hidden sm:mt-10">
                    <span class="block w-full h-1 mt-2 duration-200 transform bg-gray-800 rounded-full sm:mt-1"></span>
                    <span class="block w-full h-1 mt-1 duration-200 transform bg-gray-800 rounded-full"></span>
                </div>

            </div>
        </header>
        <!-- End Header Section-->
      <main class="flex-1 overflow-y-auto z-50">

        <!-- Pricing Section -->
        <div class="relative px-8 py-1 md:py-16 lg:py-24 xl:py-0 h-auto xl:px-0">         

                    <div class="mt-20 bg-gray-200 bg-opacity-90">
                        <div class="container mx-auto mt-10">
                            <div class="flex shadow-md my-10">
                            <div class="w-3/4 bg-white px-10 py-10">
                                <div class="flex justify-between border-b pb-8">
                                <h1 class="font-semibold text-2xl">Shopping Cart</h1>
                                <h2 class="font-semibold text-2xl">{{ cartItems.length }} Items</h2>
                                </div>
                                <div class="flex mt-10 mb-5">
                                <h3 class="font-semibold text-gray-600 text-xs uppercase w-2/5">Product Details</h3>
                                <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Quantity</h3>
                                <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Price</h3>
                                <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Total</h3>
                                </div>

                                <div v-for="item in cartItems" :key="item.id" class="flex items-center hover:bg-gray-100 -mx-8 px-6 py-5">
                                <div class="flex w-2/5"> <!-- product -->
                                    <div class="w-20">
                                    <img class="h-24" src="https://drive.google.com/uc?id=18KkAVkGFvaGNqPy2DIvTqmUH_nk39o3z" alt="">
                                    </div>
                                    <div class="flex flex-col justify-between ml-4 flex-grow">
                                    <span class="font-bold text-sm">{{ item.title }}</span>
                                    <span class="text-red-500 text-xs"> {{ item.type }} </span>
                                    <a href="#" class="font-semibold hover:text-red-500 text-gray-500 text-xs">Remove</a>
                                    </div>
                                </div>
                                <div class="flex justify-center w-1/5">
                                    <svg class="fill-current text-gray-600 w-3" viewBox="0 0 448 512"><path d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
                                    </svg>

                                    <input class="mx-2 border text-center w-8" type="text" value="1">

                                    <svg class="fill-current text-gray-600 w-3" viewBox="0 0 448 512">
                                    <path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/>
                                    </svg>
                                </div>
                                <span class="text-center w-1/5 font-semibold text-sm">KShs.{{item.price}}</span>
                                <span class="text-center w-1/5 font-semibold text-sm">KShs.400</span>
                                </div>

                                <inertia-link :href="route('landing')">
                                <a href="#" class="flex font-semibold text-indigo-600 text-sm mt-10">
                            
                                <svg class="fill-current mr-2 text-indigo-600 w-4" viewBox="0 0 448 512"><path d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"/></svg>
                                Continue Shopping
                                </a>
                                </inertia-link>
                            </div>

                            <div id="summary" class="w-1/4 px-8 py-10">
                                <h1 class="font-semibold text-2xl border-b pb-8">Order Summary</h1>
                                <div class="flex justify-between mt-10 mb-5">
                                <span class="font-semibold text-sm uppercase">Items {{ cartItems.length}}</span>
                                <span class="font-semibold text-sm">KShs.590</span>
                                </div>
                                <div>
                                <label class="font-medium inline-block mb-3 text-sm uppercase">Shipping</label>
                                <select class="block p-2 text-gray-600 w-full text-sm">
                                    <option>Standard shipping - KShs.10.00</option>
                                </select>
                                </div>
                                <div class="py-10">
                                <label for="promo" class="font-semibold inline-block mb-3 text-sm uppercase">Promo Code</label>
                                <input type="text" id="promo" placeholder="Enter your code" class="p-2 text-sm w-full">
                                </div>
                                <button class="bg-red-500 hover:bg-red-600 px-5 py-2 text-sm text-white uppercase">Apply</button>
                                <div class="border-t mt-8">
                                <div class="flex font-semibold justify-between py-6 text-sm uppercase">
                                    <span>Total cost</span>
                                    <span>Kshs.600</span>
                                </div>
                                <button v-if="noAuth" @click="showAuth = !showAuth" class="bg-indigo-500 font-semibold hover:bg-indigo-600 py-3 text-sm text-white uppercase w-full">Login & Checkout</button>
                                <inertia-link v-else :href="route('checkout')">
                                <button class="bg-indigo-500 font-semibold hover:bg-indigo-600 py-3 text-sm text-white uppercase w-full">Checkout</button>
                                </inertia-link>
                                </div>
                            </div>

                            </div>
                        </div>
                        </div>

            
        </div>
        <!-- End Pricing Section -->

        <!--Auth Modal -->
        <div v-if="showAuth" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="flex items-end justify-center min-h-screen  pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <!--
            Background overlay, show/hide based on modal state.

            Entering: "ease-out duration-300"
                From: "opacity-0"
                To: "opacity-100"
            Leaving: "ease-in duration-200"
                From: "opacity-100"
                To: "opacity-0"
            -->
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

            <!-- This element is to trick the browser into centering the modal contents. -->
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>

            <!--
            Modal panel, show/hide based on modal state.

            Entering: "ease-out duration-300"
                From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                To: "opacity-100 translate-y-0 sm:scale-100"
            Leaving: "ease-in duration-200"
                From: "opacity-100 translate-y-0 sm:scale-100"
                To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            -->
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
            <div class="bg-white  px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                <div class="group mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-indigo-100 group-hover:bg-indigo-600 sm:mx-0 sm:h-10 sm:w-10">
                    <!-- Heroicon name: outline/exclamation -->
                   <i class="fa fa-window-close text-indigo-600 group-hover:text-black"> </i>
                </div>
                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                    <div class="mt-2">
                        <div class="max-w-md w-full space-y-8 p-10 bg-white rounded-xl z-10">
                        <div class="text-center">
                            

                            <h2 class="mt-6 text-3xl font-bold text-gray-900">
                                Login
                            </h2>
                            <p class="mt-2 text-sm text-gray-600">Sign in to checkout</p>
                            <div class="text-red-500 mt-5 italic">{{ $page.props.errors.email }}</div>
                            <div class="text-red-500 mt-5 italic">{{ $page.props.errors.password }}</div>
                        </div>
                        <form autocomplete="off" @submit.prevent="login" class="mt-8 space-y-6">
                            <input type="hidden" name="remember" value="true">
                            <div class="relative">
                                <label class="text-sm font-bold text-gray-700 tracking-wide">Email</label>
                                <input v-model="form.email" autocomplete="off" class=" w-full text-base py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500" type="email" placeholder="mail@gmail.com">
                            </div>
                            <div class="mt-8 content-center">
                                <label class="text-sm font-bold text-gray-700 tracking-wide">
                                    Password
                                </label>
                                <input v-model="form.password" autocomplete="off" class="w-full content-center text-base py-2 border-b border-gray-300 focus:outline-none focus:border-indigo-500" type="password" placeholder="Enter your password">
                            </div>
                            <div>
                                <button type="submit" class="w-full flex justify-center bg-indigo-500 text-gray-100 p-4  rounded-full tracking-wide
                                                font-semibold  focus:outline-none focus:shadow-outline hover:bg-indigo-600 shadow-lg cursor-pointer transition ease-in duration-300">
                                    Sign in
                                </button>
                            </div>
                            <p class="flex flex-col items-center justify-center mt-10 text-center text-md text-gray-500">
                                <span>Don't have an account?</span>
                                <a href="#" class="text-indigo-500 hover:text-indigo-500no-underline hover:underline cursor-pointer transition ease-in duration-300">Sign up</a>
                            </p>
                        </form>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div> 

        <footer class="px-4 pt-12 pb-8 text-white bg-white border-t border-gray-200">
            <div class="container flex flex-col justify-between max-w-6xl px-4 mx-auto overflow-hidden lg:flex-row">
                <div class="w-full pl-12 mr-4 text-left lg:w-1/4 sm:text-center sm:pl-0 lg:text-left">
                    <a href="/"
                        class="flex justify-start block text-left sm:text-center lg:text-left sm:justify-center lg:justify-start">
                        <span class="flex items-start sm:items-center">
                            <svg class="w-auto h-6 text-gray-800 fill-current" viewBox="0 0 194 116"
                                xmlns="http://www.w3.org/2000/svg">
                                <g fill-rule="evenodd">
                                    <path
                                        d="M96.869 0L30 116h104l-9.88-17.134H59.64l47.109-81.736zM0 116h19.831L77 17.135 67.088 0z">
                                    </path>
                                    <path d="M87 68.732l9.926 17.143 29.893-51.59L174.15 116H194L126.817 0z"></path>
                                </g>
                            </svg>
                        </span>
                    </a>
                    <p class="mt-6 mr-4 text-base text-gray-500">Crafting the next-level of user experience and engagement.
                    </p>
                </div>
                <div class="block w-full pl-10 mt-6 text-sm lg:w-3/4 sm:flex lg:mt-0">
                    <ul class="flex flex-col w-full p-0 font-medium text-left text-gray-700 list-none">
                        <li class="inline-block px-3 py-2 mt-5 font-bold tracking-wide text-gray-800 uppercase md:mt-0">
                            Product</li>
                        <li><a href="#_"
                                class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Home</a>
                        </li>
                        <li><a href="#_"
                                class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">About</a>
                        </li>
                        <li><a href="#_"
                                class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Contacts</a>
                        </li>
                        <li><a href="#_"
                                class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Vendor Portal</a></li>
                    </ul>
                    <ul class="flex flex-col w-full p-0 font-medium text-left text-gray-700 list-none">
                        <li class="inline-block px-3 py-2 mt-5 font-bold tracking-wide text-gray-800 uppercase md:mt-0">
                            Company</li>
                        <li><a href="#_"
                                class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Privacy</a>
                        </li>
                        <li><a href="#_" class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Terms
                                of
                                Service</a></li>
                    </ul>
                    <div class="flex flex-col w-full text-gray-700">
                        <div class="inline-block px-3 py-2 mt-5 font-bold text-gray-800 uppercase md:mt-0">Follow Us</div>
                        <div class="flex justify-start pl-4 mt-2">
                            <a class="flex items-center block mr-6 text-gray-400 no-underline hover:text-gray-600"
                                target="_blank" rel="noopener noreferrer" href="https://devdojo.com">
                                <svg viewBox="0 0 24 24" class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M23.998 12c0-6.628-5.372-12-11.999-12C5.372 0 0 5.372 0 12c0 5.988 4.388 10.952 10.124 11.852v-8.384H7.078v-3.469h3.046V9.356c0-3.008 1.792-4.669 4.532-4.669 1.313 0 2.686.234 2.686.234v2.953H15.83c-1.49 0-1.955.925-1.955 1.874V12h3.328l-.532 3.469h-2.796v8.384c5.736-.9 10.124-5.864 10.124-11.853z" />
                                </svg>
                            </a>
                            <a class="flex items-center block mr-6 text-gray-400 no-underline hover:text-gray-600"
                                target="_blank" rel="noopener noreferrer" href="https://devdojo.com">
                                <svg viewBox="0 0 24 24" class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M23.954 4.569a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.691 8.094 4.066 6.13 1.64 3.161a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.061a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.937 4.937 0 004.604 3.417 9.868 9.868 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63a9.936 9.936 0 002.46-2.548l-.047-.02z" />
                                </svg>
                            </a>
                            <a class="flex items-center block text-gray-400 no-underline hover:text-gray-600"
                                target="_blank" rel="noopener noreferrer" href="https://devdojo.com">
                                <svg viewBox="0 0 24 24" class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-4 pt-6 mt-10 text-center text-gray-400 border-t border-gray-100">© 2020 Landmark. All rights
                reserved.</div>
        </footer>

      </main>

       <!-- Modal -->
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
                    <intertia-link :href="route('registerClient')">
                    <button class="mb-2 md:mb-0 bg-indigo-600 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-black">
                        Client Registration
                    </button>
                    </intertia-link>
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



    </body>
  </div>
</template>

<script>

export default {
    metaInfo: { title: 'Login' },
    name:'Cart',
    props: {
        // error: String,
    },
    computed: {
        cartItems(){
            return this.$store.state.cartItems
        },
        noAuth(){
            if(this.$page.props.auth.user != null){
                return false
            }else{
                return true
            } 
        },
    },
    data () {
        return {
            regModal:false,
            showAuth:false,
            form: this.$inertia.form({
                email:'',
                password:'',
                name:'',
            }),
        }
    },
    methods: {
       login(){
            this.form.post(this.route('login.checkout'))
        },
    }
    
}
</script>


<style scoped>
@media(max-width:1520px) {
    .left-svg {
        display: none;
    }
}

        
</style>