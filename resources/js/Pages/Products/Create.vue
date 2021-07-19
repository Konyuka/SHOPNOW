<template>
    <div>
        <div class="mt-2 p-5">
                            
            <form  @submit.prevent="store">
            <div class="grid grid-cols-2 gap-2 max-w-full m-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">

                <div class="col-span-2 lg:col-span-1">
                <div class="md:w-full px-3 mb-6 md:mb-0">
                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="location">
                    Product Category  <span class="text-red-600 text-xl">*</span>
                    </label>
                    <div>
                    <select v-model="selectedCategory" @change="selectCategory" class="w-full bg-gray-200 border border-gray-200 text-black text-xs py-3 px-4 pr-8 mb-3 rounded" id="location">
                        <option v-for="(category, index) in categories" :key="index" :value="index">{{ category.label }}</option>
                    </select>
                    </div>
                </div>
                </div>

                <div class="col-span-2 lg:col-span-1">
                <div class="md:w-full px-3 mb-6 md:mb-0">
                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="location">
                    Sub Categories in {{ selectedCategoryLabel }}  <span class="text-red-600 text-xl">*</span>
                    </label>
                    <div>
                    <select v-model="selectedOption" @change="selectOption" class="w-full bg-gray-200 border border-gray-200 text-black text-xs py-3 px-4 pr-8 mb-3 rounded" id="location">
                        <option v-for="option in options" :key="option">{{ option }}</option>
                    </select>
                    </div>
                </div>
                </div>

                <div class="col-span-2 lg:col-span-1">
                <div class="md:w-full px-3 mb-6 md:mb-0">
                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="company">
                    Product Title  <span class="text-red-600 text-xl">*</span>
                    </label>
                    <input v-model="form.title" class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="title" type="text" placeholder="Netboard">
                    <div>
                    </div>
                </div>
                </div>

                
                <div class="col-span-2 lg:col-span-1">
                <div class="md:w-full px-3">
                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                    Product Price <span class="text-red-600 text-xl">*</span>
                    </label>
                    <input v-model="form.price" class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="application-link" type="number" placeholder="Kshs. 5,000">
                </div>
                </div>

                <div class="col-span-2 lg:col-span-1">
                <div class="md:w-full px-3 mb-6 md:mb-0">
                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="location">
                    Product Description <span class="text-red-600 text-xl">*</span>
                    </label>
                    <textarea v-model="form.description" class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3 text-xs" rows="9" placeholder="Brief description about the product"></textarea>
                </div>
                </div>

                <div class="md:mt-7 w-full col-span-2 lg:col-span-1">
                    <div class="relative h-40 rounded-lg border-dashed border-2 border-gray-200 bg-white flex justify-center items-center hover:cursor-pointer">
                        <div class="absolute">
                            <div class="flex flex-col items-center "> <i class="fa fa-cloud-upload-alt fa-3x text-gray-200"></i> <span class="block text-gray-400 font-normal px-2 lg:text-md text-xs">Upload you ID/Passport For Verification</span> <span class="block text-blue-400 font-normal">Browse files</span> </div>
                        </div> <input @change="previewMultiImage" multiple="multiple" accept="image/*" id="my-file" type="file" class="h-full w-full opacity-0" name="">
                    </div>
                    <div class="text-xs sm:text-md flex justify-between items-center text-gray-400"> <span>Accepted file type: .jpg .png .pdf </span> <span class="flex items-center "><i class="fa fa-lock mr-1"></i> First Image uploaded will be the thumbnail</span> </div>
                </div>

                <div class="hidden lg:block">

                </div>

                <div v-if="preview_list.length" class="col-span-2 lg:col-span-1 flex justify-around mt-6">
                    <div v-for="item, index in preview_list" :key="index" class="flex ml-0">
                        <img class="h-20 w-20 object-cover rounded" :src="item" alt="">
                    </div>
                </div>

            </div>

            

            
            <button type="submit" class="mt-3 w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-500 text-base font-medium text-white hover:bg-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                Save Product
            </button>

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

            selectedCategory: '',
            selectedOption: '',
            options: [],
            selectedCategoryLabel: '',
            selectedCategory: '',
            selectedOption: '',
            categories: [
                {
                  label: "Phones",
                  options: ["Samsung", "Iphone", "Tecno", "Xiaomi", "Huawei", "Techno", "Oppo", "Nokia", "Accessories"]
                },
                {
                  label: "Computing",
                  options: ["MacBooks", "NetBooks", "UltrBooks", "Desktops", "Monitors", "Scanners", "Printers", "Keyboards & Mice", "External Drives", "Cable & Adaptors", "Networking Products", "Printer Ink & Toner", "Graphic Cards", "2-in-1 Laptops", "Computer Accessories"]
                },
                {
                  label: "Electronics",
                  options: ["Smart TV's", "LED & LCD TV's", "Data Projectors", "Music Speakers", "Home Theater", "Bluetooth Speakers", "Electronic Cables", "Camera", "Power Protection", "CCTV Cameras", "Television Accessories"]
                },
                {
                  label: "Fashion",
                  options: ["Dresses", "Suits & Blazers", "Ankara", "Coats & Jackets", "Trousers", "Skirts", "Baby Clothing", "Jeans", "Shorts", "Fashion Accessories", "Handbag & Wallets", "Shirts", "Innerwear", "Fashion Sneakers", "Sunglasses & Eyewear"]
                },
                {
                  label: "Supermarket",
                  options: ["Cooking Ingredients", "Snacks", "Grains & Rice", "Sugar & Flour", "Breakfast Cereals", "Candy & Chocolate", "Margarine, Jam & Spreads", "Jeans", "Shorts", "Alcoholic Drinks", "Non Alcoholic Drinks", "Beverages", "Water", "Cleaning Products", "Papers & Rolls", "Bulb & Batteries", "Dairy"]
                },
                {
                  label: "Baby",
                  options: ["Diapers", "Walkers", "Backpack & Carriers", "Swings, Jumpers & Bouncers", "Toys", "Bathing & Skin Care", "Apparels & Accessories", "Music & Sound", "Feeding", "Health & Baby Care", "Potty Training", "Baby Safety"]
                },
                {
                  label: "Sporting",
                  options: ["Excercise & Fitness", "Accessories", "Clothing", "Team Sports", "Huawei", "Supplementaries", "Camping & Hiking", "Skate board & Scooters", "Cycling", "Accesories"]
                },
                {
                  label: "Health & Beauty",
                  options: ["Fragrances", "Hair Products", "Make Up", "Skin Care", "Men's Grooming", "Bathing Accessories", "Health Care & Drugs"]
                },
                {
                  label: "Outdoor",
                  options: ["Hand Tools ", "Watering Equipment", "Grills", "Outdoor Cooking & Accessories", "Lighting", "Tables", "Patio Seating ", "Pest Control", "Hammock & Stands"]
                },
                {
                  label: "Home & Office",
                  options: ["Home Decor", "Bedding", "Wall Art ", "Lighting", "Storage & Organization ", "Furniture", "Kitchen Dining", "Office Electornics", "Stationery", "Cookers", "Microwaves & Ovens", "Refrigerators", "Laundy Electronics", "Water Dispensers & Coolers", "Kitchen Elecronic"]
                },
                {
                  label: "Other Categories",
                  options: ["Books", "Movies & Music", "Automobile ", "Toys and Gaming", "Groceries", "Music Instruments ", "Pet Supplies ", "Livestock", "Industrial & Scientific", "Services"]
                },
            ],

            form: this.$inertia.form({
                category:'',
                subCategory:'',
                title: '',
                price: '',
                description: '',
                photos:[],
                account_id: parseInt(this.$page.props.auth.user.account.id),
            }),

            preview: null,
            image: null,
            preview_list: [],
            image_list: []     
        }
    },
    methods: {
        store() {
            this.form.post(this.route('products.store'))
        },
        selectCategory: function () {
            this.form.selectedOption = '';
            this.options = this.categories[this.selectedCategory].options;
            this.selectedCategoryLabel = this.categories[this.selectedCategory].label;
            this.form.category = this.selectedCategoryLabel;
            this.form.subCategory = this.selectedOption;
        },
        selectOption: function () {
            this.form.subCategory = this.selectedOption;
        },
        previewMultiImage: function(event) {
            if(this.image_list.length <= 4 ){
                var input = event.target;
                var count = input.files.length;
                var index = 0;
                if (input.files) {
                    while(count --) {
                    var reader = new FileReader();
                    reader.onload = (e) => {
                        this.preview_list.push(e.target.result);
                    }
                    this.image_list.push(input.files[index]);
                    reader.readAsDataURL(input.files[index]);
                    index ++;
                    }
                }
                this.form.photos = this.image_list
                // onUpload() {
                // const formData = new FormData()
                // formData.append('myFile', this.selectedFile, this.selectedFile.name)
                // axios.post('my-domain.com/file-upload', formData)
                // }
            }else{
                Swal.fire(
                    'Cannot Upload Image',
                    'You can only upload upto five images',
                    'warning'
                )
            }

        },
    }

}
</script>