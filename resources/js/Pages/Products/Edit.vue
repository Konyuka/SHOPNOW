<template>
    <div>
        <h1 class="text-3xl text-black ml-4">Edit Product </h1>
        <div class="mt-2 p-5">
                            
            <form  @submit.prevent="store">
            <div class="grid grid-cols-3 gap-2 max-w-full m-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">

                <div class="col-span-2 lg:col-span-1">
                <div class="md:w-full px-3 mb-6 md:mb-0">
                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="location">
                    Product Categories  <span class="text-red-600 text-xl">*</span>
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
                    Sub-Categories in  {{ selectedCategoryLabel }}  <span class="text-red-600 text-xl">*</span>
                    </label>
                    <div>
                    <select v-model="selectedSubCategory" @change="selectSubCategory" class="w-full bg-gray-200 border border-gray-200 text-black text-xs py-3 px-4 pr-8 mb-3 rounded" id="location">
                        <option v-for="(subCategory, index) in subCategories" :key="index" :value="index">{{ subCategory }}</option>
                    </select>
                    </div>
                </div>
                </div>

                <div class="col-span-2 lg:col-span-1">
                <div class="md:w-full px-3 mb-6 md:mb-0">
                    <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="location">
                    Products in {{ selectedSubCategoryLabel }}  <span class="text-red-600 text-xl">*</span>
                    </label>
                    <div>
                    <select v-model="selectedOption" @change="selectOption" class="w-full bg-gray-200 border border-gray-200 text-black text-xs py-3 px-4 pr-8 mb-3 rounded" id="location">
                        <option v-for="option in options" :key="option">{{ option }}</option>
                    </select>
                    </div>
                </div>
                </div>

                <div class="col-span-2 lg:col-span-2">
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
                    <input v-model="form.price" class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="application-link" type="number" placeholder="Digits only i.e 3000">
                </div>
                </div>

                <div class="col-span-2 lg:col-span-3">
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
                Update Product
            </button>

            </form>

        </div>
    </div>
</template>

<script>
import Layout from '../Dashboard'

