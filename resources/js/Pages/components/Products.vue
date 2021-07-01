<template>
<div>
    <div>
        <main class="w-full flex-grow p-6">
            <h1 class="text-3xl text-black">Products</h1>
            <button @click="productModal = true" class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-blue-600 hover:text-white flex items-center justify-center">
                <i class="fas fa-plus mr-3"></i> Add Product
            </button>

            <div class="w-full mt-4">
                <div class="grid grid-cols-4 py-4 max-w-full">
                    <button class="py-3 px-2 bg-black text-white font-bold w-auto sm:w-32 mr-2 text-xs sm:text-lg">
                        All
                    </button>
                    <button class="py-3 px-2 bg-blue-500 hover:bg-black text-white font-bold w-auto sm:w-32 mr-2 text-xs sm:text-lg">
                        Published
                    </button>
                    <button class="py-3 px-2 bg-blue-500 hover:bg-black text-white font-bold w-auto sm:w-32 mr-2 text-xs sm:text-lg">
                        Drafts
                    </button>
                    <button class="py-3 px-2 bg-blue-500 hover:bg-black text-white font-bold w-auto sm:w-32 text-xs sm:text-lg">
                        Archived
                    </button>
                </div>    

                <p class="text-xl pb-3 flex items-center">
                    <i class="fas fa-list mr-3"></i> Added Products Table
                </p>
                <div class="bg-white overflow-auto">
                    <table class="min-w-full bg-white">
                        <thead class="bg-gray-800 text-white">
                            <tr>
                                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Title</th>
                                <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Vendor</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Price</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Type</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Added</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Actions</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Status</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            <tr>
                                <td class="w-1/3 text-left py-3 px-4">Fanny Pack</td>
                                <td class="w-1/3 text-left py-3 px-4">Adidas</td>
                                <td class="w-1/3 text-left py-3 px-4">Kshs. 3,800</td>
                                <td class="w-1/3 text-left py-3 px-4">Accessories</td>
                                <td class="w-1/3 text-left py-3 px-4">17/5/2021</td>
                                <td class="text-left py-3 px-4">
                                    <span class="flex flex-row justify-around">
                                    <a href="" class="mr-5"> <i class="fas fa-edit mr-3 text-green-600"></i> Edit </a>   
                                    <a href=""> <i class="fas fa-trash mr-3 text-red-600"></i> Delete </a> 
                                    </span>
                                    <!-- <a class="hover:text-blue-500" href="maiActionsnsmith@mail.com"></a> -->

                                </td>
                                <td class="text-left py-3 px-4"><a class="hover:text-green-500 text-red-500 italic" href="telActions2662">Draft</a></td>
                            </tr>
                            <tr class="bg-gray-200">
                                <td class="w-1/3 text-left py-3 px-4">Triple A Batteries</td>
                                <td class="w-1/3 text-left py-3 px-4">Duracell</td>
                                <td class="w-1/3 text-left py-3 px-4">Kshs. 80</td>
                                <td class="w-1/3 text-left py-3 px-4">Hardware</td>
                                <td class="w-1/3 text-left py-3 px-4">18/3/2021</td>
                                <td class="text-left py-3 px-4">
                                    <span class="flex flex-row justify-around">
                                    <a href="" class="mr-5"> <i class="fas fa-edit mr-3 text-green-600"></i> Edit </a>   
                                    <a href=""> <i class="fas fa-trash mr-3 text-red-600"></i> Delete </a> 
                                    </span>
                                    <!-- <a class="hover:text-blue-500" href="maiActionsnsmith@mail.com"></a> -->

                                </td>
                                <td class="text-left py-3 px-4"><a class="hover:text-red-500 text-green-500 italic" href="telActions2662">Published</a></td>
                            </tr>
                            <tr>
                                <td class="w-1/3 text-left py-3 px-4">Cotten Bedsheets</td>
                                <td class="w-1/3 text-left py-3 px-4">Toronto Inc.</td>
                                <td class="w-1/3 text-left py-3 px-4">Kshs. 2,200</td>
                                <td class="w-1/3 text-left py-3 px-4">Beddings</td>
                                <td class="w-1/3 text-left py-3 px-4">7/8/2020</td>
                                <td class="text-left py-3 px-4">
                                    <span class="flex flex-row justify-around">
                                    <a href="" class="mr-5"> <i class="fas fa-edit mr-3 text-green-600"></i> Edit </a>   
                                    <a href=""> <i class="fas fa-trash mr-3 text-red-600"></i> Delete </a> 
                                    </span>
                                    <!-- <a class="hover:text-blue-500" href="maiActionsnsmith@mail.com"></a> -->

                                </td>
                                <td class="text-left py-3 px-4"><a class="hover:text-red-500 text-green-500 italic" href="telActions2662">Published</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>


            <!-- Add Product Modal -->
            <div v-if="productModal" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
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
                    <div class="sm:flex sm:items-start">
                    <div class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-green-100 sm:mx-0 sm:h-10 sm:w-10">
                        <!-- Heroicon name: outline/exclamation -->
                        <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"></path></svg>
                    </div>
                    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                        <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                        Adding a Product
                        </h3>
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
                                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="title">
                                    Product Vendor <span class="text-red-600 text-xl">*</span>
                                    </label>
                                    <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="title" type="text" placeholder="Jamia Cartel">
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
                                    Product Type  <span class="text-red-600 text-xl">*</span>
                                    </label>
                                    <div>
                                    <select class="w-full bg-gray-200 border border-gray-200 text-black text-xs py-3 px-4 pr-8 mb-3 rounded" id="location">
                                        <option>Tshirt</option>
                                        <option>Trouser</option>
                                        <option>Blouse</option>
                                    </select>
                                    </div>
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
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Save Product
                    </button>
                    <button @click="productModal = false" type="button" class="mt-3 w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Cancel
                    </button>
                </div>
                </div>
            </div>
            </div>


        </main>

        


    </div>
</div>
</template>

<script>
export default {
    name:"Products",
    data () {
        return {
            productModal:false,
        }
    },
    methods: {
        saveProduct(){
            alert("Saved")
        }
    }
    
}
</script>

<style scoped>

</style>