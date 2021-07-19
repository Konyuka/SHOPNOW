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
                  All Products in the Category
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
                <inertia-link :href="route('product.result', 'MacBooks')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center border-b-2 text-xs font-medium">
                  MacBooks
                </a>
                </inertia-link>
                </div> 

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'NetBooks')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  NetBooks
                </a>
                </inertia-link>
                </div> 

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'UltraBooks')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  UltraBooks
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Desktops')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Desktops
                </a>
                </inertia-link>
                </div> 

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Monitors')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Monitors
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Scanners')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Scanners
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Printers')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Printers
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Keyboards & Mice')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Keyboards & Mice
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'External Drives')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  External Drives 
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Cable & Adaptors')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Cable & Adaptors
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Networking Products')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Networking Products
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Printer Ink & Toner')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Printer Ink & Toner
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Graphic Cards')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Graphic Cards
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', '2-in-1 Laptops')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  2-in-1 Laptops
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Computer Accessorie')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Computer Accessories
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.allResult', 'Computing')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  All Products in the Category
                </a>
                </inertia-link>
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
                <inertia-link :href="route('product.result', 'Smart TVs')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center border-b-2 text-xs font-medium">
                  Smart TV's
                </a>
                </inertia-link>
                </div> 

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'LED & LCD TVs')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  LED & LCD TV's
                </a>
                </inertia-link>
                </div> 

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Data Projectors')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Data Projectors
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Music Speakers')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Music Speakers
                </a>
                </inertia-link>
                </div> 

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Home Theater')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Home Theater 
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Bluetooth Speakers')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Bluetooth Speakers
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Electronic Cables')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Electronic Cables
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Batteries')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Batteries
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Camera')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Camera
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Power Protection')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Power Protection
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'CCTV Cameras')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  CCTV Cameras
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Television Accessories')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Television Accessories
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.allResult', 'Electronics')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  All Products in Category
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
                
                </div>
            </div>
            </a>
            <!-- Fashion & Styling -->
            <a class="cursor-pointer relative group text-gray-400 hover:text-pink-700 inline-flex items-center px-2 text-xs font-medium transform transition hover:scale-125 duration-300 ease-in-out">
              Fashion
            <div class="hidden group-hover:block absolute left-0 mt-80  w-96 rounded-md shadow-lg py-1 bg-indigo-500 ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                <div class="bg-indigo-100 grid grid-cols-2">

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Dresses')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center border-b-2 text-xs font-medium">
                  Dresses
                </a>
                </inertia-link>
                </div> 

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Suits & Blazer')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Suits & Blazers
                </a>
                </inertia-link>
                </div> 

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Ankara')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Ankara
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Coats & Jackets')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Coats & Jackets
                </a>
                </inertia-link>
                </div> 

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Trousers')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Trousers
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Skirts')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Skirts
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Baby Clothing')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Baby Clothing
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Jeans')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Jeans
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Shorts')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Shorts
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Fashion Accessories')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Fashion Accessories
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Handbag & Wallets')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Handbag & Wallets
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Shirts')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Shirts
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Innerwear')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Innerwear
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Fashion Sneakers')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Fashion Sneakers
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Sunglasses & Eyewear')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Sunglasses & Eyewear
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.allResult', 'Fashion')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  All Products in Category
                </a>
                </inertia-link>
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
                <inertia-link :href="route('product.result', 'Cooking Ingredients')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center border-b-2 text-xs font-medium">
                  Cooking Ingredients
                </a>
                </inertia-link>
                </div> 

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Snacks')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Snacks
                </a>
                </inertia-link>
                </div> 

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Grains & Rice')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Grains & Rice
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Sugar & Flour')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Sugar & Flour
                </a>
                </inertia-link>
                </div> 

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Breakfast Cereals')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Breakfast Cereals
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Candy & Chocolate')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Candy & Chocolate
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Margarine, Jam & Spreads')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Margarine, Jam & Spreads
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Alcoholic Drinks')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Alcoholic Drinks
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Non Alcoholic Drinks')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Non Alcoholic Drinks
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Beverages')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Beverages
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Water')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Water
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Cleaning Products')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Cleaning Products
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Papers & Rolls')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Papers & Rolls
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Bulb & Batteries')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Bulb & Batteries
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Dairy')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Dairy
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.allResult', 'Supermarket')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  All Products in Category
                </a>
                </inertia-link>
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
                <inertia-link :href="route('product.result', 'Diapers')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center border-b-2 text-xs font-medium">
                  Diapers
                </a>
                </inertia-link>
                </div> 

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Walkers')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Walkers
                </a>
                </inertia-link>
                </div> 

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Backpack & Carriers')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Backpack & Carriers
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Swings, Jumpers & Bouncers')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Swings, Jumpers & Bouncers
                </a>
                </inertia-link>
                </div> 

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Toys')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Toys
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Bathing & Skin Care')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Bathing & Skin Care
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Apparels & Accessories')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Apparels & Accessories
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Music & Sound')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Music & Sound
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Feeding')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Feeding 
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Health & Baby Care')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Health & Baby Care
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Potty Training')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Potty Training
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Baby Safety')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Baby Safety
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.allResult', 'Baby')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  All Prodcuts in Category
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
                
                </div>
            </div>
            </a>
            <!-- Business Management  -->
            <a class="cursor-pointer relative group text-gray-400 hover:text-pink-700 inline-flex items-center px-2 text-xs font-medium transform transition hover:scale-125 duration-300 ease-in-out">
              Sporting
            <div class="hidden group-hover:block absolute right-0 mt-80  w-96 rounded-md shadow-lg py-1 bg-indigo-500 ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                <div class="bg-indigo-100 grid grid-cols-2">

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Excercise & Fitness')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center border-b-2 text-xs font-medium">
                  Excercise & Fitness
                </a>
                </inertia-link>
                </div> 

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Accessories')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Accessories
                </a>
                </inertia-link>
                </div> 

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Clothing')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Clothing
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Team Sports')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Team Sports
                </a>
                </inertia-link>
                </div> 

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Supplementaries')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Supplementaries
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Camping & Hiking')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Camping & Hiking
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Skate board & Scooters')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Skate board & Scooters
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Cycling')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Cycling 
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Accesories')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Accesories 
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.allResult', 'Sporting')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  All Products in Category
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
            <!-- Event Organization -->
            <a class="cursor-pointer relative group text-gray-400 hover:text-pink-700 inline-flex items-center px-2 text-xs font-medium transform transition hover:scale-125 duration-300 ease-in-out">
              Health & Beauty
            <div class="hidden group-hover:block absolute right-0 mt-80  w-96 rounded-md shadow-lg py-1 bg-indigo-500 ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                <div class="bg-indigo-100 grid grid-cols-2">

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Fragrances')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center border-b-2 text-xs font-medium">
                  Fragrances
                </a>
                </inertia-link>
                </div> 

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Hair Products')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Hair Products
                </a>
                </inertia-link>
                </div> 

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Make Up')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Make Up
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Skin Care')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Skin Care
                </a>
                </inertia-link>
                </div> 

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Oral Care')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Oral care
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Bathing Accessories')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Bathing Accessories
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Mens Grooming')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Men's Grooming 
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Health Care & Drugs')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Health Care & Drugs
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.allResult', 'Health & Beauty')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  All Products in Category
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
                <inertia-link :href="route('product.result', 'Hand Tools')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center border-b-2 text-xs font-medium">
                  Hand Tools 
                </a>
                </inertia-link>
                </div> 

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Watering Equipment')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Watering Equipment 
                </a>
                </inertia-link>
                </div> 

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Grills')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Grills
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Outdoor Cooking & Accessories')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Outdoor Cooking & Accessories
                </a>
                </inertia-link>
                </div> 

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Lighting')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Lighting
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Tables')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Tables 
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Patio Seating')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Patio Seating 
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Pest Control')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Pest Control  
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Hammock & Stands')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Hammock & Stands 
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.allResult', 'Outdoor')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  All Products in Category
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
            <!-- Brand Management -->
            <a class="cursor-pointer relative group text-gray-400 hover:text-pink-700 inline-flex items-center px-2 text-xs font-medium transform transition hover:scale-125 duration-300 ease-in-out">
              Home & Office
            <div class="hidden group-hover:block absolute right-0 mt-80  w-96 rounded-md shadow-lg py-1 bg-indigo-500 ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                <div class="bg-indigo-100 grid grid-cols-2">

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Home Decor')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center border-b-2 text-xs font-medium">
                  Home Decor
                </a>
                </inertia-link>
                </div> 

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Bedding')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Bedding
                </a>
                </inertia-link>
                </div> 

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Wall Art')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Wall Art 
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Lighting')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Lighting 
                </a>
                </inertia-link>
                </div> 

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Storage & Organization')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Storage & Organization 
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Furniture')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Furniture 
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Kitchen Dining')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Kitchen Dining 
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Office Electornics')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Office Electornics 
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Stationery')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Stationery 
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Cookers')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Cookers 
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Microwaves & Ovens')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Microwaves & Ovens
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Refrigerators')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Refrigerators
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Laundy Electronics')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Laundy Electronics
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Water Dispensers & Coolers')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Water Dispensers & Coolers 
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Kitchen Elecronic')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Kitchen Elecronic
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.allResult', 'Home & Office')">
                
                </inertia-link>
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
                <inertia-link :href="route('product.result', 'Books')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center border-b-2 text-xs font-medium">
                  Books
                </a>
                </inertia-link>
                </div> 

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Movies & Music')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Movies & Music
                </a>
                </inertia-link>
                </div> 

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Automobile')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Automobile 
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Toys and Gaming')">
                
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Toys and Gaming
                </a>
                </inertia-link>
                </div> 

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Groceries')">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Groceries
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Music Instruments')">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Music Instruments 
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Pet Supplies')">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Pet Supplies 
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Livestock')">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Livestock
                </a>
                </inertia-link>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Industrial & Scientific')">
                
                </inertia-link>
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Industrial & Scientific 
                </a>
                </div>

                <div class="py-2 px-4">
                <inertia-link :href="route('product.result', 'Services')">
                <a href="#" class="border-transparent text-gray-500 hover:border-indigo-500 hover:text-gray-700 inline-flex items-center  border-b-2 text-xs font-medium">
                  Services 
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
