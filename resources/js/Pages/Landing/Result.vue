<template>
  <div>
    <body class="overflow-x-hidden antialiased">
      <div class="flex flex-col h-screen">
      <!-- Header Section -->
      <main-navigation />   

        <!-- End Header Section-->
        <main class="flex-1 overflow-y-auto z-40 mt-10">


            <!-- BEGIN FEATURES SECTION -->
            <div id="features" class="relative w-full px-8 py-10 md:py-1 lg:py-2 xl:py-1 xl:px-0">
                <div class="container flex flex-col items-center justify-between h-full max-w-6xl mx-auto">
                    <div class="mb-5 flex justify-items-center">
                        <flash-messages />
                    </div>
                </div>
            </div>
            <!-- END FEATURES SECTION -->

            <!-- Pricing Section -->
            <div class="relative py-10 md:py-1 lg:py-2 xl:py-1 xl:px-0">

                <div v-if="showProducts" id="pricing" class="container flex flex-col items-center h-full max-w-6xl mx-auto">
                   
                    <div class="max-w-full mx-auto md:max-w-6xl sm:px-8">
                        <div class="relative flex flex-col items-center sm:flex-row">
                            <section class="text-gray-600 body-font relative">

                            <div class="container px-5 py-2 mx-auto">
                                <div class="flex w-full">
                                    <div class="flex-1 my-3 relative rounded bg-gray-50 shadow">
                                        <div class="bg-pink-500 pl-10 pr-10 pt-6 pb-6 ml-3 absolute top-0 -mt-4 -mr-4 rounded text-white fill-current shadow-2xl">
                                            <p class="italic">Products in {{ this.category }}</p>
                                        </div>

                                        <div class="group float-right top-0 right-0 m-3">
                                            <!-- <div class="hover:scale-125 transform transition group-hover:text-pink-600 duration-300 ease-in-out text-right text-sm">See All</div> -->
                                            <div class="hover:scale-125  transform transition text-pink-600 duration-300 ease-in-out text-right text-3xl"> <i class="fa fa-search"> </i> </div>
                                        </div>
                                        
                                    </div>
                                </div>  

                                <div class="flex flex-wrap -m-4"> 

                                <div v-for="product in allProducts" :key="product._id" class="transform transition hover:scale-90 duration-300 ease-in-out  shadow-2xl bg-gray-100 lg:w-1/4 md:w-1/2 min-w-1/2 w-full p-2 mb-2">
                                <inertia-link :href="route('product.view', product._id)">
                                    <div class="block relative h-48 rounded overflow-hidden">
                                    <div class="absolute flex flex-col top-0 right-0 p-3">
                                            <button class="hover:scale-110 transform transition duration-300 ease-in-out bg-gray-50 hover:text-yellow-600 shadow hover:shadow-md text-black rounded-full w-8 h-8 text-center p-1">
                                            <i class="fa fa-star"></i>
                                            </button>
                                        </div>  
                                    <img alt="ecommerce" class="object-cover object-center w-full h-full block" :src="'/' + product.photos">
                                    </div>
                                </inertia-link>      
                                    <div class="mt-4 flex-auto justify-evenly">

                                        <div class="flex flex-wrap ">
                                            <div class="w-full flex-none text-sm flex items-center text-gray-600">
                                                <span class="text-gray-400 whitespace-nowrap mr-3 capitalize">{{ product.type }}</span>
                                            </div>
                                            <div class="flex items-center w-full justify-between min-w-0 ">
                                                <h2 class="text-lg mr-auto cursor-pointer text-black hover:text-purple-500 truncate capitalize">
                                                    {{ product.title }}
                                                </h2>
                                                <div class="flex items-center bg-indigo-500 text-white text-xs px-2 py-1 ml-3 rounded-lg">
                                                    INSTOCK
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="text-xl text-indigo-600 font-semibold mt-1">KSh.{{ product.price }}</div>

                                        <div class="flex space-x-2 text-sm font-medium justify-end mt-2">
                                            <button @click.prevent="addToCart(product._id)" class="hover:scale-125 transform transition duration-300 ease-in-out inline-flex items-center text-sm font-medium mb-2 md:mb-0 bg-black px-5 py-2 hover:shadow-lg tracking-wider text-white rounded-sm hover:bg-indigo-800 ">
                                                <span>Add Cart</span>
                                            </button>
                                        </div>

                                    </div>
                                </div>

                                </div>
                            </div>


                            <!-- <div class="container px-5 py-10 mx-auto">

                                <div class="flex w-full">
                                    <div class="flex-1 my-3 relative rounded bg-gray-50 shadow">
                                        <div class="bg-pink-500 pl-10 pr-10 pt-6 pb-6 ml-3 absolute top-0 -mt-4 -mr-4 rounded text-white fill-current shadow-2xl">
                                            <p class="italic">Fashion</p>
                                        </div>

                                        <inertia-link :href="route('landing')">
                                        <div class="group float-right top-0 right-0 m-3">
                                            <div class="hover:scale-125 transform transition group-hover:text-pink-600 duration-300 ease-in-out text-right text-sm">See All</div>
                                            <div class="hover:scale-125  transform transition group-hover:text-pink-600 duration-300 ease-in-out text-right text-3xl"> <i class="fa fa-directions"> </i> </div>
                                        </div>
                                        </inertia-link>
                                        
                                    </div>
                                </div>  

                                <div class="flex flex-wrap -m-4"> 

                                <div v-for="product in allProducts.slice(0, 4)" :key="product.id" class="transform transition hover:scale-90 duration-300 ease-in-out  shadow-2xl bg-gray-100 lg:w-1/4 md:w-1/2 min-w-1/2 w-full p-2 mb-2">
                                <inertia-link :href="route('product.view', product.id)">
                                    <div class="block relative h-48 rounded overflow-hidden">
                                    <div class="absolute flex flex-col top-0 right-0 p-3">
                                            <button class="hover:scale-110 transform transition duration-300 ease-in-out bg-gray-50 hover:text-yellow-600 shadow hover:shadow-md text-black rounded-full w-8 h-8 text-center p-1">
                                            <i class="fa fa-star"></i>
                                            </button>
                                        </div>  
                                    <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/420x260">
                                    </div>
                                </inertia-link>      
                                    <div class="mt-4 flex-auto justify-evenly">

                                        <div class="flex flex-wrap ">
                                            <div class="w-full flex-none text-sm flex items-center text-gray-600">
                                                <span class="text-gray-400 whitespace-nowrap mr-3 capitalize">{{ product.type }}</span>
                                            </div>
                                            <div class="flex items-center w-full justify-between min-w-0 ">
                                                <h2 class="text-lg mr-auto cursor-pointer text-black hover:text-purple-500 truncate capitalize">
                                                    {{ product.title }}
                                                </h2>
                                                <div class="flex items-center bg-indigo-500 text-white text-xs px-2 py-1 ml-3 rounded-lg">
                                                    INSTOCK
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="text-xl text-indigo-600 font-semibold mt-1">KSh.{{ product.price }}</div>

                                        <div class="flex space-x-2 text-sm font-medium justify-end mt-2">
                                            <button class="hover:scale-125 transform transition duration-300 ease-in-out inline-flex items-center text-sm font-medium mb-2 md:mb-0 bg-black px-5 py-2 hover:shadow-lg tracking-wider text-white rounded-sm hover:bg-indigo-800 ">
                                                <span>Add Cart</span>
                                            </button>
                                        </div>

                                    </div>
                                </div>

                                </div>

                            </div>

                            <div class="container px-5 py-10 mx-auto">

                                <div class="flex w-full">
                                    <div class="flex-1 my-3 relative rounded bg-gray-50 shadow">
                                        <div class="bg-pink-500 pl-10 pr-10 pt-6 pb-6 ml-3 absolute top-0 -mt-4 -mr-4 rounded text-white fill-current shadow-2xl">
                                            <p class="italic">Phone & Tablets</p>
                                        </div>

                                        <inertia-link :href="route('landing')">
                                        <div class="group float-right top-0 right-0 m-3">
                                            <div class="hover:scale-125 transform transition group-hover:text-pink-600 duration-300 ease-in-out text-right text-sm">See All</div>
                                            <div class="hover:scale-125  transform transition group-hover:text-pink-600 duration-300 ease-in-out text-right text-3xl"> <i class="fa fa-directions"> </i> </div>
                                        </div>
                                        </inertia-link>
                                        
                                    </div>
                                </div>  

                                <div class="flex flex-wrap -m-4"> 

                                <div v-for="product in allProducts.slice(0, 4)" :key="product.id" class="transform transition hover:scale-90 duration-300 ease-in-out  shadow-2xl bg-gray-100 lg:w-1/4 md:w-1/2 min-w-1/2 w-full p-2 mb-2">
                                <inertia-link :href="route('product.view', product.id)">
                                    <div class="block relative h-48 rounded overflow-hidden">
                                    <div class="absolute flex flex-col top-0 right-0 p-3">
                                            <button class="hover:scale-110 transform transition duration-300 ease-in-out bg-gray-50 hover:text-yellow-600 shadow hover:shadow-md text-black rounded-full w-8 h-8 text-center p-1">
                                            <i class="fa fa-star"></i>
                                            </button>
                                        </div>  
                                    <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/420x260">
                                    </div>
                                    <div class="mt-4 flex-auto justify-evenly">

                                        <div class="flex flex-wrap ">
                                            <div class="w-full flex-none text-sm flex items-center text-gray-600">
                                                <span class="text-gray-400 whitespace-nowrap mr-3 capitalize">{{ product.type }}</span>
                                            </div>
                                            <div class="flex items-center w-full justify-between min-w-0 ">
                                                <h2 class="text-lg mr-auto cursor-pointer text-black hover:text-purple-500 truncate capitalize">
                                                    {{ product.title }}
                                                </h2>
                                                <div class="flex items-center bg-indigo-500 text-white text-xs px-2 py-1 ml-3 rounded-lg">
                                                    INSTOCK
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="text-xl text-indigo-600 font-semibold mt-1">KSh.{{ product.price }}</div>

                                        <div class="flex space-x-2 text-sm font-medium justify-end mt-2">
                                            <button class="hover:scale-125 transform transition duration-300 ease-in-out inline-flex items-center text-sm font-medium mb-2 md:mb-0 bg-black px-5 py-2 hover:shadow-lg tracking-wider text-white rounded-sm hover:bg-indigo-800 ">
                                                <span>Add Cart</span>
                                            </button>
                                        </div>

                                    </div>
                                </inertia-link>      
                                </div>

                                </div>

                            </div>

                            <div class="container px-5 py-10 mx-auto">

                                <div class="flex w-full">
                                    <div class="flex-1 my-3 relative rounded bg-gray-50 shadow">
                                        <div class="bg-pink-500 pl-10 pr-10 pt-6 pb-6 ml-3 absolute top-0 -mt-4 -mr-4 rounded text-white fill-current shadow-2xl">
                                            <p class="italic">Computing</p>
                                        </div>

                                        <inertia-link :href="route('landing')">
                                        <div class="group float-right top-0 right-0 m-3">
                                            <div class="hover:scale-125 transform transition group-hover:text-pink-600 duration-300 ease-in-out text-right text-sm">See All</div>
                                            <div class="hover:scale-125  transform transition group-hover:text-pink-600 duration-300 ease-in-out text-right text-3xl"> <i class="fa fa-directions"> </i> </div>
                                        </div>
                                        </inertia-link>
                                        
                                    </div>
                                </div>  

                                <div class="flex flex-wrap -m-4"> 

                                <div v-for="product in allProducts.slice(0, 4)" :key="product.id" class="transform transition hover:scale-90 duration-300 ease-in-out  shadow-2xl bg-gray-100 lg:w-1/4 md:w-1/2 min-w-1/2 w-full p-2 mb-2">
                                <inertia-link :href="route('product.view', product.id)">
                                    <div class="block relative h-48 rounded overflow-hidden">
                                    <div class="absolute flex flex-col top-0 right-0 p-3">
                                            <button class="hover:scale-110 transform transition duration-300 ease-in-out bg-gray-50 hover:text-yellow-600 shadow hover:shadow-md text-black rounded-full w-8 h-8 text-center p-1">
                                            <i class="fa fa-star"></i>
                                            </button>
                                        </div>  
                                    <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/420x260">
                                    </div>
                                    <div class="mt-4 flex-auto justify-evenly">

                                        <div class="flex flex-wrap ">
                                            <div class="w-full flex-none text-sm flex items-center text-gray-600">
                                                <span class="text-gray-400 whitespace-nowrap mr-3 capitalize">{{ product.type }}</span>
                                            </div>
                                            <div class="flex items-center w-full justify-between min-w-0 ">
                                                <h2 class="text-lg mr-auto cursor-pointer text-black hover:text-purple-500 truncate capitalize">
                                                    {{ product.title }}
                                                </h2>
                                                <div class="flex items-center bg-indigo-500 text-white text-xs px-2 py-1 ml-3 rounded-lg">
                                                    INSTOCK
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="text-xl text-indigo-600 font-semibold mt-1">KSh.{{ product.price }}</div>

                                        <div class="flex space-x-2 text-sm font-medium justify-end mt-2">
                                            <button class="hover:scale-125 transform transition duration-300 ease-in-out inline-flex items-center text-sm font-medium mb-2 md:mb-0 bg-black px-5 py-2 hover:shadow-lg tracking-wider text-white rounded-sm hover:bg-indigo-800 ">
                                                <span>Add Cart</span>
                                            </button>
                                        </div>

                                    </div>
                                </inertia-link>      
                                </div>

                                </div>

                            </div>

                            <div class="container px-5 py-10 mx-auto">

                                <div class="flex w-full">
                                    <div class="flex-1 my-3 relative rounded bg-gray-50 shadow">
                                        <div class="bg-pink-500 pl-10 pr-10 pt-6 pb-6 ml-3 absolute top-0 -mt-4 -mr-4 rounded text-white fill-current shadow-2xl">
                                            <p class="italic">Home & Office</p>
                                        </div>

                                        <inertia-link :href="route('landing')">
                                        <div class="group float-right top-0 right-0 m-3">
                                            <div class="hover:scale-125 transform transition group-hover:text-pink-600 duration-300 ease-in-out text-right text-sm">See All</div>
                                            <div class="hover:scale-125  transform transition group-hover:text-pink-600 duration-300 ease-in-out text-right text-3xl"> <i class="fa fa-directions"> </i> </div>
                                        </div>
                                        </inertia-link>
                                        
                                    </div>
                                </div>  

                                <div class="flex flex-wrap -m-4"> 

                                <div v-for="product in allProducts.slice(0, 4)" :key="product.id" class="transform transition hover:scale-90 duration-300 ease-in-out  shadow-2xl bg-gray-100 lg:w-1/4 md:w-1/2 min-w-1/2 w-full p-2 mb-2">
                                <inertia-link :href="route('product.view', product.id)">
                                    <div class="block relative h-48 rounded overflow-hidden">
                                    <div class="absolute flex flex-col top-0 right-0 p-3">
                                            <button class="hover:scale-110 transform transition duration-300 ease-in-out bg-gray-50 hover:text-yellow-600 shadow hover:shadow-md text-black rounded-full w-8 h-8 text-center p-1">
                                            <i class="fa fa-star"></i>
                                            </button>
                                        </div>  
                                    <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/420x260">
                                    </div>
                                    <div class="mt-4 flex-auto justify-evenly">

                                        <div class="flex flex-wrap ">
                                            <div class="w-full flex-none text-sm flex items-center text-gray-600">
                                                <span class="text-gray-400 whitespace-nowrap mr-3 capitalize">{{ product.type }}</span>
                                            </div>
                                            <div class="flex items-center w-full justify-between min-w-0 ">
                                                <h2 class="text-lg mr-auto cursor-pointer text-black hover:text-purple-500 truncate capitalize">
                                                    {{ product.title }}
                                                </h2>
                                                <div class="flex items-center bg-indigo-500 text-white text-xs px-2 py-1 ml-3 rounded-lg">
                                                    INSTOCK
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="text-xl text-indigo-600 font-semibold mt-1">KSh.{{ product.price }}</div>

                                        <div class="flex space-x-2 text-sm font-medium justify-end mt-2">
                                            <button class="hover:scale-125 transform transition duration-300 ease-in-out inline-flex items-center text-sm font-medium mb-2 md:mb-0 bg-black px-5 py-2 hover:shadow-lg tracking-wider text-white rounded-sm hover:bg-indigo-800 ">
                                                <span>Add Cart</span>
                                            </button>
                                        </div>

                                    </div>
                                </inertia-link>      
                                </div>

                                </div>

                            </div>

                            <div class="container px-5 py-10 mx-auto">

                                <div class="flex w-full">
                                    <div class="flex-1 my-3 relative rounded bg-gray-50 shadow">
                                        <div class="bg-pink-500 pl-10 pr-10 pt-6 pb-6 ml-3 absolute top-0 -mt-4 -mr-4 rounded text-white fill-current shadow-2xl">
                                            <p class="italic">Sporting</p>
                                        </div>

                                        <inertia-link :href="route('landing')">
                                        <div class="group float-right top-0 right-0 m-3">
                                            <div class="hover:scale-125 transform transition group-hover:text-pink-600 duration-300 ease-in-out text-right text-sm">See All</div>
                                            <div class="hover:scale-125  transform transition group-hover:text-pink-600 duration-300 ease-in-out text-right text-3xl"> <i class="fa fa-directions"> </i> </div>
                                        </div>
                                        </inertia-link>
                                        
                                    </div>
                                </div>  

                                <div class="flex flex-wrap -m-4"> 

                                <div v-for="product in allProducts.slice(0, 4)" :key="product.id" class="transform transition hover:scale-90 duration-300 ease-in-out  shadow-2xl bg-gray-100 lg:w-1/4 md:w-1/2 min-w-1/2 w-full p-2 mb-2">
                                <inertia-link :href="route('product.view', product.id)">
                                    <div class="block relative h-48 rounded overflow-hidden">
                                    <div class="absolute flex flex-col top-0 right-0 p-3">
                                            <button class="hover:scale-110 transform transition duration-300 ease-in-out bg-gray-50 hover:text-yellow-600 shadow hover:shadow-md text-black rounded-full w-8 h-8 text-center p-1">
                                            <i class="fa fa-star"></i>
                                            </button>
                                        </div>  
                                    <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/420x260">
                                    </div>
                                    <div class="mt-4 flex-auto justify-evenly">

                                        <div class="flex flex-wrap ">
                                            <div class="w-full flex-none text-sm flex items-center text-gray-600">
                                                <span class="text-gray-400 whitespace-nowrap mr-3 capitalize">{{ product.type }}</span>
                                            </div>
                                            <div class="flex items-center w-full justify-between min-w-0 ">
                                                <h2 class="text-lg mr-auto cursor-pointer text-black hover:text-purple-500 truncate capitalize">
                                                    {{ product.title }}
                                                </h2>
                                                <div class="flex items-center bg-indigo-500 text-white text-xs px-2 py-1 ml-3 rounded-lg">
                                                    INSTOCK
                                                </div>
                                            </div>
                                        </div>  
                                        <div class="text-xl text-indigo-600 font-semibold mt-1">KSh.{{ product.price }}</div>

                                        <div class="flex space-x-2 text-sm font-medium justify-end mt-2">
                                            <button class="hover:scale-125 transform transition duration-300 ease-in-out inline-flex items-center text-sm font-medium mb-2 md:mb-0 bg-black px-5 py-2 hover:shadow-lg tracking-wider text-white rounded-sm hover:bg-indigo-800 ">
                                                <span>Add Cart</span>
                                            </button>
                                        </div>

                                    </div>
                                </inertia-link>      
                                </div>

                                </div>

                            </div> -->

                            </section>
                        </div>
                    </div>

                </div>

                <div v-else class="flex justify-center h-24 mt-14">

                <h3 class="max-w-2xl px-5 mt-1 text-3xl font-black leading-tight text-center text-pink-600 sm:mt-0 sm:px-0 sm:text-2xl">
                        No products in Category Yet
                </h3>
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
        
      </div>



    </body>
  </div>
