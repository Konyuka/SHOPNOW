<template>
    <div>
        <div class="mt-2">
                            
            <form>
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">

                <div class="-mx-3 md:flex mb-2">
                <div class="md:w-full px-3 mb-6 md:mb-0">
                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="location">
                    Product Type  <span class="text-red-600 text-xl">*</span>
                    </label>
                    <div>
                    <select class="w-full bg-gray-200 border border-gray-200 text-black text-xs py-3 px-4 pr-8 mb-3 rounded" id="location">
                        <option>Automobile</option>
                        <option>Baby Products</option>
                        <option>Books, Movies and Music</option>
                        <option>Computing</option>
                        <option>Electronics</option>
                        <option>Fashion</option>
                        <option>Gaming</option>
                        <option>Garden &amp; Outdoors</option>
                        <option>Health &amp; Beauty</option>
                        <option>Home &amp; Office</option>
                        <option>Industrial &amp; Scientific</option>
                        <option>Livestock</option>
                        <option>Musical Instruments</option>
                        <option>Pet Supplies</option>
                        <option>Phones &amp; Tablets</option>
                        <option>Sporting Goods</option>
                        <option>Toys &amp; Games</option>
                    </select>
                    </div>
                </div>
                </div>

                <div class="-mx-3 md:flex mb-6">
                <div class="md:w-full px-3 mb-6 md:mb-0">
                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="company">
                    Product Title  <span class="text-red-600 text-xl">*</span>
                    </label>
                    <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="company" type="text" placeholder="Netboard">
                    <div>
                    <!-- <span class="text-red-500 text-xs italic">
                        Please fill out this field.
                    </span> -->
                    </div>
                </div>
                </div>

                
                <div class="-mx-3 md:flex mb-6">
                <div class="md:w-full px-3">
                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                    Product Price*
                    </label>
                    <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="application-link" type="number" placeholder="Kshs. 5,000">
                </div>
                </div>

                <div class="-mx-3 md:flex mb-2">
                <div class="md:w-full px-3 mb-6 md:mb-0">
                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="location">
                    Product Description <span class="text-red-600 text-xl">*</span>
                    </label>
                    <textarea class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3 text-xs" rows="6" placeholder="Brief description about the product"></textarea>
                </div>
                </div>
                
            </div>
            </form>

        </div>
    </div>
</template>