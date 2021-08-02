<template>
  <div>
    <body class="overflow-x-hidden antialiased">
      <div class="flex flex-col h-screen">
      <!-- Banner -->
        <div v-if="showBanner"  class="bg-indigo-600">
        <div class="max-w-7xl mx-auto py-3 px-3 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between flex-wrap">
            <div class="w-0 flex-1 flex items-center">
                <span class="flex p-2 rounded-lg bg-indigo-800">
                <!-- Heroicon name: outline/speakerphone -->
                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z" />
                </svg>
                </span>
                <p class="ml-3 font-medium text-white truncate">
                <span class="md:hidden">
                    We announced a new product!
                </span>
                <span class="hidden md:inline">
                    Big news! We're excited to announce a brand new product.
                </span>
                </p>
            </div>
            <div class="order-3 mt-2 flex-shrink-0 w-full sm:order-2 sm:mt-0 sm:w-auto">
                <a href="#" class="flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-indigo-600 bg-white hover:bg-indigo-50">
                Learn more
                </a>
            </div>
            <div class="order-2 flex-shrink-0 sm:order-3 sm:ml-3">
                <button @click="showBanner = !showBanner" type="button" class="-mr-1 flex p-2 rounded-md hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-white sm:-mr-2">
                <span class="sr-only">Dismiss</span>
                <!-- Heroicon name: outline/x -->
                <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
                </button>
            </div>
            </div>
        </div>
        </div>
            
      <!-- Header Section -->
       <main-navigation  /> 

        <!-- End Header Section-->
        <main class="flex-1 overflow-y-auto z-40 mt-2">

            <div class="flex justify-items-center">
                <flash-messages />
            </div>

            <div class="p-2 container flex flex-col justify-around max-w-7xl  mx-auto">

            <div class="relative grid grid-cols-5 gap-4 justify-around">
                <div class="z-50">
                    <div  style="height:60vh;" class="w-full rounded shadow-2xl justify-around bg-gray-200 flex flex-col border-box p-4">
                        <a @mouseover="something = true" class="group cursor-pointer relative group text-gray-900 hover:text-pink-700 inline-flex items-center px-2 text-xs font-medium transform transition hover:scale-125 duration-300 ease-in-out uppercase"> <i class="mr-2 fa fa-rainbow"></i> Supermartket
                        </a>
                        <a class="cursor-pointer relative group text-gray-900 hover:text-pink-700 inline-flex items-center px-2 text-xs font-medium transform transition hover:scale-125 duration-300 ease-in-out uppercase"><i class="mr-2 fa fa-medkit"></i> Health & Beauty</a>
                        <a class="cursor-pointer relative group text-gray-900 hover:text-pink-700 inline-flex items-center px-2 text-xs font-medium transform transition hover:scale-125 duration-300 ease-in-out uppercase"><i class="mr-2 fa fa-laptop-house"></i> Home & Office</a>
                        <a class="cursor-pointer relative group text-gray-900 hover:text-pink-700 inline-flex items-center px-2 text-xs font-medium transform transition hover:scale-125 duration-300 ease-in-out uppercase"><i class="mr-2 fa fa-mobile-alt"></i> Phones & Tablets</a>
                        <a class="cursor-pointer relative group text-gray-900 hover:text-pink-700 inline-flex items-center px-2 text-xs font-medium transform transition hover:scale-125 duration-300 ease-in-out uppercase"><i class="mr-2 fa fa-microchip"></i> Computing</a>
                        <a class="cursor-pointer relative group text-gray-900 hover:text-pink-700 inline-flex items-center px-2 text-xs font-medium transform transition hover:scale-125 duration-300 ease-in-out uppercase"><i class="mr-2 fa fa-charging-station"></i> Electronics</a>
                        <a class="cursor-pointer relative group text-gray-900 hover:text-pink-700 inline-flex items-center px-2 text-xs font-medium transform transition hover:scale-125 duration-300 ease-in-out uppercase"><i class="mr-2 fa fa-tshirt"></i> Fashion</a>
                        <a class="cursor-pointer relative group text-gray-900 hover:text-pink-700 inline-flex items-center px-2 text-xs font-medium transform transition hover:scale-125 duration-300 ease-in-out uppercase"><i class="mr-2 fa fa-gamepad"></i> Gaming</a>
                        <a class="cursor-pointer relative group text-gray-900 hover:text-pink-700 inline-flex items-center px-2 text-xs font-medium transform transition hover:scale-125 duration-300 ease-in-out uppercase"><i class="mr-2 fa fa-baby"></i> Baby Products</a>
                        <a class="cursor-pointer relative group text-gray-900 hover:text-pink-700 inline-flex items-center px-2 text-xs font-medium transform transition hover:scale-125 duration-300 ease-in-out uppercase"><i class="mr-2 fa fa-running"></i> Sporting Goods</a>
                        <a class="cursor-pointer relative group text-gray-900 hover:text-pink-700 inline-flex items-center px-2 text-xs font-medium transform transition hover:scale-125 duration-300 ease-in-out uppercase"><i class="mr-2 fa fa-sun"></i> Garden & Outdoors</a>
                        <a class="cursor-pointer relative group text-gray-900 hover:text-pink-700 inline-flex items-center px-2 text-xs font-medium transform transition hover:scale-125 duration-300 ease-in-out uppercase"><i class="mr-2 fa fa-angle-double-right"></i> Other Categories</a>
                    </div>
                </div>

                <div @mouseleave="something = false" class="z-10 col-span-3 bg-gray-200 shadow-2xl">
                    <div class="relative grid grid-cols-3 gap-4 px-10 py-2 justify-around">
                        <div>
                            <span class="text-lg font-semibold text-black uppercase"> Food Cupboard </span>
                            <div class="flex flex-col">
                                <span> Cooking Ingredients</span>
                                <span> Snacks, Cripps & Nuts</span>
                                <span> Grains & Rice</span>
                                <span> Sugar & Flour</span>
                                <span> Breakfast Cereals</span>
                                <span> Candy & Chocolate</span>
                                <span>Margarine, Jams, Honey & Spreads</span>
                            </div>
                        </div>
                        <div>
                            <span class="text-lg font-semibold text-black uppercase"> Drinks </span>
                            <div class="flex flex-col">
                                <span> Beer, Wines & Spirits</span>
                                <span> Carbonated Drinks</span>
                                <span> Coffee, Tea & Cocoa</span>
                                <span> Dairy</span>
                                <span> Juice & Non Carbonated Drinks</span>
                                <span> Syrup and Cordials</span>
                                <span> Water</span>
                                
                            </div>
                        </div>
                        <div>
                            <span class="text-lg font-semibold text-black uppercase"> Household Supplies </span>
                            <div class="flex flex-col">
                                <span> Air Fresheners</span>
                                <span> Bathroom Cleaners</span>
                                <span> Bulb & Batteries</span>
                                <span> Floor Cleaners</span>
                                <span> Household Cleaners & Sundries</span>
                                <span> Kitchen Cleaner</span>
                                <span> Laundry</span>
                                <span> Pappers & Rolls</span>
                              
                               <span class="mt-2 text-lg font-semibold text-black uppercase"> Shop by brands </span>
                               <span> Velvex</span> 
                               <span> Dettol</span> 
                               <span> Huggies</span> 
                        
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div v-if="!something" class="col-span-3 z-10">
                    <div class="carousel relative shadow-2xl bg-white">
                    <div class="carousel-inner relative overflow-hidden w-full">
                        <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
                        <div class="carousel-item absolute opacity-0" style="height:60vh;">
                            <div class="block h-full w-full bg-indigo-500 text-white text-5xl text-center">Advert 1</div>
                        </div>
                        <label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                        <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
                        
                        <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
                        <div class="carousel-item absolute opacity-0" style="height:60vh;">
                            <div class="block h-full w-full bg-red-500 text-white text-5xl text-center">Advert 2</div>
                        </div>
                        <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                        <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label> 
                        
                        <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
                        <div class="carousel-item absolute opacity-0" style="height:60vh;">
                            <div class="block h-full w-full bg-green-500 text-white text-5xl text-center">Advert 3</div>
                        </div>
                        <label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                        <label for="carousel-1" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                        <ol class="carousel-indicators">
                            <li class="inline-block mr-3">
                                <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                            </li>
                            <li class="inline-block mr-3">
                                <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                            </li>
                            <li class="inline-block mr-3">
                                <label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                            </li>
                        </ol>
                        
                    </div>
                </div>
                </div> -->

                <div class="">
                    <div  style="height:60vh;" class="w-full rounded shadow-2xl justify-around bg-indigo-500 flex flex-col border-box p-4">
                        <div class="inline-flex flex-col space-y-1 items-center justify-end flex-1 h-full p-4 bg-blue-700 rounded-xl">
                        <p class="w-full text-2xl font-semibold text-white">Welcome!</p>
                        <p class="w-full pb-8 text-sm tracking-wide leading-tight text-white">
                            Welcome to Multi-Vendor
                            We can’t wait for customers to come to us instead we figure out where they are, go there and bring them back to your store
                            For a vendor to achieve the goals, customer must first achieve theirs and thats why we have a clean user experience 
                            <!-- Overall the web is pretty sloppy, but an online store can’t afford to be. -->
                            </p>
                        <div class="rounded mr-auto">
                            <div class="opacity-95 border rounded-lg border-white px-4">
                            <p class="m-auto inset-0 text-sm font-medium leading-normal text-center text-white py-2">Buy Now</p>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- component -->
            <div class="flex items-center text-gray-800 mt-4">
            <div class="py-2 w-full">
                <div class="grid grid-cols-12 gap-4">
                <div class="col-span-12 sm:col-span-6 md:col-span-3">
                    <div class="flex flex-row bg-gray-200 shadow-sm rounded p-4">
                    <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-blue-100 text-blue-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <div class="flex flex-col flex-grow ml-4">
                        <div class="text-sm text-gray-500">Users</div>
                        <div class="font-bold text-lg">1259</div>
                    </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 md:col-span-3">
                    <div class="flex flex-row bg-gray-200 shadow-sm rounded p-4">
                    <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-green-100 text-green-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                    </div>
                    <div class="flex flex-col flex-grow ml-4">
                        <div class="text-sm text-gray-500">Orders</div>
                        <div class="font-bold text-lg">230</div>
                    </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 md:col-span-3">
                    <div class="flex flex-row bg-gray-200 shadow-sm rounded p-4">
                    <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-orange-100 text-orange-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                    </div>
                    <div class="flex flex-col flex-grow ml-4">
                        <div class="text-sm text-gray-500">New Clients</div>
                        <div class="font-bold text-lg">190</div>
                    </div>
                    </div>
                </div>
                <div class="col-span-12 sm:col-span-6 md:col-span-3">
                    <div class="flex flex-row bg-gray-200 shadow-sm rounded p-4">
                    <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-red-100 text-red-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div class="flex flex-col flex-grow ml-4">
                        <div class="text-sm text-gray-500">Revenue</div>
                        <div class="font-bold text-lg">+32k</div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>


            </div>
            <!-- BEGIN FEATURES SECTION -->
            <!-- <div id="features" class="relative w-full px-8 py-10 md:py-1 lg:py-2 xl:py-1 xl:px-0">
                <div class="container flex flex-col items-center justify-between h-full max-w-6xl mx-auto">
                    
                    
                    
                </div>
            </div> -->
            <!-- END FEATURES SECTION -->

            <!-- Pricing Section -->
            <div class="relative py-10 md:py-1 lg:py-24 xl:py-1 xl:px-0">

                <div v-if="showProducts" id="pricing" class="container flex flex-col items-center h-full max-w-7xl mx-auto">
                    <h3
                        class="w-full max-w-2xl px-5 mt- text-2xl font-black leading-tight text-center text-gray-900 sm:mt-0 sm:px-0 sm:text-6xl md:px-0">
                        Featured Products</h3>

                    <div class="max-w-full mx-auto md:max-w-7xl sm:px-8">
                        <div class="relative flex flex-col items-center sm:flex-row">
                            <section class="text-gray-600 body-font relative">

                            <div class="container px-5 py-10 mx-auto">
                                <div class="flex w-full">
                                    <div class="flex-1 my-3 relative rounded bg-gray-50 shadow">
                                        <div class="bg-pink-500 pl-10 pr-10 pt-6 pb-6 ml-3 absolute top-0 -mt-4 -mr-4 rounded text-white fill-current shadow-2xl">
                                            <p class="italic">Electornics</p>
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

                                <div v-for="product in allProducts" :key="product._id" class="transform transition hover:scale-90 duration-300 ease-in-out  shadow-2xl bg-gray-100 lg:w-1/4 md:w-1/2 min-w-1/2 w-full p-2 mb-2">
                                <inertia-link :href="route('product.view', product._id)">
                                    <div class="block relative h-48 rounded overflow-hidden">
                                    <div class="absolute flex flex-col top-0 right-0 p-3">
                                            <button class="hover:scale-110 transform transition duration-300 ease-in-out bg-gray-50 hover:text-yellow-600 shadow hover:shadow-md text-black rounded-full w-8 h-8 text-center p-1">
                                            <i class="fa fa-star"></i>
                                            </button>
                                        </div>  
                                    <img alt="ecommerce" class="object-cover object-center w-full h-full block" :src=" product.photos ">
                                    <!-- <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://dummyimage.com/420x260"> -->
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
                    No products Yet
                </h3>

                </div>

            </div>
            <!-- End Pricing Section -->
            <div class="px-4">
            <section class="relative py-24 px-4">
            <div class="z-20 relative text-white container mx-auto">
                <h1 class="mb-4">Tailwind Banner with Object Fit Image</h1>
                <p class="leading-normal">This is a banner that can be resized to your heart’s content without using a background image property.</p>
                <p class="leading-normal">Integer eu massa ipsum. Quisque dui purus, congue in urna sed, volutpat condimentum nisi. Ut elementum tellus quam, sit amet congue ante tempus id. Phasellus ultricies enim in est posuere, quis semper urna consequat.</p>
                <a href="#" class="inline-block bg-blue-500 text-white no-underline hover:bg-blue-800 mt-4 p-4 rounded">A Call to Action</a>
            </div>
            <div class="absolute inset-0 h-auto z-10">
                <img src="https://images.unsplash.com/photo-1509315047084-af74f1192bee" alt="" class="h-full w-full object-fit-cover">
            </div>
            </section>
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

        
      </div>



    </body>
  </div>
