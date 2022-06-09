<template>

<section class="min-vh-100 gradient-custom d-flex align-items-center">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="form-box card text-dark">
                    <div class="card-body p-5 text-center">
                        <div class="mb-md-5 mt-md-4 pb-5">
                            <form action="">
                                <Title message="Sign Up"/>
                                <Input :name="username" value="Username" />
                                <Input :name="password" value="Password" />
                                <p class="small mb-5 pb-lg-2"><a class="text-dark" href="#!">Forgot password?</a></p>
                                <button class="name-button bg-dark btn btn-outline-light btn-lg px-5" type="submit">Sign Up</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</template>

<script>

import Title from './components/Title.vue';
import Input from './components/Input.vue';

export default{
    name: 'Signup',
    components:{
        Title,
        Input
    },
    data() {
        return {
            username:'username',
            password:'password'
        }
    }
}
</script>

<style>

@import '../css/app.css';

</style>