<template>
<div>
    <div>
        <main class="w-full flex-grow p-6">
            <h1 class="text-3xl text-black">Products</h1>
            <inertia-link :href="route('products.create')">
            <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-blue-600 hover:text-white flex items-center justify-center">
                <i class="fas fa-plus mr-3"></i> Add Product
            </button>
            </inertia-link>

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
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Title</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Type</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Price</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Date Added</th>
                                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            <tr v-for="product in products" :key="product._id">
                                <td class="w-1/4 text-left py-3 px-4">{{ product.title }}</td>
                                <td class="w-1/4 text-left py-3 px-4">{{ product.subCategory }}</td>
                                <td class="w-1/4 text-left py-3 px-4">{{ product.price }}</td>
                                <td class="w-1/4 text-left py-3 px-4">{{ product.created_at }}</td>
                                <td class="text-left py-3 px-4">
                                    <span class="flex flex-row justify-around">
                                    <inertia-link :href="route('products.edit', product._id)">
                                    <a href="" class="mr-5"> <i class="fas fa-edit mr-3 text-green-600"></i> Edit </a>   
                                    </inertia-link>    
                                    <inertia-link :href="route('products.destroy', product._id)">
                                    <a href=""> <i class="fas fa-trash mr-3 text-red-600"></i> Delete </a> 
                                    </inertia-link>    
                                    </span>
                                    <!-- <a class="hover:text-blue-500" href="maiActionsnsmith@mail.com"></a> -->

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </main>
    </div>
</div>
</template>

<script>
import Layout from '../Dashboard'

export default {
    name:"Products",
    layout: Layout,
    props: {
        // filters: Object,
        products: Array,
    },
    data () {
        return {
            productModal:false,
        }
    },
    methods: {
        saveProduct(){
            alert("Saved")
        },
        edit(){

        },
    }
    
}
</script>

<style scoped>

</style>