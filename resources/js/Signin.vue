<template>

<Logintemplate message="sign in" v-bind:bullets="['Username','Password']"/>

</template>

<script>

import Logintemplate from "./components/Logintemplate.vue";

export default{
    name: 'Signin',
    components:{
        Logintemplate
    }
}

</script>

<style>

@import '../css/app.css';

</style>