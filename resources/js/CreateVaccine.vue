<template>

<section class="min-vh-100 gradient-custom d-flex align-items-center">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="form-box card text-dark">
                    <div class="card-body p-5 text-center">
                        <div class="mb-md-5 mt-md-4 pb-5">
                            <Title message="Create new vaccine"/>
                            <form action="">
                                <Input :name="vaccineName" value="Vaccine name" />
                                <Input :name="availableQuantity" value="Available Quantity" />
                                <Input :name="vaccineType" value="Vaccine type" />
                                <Input :name="vaccineCreator" value="Vaccine Creator" />
                                <button class="name-button bg-dark btn btn-outline-light btn-lg px-5" type="submit">Create</button>
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
    name: 'CreateVaccine',
    components:{
        Title,
        Input
    },
    data() {
        return {
            vaccineName:'vaccineName',
            availableQuantity:'availableQuantity',
            vaccineType:'vaccineType',
            vaccineCreator:'vaccineCreator'
        }
    }
}
</script>

<style>

@import '../css/app.css';

</style>