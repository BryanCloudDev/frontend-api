<template>
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="form-box card text-dark">
                    <div class="card-body p-5 text-center">

                        <div class="mb-md-5 mt-md-4 pb-5">

                            <h2 class="mb-2 text-uppercase pb-5">{{message}}</h2>

                            <div class="label form-outline form-white mb-4" v-for="bullet in bullets" >
                                <label class="form-label text-start" for="typeEmailX">{{bullet}}</label>
                                <input type="email" id="typeEmailX" class="form-control form-control-lg" />
                            </div>

                            <p class="small mb-5 pb-lg-2"><a class="text-dark" href="#!">Forgot password?</a></p>

                            <button class="name-button bg-dark btn btn-outline-light btn-lg px-5" type="submit">{{message}}</button>

                            <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                            </div>

                        </div>

                        <div>
                            <p class="mb-0" v-if="message === 'sign in'">Don't have an account? <a href="http://127.0.0.1:8000/signin" class="text-dark fw-bold">Sign
                                    Up</a>
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
export default{
    name: 'Logintemplate',
    props:{
        bullets: [Array],
        message: String
    }
}
</script>

<style>



</style>