<template>

<Logintemplate 
message="Update 'state name'" 
v-bind:bullets="['State name','Total population','Vaccine population','Unvaccinated population']"/>

</template>

<script>

import Logintemplate from "./components/Logintemplate.vue";

export default{
    name: 'StateUpdate',
    components:{
        Logintemplate
    }
}

</script>

<style>

@import '../css/app.css';

</style>