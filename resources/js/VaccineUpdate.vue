<template>

<section class="min-vh-100 gradient-custom d-flex align-items-center">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="form-box card text-dark">
                    <div class="card-body p-5 text-center">
                        <div class="mb-md-5 mt-md-4 pb-5">
                            <Title message="Update Vaccine X"/>
                            <form action="http://localhost/PHPexercises/API.php" method="GET">
                                <Input :name="vaccineName" value="Vaccine name" />
                                <Input :name="availableQuantity" value="Available quantity" />
                                <Input :name="vaccineType" value="Vaccine type" />
                                <Input :name="vaccineCreator" value="Vaccine creator" />
                                <button class="name-button bg-dark btn btn-outline-light btn-lg px-5" type="submit">Update</button>
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
            vaccineName:'vaccineName',
            availableQuantity:'availableQuantity',
            vaccineType:'vaccineType',
            vaccineCreator:'vaccineCreator'
        }
    }
}
</script>