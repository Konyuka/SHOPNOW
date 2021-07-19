<template>
  <div>
  <nav class="bg-gray-50 shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-center h-12">
        <div class="flex">
          <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
            <!-- Music & Audio -->
            <a class="cursor-pointer relative group text-gray-400 hover:text-pink-700 inline-flex items-center px-2 text-xs font-medium transform transition hover:scale-125 duration-300 ease-in-out">
              Phones
            <div class="transform transition duration-700 ease-in-out hidden group-hover:block absolute left-0 mt-80 w-96 rounded-md shadow-lg py-1 bg-indigo-500 ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                <div class="bg-indigo-100 grid grid-cols-2">

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Samsung')">  
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center border-b-2 text-xs font-medium">
                  Samsung
                </a>
                </inertia-link>  
                </div> 

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Iphone')">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Iphone
                </a>
                </inertia-link>  
                </div> 

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Tecno')">

                </inertia-link>  
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Tecno
                </a>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Xiaomi')">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Xiaomi
                </a>
                </inertia-link>   
                </div> 

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Huawei')">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Huawei
                </a>
                </inertia-link>   
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Tecno')">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Tecno
                </a>
                </inertia-link>   
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Oppo')">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Oppo
                </a>
                </inertia-link>   
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Nokia')">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Nokia
                </a>
                </inertia-link>   
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Accessories')">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Phone Accessories
                </a>
                </inertia-link>   
                </div>

                 <div class="py-2 px-4">
                <inertia-link :href="route('product.allResult', 'Phones')">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  More Products in the Category
                </a>
                </inertia-link>    
                </div>

                 <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                </a>
                </div>

                 <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                </a>
                </div>

                 <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                   
                </a>
                </div>

                 <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                </a>
                </div>

                 <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                </a>
                </div>

                </div>
            </div>
            </a>
            <!-- Video & Animation -->
            <a class="cursor-pointer relative group text-gray-400 hover:text-pink-700 inline-flex items-center px-2 text-xs font-medium transform transition hover:scale-125 duration-300 ease-in-out">
              Computing
            <div class="hidden group-hover:block absolute left-0 mt-80  w-96 rounded-md shadow-lg py-1 bg-indigo-500 ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                <div class="bg-indigo-100 grid grid-cols-2">

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center border-b-2 text-xs font-medium">
                  MacBooks
                </a>
                </div> 

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  NetBooks
                </a>
                </div> 

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  UltrBooks
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Desktops
                </a>
                </div> 

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Monitors
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Scanners
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Printers
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Keyboards & Mice
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  External Drives 
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Cable & Adaptors
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Networking Products
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Printer Ink & Toner
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Graphic Cards
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  2-in-1 Laptops
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Computer Accessories
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  All Products in the Category
                </a>
                </div>
                
                </div>
            </div>
            </a>
            <!-- Digital Marketing -->
            <a class="cursor-pointer relative group text-gray-400 hover:text-pink-700 inline-flex items-center px-2 text-xs font-medium transform transition hover:scale-125 duration-300 ease-in-out">
              Electronics
            <div class="hidden group-hover:block absolute left-0 mt-80  w-96 rounded-md shadow-lg py-1 bg-indigo-500 ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                <div class="bg-indigo-100 grid grid-cols-2">

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center border-b-2 text-xs font-medium">
                  Smart TV's
                </a>
                </div> 

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  LED & LCD TV's
                </a>
                </div> 

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Data Projectors
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Music Speakers
                </a>
                </div> 

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Home Theater 
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Bluetooth Speakers
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Electronic Cables
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Batteries
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Camera
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Power Protection
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  CCTV Cameras
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Television Accessories
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  More Products in Category
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  
                </a>
                </div>
                
                </div>
            </div>
            </a>
            <!-- Fashion & Styling -->
            <a class="cursor-pointer relative group text-gray-400 hover:text-pink-700 inline-flex items-center px-2 text-xs font-medium transform transition hover:scale-125 duration-300 ease-in-out">
              Fashion
            <div class="hidden group-hover:block absolute left-0 mt-80  w-96 rounded-md shadow-lg py-1 bg-indigo-500 ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                <div class="bg-indigo-100 grid grid-cols-2">

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center border-b-2 text-xs font-medium">
                  Dresses
                </a>
                </div> 

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Suits & Blazers
                </a>
                </div> 

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Ankara
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Coats & Jackets
                </a>
                </div> 

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Trousers
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Skirts
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Baby Clothing
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Jeans
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Shorts
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Fashion Accessories
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Handbag & Wallets
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Shirts
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Innerwear
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Fashion Sneakers
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Sunglasses & Eyewear
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  More Products in Category
                </a>
                </div>
                
                </div>
            </div>
            </a>
            <!-- Brand Management -->
            <a class="cursor-pointer relative group text-gray-400 hover:text-pink-700 inline-flex items-center px-2 text-xs font-medium transform transition hover:scale-125 duration-300 ease-in-out">
              Supermarket
            <div class="hidden group-hover:block absolute right-0 mt-80  w-96 rounded-md shadow-lg py-1 bg-indigo-500 ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                <div class="bg-indigo-100 grid grid-cols-2">

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center border-b-2 text-xs font-medium">
                  Cooking Ingredients
                </a>
                </div> 

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Snacks
                </a>
                </div> 

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Grains & Rice
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Sugar & Flour
                </a>
                </div> 

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Breakfast Cereals
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Candy & Chocolate
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Margarine, Jam & Spreads
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Alcoholic Drinks
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Non Alcoholic Drinks
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Beverages
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Water
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Cleaning Products
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Papers & Rolls
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Bulb & Batteries
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Dairy
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  More Products in Category
                </a>
                </div>
                
                </div>
            </div>
            </a>
            <!-- Content & Lyrics -->
            <a class="cursor-pointer relative group text-gray-400 hover:text-pink-700 inline-flex items-center px-2 text-xs font-medium transform transition hover:scale-125 duration-300 ease-in-out">
              Baby
            <div class="hidden group-hover:block absolute right-0 mt-80  w-96 rounded-md shadow-lg py-1 bg-indigo-500 ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                <div class="bg-indigo-100 grid grid-cols-2">

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center border-b-2 text-xs font-medium">
                  Diapers
                </a>
                </div> 

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Walkers
                </a>
                </div> 

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Backpack & Carriers
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Swings, Jumpers & Bouncers
                </a>
                </div> 

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Toys
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Bathing & Skin Care
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Apparels & Accessories
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Music & Sound
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Feeding 
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Health & Baby Care
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Potty Training
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Baby Safety
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  More Prodcuts in Category
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  
                </a>
                </div>
                
                </div>
            </div>
            </a>
            <!-- Business Management  -->
            <a class="cursor-pointer relative group text-gray-400 hover:text-pink-700 inline-flex items-center px-2 text-xs font-medium transform transition hover:scale-125 duration-300 ease-in-out">
              Sporting
            <div class="hidden group-hover:block absolute right-0 mt-80  w-96 rounded-md shadow-lg py-1 bg-indigo-500 ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                <div class="bg-indigo-100 grid grid-cols-2">

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center border-b-2 text-xs font-medium">
                  Excercise & Fitness
                </a>
                </div> 

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Accessories
                </a>
                </div> 

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Clothing
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Team Sports
                </a>
                </div> 

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Supplementaries
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Camping & Hiking
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Skate board & Scooters
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Cycling 
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Accesories 
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  More Products in Category
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                 
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                 
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  
                </a>
                </div>
                
                </div>
            </div>
            </a>
            <!-- Event Organization -->
            <a class="cursor-pointer relative group text-gray-400 hover:text-pink-700 inline-flex items-center px-2 text-xs font-medium transform transition hover:scale-125 duration-300 ease-in-out">
              Health & Beauty
            <div class="hidden group-hover:block absolute right-0 mt-80  w-96 rounded-md shadow-lg py-1 bg-indigo-500 ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                <div class="bg-indigo-100 grid grid-cols-2">

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center border-b-2 text-xs font-medium">
                  Fragrances
                </a>
                </div> 

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Hair Products
                </a>
                </div> 

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Make Up
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Skin Care
                </a>
                </div> 

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Oral care
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Bathing Accessories
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Men's Grooming 
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Health Care & Drugs
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  More Products in Category
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                 
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  
                </a>
                </div>
                
                </div>
            </div>
            </a>
            <!-- Event Organization -->
            <a class="cursor-pointer relative group text-gray-400 hover:text-pink-700 inline-flex items-center px-2 text-xs font-medium transform transition hover:scale-125 duration-300 ease-in-out">
              Outdoor
            <div class="hidden group-hover:block absolute right-0 mt-80  w-96 rounded-md shadow-lg py-1 bg-indigo-500 ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                <div class="bg-indigo-100 grid grid-cols-2">

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center border-b-2 text-xs font-medium">
                  Hand Tools 
                </a>
                </div> 

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Watering Equipment 
                </a>
                </div> 

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Grills
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Outdoor Cooking & Accessories
                </a>
                </div> 

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Lighting
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Tables 
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Patio Seating 
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Pest Control  
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Hammock & Stands 
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  All Products in Category
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                </a>
                </div>
                
                </div>
            </div>
            </a>
            <!-- Brand Management -->
            <a class="cursor-pointer relative group text-gray-400 hover:text-pink-700 inline-flex items-center px-2 text-xs font-medium transform transition hover:scale-125 duration-300 ease-in-out">
              Home & Office
            <div class="hidden group-hover:block absolute right-0 mt-80  w-96 rounded-md shadow-lg py-1 bg-indigo-500 ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                <div class="bg-indigo-100 grid grid-cols-2">

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center border-b-2 text-xs font-medium">
                  Home Decor
                </a>
                </div> 

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Bedding
                </a>
                </div> 

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Wall Art 
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Lighting 
                </a>
                </div> 

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Storage & Organization 
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Furniture 
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Kitchen Dining 
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Office Electornics 
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Stationery 
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Cookers 
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Microwaves & Ovens
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Refrigerators
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Laundy Electronics
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Water Dispensers & Coolers 
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Kitchen Elecronic
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  All Products in Category
                </a>
                </div>
                
                </div>
            </div>
            </a>
            <!-- Event Organization -->
            <a class="cursor-pointer relative group text-gray-400 hover:text-pink-700 inline-flex items-center px-2 text-xs font-medium transform transition hover:scale-125 duration-300 ease-in-out">
              Other Categories
            <div class="hidden group-hover:block absolute right-0 mt-80  w-96 rounded-md shadow-lg py-1 bg-indigo-500 ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                <div class="bg-indigo-100 grid grid-cols-2">

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center border-b-2 text-xs font-medium">
                  Books
                </a>
                </div> 

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Movies & Music
                </a>
                </div> 

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Automobile 
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Toys and Gaming
                </a>
                </div> 

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Groceries
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Music Instruments 
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Pet Supplies 
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Livestock
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Industrial & Scientific 
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Services 
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                </a>
                </div>

                <div class="py-2 px-4">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                </a>
                </div>
                
                </div>
            </div>
            </a>
          </div>
        </div>
        
        <div class="-mr-2 flex items-center sm:hidden">
          <!-- Mobile menu button -->
          <button class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <!-- Icon when menu is closed. -->
            <!--
              Heroicon name: menu

              Menu open: "hidden", Menu closed: "block"
            -->
            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <!-- Icon when menu is open. -->
            <!--
              Heroicon name: x

              Menu open: "block", Menu closed: "hidden"
            -->
            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>

      </div>
    </div>

    <!--
      Mobile menu, toggle classes based on menu state.

      Menu open: "block", Menu closed: "hidden"
    -->
    <div class="hidden sm:hidden">
      <div class="pt-2 pb-3 space-y-1">
        <!-- Current: "bg-indigo-50 border-indigo-500 text-pink-700", Default: "border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700" -->
        <a href="#" class="bg-indigo-50 border-indigo-500 text-pink-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Dashboard</a>
        <a href="#" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Team</a>
        <a href="#" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Projects</a>
        <a href="#" class="border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Calendar</a>
      </div>
      <div class="pt-4 pb-3 border-t border-gray-200">
        <div class="flex items-center px-4">
          <div class="flex-shrink-0">
            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
          </div>
          <div class="ml-3">
            <div class="text-base font-medium text-gray-800">Tom Cook</div>
            <div class="text-sm font-medium text-gray-500">tom@example.com</div>
          </div>
          <button class="ml-auto flex-shrink-0 bg-white p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <span class="sr-only">View notifications</span>
            <!-- Heroicon name: bell -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
            </svg>
          </button>
        </div>
        <div class="mt-3 space-y-1">
          <a href="#" class="block px-4 py-2 text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100">Your Profile</a>
          <a href="#" class="block px-4 py-2 text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100">Settings</a>
          <a href="#" class="block px-4 py-2 text-base font-medium text-gray-500 hover:text-gray-800 hover:bg-gray-100">Sign out</a>
        </div>
      </div>
    </div>
  </nav>

  </div>
</template>

<script>
export default {
  name: 'SubNav',
  data(){
    return{
      music: false,
    }
  }
  
}
</script>

<style scoped>

</style>
