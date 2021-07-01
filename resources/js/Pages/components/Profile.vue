<template>
    <div>

    <div class="relative w-full flex flex-col h-screen">
        <div class="w-full h-screen  border-t flex flex-col">
            <div class="w-full flex-grow p-6">
                <h1 class="text-3xl text-black pb-6">Profile</h1>

                <div class="w-full mt-6">
                    <div>
                        <ul class="flex border-b">
                            <li class="-mb-px mr-1" @click="openTab = 1">
                                <a :class="openTab === 1 ? 'border-l border-t border-r rounded-t text-white font-semibold bg-black' : 'text-blue-500 hover:text-black bg-white'" class=" inline-block py-2 px-4 font-semibold text-xs sm:text-lg" href="#">Seller Details</a>
                            </li>
                            <li class="mr-1" @click="openTab = 2">
                                <a :class="openTab === 2 ? 'border-l border-t border-r rounded-t text-white font-semibold bg-black' : 'text-blue-500 hover:text-black bg-white'" class=" inline-block py-2 px-4 font-semibold text-xs sm:text-lg" href="#">Businness Details</a>
                            </li>
                            <li class="mr-1" @click="openTab = 3">
                                <a :class="openTab === 3 ? 'border-l border-t border-r rounded-t text-white font-semibold bg-black' : 'text-blue-500 hover:text-black bg-white'" class=" inline-block py-2 px-4 font-semibold text-xs sm:text-lg" href="#">Payment Details</a>
                            </li>
                        </ul>
                    </div>
                    <div class="bg-white p-6">
                        <div id="" class="" v-if="openTab === 1">
                            <div class="">
                                <div class="max-w-full bg-white py-2 m-auto w-full">

                                <div class="grid grid-cols-2 gap-2 max-w-full m-auto">

                                    <div class="col-span-2 lg:col-span-1">
                                    <input type="text" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="Full Name"/>
                                    </div>

                                    <div class="col-span-2 lg:col-span-1">
                                    <input type="email" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="Email Address"/>
                                    </div>

                                    <div class="col-span-2 lg:col-span-1">
                                    <input type="text" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="Primary Number"/>
                                    </div>

                                    <div class="col-span-2 lg:col-span-1">
                                    <input type="text" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="Alternate Number"/>
                                    </div>

                                    <div class="col-span-2 lg:col-span-1">
                                    <input type="text" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="City or County"/>
                                    </div>

                                    <div class="col-span-2 lg:col-span-1">
                                    <input type="text" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="Postal Address"/>
                                    </div>

                                    <div class="col-span-2 lg:col-span-1">
                                    <input type="text" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="ID or Passport Number"/>
                                    </div>

                                    <div class="col-span-2 lg:col-span-1">
                                    <select class="border-solid border-gray-400 border-2 p-3 md:text-xl  w-full " id="category">
                                        <option value="">- Gender  -</option>
                                        <option value="0">Male</option>
                                        <option value="1">Female</option>
                                    </select>    
                                    </div>

                                    <div class="mt-5 w-full col-span-2 lg:col-span-1">
                                        <div class="relative h-40 rounded-lg border-dashed border-2 border-gray-200 bg-white flex justify-center items-center hover:cursor-pointer">
                                            <div class="absolute">
                                                <div class="flex flex-col items-center "> <i class="fa fa-cloud-upload-alt fa-3x text-gray-200"></i> <span class="block text-gray-400 font-normal px-2 lg:text-md text-xs">Upload you ID/Passport For Verification</span> <span class="block text-blue-400 font-normal">Browse files</span> </div>
                                            </div> <input type="file" class="h-full w-full opacity-0" name="">
                                        </div>
                                        <div class="text-xs sm:text-md flex justify-between items-center text-gray-400"> <span>Accepted file type: .jpg .png .pdf </span> <span class="flex items-center "><i class="fa fa-lock mr-1"></i> secure</span> </div>
                                    </div>

                                    <!-- <div class="col-span-2">
                                    <textarea cols="30" rows="8" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="Message"></textarea>
                                    </div> -->
                                    <div class="col-span-2 text-right">
                                    <button class="py-3 px-6 bg-blue-500 hover:bg-black text-white font-bold w-full sm:w-32">
                                        Proceed
                                    </button>
                                    </div>

                                </div>
                                </div>
                            </div>        
                        </div>
                        <div id="" class="" v-if="openTab === 2">
                            <div class="">
                                <div class="max-w-full bg-white py-2 m-auto w-full">

                                <div class="grid grid-cols-2 gap-2 max-w-full m-auto">

                                    <div class="col-span-2 lg:col-span-1">
                                    <input type="text" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="Business Name"/>
                                    </div>

                                    <div class="col-span-2 lg:col-span-1">
                                    <input type="email" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="Business Email"/>
                                    </div>

                                    <div class="col-span-2 lg:col-span-1">
                                    <input type="text" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="Primary Business Phone Number"/>
                                    </div>

                                    <div class="col-span-2 lg:col-span-1">
                                    <input type="text" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="Secondary Business Phone Number"/>
                                    </div>

                                    <div class="col-span-2 lg:col-span-1">
                                    <select class="border-solid border-gray-400 border-2 p-3 md:text-xl  w-full " id="category">
                                        <option value="">- Choose Business County -</option>
                                        <option value='Baringo'>Baringo</option>
                                        <option value='Bomet'>Bomet</option>
                                        <option value='Bungoma'>Bungoma</option>
                                        <option value='Busia'>Busia</option>
                                        <option value='Elgeyo-Marakwet'>Elgeyo-Marakwet</option>
                                        <option value='Embu'>Embu</option>
                                        <option value='Garissa'>Garissa</option>
                                        <option value='Homa Bay'>Homa Bay</option>
                                        <option value='Isiolo'>Isiolo</option>
                                        <option value='Kajiado'>Kajiado</option>
                                        <option value='Kakamega'>Kakamega</option>
                                        <option value='Kericho'>Kericho</option>
                                        <option value='Kiambu'>Kiambu</option>
                                        <option value='Kilifi'>Kilifi</option>
                                        <option value='Kirinyaga'>Kirinyaga</option>
                                        <option value='Kisii'>Kisii</option>
                                        <option value='Kisumu'>Kisumu</option>
                                        <option value='Kitui'>Kitui</option>
                                        <option value='Kwale'>Kwale</option>
                                        <option value='Laikipia'>Laikipia</option>
                                        <option value='Lamu'>Lamu</option>
                                        <option value='Machakos'>Machakos</option>
                                        <option value='Makueni'>Makueni</option>
                                        <option value='Mandera'>Mandera</option>
                                        <option value='Marsabit'>Marsabit</option>
                                        <option value='Meru'>Meru</option>
                                        <option value='Migori'>Migori</option>
                                        <option value='Mombasa'>Mombasa</option>
                                        <option value='Muranga'>Murang'a</option>
                                        <option value='Nairobi City'>Nairobi City</option>
                                        <option value='Nakuru'>Nakuru</option>
                                        <option value='Nandi'>Nandi</option>
                                        <option value='Narok'>Narok</option>
                                        <option value='Nyamira'>Nyamira</option>
                                        <option value='Nyandarua'>Nyandarua</option>
                                        <option value='Nyeri'>Nyeri</option>
                                        <option value='Samburu'>Samburu</option>
                                        <option value='Siaya'>Siaya</option>
                                        <option value='Taita-Taveta'>Taita-Taveta</option>
                                        <option value='Tana River'>Tana River</option>
                                        <option value='Tharaka-Nithi'>Tharaka-Nithi</option>
                                        <option value='Trans Nzoia'>Trans Nzoia</option>
                                        <option value='Turkana'>Turkana</option>
                                        <option value='Uasin Gishu'>Uasin Gishu</option>
                                        <option value='Vihiga'>Vihiga</option>
                                        <option value='West Pokot'>West Pokot</option>
                                        <option value='wajir'>wajir</option>
                                    </select>    
                                    </div>

                                    <div class="col-span-2 lg:col-span-1">
                                    <input type="text" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="Business Address and Code"/>
                                    </div>

                                    <div class="col-span-2 lg:col-span-1">
                                    <select class="border-solid border-gray-400 border-2 p-3 md:text-xl  w-full " id="category">
                                        <option value="">- Choose Business Category -</option>
                                        <option value="0">Automobile</option>
                                        <option value="1">Baby Products</option>
                                        <option value="2">Books, Movies and Music</option>
                                        <option value="3">Computing</option>
                                        <option value="4">Electronics</option>
                                        <option value="5">Fashion</option>
                                        <option value="6">Gaming</option>
                                        <option value="7">Garden &amp; Outdoors</option>
                                        <option value="8">Grocery</option>
                                        <option value="9">Health &amp; Beauty</option>
                                        <option value="10">Home &amp; Office</option>
                                        <option value="11">Industrial &amp; Scientific</option>
                                        <option value="12">Livestock</option>
                                        <option value="13">Miscellaneous</option>
                                        <option value="14">Musical Instruments</option>
                                        <option value="15">Pet Supplies</option>
                                        <option value="16">Phones &amp; Tablets</option>
                                        <option value="17">Services</option>
                                        <option value="18">Sporting Goods</option>
                                        <option value="19">Toys &amp; Games</option>
                                    </select>    
                                    </div>

                                    <div class="col-span-2 lg:col-span-1">
                                    <select class="border-solid border-gray-400 border-2 p-3 md:text-xl  w-full " id="category">
                                        <option value="">- Choose Business Type -</option>
                                        <option value="0">Individual</option>
                                        <option value="1">Company</option>
                                    </select>    
                                    </div>

                                    <div class="col-span-2 lg:col-span-1">
                                    <select class="border-solid border-gray-400 border-2 p-3 md:text-xl  w-full " id="category">
                                        <option value="">- Registered your Business?  -</option>
                                        <option value="0">Yes</option>
                                        <option value="1">No</option>
                                    </select>    
                                    </div>

                                    <div class="col-span-2 lg:col-span-1">
                                    <input type="text" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="Busniess Registration Number"/>
                                    </div>

                                    <div class="col-span-2 lg:col-span-1">
                                    <select class="border-solid border-gray-400 border-2 p-3 md:text-xl  w-full " id="category">
                                        <option value="">- Do you have a Pin or Vat Number?  -</option>
                                        <option value="0">Yes</option>
                                        <option value="1">No</option>
                                    </select>    
                                    </div>

                                    <div class="col-span-2 lg:col-span-1">
                                    <input type="text" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="Busniess Pin or VAT Number"/>
                                    </div>

                                    <div class="col-span-2 text-right">
                                    <button class="py-3 px-6 bg-blue-500 hover:bg-black text-white font-bold w-full sm:w-32">
                                        Proceed
                                    </button>
                                    </div>

                                </div>
                                </div>
                            </div> 
                        </div>
                        <div id="" class="" v-if="openTab === 3">
                            <div class="">
                                <div class="max-w-full bg-white py-2 m-auto w-full">

                                <div class="col-span-2 lg:col-span-1 pb-10">
                                <select class="border-solid border-gray-400 border-2 p-3 md:text-xl  w-full " id="category">
                                    <option value="">- Prefered Payment Mode  -</option>
                                    <option value="1">Any</option>
                                    <option value="0">Mpesa only</option>
                                    <option value="0">Bank only</option>
                                    <option value="1">Cash only</option>
                                    <option value="1">Bank & Mpesa only</option>
                                    <option value="1">Mpesa & Cash only</option>
                                    <option value="1">Bank & Cash only</option>
                                </select>    
                                </div>

                                <div class="grid grid-cols-2 gap-2 max-w-full m-auto">


                                    <div class="col-span-2 lg:col-span-1">
                                    <input type="text" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="MPESA Registered Name"/>
                                    </div>

                                    <div class="col-span-2 lg:col-span-1 pb-10">
                                    <input type="email" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="Mpesa Phone Number"/>
                                    </div>

                                   
                                    <div class="col-span-2 lg:col-span-1">
                                    <input type="text" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="Bank"/>
                                    </div>

                                    <div class="col-span-2 lg:col-span-1">
                                    <input type="text" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="Branch"/>
                                    </div>


                                    <div class="col-span-2 lg:col-span-1">
                                    <input type="text" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="Account Name"/>
                                    </div>

                                    <div class="col-span-2 lg:col-span-1">
                                    <input type="text" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="Account Number"/>
                                    </div>

                                    <div class="col-span-2 lg:col-span-1">
                                    <input type="text" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="SWIFT CODE"/>
                                    </div>

                                    <div class="col-span-2 lg:col-span-1">
                                    <input type="text" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="IBAN CODE"/>
                                    </div>
                        
                                    <div class="col-span-2 text-right">
                                    <button class="py-3 px-6 bg-blue-500 hover:bg-black text-white font-bold w-full sm:w-32">
                                        Submit
                                    </button>
                                    </div>

                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>


    </div>
</template>

<script>
export default {
    name:"Profile",
    data(){
        return{
          openTab: 3,     
        }
    }
}
</script>