</template>

<script>
import FlashMessages from './components/FlashMessages.vue'
import MainNavigation from './components/Header.vue'
// import throttle from 'lodash/throttle'
import mapValues from 'lodash/mapValues'
// import pickBy from 'lodash/pickBy'


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
    name:'Landing',
    props: {
        allProducts: [],
        account: '',
    },
    components: {
        FlashMessages,
        MainNavigation,
    },
    watch: {
    },
    mounted () {
        


        if(this.$page.props.flash.success == 'Order Placed Successfully'){
               this.resetCart()
          }else{
          }
    },
    computed: {
      cartItems(){
          return this.$store.state.cartItems
      }, 
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
    },
    data () {
        return { 
            showBanner: true,
            something:false
        }
    },
    methods: {
      reset() {
        this.form = mapValues(this.form, () => null)
      },  
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
      }  
    }
}
</script>

<style>
    @media(max-width:1520px) {
        .left-svg {
            display: none;
        }
    }
    #summary {
      background-color: #f6f6f6;
    }

    .carousel-open:checked + .carousel-item {
				position: static;
        opacity: 100;
    }
    .carousel-item {
        -webkit-transition: opacity 0.6s ease-out;
        transition: opacity 0.6s ease-out;
    }
    #carousel-1:checked ~ .control-1,
    #carousel-2:checked ~ .control-2,
    #carousel-3:checked ~ .control-3 {
        display: block;
    }
    .carousel-indicators {
        list-style: none;
        margin: 0;
        padding: 0;
        position: absolute;
        bottom: 2%;
        left: 0;
        right: 0;
        text-align: center;
        z-index: 10;
    }
    #carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
    #carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
    #carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
        color: #2b6cb0;  /*Set to match the Tailwind colour you want the active one to be */
    }
</style>