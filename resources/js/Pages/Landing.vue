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
                    <div  style="height:60vh;" class="w-full rounded shadow-2xl justify-around bg-blue-600 flex flex-col border-box p-10">
                        <div class="">
                        <a @mouseover="setCategory('Supermarket')" class="mb-1 cursor-pointer relative group text-white inline-flex items-center px-2 text-xs font-bold transform transition hover:scale-125 duration-300 ease-in-out uppercase"> <i class="mr-2 fa fa-rainbow"></i> Supermartket</a>
                        <a @mouseover="setCategory('Health')" class="mb-1 cursor-pointer relative group text-white inline-flex items-center px-2 text-xs font-bold transform transition hover:scale-125 duration-300 ease-in-out uppercase"><i class="mr-2 fa fa-medkit"></i> Health & Beauty</a>
                        <a @mouseover="setCategory('Home')" class="mb-1 cursor-pointer relative group text-white inline-flex items-center px-2 text-xs font-bold transform transition hover:scale-125 duration-300 ease-in-out uppercase"><i class="mr-2 fa fa-laptop-house"></i> Home & Office</a>
                        <a @mouseover="setCategory('Phone')" class="mb-1 cursor-pointer relative group text-white inline-flex items-center px-2 text-xs font-bold transform transition hover:scale-125 duration-300 ease-in-out uppercase"><i class="mr-2 fa fa-mobile-alt"></i> Phones & Tablets</a>
                        <a @mouseover="setCategory('Computing')" class="mb-1 cursor-pointer relative group text-white inline-flex items-center px-2 text-xs font-bold transform transition hover:scale-125 duration-300 ease-in-out uppercase"><i class="mr-2 fa fa-microchip"></i> Computing</a>
                        <a @mouseover="setCategory('Electronics')" class="mb-1 cursor-pointer relative group text-white inline-flex items-center px-2 text-xs font-bold transform transition hover:scale-125 duration-300 ease-in-out uppercase"><i class="mr-2 fa fa-charging-station"></i> Electronics</a>
                        <a @mouseover="setCategory('Fashion')" class="mb-1 cursor-pointer relative group text-white inline-flex items-center px-2 text-xs font-bold transform transition hover:scale-125 duration-300 ease-in-out uppercase"><i class="mr-2 fa fa-tshirt"></i> Fashion</a>
                        <a @mouseover="setCategory('Gaming')" class="mb-1 cursor-pointer relative group text-white inline-flex items-center px-2 text-xs font-bold transform transition hover:scale-125 duration-300 ease-in-out uppercase"><i class="mr-2 fa fa-gamepad"></i> Gaming</a>
                        <a @mouseover="setCategory('Baby')" class="mb-1 cursor-pointer relative group text-white inline-flex items-center px-2 text-xs font-bold transform transition hover:scale-125 duration-300 ease-in-out uppercase"><i class="mr-2 fa fa-baby"></i> Baby Products</a>
                        <a @mouseover="setCategory('Sporting')" class="mb-1 cursor-pointer relative group text-white inline-flex items-center px-2 text-xs font-bold transform transition hover:scale-125 duration-300 ease-in-out uppercase"><i class="mr-2 fa fa-running"></i> Sporting Goods</a>
                        <a @mouseover="setCategory('Garden')" class="mb-1 cursor-pointer relative group text-white inline-flex items-center px-2 text-xs font-bold transform transition hover:scale-125 duration-300 ease-in-out uppercase"><i class="mr-2 fa fa-sun"></i> Garden & Outdoors</a>
                        <a @mouseover="setCategory('Other')" class="mb-1 cursor-pointer relative group text-white inline-flex items-center px-2 text-xs font-bold transform transition hover:scale-125 duration-300 ease-in-out uppercase"><i class="mr-2 fa fa-angle-double-right"></i> Other Categories</a>
                        </div>
                    </div>
                </div>

                <div v-if="this.selectedCategory == 'Supermarket' " @mouseleave="setCategory('')" class="z-10 col-span-3 bg-gray-200 shadow-2xl">
                    <div class="relative grid grid-cols-3 gap-4 px-10 py-2 justify-around">
                        <div>
                            <span class="text-lg font-semibold text-black uppercase"> Food Cupboard </span>
                            <div class="flex flex-col">
                                <inertia-link :href="route('product.result', 'Cooking Ingredients')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Cooking Ingredients</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Snacks, Cripps & Nuts')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Snacks, Cripps & Nuts</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Grains & Rice')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Grains & Rice</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Sugar & Flour')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Sugar & Flour</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Breakfast Cereals')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Breakfast Cereals</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Candy & Chocolate')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Candy & Chocolate</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Margarine, Jams, Honey & Spreads')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer">Margarine, Jams, Honey & Spreads</span>
                                </inertia-link>
                            </div>
                        </div>
                        <div>
                            <span class="text-lg font-semibold text-black uppercase"> Drinks </span>
                            <div class="flex flex-col">
                                <inertia-link :href="route('product.result', 'Beer, Wines & Spirits')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Beer, Wines & Spirits</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Carbonated Drinks')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Carbonated Drinks</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Coffee, Tea & Cocoa')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Coffee, Tea & Cocoa</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Dairy')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Dairy</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Juice & Non Carbonated Drinks')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Juice & Non Carbonated Drinks</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Syrup and Cordials')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Syrup and Cordials</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Water')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Water</span>
                                </inertia-link>
                                
                            </div>
                        </div>
                        <div>
                            <span class="text-lg font-semibold text-black uppercase"> Household Supplies </span>
                            <div class="flex flex-col">
                                <inertia-link :href="route('product.result', 'Air Fresheners')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Air Fresheners</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Bathroom Cleaners')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Bathroom Cleaners</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Bulb & Batteries')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Bulb & Batteries</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Floor Cleaners')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Floor Cleaners</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Household Cleaners & Sundries')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Household Cleaners & Sundries</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Kitchen Cleaner')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Kitchen Cleaner</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Laundry')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Laundry</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Pappers & Rolls')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Pappers & Rolls</span>
                                </inertia-link>
                              
                               <span class="mt-2 text-lg font-semibold text-black uppercase"> Shop by brands </span>
                               <inertia-link :href="route('product.result', 'Velvex')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Velvex</span> 
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Dettol')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Dettol</span> 
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Huggies')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Huggies</span> 
                                </inertia-link>
                        
                            </div>
                        </div>
                    </div>
                </div>

                <div v-if="this.selectedCategory == 'Health' " @mouseleave="setCategory('')" class="z-10 col-span-3 bg-gray-200 shadow-2xl">
                    <div class="relative grid grid-cols-3 gap-4 px-10 py-2 justify-around">
                        <div>
                            <span class="text-lg font-semibold text-black uppercase"> Hair Care </span>
                            <div class="flex flex-col">
                                <inertia-link :href="route('product.result', 'Conditioner')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Conditioner</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Extensions, Wigs & Accessories')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Extensions, Wigs & Accessories</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Hair & Scalp Care')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Hair & Scalp Care</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Hair Accessories')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Hair Accessories</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Hair Coloring Products')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Hair Coloring Products</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Hair Cutting Tools')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Hair Cutting Tools</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Hair Loss Products')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Hair Loss Products</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Hair Perms, Relaxers & Texturizers')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Hair Perms, Relaxers & Texturizers </span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Shampoo')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Shampoo</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Styling Products')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Styling Products</span>
                                </inertia-link>

                                <span class="mt-2 text-lg font-semibold text-black uppercase"> Fragrances </span>
                                <inertia-link :href="route('product.result', 'Mens')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Men's </span> 
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Womens')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Women's</span> 
                                </inertia-link>

                            </div>
                        </div>
                        <div>
                            <span class="text-lg font-semibold text-black uppercase"> Mens Grooming </span>
                            <div class="flex flex-col">
                                <inertia-link :href="route('product.result', 'Anti Ageing')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Anti Ageing</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Pre Shave')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Pre Shave</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Sunblock')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Sunblock</span>
                                </inertia-link>
                               

                              <span class="mt-2 text-lg font-semibold text-black uppercase"> Oral Care </span>
                               <inertia-link :href="route('product.result', 'Childrens Dental care')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Children's Dental care</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Dental Care')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Dental Care  </span> 
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Mouth Wash')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Mouth Wash</span> 
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Teeth Whitening')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer">  Teeth Whitening</span> 
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Toothbrush')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer">  Toothbrush</span> 
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Toothpaste')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer">  Toothpaste</span> 
                                </inertia-link>  

                               <span class="mt-2 text-lg font-semibold text-black uppercase"> Makeup </span>
                               <inertia-link :href="route('product.result', 'Eyes')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Eyes</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Face')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Face</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Lips')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Lips</span>
                                </inertia-link>
                        
                                
                            </div>
                        </div>
                        <div>
                            <span class="text-lg font-semibold text-black uppercase"> Health Care</span>
                            <div class="flex flex-col">
                                <inertia-link :href="route('product.result', 'Diabetes Care')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Diabetes Care</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Feminine Care')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Feminine Care</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'First Aid')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> First Aid</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Sleeping & Snoring')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Sleeping & Snoring</span>
                                </inertia-link>
                               
                              
                               <span class="mt-2 text-lg font-semibold text-black uppercase"> Personal Care </span>
                               <inertia-link :href="route('product.result', 'Bath & Bathing Accesories')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Bath & Bathing Accesories</span> 
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Deodrants & Antiperspirants')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Deodrants & Antiperspirants</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Lip Care')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Lip Care</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Shaves & Hair Removal')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Shaves & Hair Removal</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Skin Care')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Skin Care</span>
                                </inertia-link>

                               <span class="mt-2 text-lg font-semibold text-black uppercase"> Luxury Beauty </span>
                               <inertia-link :href="route('product.result', 'Fragrances')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Fragrances</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'MakeUp')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> MakeUp</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Skin Care')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Skin Care</span>
                                </inertia-link>
                        
                            </div>
                        </div>
                    </div>
                </div>

                <div v-if="this.selectedCategory == 'Home' " @mouseleave="setCategory('')" class="z-10 col-span-3 bg-gray-200 shadow-2xl">
                    <div class="relative grid grid-cols-3 gap-4 px-10 py-2 justify-around">
                        <div>
                            <span class="text-lg font-semibold text-black uppercase"> Home Kitchen </span>
                            <div class="flex flex-col">
                                <inertia-link :href="route('product.result', 'Home Decor')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Home Decor</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Bedding')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Bedding</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Wall Art')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Wall Art</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Bath')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Bath</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Lighting')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Lighting</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Storage & Organization')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Storage & Organization</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Kitchen Dining')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Kitchen Dining</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Furniture')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Furniture </span>
                                </inertia-link>

                                <span class="mt-2 text-lg font-semibold text-black uppercase"> Small Appliances </span>
                                <inertia-link :href="route('product.result', 'Blenders')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Blenders</span> 
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Kettles')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Kettles</span> 
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Toasters')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Toasters</span> 
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Ironing & Laundry')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Ironing & Laundry</span> 
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Other Small Appliances')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Other Small Appliances</span> 
                                </inertia-link>
                                

                            </div>
                        </div>
                        <div>
                            <span class="text-lg font-semibold text-black uppercase"> Large Appliances </span>
                            <div class="flex flex-col">
                                <inertia-link :href="route('product.result', 'Refridgerator')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Refridgerator</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Freezers')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Freezers</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Water Dispenders & Coolers')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Water Dispenders & Coolers</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Washers & Dryers')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Washers & Dryers</span>
                                </inertia-link>
                               

                              <span class="mt-2 text-lg font-semibold text-black uppercase"> Cooking Appliances </span>
                              <inertia-link :href="route('product.result', 'Cooktops')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Cooktops</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Microwaves & Ovens')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Microwaves & Ovens</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Cooking Applience Accessories')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Cooking Applience Accessories</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Cookers')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Cookers</span>
                                </inertia-link>
                    
                            </div>
                        </div>
                        <div>
                            <span class="text-lg font-semibold text-black uppercase"> Office Products</span>
                            <div class="flex flex-col">
                                <inertia-link :href="route('product.result', 'Office & School Supplies')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Office & School Supplies</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Office Electronics')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Office Electronics</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Office Furniture & Lighting')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Office Furniture & Lighting</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Stationery')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Stationery</span>
                                </inertia-link>
                            </div>
                        </div>
                    </div>
                </div>

                <div v-if="this.selectedCategory == 'Phone' " @mouseleave="setCategory('')" class="z-10 col-span-3 bg-gray-200 shadow-2xl">
                    <div class="relative grid grid-cols-3 gap-4 px-10 py-2 justify-around">
                        
                        <div>
                            <span class="text-lg font-semibold text-black uppercase"> Mobile Phones </span>
                            <div class="flex flex-col">
                                <inertia-link :href="route('product.result', 'Smartphoness')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Smartphoness</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Featured Phones')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Featured Phones</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Featured Phones Under 2000')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Featured Phones Under 2,000</span>
                                </inertia-link>

                                <span class="mt-2 text-lg font-semibold text-black uppercase"> Top Smartphone Brands </span>
                                <inertia-link :href="route('product.result', 'Samsung')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Samsung</span> 
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Xiaomi')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Xiaomi</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Nokia')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Nokia</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Tecno')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Tecno</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Infinix')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Infinix</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Huawei')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Huawei</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Oppo')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Oppo</span>
                                </inertia-link>

                            </div>
                        </div>

                        <div>
                            <span class="text-lg font-semibold text-black uppercase"> Accessories </span>
                            <div class="flex flex-col">
                                <inertia-link :href="route('product.result', 'Portable Powerbanks')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Portable Powerbanks</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Smart Watches')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Smart Watches</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Cases & Sleeves')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Cases & Sleeves</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Screen Protecttors')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Screen Protectors</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Bluetooth Accesories')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Bluetooth Accesories</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Headsets')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Headsets</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Headphones')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Headphones</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Batteries & Battery Packs')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Batteries & Battery Packs</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Accesories Under 1,000')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Accesories Under 1,000</span>
                                </inertia-link>

                                <span class="mt-2 text-lg font-semibold text-black uppercase"> Tablets </span>
                                <inertia-link :href="route('product.result', 'Ipads')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Ipads</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Tablet Accessories')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Tablet Accessories</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Tablet Bags & Covers')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Tablet Bags & Covers</span>
                                </inertia-link>

                            </div>
                        </div>

                        <div>
                            <span class="text-lg font-semibold text-black uppercase"> Best Sellers Smartphones </span>
                            <div class="flex flex-col">
                                <inertia-link :href="route('product.result', 'Samsung A10s')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Samsung A10s</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Nokia 2.4')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Nokia 2.4</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Tecno Pop 3')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Tecno Pop 3</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Xiaomi Redmi 9A')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Xiaomi Redmi 9A</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Oppo A15')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Oppo A15</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Umidigi A7s')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Umidigi A7's</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Cubot Note 20')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Cubot Note 20</span>
                                </inertia-link>


                               <span class="mt-2 text-lg font-semibold text-black uppercase"> New Smartphone Launches </span>
                               <inertia-link :href="route('product.result', 'Samsung A02')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Samsung A02</span> 
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Xiaomi Note 10 pro')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Xiaomi Note 10 pro</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Nokia 1.3')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Nokia 1.3</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Tecno Camon 17')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Tecno Camon 17</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Samsung A02')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Samsung A02</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Oppo Reno 5')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Oppo Reno 5</span>
                                </inertia-link>
                               
                            </div>
                        </div>
                    </div>
                </div>

                <div v-if="this.selectedCategory == 'Computing' " @mouseleave="setCategory('')" class="z-10 col-span-3 bg-gray-200 shadow-2xl">
                    <div class="relative grid grid-cols-3 gap-4 px-10 py-2 justify-around">
                        <div>
                            <span class="text-lg font-semibold text-black uppercase"> Laptops </span>
                            <div class="flex flex-col">
                                <inertia-link :href="route('product.result', 'MacBooks')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> MacBooks</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'NetBooks')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> NetBooks</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'UltraBooks')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> UltraBooks</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', '2-in-1 Laptops')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> 2-in-1 Laptops</span>
                                </inertia-link>

                                <span class="mt-2 text-lg font-semibold text-black uppercase"> Computer & Accessories </span>
                                <inertia-link :href="route('product.result', 'Laptop Accessories')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Laptop Accessories</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Desktops')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Desktops</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Monitors')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Monitors</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Scanners')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Scanners</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Printers')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Printers</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Keyboards, Mice & Accessories')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Keyboards, Mice & Accessories</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Computer Cable & Adapters')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Computer Cable & Adapters</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Printer Ink & Toner')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Printer Ink & Toner</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Netwroking Products')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Networking Products</span>
                                </inertia-link>    
                                
                            </div>
                        </div>
                        <div>
                            <span class="text-lg font-semibold text-black uppercase"> Shop By Laptop Brands </span>
                            <div class="flex flex-col">
                                <inertia-link :href="route('product.result', 'HP')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> HP Laptops</span> 
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Dell')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Dell Laptops</span> 
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Lenovo')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Lenovo Laptops</span> 
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Apple')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Apple Laptops</span> 
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Asus')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Asus Laptops</span> 
                                </inertia-link>

                               <span class="mt-2 text-lg font-semibold text-black uppercase"> Computer Components </span>
                               <inertia-link :href="route('product.result', 'Internal Hard Drive')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Internal Hard Drive</span> 
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Graphic Cards')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Graphic Cards</span> 
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Fans & Cooling')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Fans & Cooling</span> 
                                </inertia-link>
                                
                            </div>
                        </div>
                        <div>
                            <span class="text-lg font-semibold text-black uppercase"> Computer Data Storage </span>
                            <div class="flex flex-col">
                                <inertia-link :href="route('product.result', 'External Hard Drives')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> External Hard Drives</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'USB Flash Drives')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> USB Flash Drives</span>
                                </inertia-link>
                        
                            </div>
                        </div>
                    </div>
                </div>

                <div v-if="this.selectedCategory == 'Electronics' " @mouseleave="setCategory('')" class="z-10 col-span-3 bg-gray-200 shadow-2xl">
                    <div class="relative grid grid-cols-3 gap-4 px-10 py-2 justify-around">
                        <div>
                            <span class="text-lg font-semibold text-black uppercase"> Televisions </span>
                            <div class="flex flex-col">
                                <inertia-link :href="route('product.result', 'Smart TVs')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Smart TVs</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'LED & LCD TVs')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> LED & LCD TVs</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Data Projectors')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Data Projectors</span>
                                </inertia-link>

                                <span class="mt-2 text-lg font-semibold text-black uppercase"> Best Seller TV Brands </span>
                                <inertia-link :href="route('product.result', 'Synix')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Synix TV</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Samsung')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Samsung TV</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Hisense')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Hisense TV</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Sony')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Sony </span>
                                </inertia-link>

                            </div>
                        </div>
                        <div>
                            <span class="text-lg font-semibold text-black uppercase"> Home Audio </span>
                            <div class="flex flex-col">
                                <inertia-link :href="route('product.result', 'Speakers')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer">Speakers </span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Home Theatre System')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Home Theatre System</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Blutooth Speakers')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Blutooth Speakers</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Sound Bars')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Sound Bars</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Compact Radio & Stereos')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Compact Radio & Stereos</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Hi-Fi System Under 2000')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Hi-Fi System Under 2,000</span>
                                </inertia-link>

                                 <span class="mt-2 text-lg font-semibold text-black uppercase"> Cameras </span>
                                 <inertia-link :href="route('product.result', 'Compact Cameras')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Compact Cameras</span> 
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Digital SLR Cameras')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Digital SLR Cameras</span> 
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Security & Surveillance Camera')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Security & Surveillance Camera</span> 
                                </inertia-link>
                                
                            </div>
                        </div>
                        <div>
                            <span class="text-lg font-semibold text-black uppercase"> Accessories & Supplies Supplies </span>
                            <div class="flex flex-col">
                                <inertia-link :href="route('product.result', 'Accessories & Video Supplies')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Accessories & Video Supplies</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Batteries')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Batteries</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Batteries, Chargers & Accessories')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Batteries, Chargers & Accessories</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Cables')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Cables</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Camera & Photo Accessories')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Camera & Photo Accessories</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Camera Accesories')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Camera Accesories</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Home Audio Acccessories')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Home Audio Acccessories</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Power Protection')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Power Protection</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Television Accessories')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Television Accessories</span>
                                </inertia-link>

                            </div>
                        </div>
                    </div>
                </div>

                <div v-if="this.selectedCategory == 'Fashion' " @mouseleave="setCategory('')" class="z-10 col-span-3 bg-gray-200 shadow-2xl">
                    <div class="relative grid grid-cols-3 gap-4 px-10 py-2 justify-around">
                        <div>
                            <span class="text-lg font-semibold text-black uppercase"> Women's Fashion </span>
                            <div class="flex flex-col">
                                <inertia-link :href="route('product.result', 'Dresses')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Dresses</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Suits & Blazers')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Suits & Blazers</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Tops & Tees')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Tops & Tees</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Coats, Jackets & Vest')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Coats, Jackets & Vest</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Jumpsuits, Rompers & Overalls')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Jumpsuits, Rompers & Overalls</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Skirts')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Skirts</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Lingerie, Sleep & Lounge')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Lingerie, Sleep & Lounge</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Jeans')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Jeans</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Shorts')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Shorts</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Jewelery')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Jewelery</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Sandals')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Sandals</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Flats')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Flats</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Handbags & Wallets')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Handbags & Wallets</span>
                                </inertia-link>
                            </div>
                        </div>
                        <div>
                            <span class="text-lg font-semibold text-black uppercase"> Men's Fashion </span>
                            <div class="flex flex-col">
                                <inertia-link :href="route('product.result', 'Shirts')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Shirts</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'T-Shirt & Tanks')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> T-Shirt & Tanks</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Suits & Sports Coats')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Suits & Sports Coats</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Pants')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Pants</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Shorts')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Shorts</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Jeans')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Jeans</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Underwear')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Underwear</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Watches')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Watches</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Fashion Sneakers')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Fashion Sneakers</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Loafers & Slip Ons')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Loafers & Slip Ons</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Belts')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Belts</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Sunglasses & Eyewear Accessories')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Sunglasses & Eyewear Accessories</span>
                                </inertia-link>

                                <span class="mt-2 text-lg font-semibold text-black uppercase"> Baby </span>
                                <inertia-link :href="route('product.result', 'Baby Boys')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Baby Boys</span>   
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Baby Girls')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Baby Girls</span>   
                                </inertia-link>
                                
                            </div>
                        </div>
                        <div>
                            <span class="text-lg font-semibold text-black uppercase"> Kids Fashion </span>
                            <div class="flex flex-col">
                                <inertia-link :href="route('product.result', 'Boys')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Boys</span>   
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Girls')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Girls</span> 
                                </inertia-link>
                                
                              
                               <span class="mt-2 text-lg font-semibold text-black uppercase"> Exclusive Fashion </span>
                               <inertia-link :href="route('product.result', 'Maternity Wear')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Maternity Wear</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Ankara Shirts')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Ankara Shirts</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Kitenge Dresses')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Kitenge Dresses</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Ankara Tops')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Ankara Tops</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Wedding Hair Accesories')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Wedding Hair Accesories</span>
                                </inertia-link>

                               <span class="mt-2 text-lg font-semibold text-black uppercase"> Shop by brands </span>
                               <inertia-link :href="route('product.result', 'Curren')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Curren</span> 
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Forever Young')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Forever Young</span> 
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Bata')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Bata</span> 
                                </inertia-link>
                        
                            </div>
                        </div>
                    </div>
                </div>

                <div v-if="this.selectedCategory == 'Gaming' " @mouseleave="setCategory('')" class="z-10 col-span-3 bg-gray-200 shadow-2xl">
                    <div class="relative grid grid-cols-3 gap-4 px-10 py-2 justify-around">
                        <div>
                            <span class="text-lg font-semibold text-black uppercase"> Playingstation </span>
                            <div class="flex flex-col">
                                <inertia-link :href="route('product.result', 'PlaySatation 3')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> PlaySatation 3</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'PlaySatation 4')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Playstation 4</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'PlaySatation Vita')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Playstation Vita</span>
                                </inertia-link>

                                 <span class="mt-2 text-lg font-semibold text-black uppercase"> Digital Games </span>
                                 <inertia-link :href="route('product.result', 'Nintendo Switch')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Nintendo Switch</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Xbox 360')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Xbox 360</span>
                                </inertia-link>

                            </div>
                        </div>
                        <div>
                            <span class="text-lg font-semibold text-black uppercase"> Nintendo </span>
                            <div class="flex flex-col">
                                <inertia-link :href="route('product.result', ' ')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Nintendo DS</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', ' ')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Nintendo 3DS</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', ' ')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Wii</span>
                                </inertia-link>

                            </div>
                        </div>
                        <div>
                            <span class="text-lg font-semibold text-black uppercase"> PC Gaming </span>
                            <div class="flex flex-col">
                                <inertia-link :href="route('product.result', 'Games')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer">Games</span>
                                </inertia-link>

                                <inertia-link :href="route('product.result', 'Sony PSP')"> 
                                <span class="mt-2 text-lg font-semibold text-black uppercase"> Sony PSP </span>
                                </inertia-link>
                                
                        
                            </div>
                        </div>
                    </div>
                </div>

                <div v-if="this.selectedCategory == 'Baby' " @mouseleave="setCategory('')" class="z-10 col-span-3 bg-gray-200 shadow-2xl">
                    <div class="relative grid grid-cols-3 gap-4 px-10 py-2 justify-around">
                        <div>
                            <span class="text-lg font-semibold text-black uppercase"> Diapering </span>
                            <div class="flex flex-col">
                                <inertia-link :href="route('product.result', 'Diaper Bags')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Diaper Bags</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Disposable Diapers')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Disposable Diapers</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Portable Changing Pads')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Portable Changing Pads</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Cloth Diapers')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Cloth Diapers</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Changing Tables')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Changing Tables</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Wipes & Holders')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Wipes & Holders</span>
                                </inertia-link>

                                <span class="mt-2 text-lg font-semibold text-black uppercase"> Gear </span>
                                <inertia-link :href="route('product.result', 'Walkers')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Walkers</span> 
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'BagPacks & Camera')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> BagPacks & Camera</span> 
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Swings, Jumps & Bouncers')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Swings, Jumps & Bouncers</span> 
                                </inertia-link>

                               <span class="mt-2 text-lg font-semibold text-black uppercase"> Bathing & Skin Care </span>
                               <inertia-link :href="route('product.result', 'Soaps & Cleaners')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Soaps & Cleaners</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Grooming & Healthcare kits')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Grooming & Healthcare kits</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Bathing Tubs & Seats')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Bathing Tubs & Seats</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Washclothes & Towels')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Washclothes & Towels</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Bathroom Safety')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Bathroom Safety</span>
                                </inertia-link>

                            </div>
                        </div>
                        <div>
                            <span class="text-lg font-semibold text-black uppercase"> Apparel & Accessories </span>
                            <div class="flex flex-col">
                                <inertia-link :href="route('product.result', 'Baby Boy')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Baby Boy</span> 
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Baby Girl')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Baby Girl</span> 
                                </inertia-link>

                                <span class="mt-2 text-lg font-semibold text-black uppercase"> Baby & Toodler Toys </span>
                                <inertia-link :href="route('product.result', 'Toy Gift Sets')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Toy Gift Sets</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Music & Sound')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Music & Sound</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Bath Toys')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Bath Toys</span>
                                </inertia-link>

                               <span class="mt-2 text-lg font-semibold text-black uppercase"> Feeding </span>
                               <inertia-link :href="route('product.result', 'Bibs & Burp Clothes')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Bibs & Burp Clothes</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Bottle Feeding')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Bottle Feeding</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Breastfeeding')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Breastfeeding</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Highchairs & Booster Seats')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Highchairs & Booster Seats</span>
                                </inertia-link>
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Pacifiers & Accessories</span>
                                <inertia-link :href="route('product.result', 'Pacifiers & Accessories')"> 
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Solid Feeding')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Solid Feeding</span>
                                </inertia-link>

                                
                            </div>
                        </div>
                        <div>
                            <span class="text-lg font-semibold text-black uppercase"> Baby Safety </span>
                            <div class="flex flex-col">
                                <inertia-link :href="route('product.result', 'Monitors')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Monitors</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Sleep Positioners')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Sleep Positioners</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Edge & Corner Guards')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Edge & Corner Guards</span>
                                </inertia-link>
                              
                               <span class="mt-2 text-lg font-semibold text-black uppercase"> Potty Training </span>
                               <inertia-link :href="route('product.result', 'Potties & Seats')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Potties & Seats</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Seat Covers')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Seat Covers</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Step Stools')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Step Stools</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Training Pants')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Training Pants</span>
                                </inertia-link>

                               <span class="mt-2 text-lg font-semibold text-black uppercase"> Health & Baby Care  </span>
                               <inertia-link :href="route('product.result', 'Nail Care')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Nail Care</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Teethers & Teething Relief')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Teethers & Teething Relief</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Thermometers')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Thermometers</span>
                                </inertia-link>
                            </div>
                        </div>
                    </div>
                </div>

                <div v-if="this.selectedCategory == 'Sporting' " @mouseleave="setCategory('')" class="z-10 col-span-3 bg-gray-200 shadow-2xl">
                    <div class="relative grid grid-cols-3 gap-4 px-10 py-2 justify-around">
                        <div>
                            <span class="text-lg font-semibold text-black uppercase"> Sports & Fitness </span>
                            <div class="flex flex-col">
                                <inertia-link :href="route('product.result', 'Exercise & Fitness')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Exercise & Fitness</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Accessories')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Accessories</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Clothing')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Clothing</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Team Sports')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Team Sports</span>
                                </inertia-link>
                            </div>
                        </div>
                        <div>
                            <span class="text-lg font-semibold text-black uppercase"> Sports Nutrition </span>
                            <div class="flex flex-col">
                                <inertia-link :href="route('product.result', 'Carb Management Supplements')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Carb Management Supplements</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Endurance & Energy')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Endurance & Energy</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Fat Burners & Thermogenics')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Fat Burners & Thermogenics</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Supplements')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Supplements</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'ost-Work & Recovery')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Post-Work & Recovery</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Pre-Workout')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Pre-Workout</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Proteins')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Proteins</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Supplement Stacks')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Supplement Stacks</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Testerone Boosters')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Testerone Boosters</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Weight Gainers')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Weight Gainers</span>
                                </inertia-link>
                                
                            </div>
                        </div>
                        <div>
                            <span class="text-lg font-semibold text-black uppercase"> Outdoor Recreation </span>
                            <div class="flex flex-col">
                                <inertia-link :href="route('product.result', 'Camping & Hiking')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Camping & Hiking</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Skatebaords & Scooter')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Skatebaords & Scooter </span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Cycling')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Cycling</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Accessories')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Accessories</span>
                                </inertia-link>
                              
                            
                            </div>
                        </div>
                    </div>
                </div>

                <div v-if="this.selectedCategory == 'Garden' " @mouseleave="setCategory('')" class="z-10 col-span-3 bg-gray-200 shadow-2xl">
                    <div class="relative grid grid-cols-3 gap-4 px-10 py-2 justify-around">
                        <div>
                            <span class="text-lg font-semibold text-black uppercase"> Gardening & Lawn Care </span>
                            <div class="flex flex-col">
                                <inertia-link :href="route('product.result', 'Hand Tools')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Hand Tools</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Watering Equipment')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Watering Equipment</span>
                                </inertia-link>

                                <span class="mt-2 text-lg font-semibold text-black uppercase"> Grilling & Outdoor Cooking </span>
                                <inertia-link :href="route('product.result', 'Grills')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Grills</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Outdoor Cooking Tools & Accessories')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Outdoor Cooking Tools & Accessories</span>
                                </inertia-link>

                            </div>
                        </div>
                        <div>
                            <span class="text-lg font-semibold text-black uppercase"> Outdoor Decor </span>
                            <div class="flex flex-col">
                                <inertia-link :href="route('product.result', 'Lighting')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Lighting</span>
                                </inertia-link>

                                <span class="mt-2 text-lg font-semibold text-black uppercase"> Patio Furniture & Accessories </span>
                                <inertia-link :href="route('product.result', 'Hammoocks , Stands & Accessories')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Hammoocks , Stands & Accessories</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', ' ')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> </span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', ' ')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> </span>
                                </inertia-link>
                                
                            </div>
                        </div>
                        <div>
                            <span class="text-lg font-semibold text-black uppercase"> Farm & Ranch </span>
                            <div class="flex flex-col">
                                <inertia-link :href="route('product.result', 'Pest Control')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Pest Control</span>
                                </inertia-link>
                              
                        
                            </div>
                        </div>
                    </div>
                </div>

                <div v-if="this.selectedCategory == 'Other' " @mouseleave="setCategory('')" class="z-10 col-span-3 bg-gray-200 shadow-2xl">
                    <div class="relative grid grid-cols-3 gap-4 px-10 py-2 justify-around">
                        <div>
                            <span class="text-lg font-semibold text-black uppercase"> Stay Safe </span>
                            <div class="flex flex-col">
                                <inertia-link :href="route('product.result', 'Have Fun')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Have Fun</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Stay Fit')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Stay Fit</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Stay Connected')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Stay Connected</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Supermarket')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Supermarket</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Stay Healty')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Stay Healty</span>
                                </inertia-link>

                                <span class="mt-2 text-lg font-semibold text-black uppercase"> Automobile </span>
                                <inertia-link :href="route('product.result', 'Car Electronic & Accessories')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Car Electronic & Accessories</span> 
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Car Safety and Security')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Car Safety and Security</span> 
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Motorcycle & Powersports')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Motorcycle & Powersports</span> 
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Lights & Lighting Accessories')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Lights & Lighting Accessories</span> 
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Replacement Parts')"> 
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Replacement Parts</span> 
                                </inertia-link>

                            </div>
                        </div>
                        <div>
                            <span class="text-lg font-semibold text-black uppercase"> Books, Movies & Music </span>
                            <div class="flex flex-col">
                                <inertia-link :href="route('product.result', 'Education & Learning')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Education & Learning</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Biography & Autobiography')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Biography & Autobiography</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Literature')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Literature</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Children & Teens')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Children & Teens</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Study Aids')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Study Aids</span>
                                </inertia-link>
                                <inertia-link :href="route('product.result', 'Christian Books & Bibles')"> 
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> Christian Books & Bibles</span>
                                </inertia-link>

                                <inertia-link :href="route('product.result', 'Industrial & Scientific')"> 
                                <span class="mt-2 text-lg font-semibold text-black uppercase"> Industrial & Scientific </span>
                                </inertia-link>    
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> </span> 

                                <inertia-link :href="route('product.result', 'Livestock')"> 
                               <span  class="mt-2 text-lg font-semibold text-black uppercase"> Livestock </span>
                                </inertia-link>
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> </span> 
 
                                    
                               <span  class="mt-2 text-lg font-semibold text-black uppercase"> Miscellaneous </span>
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> </span> 
 
                               <span  class="mt-2 text-lg font-semibold text-black uppercase"> Musical Instrument </span>
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> </span> 
 
                               <span  class="mt-2 text-lg font-semibold text-black uppercase"> Pet Supplies </span>
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> </span> 
                                
                            </div>
                        </div>
                        <div>
                            <span class="text-lg font-semibold text-black uppercase"> Services </span>
                            <div class="flex flex-col">
                                <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> </span>
                              
                               <span class="mt-2 text-lg font-semibold text-black uppercase"> Toy & Games </span>
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> </span> 

                               <span class="mt-2 text-lg font-semibold text-black uppercase"> Grocery </span>
                               <span class="border-b-2 hover:border-indigo-500 border-transparent cursor-pointer"> </span> 
                        
                            </div>
                        </div>
                    </div>
                </div>

                <div v-if="this.selectedCategory == '' " class="col-span-3 z-10">
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
                </div>

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
            <!-- <div class="flex items-center text-gray-800 mt-4">
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
            </div> -->

            <!-- Top Categories-->
            <div class="py-2 bg-gray-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:text-center">
                <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase my-4">Popular categories</h2>
                </div>

                <div class="my-5">
                <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-5 md:gap-x-8 md:gap-y-10">
                    <div class="relative">
                    <dt class="p-6 bg-white rounded-xl shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-500">
                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                        <!-- Heroicon name: outline/globe-alt -->
                        <i class="fa fa-phone h-6 w-6"></i> 
                        </div>
                        <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Phones & Accessories</p>
                    </dt>
                    </div>

                    <div class="relative">
                    <dt class="p-6 bg-white rounded-xl shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-500">
                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                        <!-- Heroicon name: outline/scale -->
                        <i class="fa fa-charging-station h-6 w-6"></i> 
                        </div>
                        <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Electronics & Video</p>
                    </dt>
                    </div>

                    <div class="relative">
                    <dt class="p-6 bg-white rounded-xl shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-500">
                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                        <!-- Heroicon name: outline/lightning-bolt -->
                        <i class="fa fa-laptop h-6 w-6"></i> 
                        </div>
                        <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Tech & Computing</p>
                    </dt>
                    </div>

                    <div class="relative">
                    <dt class="p-6 bg-white rounded-xl shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-500">
                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                        <!-- Heroicon name: outline/annotation -->
                        <i class="fa fa-truck-loading h-6 w-6"></i> 
                        </div>
                        <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Large Appliances</p>
                    </dt>
                    </div>

                    <div class="relative">
                    <dt class="p-6 bg-white rounded-xl shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-500">
                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                        <!-- Heroicon name: outline/annotation -->
                        <i class="fa fa-blender-phone h-6 w-6"></i> 
                        </div>
                        <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Kitchen Electronics</p>
                    </dt>
                    </div>

                </dl>
                </div>
            </div>
            </div>

            </div>

            <!-- Pricing Section -->
            <div class="relative py-10 md:py-1 lg:py-24 xl:py-1 xl:px-0">

                <div v-if="showProducts" id="pricing" class="container flex flex-col items-center h-full max-w-7xl mx-auto">
                    <h3
                        class="w-full max-w-7xl px-1 mt-3 text-xl font-black leading-tight text-center text-gray-900 sm:mt-0 sm:px-0 sm:text-lg md:px-0">
                        Featured Products</h3>

                    <div class="max-w-full mx-auto md:max-w-full sm:px-8">
                        <div class="relative flex flex-col items-center sm:flex-row">
                            <section class="text-gray-600 body-font relative">

                            <!-- Supermarket Products         -->
                            <div v-if="this.supermarket.length" class="container py-2 mb-10 mx-auto">
                                <div class="flex w-full">
                                    <div class="flex-1 my-3 relative rounded bg-gray-50 shadow">
                                        <div class="bg-indigo-600 pl-10 pr-10 pt-6 pb-6 ml-3 absolute top-0 -mt-4 -mr-4 rounded text-white fill-current shadow-2xl">
                                            <p class="italic">Supermarket</p>
                                        </div>

                                        <inertia-link :href="route('product.category', 'Supermarket')">
                                        <div class="group float-right top-0 right-0 m-3">
                                            <div class="hover:scale-125 transform transition group-hover:text-pink-600 duration-300 ease-in-out text-right text-sm">See All</div>
                                            <div class="hover:scale-125  transform transition group-hover:text-pink-600 duration-300 ease-in-out text-right text-3xl"> <i class="fa fa-directions"> </i> </div>
                                        </div>
                                        </inertia-link>
                                        
                                    </div>
                                </div>  

                                <div class="flex flex-wrap -m-4"> 

                                <div v-for="product in supermarket.slice(0, 4)" :key="product._id" class="transform transition hover:scale-90 duration-300 ease-in-out  shadow-2xl bg-gray-100 lg:w-72 md:w-1/2 min-w-1/2 w-full p-2 mb-2">
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
                        
                            <!-- Health & Beauty -->
                            <div v-if="this.healthBeauty.length" class="container py-2 mb-10 mx-auto">
                                <div class="flex w-full">
                                    <div class="flex-1 my-3 relative rounded bg-gray-50 shadow">
                                        <div class="bg-indigo-600 pl-10 pr-10 pt-6 pb-6 ml-3 absolute top-0 -mt-4 -mr-4 rounded text-white fill-current shadow-2xl">
                                            <p class="italic">Health & Products</p>
                                        </div>

                                        <inertia-link :href="route('product.category', 'Healt')">
                                        <div class="group float-right top-0 right-0 m-3">
                                            <div class="hover:scale-125 transform transition group-hover:text-pink-600 duration-300 ease-in-out text-right text-sm">See All</div>
                                            <div class="hover:scale-125  transform transition group-hover:text-pink-600 duration-300 ease-in-out text-right text-3xl"> <i class="fa fa-directions"> </i> </div>
                                        </div>
                                        </inertia-link>
                                        
                                    </div>
                                </div>  

                                <div class="flex flex-wrap -m-4"> 

                                <div v-for="product in healthBeauty.slice(0, 4)" :key="product._id" class="transform transition hover:scale-90 duration-300 ease-in-out  shadow-2xl bg-gray-100 lg:w-72 md:w-1/2 min-w-1/2 w-full p-2 mb-2">
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

                            <!-- homeOffice -->
                            <div v-if="this.homeOffice.length" class="container py-2 mb-10 mx-auto">
                                <div class="flex w-full">
                                    <div class="flex-1 my-3 relative rounded bg-gray-50 shadow">
                                        <div class="bg-indigo-600 pl-10 pr-10 pt-6 pb-6 ml-3 absolute top-0 -mt-4 -mr-4 rounded text-white fill-current shadow-2xl">
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

                                <div v-for="product in homeOffice.slice(0, 4)" :key="product._id" class="transform transition hover:scale-90 duration-300 ease-in-out  shadow-2xl bg-gray-100 lg:w-72 md:w-1/2 min-w-1/2 w-full p-2 mb-2">
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

                            <!-- PhonesTablets -->
                            <div v-if="this.phonesTablets.length" class="container py-2 mb-10 mx-auto">
                                <div class="flex w-full">
                                    <div class="flex-1 my-3 relative rounded bg-gray-50 shadow">
                                        <div class="bg-indigo-600 pl-10 pr-10 pt-6 pb-6 ml-3 absolute top-0 -mt-4 -mr-4 rounded text-white fill-current shadow-2xl">
                                            <p class="italic">Phones & Tablets</p>
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

                                <div v-for="product in PhonesTablets.slice(0, 4)" :key="product._id" class="transform transition hover:scale-90 duration-300 ease-in-out  shadow-2xl bg-gray-100 lg:w-72 md:w-1/2 min-w-1/2 w-full p-2 mb-2">
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

                            <!-- computing -->
                            <div v-if="this.computing.length"  class="container py-2 mb-10 mx-auto">
                                <div class="flex w-full">
                                    <div class="flex-1 my-3 relative rounded bg-gray-50 shadow">
                                        <div class="bg-indigo-600 pl-10 pr-10 pt-6 pb-6 ml-3 absolute top-0 -mt-4 -mr-4 rounded text-white fill-current shadow-2xl">
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

                                <div v-for="product in computing.slice(0, 4)" :key="product._id" class="transform transition hover:scale-90 duration-300 ease-in-out  shadow-2xl bg-gray-100 lg:w-72 md:w-1/2 min-w-1/2 w-full p-2 mb-2">
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

                            <!-- electronics -->
                            <div v-if="this.electronics.length"  class="container py-2 mb-10 mx-auto">
                                <div class="flex w-full">
                                    <div class="flex-1 my-3 relative rounded bg-gray-50 shadow">
                                        <div class="bg-indigo-600 pl-10 pr-10 pt-6 pb-6 ml-3 absolute top-0 -mt-4 -mr-4 rounded text-white fill-current shadow-2xl">
                                            <p class="italic">Electronics</p>
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

                                <div v-for="product in electronics.slice(0, 4)" :key="product._id" class="transform transition hover:scale-90 duration-300 ease-in-out  shadow-2xl bg-gray-100 lg:w-72 md:w-1/2 min-w-1/2 w-full p-2 mb-2">
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

                            <!-- fashion-->
                            <div v-if="this.fashion.length"  class="container py-2 mb-10 mx-auto">
                                <div class="flex w-full">
                                    <div class="flex-1 my-3 relative rounded bg-gray-50 shadow">
                                        <div class="bg-indigo-600 pl-10 pr-10 pt-6 pb-6 ml-3 absolute top-0 -mt-4 -mr-4 rounded text-white fill-current shadow-2xl">
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

                                <div v-for="product in fashion.slice(0, 4)" :key="product._id" class="transform transition hover:scale-90 duration-300 ease-in-out  shadow-2xl bg-gray-100 lg:w-72 md:w-1/2 min-w-1/2 w-full p-2 mb-2">
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

                            <!-- gaming -->
                            <div v-if="this.gaming.length"  class="container py-2 mb-10 mx-auto">
                                <div class="flex w-full">
                                    <div class="flex-1 my-3 relative rounded bg-gray-50 shadow">
                                        <div class="bg-indigo-600 pl-10 pr-10 pt-6 pb-6 ml-3 absolute top-0 -mt-4 -mr-4 rounded text-white fill-current shadow-2xl">
                                            <p class="italic">Gaming</p>
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

                                <div v-for="product in gaming.slice(0, 4)" :key="product._id" class="transform transition hover:scale-90 duration-300 ease-in-out  shadow-2xl bg-gray-100 lg:w-72 md:w-1/2 min-w-1/2 w-full p-2 mb-2">
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

                            <!-- baby -->
                            <div v-if="this.baby.length"  class="container py-2 mb-10 mx-auto">
                                <div class="flex w-full">
                                    <div class="flex-1 my-3 relative rounded bg-gray-50 shadow">
                                        <div class="bg-indigo-600 pl-10 pr-10 pt-6 pb-6 ml-3 absolute top-0 -mt-4 -mr-4 rounded text-white fill-current shadow-2xl">
                                            <p class="italic">Baby Products</p>
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

                                <div v-for="product in baby.slice(0, 4)" :key="product._id" class="transform transition hover:scale-90 duration-300 ease-in-out  shadow-2xl bg-gray-100 lg:w-72 md:w-1/2 min-w-1/2 w-full p-2 mb-2">
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

                            <!-- sporting -->
                            <div v-if="this.sporting.length"  class="container py-2 mb-10 mx-auto">
                                <div class="flex w-full">
                                    <div class="flex-1 my-3 relative rounded bg-gray-50 shadow">
                                        <div class="bg-indigo-600 pl-10 pr-10 pt-6 pb-6 ml-3 absolute top-0 -mt-4 -mr-4 rounded text-white fill-current shadow-2xl">
                                            <p class="italic">Sporting Goods</p>
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

                                <div v-for="product in sporting.slice(0, 4)" :key="product._id" class="transform transition hover:scale-90 duration-300 ease-in-out  shadow-2xl bg-gray-100 lg:w-72 md:w-1/2 min-w-1/2 w-full p-2 mb-2">
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

                            <!-- Garden -->
                            <div v-if="this.gardenOutdoors.length"  class="container py-2 mb-10 mx-auto">
                                <div class="flex w-full">
                                    <div class="flex-1 my-3 relative rounded bg-gray-50 shadow">
                                        <div class="bg-indigo-600 pl-10 pr-10 pt-6 pb-6 ml-3 absolute top-0 -mt-4 -mr-4 rounded text-white fill-current shadow-2xl">
                                            <p class="italic">Garden & Outdoors</p>
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

                                <div v-for="product in gardenOutdoors.slice(0, 4)" :key="product._id" class="transform transition hover:scale-90 duration-300 ease-in-out  shadow-2xl bg-gray-100 lg:w-72 md:w-1/2 min-w-1/2 w-full p-2 mb-2">
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

                            <!-- Other -->
                            <div v-if="this.other.length"  class="container py-2 mb-10 mx-auto">
                                <div class="flex w-full">
                                    <div class="flex-1 my-3 relative rounded bg-gray-50 shadow">
                                        <div class="bg-indigo-600 pl-10 pr-10 pt-6 pb-6 ml-3 absolute top-0 -mt-4 -mr-4 rounded text-white fill-current shadow-2xl">
                                            <p class="italic">Other Categories</p>
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

                                <div v-for="product in other.slice(0, 4)" :key="product._id" class="transform transition hover:scale-90 duration-300 ease-in-out  shadow-2xl bg-gray-100 lg:w-72 md:w-1/2 min-w-1/2 w-full p-2 mb-2">
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

            <!-- Testimonals Section -->
            <div class="my-5 container mx-auto flex flex-col md:flex-row shadow-sm overflow-hidden" x-data="{ testimonialActive: 2 }" x-cloak>
                <div class="relative w-full py-2 md:py-24 bg-indigo-700 md:w-1/2 flex flex-col item-center justify-center">
                    
                    <div class="absolute top-0 left-0 z-10 grid-indigo w-16 h-16 md:w-40 md:h-40 md:ml-20 md:mt-24"></div>
                    
                    <div class="relative text-2xl md:text-5xl py-2 px-6 md:py-6 md:px-1 md:w-64 md:mx-auto text-indigo-100 font-semibold leading-tight tracking-tight mb-0 z-20">
                        <span class="md:block">What Our</span>
                        <span class="md-block">Customers</span>
                        <span class="block">Are Saying!</span>
                    </div>

                    <div class="absolute right-0 bottom-0 mr-4 mb-4 hidden md:block">
                        <button 
                            class="rounded-l-full border-r bg-gray-100 text-gray-500 focus:outline-none hover:text-indigo-500 font-bold w-12 h-10"
                            x-on:click="testimonialActive = testimonialActive === 1 ? 3 : testimonialActive - 1">
                            &#8592;
                        </button><button 
                            class="rounded-r-full bg-gray-100 text-gray-500 focus:outline-none hover:text-indigo-500 font-bold w-12 h-10"
                            x-on:click="testimonialActive = testimonialActive >= 3 ? 1 : testimonialActive + 1">
                            &#8594;
                        </button>
                    </div>
                </div>

                <div class="bg-gray-100 md:w-1/2">
                    <div class="flex flex-col h-full relative">

                        <div class="absolute top-0 left-0 mt-3 ml-4 md:mt-5 md:ml-12">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-indigo-200 fill-current w-12 h-12 md:w-16 md:h-16" viewBox="0 0 24 24"><path d="M6.5 10c-.223 0-.437.034-.65.065.069-.232.14-.468.254-.68.114-.308.292-.575.469-.844.148-.291.409-.488.601-.737.201-.242.475-.403.692-.604.213-.21.492-.315.714-.463.232-.133.434-.28.65-.35.208-.086.39-.16.539-.222.302-.125.474-.197.474-.197L9.758 4.03c0 0-.218.052-.597.144C8.97 4.222 8.737 4.278 8.472 4.345c-.271.05-.56.187-.882.312C7.272 4.799 6.904 4.895 6.562 5.123c-.344.218-.741.4-1.091.692C5.132 6.116 4.723 6.377 4.421 6.76c-.33.358-.656.734-.909 1.162C3.219 8.33 3.02 8.778 2.81 9.221c-.19.443-.343.896-.468 1.336-.237.882-.343 1.72-.384 2.437-.034.718-.014 1.315.028 1.747.015.204.043.402.063.539.017.109.025.168.025.168l.026-.006C2.535 17.474 4.338 19 6.5 19c2.485 0 4.5-2.015 4.5-4.5S8.985 10 6.5 10zM17.5 10c-.223 0-.437.034-.65.065.069-.232.14-.468.254-.68.114-.308.292-.575.469-.844.148-.291.409-.488.601-.737.201-.242.475-.403.692-.604.213-.21.492-.315.714-.463.232-.133.434-.28.65-.35.208-.086.39-.16.539-.222.302-.125.474-.197.474-.197L20.758 4.03c0 0-.218.052-.597.144-.191.048-.424.104-.689.171-.271.05-.56.187-.882.312-.317.143-.686.238-1.028.467-.344.218-.741.4-1.091.692-.339.301-.748.562-1.05.944-.33.358-.656.734-.909 1.162C14.219 8.33 14.02 8.778 13.81 9.221c-.19.443-.343.896-.468 1.336-.237.882-.343 1.72-.384 2.437-.034.718-.014 1.315.028 1.747.015.204.043.402.063.539.017.109.025.168.025.168l.026-.006C13.535 17.474 15.338 19 17.5 19c2.485 0 4.5-2.015 4.5-4.5S19.985 10 17.5 10z"/></svg>
                        </div>
                        
                        <div class="h-full relative z-10">
                            <div x-show.immediate="testimonialActive === 1">
                                <p class="text-gray-600 serif font-normal italic px-6 py-6 md:px-16 md:py-10 text-xl md:text-2xl" x-show.transition="testimonialActive == 1">
                                    Leverage agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition. Organically grow the holistic world view of disruptive innovation via workplace diversity and empowerment.
                                </p>
                            </div>
                            
                            <div x-show.immediate="testimonialActive === 2">
                                <p class="text-gray-600 serif font-normal italic px-6 py-6 md:px-16 md:py-10 text-xl md:text-2xl" x-show.transition="testimonialActive == 2">
                                    Bring to the table win-win survival strategies to ensure proactive domination. At the end of the day, going forward, a new normal that has evolved from generation X is on the runway heading towards a streamlined cloud solution. User generated content in real-time will have multiple touchpoints for offshoring.
                                </p>
                            </div>
                            
                            <div x-show.immediate="testimonialActive === 3"> 
                                <p class="text-gray-600 serif font-normal italic px-6 py-6 md:px-16 md:py-10 text-xl md:text-2xl" x-show.transition="testimonialActive == 3">
                                    Capitalize on low hanging fruit to identify a ballpark value added activity to beta test. Override the digital divide with additional clickthroughs from DevOps. Nanotechnology immersion along the information highway will close the loop on focusing solely on the bottom line.
                                </p>
                            </div>
                        </div>

                        <div class="flex my-4 justify-center items-center">
                            <button 
                                @click.prevent="testimonialActive = 1" 
                                class="text-center font-bold shadow-xs focus:outline-none focus:shadow-outline inline-block rounded-full mx-2"
                                :class="{'h-12 w-12 opacity-25 bg-indigo-300 text-gray-600': testimonialActive != 1, 'h-16 w-16 opacity-100 bg-indigo-600 text-white': testimonialActive == 1 }"	
                            >JD</button>
                            <button 
                                @click.prevent="testimonialActive = 2" 
                                class="text-center font-bold shadow-xs focus:outline-none focus:shadow-outline h-16 w-16 inline-block bg-indigo-600 rounded-full mx-2"
                                :class="{'h-12 w-12 opacity-25 bg-indigo-300 text-gray-600': testimonialActive != 2, 'h-16 w-16 opacity-100 bg-indigo-600 text-white': testimonialActive == 2 }"	
                            >WD</button>
                            <button 
                                @click.prevent="testimonialActive = 3" 
                                class="text-center font-bold shadow-xs focus:outline-none focus:shadow-outline h-12 w-12 inline-block bg-indigo-600 rounded-full mx-2"
                                :class="{'h-12 w-12 opacity-25 bg-indigo-300 text-gray-600': testimonialActive != 3, 'h-16 w-16 opacity-100 bg-indigo-600 text-white': testimonialActive == 3 }"
                            >JW</button>
                        </div>
                        
                        <div class="flex justify-center px-6 pt-2 pb-6 md:py-6">
                            <div class="text-center" x-show="testimonialActive == 1">
                                <h2 class="text-sm md:text-base font-bold text-gray-700 leading-tight">John Doe</h2>
                                <small class="text-gray-500 text-xs md:text-sm truncate">CEO, ABC Inc.</small>
                            </div>

                            <div class="text-center" x-show="testimonialActive == 2">
                                <h2 class="text-sm md:text-base font-bold text-gray-700 leading-tight">Winter Doe</h2>
                                <small class="text-gray-500 text-xs md:text-sm truncate">CTO, XYZ Corp.</small>
                            </div>

                            <div class="text-center" x-show="testimonialActive == 3">
                                <h2 class="text-sm md:text-base font-bold text-gray-700 leading-tight">John Wick</h2>
                                <small class="text-gray-500 text-xs md:text-sm truncate">Product Manager, Fake Corp.</small>
                            </div>	 
                        </div>
                    </div>
                </div>
            </div>

            <!-- End Pricing Section -->
            <div class="px-4">
            <section class="relative py-24 px-4">
            <div class="z-20 relative text-white container mx-auto">
               
            </div>

            <!-- <div class="absolute inset-0 h-72">
                <img src="https://images.unsplash.com/photo-1585155770447-2f66e2a397b5?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=889&q=80" alt="" class="h-full w-full object-fill">
            </div> -->

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
        if(this.$page.props.flash.success == 'Order Placed Successfully. Check your email for details'){
               this.resetCart()
          }else{
          }
    },
    computed: {
      other(){
          for(var i = 0; i <= this.allProducts.length; i++) {
                return this.allProducts.filter(i=>i.category == 'Other Categories')
            }
      },  
      gardenOutdoors(){
          for(var i = 0; i <= this.allProducts.length; i++) {
                return this.allProducts.filter(i=>i.category == 'Garden & Outdoors')
            }
      },  
      sporting(){
          for(var i = 0; i <= this.allProducts.length; i++) {
                return this.allProducts.filter(i=>i.category == 'Sporting Goods')
            }
      },  
      baby(){
          for(var i = 0; i <= this.allProducts.length; i++) {
                return this.allProducts.filter(i=>i.category == 'Baby Products')
            }
      },  
      gaming(){
          for(var i = 0; i <= this.allProducts.length; i++) {
                return this.allProducts.filter(i=>i.category == 'Gaming')
            }
      },  
      fashion(){
          for(var i = 0; i <= this.allProducts.length; i++) {
                return this.allProducts.filter(i=>i.category == 'Fashion')
            }
      },  
      electronics(){
          for(var i = 0; i <= this.allProducts.length; i++) {
                return this.allProducts.filter(i=>i.category == 'Electronics')
            }
      },  
      computing(){
          for(var i = 0; i <= this.allProducts.length; i++) {
                return this.allProducts.filter(i=>i.category == 'Computing')
            }
      },  
      phonesTablets(){
          for(var i = 0; i <= this.allProducts.length; i++) {
                return this.allProducts.filter(i=>i.category == 'Phones & Tablets')
            }
      },  
      homeOffice(){
          for(var i = 0; i <= this.allProducts.length; i++) {
                return this.allProducts.filter(i=>i.category == 'Home & Office')
            }
      },  
      healthBeauty(){
          for(var i = 0; i <= this.allProducts.length; i++) {
                return this.allProducts.filter(i=>i.category == 'Health & Beauty')
            }
      },  
      supermarket(){
          for(var i = 0; i <= this.allProducts.length; i++) {
                return this.allProducts.filter(i=>i.category == 'Supermarket')
            }
      },  
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
            testimonialActive: '',
            selectedCategory:'',

            Supermartket:false,
            Health:false,
            Home:false,
            Phone:false,
            Computing:false,
            Electronics:false,
            Fashion:false,
            Gaming:false,
            Baby:false,
            Sporting:false,
            Garden:false,
            Other:false,
        }
    },
    methods: {
      setCategory(data){
          this.slecetedCategoty = ''
          this.selectedCategory = data
          console.log(this.selectedCategory)
      },  
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
    [x-cloak] { display: none; }

    .grid-indigo {
        background-image: radial-gradient(#5a67d8 2px, transparent 2px);
        background-size: 16px 16px;
    }

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