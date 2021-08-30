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
                                <a :class="openTab === 1 ? 'border-l border-t border-r rounded-t text-white font-semibold bg-black' : 'text-blue-500 hover:text-black bg-white'" class=" inline-block py-2 px-4 font-semibold text-xs sm:text-lg" href="#">Client Details</a>
                            </li>
                            <li class="mr-1" @click="openTab = 2">
                                <a :class="openTab === 2 ? 'border-l border-t border-r rounded-t text-white font-semibold bg-black' : 'text-blue-500 hover:text-black bg-white'" class=" inline-block py-2 px-4 font-semibold text-xs sm:text-lg" href="#">Change Password</a>
                            </li>
                        </ul>
                    </div>
                    <div class="bg-white p-6">
                        <div id="" class="" v-if="openTab === 1">
                            <div class="">
                                <div class="max-w-full bg-white py-2 m-auto w-full">

                                <div class="grid grid-cols-2 gap-2 max-w-full m-auto">

                                    <div class="col-span-2 lg:col-span-1">
                                    <input v-model="form.name" type="text" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full"  :placeholder="name"/>
                                    </div>

                                    <div class="col-span-2 lg:col-span-1">
                                    <input v-model="form.email" type="email" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" :placeholder="emailAddress"/>
                                    </div>

                                    <div class="col-span-2 lg:col-span-1">
                                    <input v-model="form.primary" type="text" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" :placeholder="user.phone"/>
                                    </div>

                                    <div v-if="showSecNumber" class="col-span-2 lg:col-span-1">
                                    <input v-model="form.alternate" type="text" class="bg-gray-300 border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="Alternate Number"/>
                                    </div>

                                    <div v-else class="col-span-2 lg:col-span-1">
                                    <input v-model="form.alternate" type="text" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" :placeholder="user.secondary_number"/>
                                    </div>

                                    <!-- <div class="col-span-2 lg:col-span-1">
                                    <input type="text" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="City or County"/>
                                    </div>

                                    <div class="col-span-2 lg:col-span-1">
                                    <input type="text" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="Postal Address"/>
                                    </div> -->

                                    <!-- <div class="col-span-2 lg:col-span-1">
                                    <input type="text" class="bg-gray-300 border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="ID or Passport Number"/>
                                    </div>

                                    <div class="col-span-2 lg:col-span-1">
                                    <select class="bg-gray-300 border-solid border-gray-400 border-2 p-3 md:text-xl  w-full " id="category">
                                        <option value="">- Gender  -</option>
                                        <option value="0">Male</option>
                                        <option value="1">Female</option>
                                    </select>    
                                    </div> -->

                                    <!-- <div class="mt-5 w-full col-span-2 lg:col-span-1">
                                        <div class="relative h-40 rounded-lg border-dashed border-2 border-gray-200 bg-white flex justify-center items-center hover:cursor-pointer">
                                            <div class="absolute">
                                                <div class="flex flex-col items-center "> <i class="fa fa-cloud-upload-alt fa-3x text-gray-200"></i> <span class="block text-gray-400 font-normal px-2 lg:text-md text-xs">Upload you ID/Passport For Verification</span> <span class="block text-blue-400 font-normal">Browse files</span> </div>
                                            </div> <input type="file" class="h-full w-full opacity-0" name="">
                                        </div>
                                        <div class="text-xs sm:text-md flex justify-between items-center text-gray-400"> <span>Accepted file type: .jpg .png .pdf </span> <span class="flex items-center "><i class="fa fa-lock mr-1"></i> secure</span> </div>
                                    </div> -->

                                    <!-- <div class="col-span-2">
                                    <textarea cols="30" rows="8" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="Message"></textarea>
                                    </div> -->
                                    <div class="col-span-2 text-right">
                                    <button @click="updateClient" class="py-3 px-6 bg-blue-500 hover:bg-black text-white font-bold w-full sm:w-32">
                                        Update
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

                                    <!-- <div class="col-span-2 lg:col-span-3">
                                    <input v-model="form.currentPass" type="password" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="Enter Current Password"/>
                                    </div> -->

                                    <div class="col-span-2 lg:col-span-1">
                                    <input v-model="form.newPass" type="password" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="Enter New password"/>
                                    </div>

                                    <div class="col-span-2 lg:col-span-1">
                                    <input v-model="form.confirmPass" type="password" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="Confirm New Password"/>
                                    </div>

                                    <div class="col-span-3 text-right">
                                    <button @click="updatePass" class="py-3 px-6 bg-blue-500 hover:bg-black text-white font-bold w-full sm:w-32">
                                        Change Password
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

import Layout from '../Dashboard'

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
    name:"Profile",
    layout: Layout,
    props: {
        user:Object,
    },
    computed: {
      name(){
          return this.$page.props.auth.user.name
      },  
      emailAddress(){
          return this.$page.props.auth.user.email
      }, 
      showSecNumber(){
          if(this.user.secondary_number == null){
              return true;
          }else{
              return false;
          }
      }
    },
    data(){
        return{
          openTab: 1,
          form: this.$inertia.form({
                name:'',
                email:'',
                primary: '',
                alternate: '',
                currentPass:'',
                newPass:'',
                confirmPass:'',
            }),     
        }
    },
    methods: {
        updatePass(){
            if(this.form.newPass != this.form.confirmPass ){
                Toast.fire({
                    icon: 'warning',
                    title: 'Passwords do not Match'
                })
            }else{
                this.form.post(this.route('updateClientPass'))
            }
        },
        updateClient(){
            if(this.form.name == ''){
                this.form.name = this.name
            }
            if(this.form.email == ''){
                this.form.email = this.emailAddress
            }
            if(this.form.primary == ''){
                this.form.primary = this.user.phone
            }
            this.form.post(this.route('updateClient'))
            this.form = ''
        },
    }
}
</script>

