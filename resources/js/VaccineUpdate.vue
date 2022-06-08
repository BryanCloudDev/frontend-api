<template>

<Logintemplate 
message="Update 'vaccine name'" 
v-bind:bullets="['Vaccine name','Available quantity','Vaccine type','Vaccine creator']"/>

</template>

<script>

import Logintemplate from "./components/Logintemplate.vue";

export default{
    name: 'VaccineUpdate',
    components:{
        Logintemplate
    }
}

</script>

<style>

@import '../css/app.css';

</style>