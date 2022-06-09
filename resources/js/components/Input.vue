<template>

<div class="label form-outline form-white mb-4">
    <label class="form-label text-start">{{value}}</label>
    <input type="text" v-bind:name="name" class="form-control form-control">    
</div>

</template>

<script>

export default{
    name:'Input',
    props:{
        name: String,
        value: String
    }
}

</script>