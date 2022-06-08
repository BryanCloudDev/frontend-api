<template>

<Logintemplate message="sign up" v-bind:bullets="['Username','Password']"/>

</template>

<script>

import Logintemplate from "./components/Logintemplate.vue";

export default{
    name: 'Login',
    components:{
        Logintemplate
    }
}

</script>

<style>

@import '../css/app.css';

</style>