</template>

<script>
import FlashMessages from '../components/FlashMessages.vue'
import Categeories from '../components/SubNav.vue'
import MainNavigation from '../components/Header.vue'


import Swal from 'sweetalert2';
window.Swal = Swal;
const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 2000,
  timerProgressBar: false,
  didOpen: (toast) => {
    toast.addEventListener("mouseenter", Swal.stopTimer);
    toast.addEventListener("mouseleave", Swal.resumeTimer);
  },
});
window.Toast = Toast;

export default {
    name:'Results',
    props: {
        allProducts: [],
        account: '',
        category:''
    },
    components: {
        FlashMessages,
        Categeories, 
        MainNavigation
    },
    watch: {
       
    },
    mounted () {
        if(this.$page.props.flash.success == 'Order Placed Successfully'){
               this.resetCart()
          }else{
            //   this.resetCart()
          }
    },
    created () {
    },
    computed: {
      showProducts(){
           if(this.allProducts.length == 0)
          {
              return false
          }
          else
          {
              return true
          }
      },  
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
      cartItems(){
          return this.$store.state.cartItems
      }, 
    },
    data () {
        return {
            showMenu: true,
            regModal: false,
            // showProducts:false,
        }
    },
    methods: {
      resetCart(){
        this.$store.dispatch('resetCart', [])
      },  
      addToCart(product){
         var item =  this.cartItems.find(x => x._id == product ) 
         if(item == undefined){
             var data =  this.allProducts.find(x => x._id == product )
            this.$store.dispatch('addedToCart', data)

            Toast.fire({
                icon: 'success',
                title: 'Added to Cart'
            })

         }else{
            Swal.fire(
                'Cannot Add Item',
                'This item is already in your cart',
                'warning'
            )
         }   


         

        //   alert(product)
      }  
    }
}
</script>

<style>
   
</style>