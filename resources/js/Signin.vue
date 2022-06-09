<template>

<section class="min-vh-100 gradient-custom d-flex align-items-center">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="form-box card text-dark">
                    <div class="card-body p-5 text-center">
                        <div class="mb-md-5 mt-md-4 pb-5">
                            <Title message="Sign In"/>
                            <form  action="">
                                <Input :name="username" value="Username" />
                                <Input :name="password" value="Password" />
                                {{info}}
                                <p class="small mb-5 pb-lg-2"><a class="text-dark" href="#!">Forgot password?</a></p>
                                <button class="name-button bg-dark btn btn-outline-light btn-lg px-5" type="submit">Sign In</button>
                            </form>
                        </div>
                        <div>
                            <p class="mb-0">
                                Don't have an account? 
                                <a href="http://127.0.0.1:8000/signup" class="text-dark fw-bold">Sign Up</a>
                            </p>
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
import axios from 'axios';

export default{
    name: 'Signin',
    components:{
        Title,
        Input
    },
        data() {
        return {
            username:'username',
            password:'password',
            info: null
        }
    },
    mounted(){
        axios
        // .post('http://127.0.0.1:8001/api/population',{
        //     states: 'Tangamandapio',
        //     total_population: '320379',
        //     unvaccinated_population: '13358',
        //     vaccinated_population: '307021'
        // })
        .delete('http://127.0.0.1:8001/api/population/3')
        .then(function (response) {
        console.log(response);
        })
        .catch(function (error) {
            console.log(error);
        });
    }
}
</script>

<style>

@import '../css/app.css';

</style>