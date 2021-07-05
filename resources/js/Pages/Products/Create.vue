<template>
    <div>
        <div class="mt-2 p-5">
                            
            <form  @submit.prevent="store">
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">

                <div class="-mx-3 md:flex mb-2">
                <div class="md:w-full px-3 mb-6 md:mb-0">
                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="location">
                    Product Type  <span class="text-red-600 text-xl">*</span>
                    </label>
                    <div>
                    <select v-model="form.type" class="w-full bg-gray-200 border border-gray-200 text-black text-xs py-3 px-4 pr-8 mb-3 rounded" id="location">
                        <option value="automobile">Automobile</option>
                        <option value="baby">Baby Products</option>
                        <option value="books">Books, Movies and Music</option>
                        <option value="computing">Computing</option>
                        <option value="electronics">Electronics</option>
                        <option value="fashion">Fashion</option>
                        <option value="gaming">Gaming</option>
                        <option value="gardening &amp; outdoor">Garden &amp; Outdoors</option>
                        <option value="health &amp; beauty">Health &amp; Beauty</option>
                        <option value="home &amp; office">Home &amp; Office</option>
                        <option value="industrial &amp; scientific">Industrial &amp; Scientific</option>
                        <option value="livestock">Livestock</option>
                        <option value="musical instruments">Musical Instruments</option>
                        <option value="pet supplies">Pet Supplies</option>
                        <option value="phones &amp; tablets">Phones &amp; Tablets</option>
                        <option value="sporting goods">Sporting Goods</option>
                        <option value="toys &amp; games">Toys &amp; Games</option>
                    </select>
                    </div>
                </div>
                </div>

                <div class="-mx-3 md:flex mb-6">
                <div class="md:w-full px-3 mb-6 md:mb-0">
                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="company">
                    Product Title  <span class="text-red-600 text-xl">*</span>
                    </label>
                    <input v-model="form.title" class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="title" type="text" placeholder="Netboard">
                    <div>
                    </div>
                </div>
                </div>

                
                <div class="-mx-3 md:flex mb-6">
                <div class="md:w-full px-3">
                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                    Product Price*
                    </label>
                    <input v-model="form.price" class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="application-link" type="number" placeholder="Kshs. 5,000">
                </div>
                </div>

                <div class="-mx-3 md:flex mb-2">
                <div class="md:w-full px-3 mb-6 md:mb-0">
                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="location">
                    Product Description <span class="text-red-600 text-xl">*</span>
                    </label>
                    <textarea v-model="form.description" class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3 text-xs" rows="6" placeholder="Brief description about the product"></textarea>
                </div>
                </div>

                <button type="submit" class="mt-3 w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-500 text-base font-medium text-white hover:bg-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                    Save Product
                </button>
                
            </div>
            </form>

        </div>
    </div>
</template>

<script>
import Layout from '../Dashboard'

export default {
    metaInfo: { title: 'Create Organization' },
    name:'Product_Create',
    layout: Layout,
    data () {
        return {
            form: this.$inertia.form({
                type: '',
                title: '',
                price: '',
                description: '',
            }),
        }
    },
    methods: {
        store() {
            this.form.post(this.route('products.store'))
        },
    }

}
</script>