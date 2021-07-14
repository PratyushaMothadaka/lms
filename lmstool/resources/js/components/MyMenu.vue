<template>
<div class="parent"  
      @mouseover="showMenu"
      @mouseleave="hideMenu"
>
  <div>
      <p class="text-teal-700 border border-teal-700 font-bold hover:border-teal-900 hover:text-teal-900 py-4 px-8 mx-4 cursor-pointer">
            {{ name }}
      </p>
  </div>
  <div class="child w-full">&nbsp;&nbsp;</div>
  <div v-show="isVisible" class="child bg-white py-2 rounded-sm shadow-lg border border-gray-200 mr-2">
      <a href="/" class="block px-6 py-3 text-gray-800 hover:bg-teal-900 hover:text-white hover:font-bold hover:border-2 hover:border-teal-900">Home</a>
      <a href="/teacher/welcome" class="block px-6 py-3 text-gray-800 hover:bg-teal-900 hover:text-white hover:font-bold hover:border-2 hover:border-teal-900">My Profile</a>
      <a href="/teacher/welcome" class="block px-6 py-3 text-gray-800 hover:bg-teal-900 hover:text-white hover:font-bold hover:border-2 hover:border-teal-900">My Dashboard</a>
      <a href="/logout/student" class="block px-6 py-3 text-gray-800 hover:bg-teal-900 hover:text-white hover:font-bold hover:border-2 hover:border-teal-900">Logout</a>
  </div>
</div>
</template>

<script>
  export default {
    data(){
      return{
        isVisible: false,
      }
    },
    methods:{
      showMenu(){
        this.isVisible= true
      },
      hideMenu(){
        this.isVisible= false
      }
    },
   props:['name','image']
  }
</script>
<style>
.child {
  position: absolute;
  width:200px;
  left: 50%;
  margin-left: -100px;
}
.parent {
  position: relative;
}
</style>