<template>
    <div class="flex justify-center items-center">
        <el-button class="mr-4 text-lg bg-pink-100 text-pink-500 border-2 border-pink-500 hover:bg-white hover:text-pink-500 hover:border-pink-500">Submit</el-button>
        <button class="flex px-4 py-2 bg-white border-2 border-black text-black font-bold
                        hover:font-bold hover:text-white hover:bg-black rounded">submit</button>
        <el-link class="text-green-500 hover:text-pink-500" href="https://element.eleme.io/#/en-US/component/link">Click Here</el-link>
        <el-radio class="text-pink-500" v-model="radio" label="1">Option A</el-radio>
        <el-radio v-model="radio" label="2">Option B</el-radio>

    </div>
</template>

<script>
  export default {
    data () {
      return {
        radio: '1'
      };
    }
  }
</script>