export default {
    metaInfo: { title: 'Create Organization' },
    name:'Product_Edit',
    layout: Layout,
    props: {
        product:Object,
    },
    mounted () {
      this.setProduct()  
    },
    data () {
        return {

            selectedCategory: '',
            selectedSubCategory:'',
            selectedOption: '',
            subCategories:[],
            options: [],
            selectedCategoryLabel: '',
            selectedSubCategoryLabel: '',
            categories: [
                {
                  label: "Supermarket",
                  options: ["Food", "Drinks", "Household Supplies"],
                  subOptions: [
                    {
                    label: "Food",
                    options: ["Cooking Ingredients", "Snacks, Cripps & Nuts", "Grains & Rice", "Sugar & Flour", "Breakfast Cereals", "Candy & Chocolate", "Margarine, Jams, Honey & Spreads" ]
                    },
                    {
                    label: "Drinks",
                    options: ["Beer, Wines & Spirits", "Carbonated Drinks", "Coffee, Tea & Cocoa", "Dairy", "Juice & Non Carbonated Drinks", "Syrup and Cordials", "Water"]
                    },
                    {
                    label:"Household Supplies",
                    options:["Air Fresheners", "Bathroom Cleaners", "Bulb & Batteries", "Floor Cleaners", "Household Cleaners & Sundries", "Kitchen Cleaner", "Laundry", "Pappers & Rolls"]
                    },
                  ],
                },

                {
                  label: "Health & Beauty",
                  options: ["Hair Care", "Fragrances", "Mens Grooming", "Oral Care", "Makeup", "Health Care", "Personal Care", "Luxury Beauty"],
                  subOptions:[
                      {
                    label:"Hair Care",
                    options:["Conditioner", "Extensions, Wigs & Accessories", "Hair & Scalp Care", "Hair Accessories", "Hair Coloring Products", "Hair Cutting Tools", "Hair Loss Products", "Hair Perms, Relaxers & Texturizers", "Shampoo", "Styling Products"]
                },
                {
                    label:"Fragrances",
                    options:["Mens", "Womens"]
                },
                {
                    label:"Mens Grooming",
                    options:["Anti Ageing", "Pre Shave", "Sunblock"]
                },
                {
                    label:"Oral Care",
                    options:["Childrens Dental care", "Dental Care", "Mouth Wash", "Teeth Whitening", "Toothbrush", "Toothpaste"]
                },
                {
                    label:"Makeup",
                    options:["Eyes", "Face", "Lips"]
                },
                {
                    label:"Health Care",
                    options:["Diabetes Care", "Feminine Care", "First Aid", "Sleeping & Snoring"]
                },
                {
                    label:"Personal Care",
                    options:["Bath & Bathing Accesories", "Deodrants & Antiperspirants", "Lip Care", "Shaves & Hair Removal", "Skin Care"]
                },
                {
                    label:"Luxury Beauty",
                    options:["Fragrances", "MakeUp", "Skin Care"]
                },
                  ]
                },

                {
                  label: "Home & Office",
                  options: ["Home Kitchen", "Small Appliances", "Large Appliances", "Cooking Appliances", "Office Products"],
                  subOptions:[
                      {
                    label:"Home Kitchen",
                    options:["Home Decor", "Bedding", "Wall Art", "Bath", "Lighting", "Storage & Organization", "Kitchen Dining", "Furniture"]
                },
                {
                    label:"Small Appliances",
                    options:["Blenders", "Kettles", "Toasters", "Ironing & Laundry", "Other Small Appliances"]
                },
                {
                    label:"Large Appliances",
                    options:["Refridgerator", "Freezers", "Water Dispenders & Coolers", "Washers & Dryers"]
                },
                {
                    label:"Cooking Appliances",
                    options:["Cooktops", "Microwaves & Ovens", "Cooking Applience Accessories", "Cookers"]
                },
                {
                    label:"Office Products",
                    options:["Office & School Supplies", "Office Electronics", "Office Furniture & Lighting", "Stationery"]
                },
                  ]
                },

                {
                  label: "Phones & Tablets",
                  options: ["Mobile Phones", "Top Smartphone Brands", "Accessories", "Tablets"],
                  subOptions:[
                      {
                    label:"Mobile Phones",
                    options:["Smartphoness", "Featured Phones", "Featured Phones Under 2000"]
                },
                {
                    label:"Top Smartphone Brands",
                    options:["Samsung", "Xiaomi", "Nokia", "Tecno", "Infinix", "Huawei", "Oppo"]
                },
                {
                    label:"Accessories",
                    options:["Portable Powerbanks", "Smart Watches", "Cases & Sleeves", "Screen Protectors", "Bluetooth Accesories", "Headsets", "Headphones", "Batteries & Battery Packs", "Accesories Under 1000"]
                },
                {
                    label:"Tablets",
                    options:["Ipads", "Tablet Accessories", "Tablet Bags & Covers"]
                },
                  ]
                },

                {
                  label: "Computing",
                  options: ["Laptops", "Computer & Accessories", "Shop By Laptop Brands", "Computer Components", "Computer Components", "Computer Data Storage"],
                  subOptions:[
                       {
                    label:"Laptops",
                    options:["MacBooks", "NetBooks", "UltraBooks", "2-in-1 Laptops"]
                },
                {
                    label:"Computer & Accessories",
                    options:["Laptop Accessories", "Desktops", "Monitors", "Scanners", "Printers", "Keyboards, Mice & Accessories", "Computer Cable & Adapters", "Printer Ink & Toner", "Networking Products"]
                },
                {
                    label:"Shop By Laptop Brands",
                    options:["HP", "Dell", "Lenovo", "Apple", "Asus"]
                },
                {
                    label:"Computer Components",
                    options:["Internal Hard Drive", "Graphic Cards", "Fans & Cooling"]
                },
                {
                    label:"Computer Data Storage",
                    options:["External Hard Drives", "USB Flash Drives"]
                },
                  ]
                },

                {
                  label: "Electronics",
                  options: ["Televisions", "Best Seller TV Brands", "Home Audio", "Cameras", "Accessories & Supplies Supplies"],
                  subOptions:[
                      {
                    label:"Televisions",
                    options:["Smart TVs", "LED & LCD TVs", "Data Projectors"]
                },
                {
                    label:"Best Seller TV Brands",
                    options:["Synix TV", "Samsung TV", "isense TV", "Sony"]
                },
                {
                    label:"Home Audio",
                    options:["Speakers", "Home Theatre System", "Blutooth Speakers", "Sound Bars", "Compact Radio & Stereos", "Hi-Fi System Under 2000"]
                },
                {
                    label:"Cameras",
                    options:["Compact Cameras", "Digital SLR Cameras", "Security & Surveillance Camera"]
                },
                {
                    label:"Accessories & Supplies Supplies",
                    options:["Accessories & Video Supplies", "Batteries", "Batteries, Chargers & Accessories", "Cables", "Camera & Photo Accessories", "Camera Accesories", "Home Audio Acccessories", "Power Protection", "Television Accessories"]
                },
                  ]
                },

                {
                  label: "Fashion",
                  options: ["Womens Fashion", "Mens Fashion", "Baby", "Kids Fashion", "Exclusive Fashion"],
                  subOptions:[
                      {
                    label:"Womens Fashion",
                    options:["Dresses", "Suits & Blazers", "Tops & Tees", "Coats, Jackets & Vest", "Jumpsuits, Rompers & Overalls", "Skirts", "Lingerie, Sleep & Lounge", "Jeans", "Shorts", "Jewelery", "Sandals", "Flats", "Handbags & Wallets"]
                },
                {
                    label:"Mens Fashion ",
                    options:["Shirts", "T-Shirt & Tanks", "Suits & Sports Coats", "Pants", "Shorts", "Jeans", "Underwear", "Watches", "Fashion Sneakers", "Loafers & Slip Ons", "Belts", "Sunglasses & Eyewear Accessories"]
                },
                {
                    label:"Baby",
                    options:["Baby Boys", "Baby Girls"]
                },
                {
                    label:"Kids Fashion",
                    options:["Boys", "Girls"]
                },
                {
                    label:"Exclusive Fashion",
                    options:["Maternity Wear", "Ankara Shirts", "Kitenge Dresses", "Ankara Tops", "Wedding Hair Accesories"]
                },
                  ]
                },

                {
                  label: "Gaming",
                  options: ["Playingstation", "Playingstation", "Digital Games", "Nintendo", "PC Gaming"],
                  subOptions:[
                      {
                    label:"Playingstation",
                    options:["PlaySatation 3", "PlaySatation 4", "PlaySatation Vita"]
                },
                {
                    label:"Digital Games",
                    options:["Nintendo Switch", "Xbox 360"]
                },
                {
                    label:"Nintendo",
                    options:["Nintendo DS", "Nintendo 3DS", "Wii"]
                },
                {
                    label:"PC Gaming",
                    options:["Games", "Sony PSP"]
                },
                  ]
                },

                {
                  label: "Baby Products",
                  options: ["Diapering", "Gear", "Bathing & Skin Care", "Apparel & Accessories", "Baby & Toodler Toys", "Feeding", "Baby Safety ", "Potty Training", "Health & Baby Care"],
                  subOptions:[
                      {
                    label:"Diapering",
                    options:["Diaper Bags", "Disposable Diapers", "Portable Changing Pads", "Cloth Diapers", "Changing Tables", "Wipes & Holders"]
                },
                {
                    label:"Gear",
                    options:["Walkers", "BagPacks & Camera", "Swings, Jumps & Bouncers"]
                },
                {
                    label:"Bathing & Skin Care",
                    options:["Soaps & Cleaners", "Grooming & Healthcare kits", "Bathing Tubs & Seats", "Washclothes & Towels", "Bathroom Safety"]
                },
                {
                    label:"Apparel & Accessories",
                    options:["Baby Boy", "Baby Girl"]
                },
                {
                    label:"Baby & Toodler Toys",
                    options:["Toy Gift Sets", "Music & Sound", "Bath Toys"]
                },
                {
                    label:"Feeding",
                    options:["Bibs & Burp Clothes", "Bottle Feeding", "Breastfeeding", "Highchairs & Booster Seats", "Pacifiers & Accessories", "Solid Feeding"]
                },
                {
                    label:"Baby Safety",
                    options:["Monitors", "Sleep Positioners", "dge & Corner Guards"]
                },
                {
                    label:"Potty Training",
                    options:["Potties & Seats", "Seat Covers", "Step Stools", "Training Pants"]
                },
                {
                    label:"Health & Baby Care",
                    options:["Nail Care", "Teethers & Teething Relief", "Thermometers"]
                },
                  ]
                },

                {
                  label: "Sporting Goods",
                  options: ["Sports & Fitness", "Sports Nutrition", "Outdoor Recreation", ""],
                  subOptions:[
                      {
                    label:"Sports & Fitness",
                    options:["Exercise & Fitness", "Accessories", "Clothing", "Team Sports"]
                },
                {
                    label:"Sports Nutrition",
                    options:["Carb Management Supplements", "Endurance & Energy", "Fat Burners & Thermogenics", "Supplements", "Post-Work & Recovery", "Pre-Workout", "Proteins", "Supplement Stacks", "Testerone Boosters", "Weight Gainers"]
                },
                {
                    label:"Outdoor Recreation",
                    options:["Camping & Hiking", "Skatebaords & Scooter", "Cycling", "Accessories"]
                },
                  ]
                },

                {
                  label: "Garden & Outdoors",
                  options: ["Gardening & Lawn Care", "Grilling & Outdoor Cooking", "Outdoor Decor", "Patio Furniture & Accessories", "Farm & Ranch"],
                  subOptions:[
                      {
                    label:"Gardening & Lawn Care",
                    options:["Hand Tools", "Watering Equipment"]
                },
                {
                    label:"Grilling & Outdoor Cooking",
                    options:["Grills", "Outdoor Cooking Tools & Accessories"]
                },
                {
                    label:"Outdoor Decor",
                    options:["Lighting", ]
                },
                {
                    label:"Patio Furniture & Accessories",
                    options:["Hammoocks , Stands & Accessories"]
                },
                {
                    label:"Farm & Ranch",
                    options:["Pest Control"]
                },
                  ]
                },

                {
                  label: "Other Categories",
                  options: ["Stay Safe", "Automobile", "Books, Movies & Music", "Industrial & Scientific", "Livestock", "Miscellaneous", "Musical Instrument", "Pet Supplies", "Services", "Toy & Games", "Grocery"],
                  subOptions:[
                      {
                    label:"Stay Safe",
                    options:["Have Fun", "Stay Fit", "Stay Connected", "Supermarket", "Stay Healty"]
                },
                {
                    label:"Automobile",
                    options:["Car Electronic & Accessories", "Car Safety and Security", "Motorcycle & Powersports", "Lights & Lighting Accessories", "Replacement Parts"]
                },
                {
                    label:"Books, Movies & Music",
                    options:["Education & Learning", "Biography & Autobiography", "Literature", "Children & Teens", "Study Aids", "Christian Books & Bibles"]
                },
                  ]
                },
  
            ],

            form: this.$inertia.form({
                category:'',
                subCategory:'',
                selectedCategory: '',
                selectedSubCategory: '',
                option:'',
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
        setProduct(){

            this.selectedCategory =    this.product.selectedCategory
            this.setSelectCategory()
            this.selectedSubCategory =    this.product.selectedSubCategory
            this.setSelectSubCategory()
            this.selectedOption =    this.product.option
            this.selectOption()
            this.form.title =    this.product.title
            this.form.price =    this.product.price
            this.form.description =    this.product.description
            this.image_list = this.product.photos
            this.form.photos = this.image_list
            // this.previewMultiImage()
            // this.form.photos =    this.image_list
        },
        store() {
            this.form.put(this.route('products.update', this.product._id))
        },
        selectCategory: function () {

                this.selectedSubCategory = '';
                this.options = '';
                this.selectedCategoryLabel = '';
                this.selectedSubCategoryLabel = '';
                this.subCategories = this.categories[this.selectedCategory].options;
                this.selectedCategoryLabel = this.categories[this.selectedCategory].label;
                this.form.category = this.selectedCategoryLabel
        },
        setSelectCategory: function () {
                // this.selectedCategory =   this.product.category
                // this.selectedSubCategory = '';
                // this.options = '';
                // this.selectedCategoryLabel = '';
                // this.selectedSubCategoryLabel = '';
                this.subCategories = this.categories[this.selectedCategory].options;
                this.selectedCategoryLabel = this.categories[this.selectedCategory].label;
                this.form.category = this.selectedCategoryLabel
                this.form.selectedCategory = this.selectedCategory

            
        },
        selectSubCategory(){

                this.selectedSubCategoryLabel = this.categories[this.selectedCategory].options[this.selectedSubCategory];
                this.options = this.categories[this.selectedCategory].subOptions[this.selectedSubCategory].options;     
                this.form.subCategory = this.selectedSubCategoryLabel
        },
        setSelectSubCategory(){

                this.selectedSubCategoryLabel = this.categories[this.selectedCategory].options[this.selectedSubCategory];
                this.options = this.categories[this.selectedCategory].subOptions[this.selectedSubCategory].options;     
                this.form.subCategory = this.selectedSubCategoryLabel
                this.form.selectedSubCategory = this.selectedSubCategory

        },
        selectOption: function () {
                this.form.option = this.selectedOption;
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

<style scoped>
input[type='number'] {
    -moz-appearance:textfield;
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    -webkit-appearance: none;
}

</style>