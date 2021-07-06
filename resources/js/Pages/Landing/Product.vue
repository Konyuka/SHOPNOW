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
                    <a href="/" class="ml-0 mr-0 font-bold duration-100 md:ml-12 md:mr-3 lg:mr-8 transition-color hover:text-indigo-600">Home</a>
                    <a href="#features"
                        class="mr-0 font-bold duration-100 md:mr-3 lg:mr-8 transition-color hover:text-indigo-600">About</a>
                    <a href="#pricing"
                        class="mr-0 font-bold duration-100 md:mr-3 lg:mr-8 transition-color hover:text-indigo-600">Contacts</a>
                    <a href="/login"
                        class="font-bold duration-100 transition-color hover:text-indigo-600">Vendor Portal</a>
                    <div class="flex flex-col block w-full font-medium border-t border-gray-200 md:hidden">
                        <inertia-link href="/admin" class="w-full py-2 font-bold text-center text-pink-500">Admin Login</inertia-link>
                        <a href="#_" class="relative inline-block w-full px-5 py-3 text-sm leading-none text-center text-white bg-indigo-700 fold-bold">
                            <span> <i class="fa fa-shopping-cart"> </i> Cart </span> 
                        </a>
                    </div>
                </nav>

                <div
                    class="absolute left-0 flex-col items-center justify-center hidden w-full pb-8 mt-48 border-b border-gray-200 md:relative md:w-auto md:bg-transparent md:border-none md:mt-0 md:flex-row md:p-0 md:items-end md:flex md:justify-between">
                    <a href="/admin"
                        class=" relative z-40 px-3 py-2 mr-0 text-sm font-bold text-pink-500 md:px-5 lg:text-white sm:mr-3 md:mt-0">Login</a>
                    <!-- <a href="#_"
                        class="relative z-40 inline-block w-auto h-full px-5 py-3 text-sm font-bold leading-none text-white transition-all transition duration-100 duration-300 bg-indigo-700 rounded shadow-md fold-bold lg:bg-white lg:text-indigo-700 sm:w-full lg:shadow-none hover:shadow-xl">
                        <span class="text-xs"> <i class="fa fa-filter mr-1"> </i> Filter </span> 
                    </a> -->
                    <a href="#_"
                        class="ml-2 relative z-40 inline-block w-auto h-full px-5 py-3 text-sm font-bold leading-none text-white transition-all transition duration-100 duration-300 bg-indigo-700 rounded shadow-md fold-bold lg:bg-white lg:text-indigo-700 sm:w-full lg:shadow-none hover:shadow-xl">
                        <span class="text-xs"> <i class="fa fa-shopping-cart mr-1"> </i> Cart </span> 
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
        <div class="relative px-8 py-10 bg-white bg-opacity-90  border-t border-gray-200 md:py-16 lg:py-24 xl:py-4 h-auto xl:px-0">

            <div id="pricing" class="container flex flex-col items-center h-full max-w-6xl mx-auto">
                <h3 class="w-full max-w-2xl px-5 px-8 mt-2 text-2xl font-black leading-tight text-center text-gray-900 sm:mt-0 sm:px-0 sm:text-6xl md:px-0">
                    Product View
                </h3>

                <section class="text-gray-600 body-font overflow-hidden">
                    <div class="container px-5 py-5 mx-auto">
                        <div class="lg:w-4/5 mx-auto flex flex-wrap">
                        <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="https://dummyimage.com/400x400">
                        <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                            <h2 class="text-sm title-font text-gray-500 tracking-widest"> {{ singleProduct.type }} </h2>
                            <h1 class="text-gray-900 text-3xl title-font font-medium mb-1"> {{ singleProduct.title }} </h1>
                            <div class="flex mb-4">
                            <span class="flex items-center">
                                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                </svg>
                                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                </svg>
                                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                </svg>
                                <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                </svg>
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
                                </svg>
                                <span class="text-gray-600 ml-3">4 Reviews</span>
                            </span>
                            <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200 space-x-2s">
                                <a class="text-gray-500">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                </svg>
                                </a>
                                <a class="text-gray-500">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                                </svg>
                                </a>
                                <a class="text-gray-500">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                </svg>
                                </a>
                            </span>
                            </div>
                            <p class="leading-relaxed">
                                Fam locavore kickstarter distillery. Mixtape chillwave tumeric sriracha taximy chia microdosing tilde DIY.
                                 XOXO fam indxgo juiceramps cornhole raw denim forage brooklyn. 
                                 Everyday carry +1 seitan poutine tumeric. 
                                 Gastropub blue bottle austin listicle pour-over, neutra jean shorts keytar banjo tattooed umami cardigan.
                            </p>
                            <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">
                            <div class="flex">
                                <span class="mr-3">Color</span>
                                <button class="border-2 border-gray-300 rounded-full w-6 h-6 focus:outline-none"></button>
                                <button class="border-2 border-gray-300 ml-1 bg-gray-700 rounded-full w-6 h-6 focus:outline-none"></button>
                                <button class="border-2 border-gray-300 ml-1 bg-indigo-500 rounded-full w-6 h-6 focus:outline-none"></button>
                            </div>
                            <div class="flex ml-6 items-center">
                                <span class="mr-3">Size</span>
                                <div class="relative">
                                <select class="rounded border appearance-none border-gray-300 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base pl-3 pr-10">
                                    <option>SM</option>
                                    <option>M</option>
                                    <option>L</option>
                                    <option>XL</option>
                                </select>
                                <span class="absolute right-0 top-0 h-full w-10 text-center text-gray-600 pointer-events-none flex items-center justify-center">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4" viewBox="0 0 24 24">
                                    <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                                </div>
                            </div>
                            </div>
                            <div class="flex">
                            <span class="title-font font-medium text-2xl text-gray-900">KSh.{{ singleProduct.price}}</span>
                            <button @click="addToCart" class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Add to Cart</button>
                            <button class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
                                </svg>
                            </button>
                            </div>
                        </div>
                        </div>
                    </div>
                </section>

                <!-- Modal -->
                <div v-if="modal" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
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
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class=" sm:flex sm:items-start">
                        <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-green-100 sm:mx-0 sm:h-10 sm:w-10">
                            <!-- Heroicon name: outline/exclamation -->
                            <i class="fa fa-check-circle text-green-600"></i>
                        </div>
                        <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                            <h3 class="text-lg leading-6 font-bold text-gray-900" id="modal-title">
                             Added to Cart
                            </h3>
                            <div class="mt-5 ml-8">
                                <div class="grid grid-cols-2 gap-6 justify-center w-full">
                                    <a href="/">
                                    <button class="bg-blue-500 hover:bg-black text-white font-bold py-2 px-4 rounded inline-flex items-center">
                                        <i class="fa fa-arrow-left text-black hover:text-white mr-2"> </i>
                                        <span>Shopping</span>
                                    </button>  
                                    </a>
                                    <a href="/checkout">
                                    <button href="'/'" class="bg-blue-500 hover:bg-black text-white font-bold py-2 px-4 rounded inline-flex items-center">
                                        <span>Checkout</span>
                                        <i class="fa fa-arrow-right text-black hover:text-white ml-2"> </i>
                                    </button>                                  
                                    </a>
                                </div>
                            
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>


            </div>

        </div>
        <!-- End Pricing Section -->

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
                                class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Features</a>
                        </li>
                        <li><a href="#_"
                                class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Integrations</a>
                        </li>
                        <li><a href="#_"
                                class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">Pricing</a>
                        </li>
                        <li><a href="#_"
                                class="inline-block px-3 py-2 text-gray-500 no-underline hover:text-gray-600">FAQ</a></li>
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
        
    </div>



    </body>
  </div>
</template>

<script>
if (document.getElementById('nav-mobile-btn')) {
    document.getElementById('nav-mobile-btn').addEventListener('click', function () {
        if (this.classList.contains('close')) {
            document.getElementById('nav').classList.add('hidden');
            this.classList.remove('close');
        } else {
            document.getElementById('nav').classList.remove('hidden');
            this.classList.add('close');
        }
    });
}

export default {
    name:'View_Product',
    props: {
        singleProduct: '',
    },
    data () {
        return {
            modal:false
        }
    },
    methods: {
        addToCart(){
            this.modal = true
            this.$store.dispatch('addCartDetails', this.singleProduct)
        }
    }
  
}
</script>

<style scoped>
@media(max-width:1520px) {
            .left-svg {
                display: none;
            }
        }

        /* small css for the mobile nav close */
        #nav-mobile-btn.close span:first-child {
            transform: rotate(45deg);
            top: 4px;
            position: relative;
            background: #a0aec0;
        }

        #nav-mobile-btn.close span:nth-child(2) {
            transform: rotate(-45deg);
            margin-top: 0px;
            background: #a0aec0;
        }
</style>