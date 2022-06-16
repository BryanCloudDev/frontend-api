<template>

<Map v-on:idSet="retrieveData"/>

<div v-if="success">

<div class="col-sm-4 mt-4">
    <div class="card cCard p-3 card-body-color animate__fadeIn animate__animated">
        <div class="card-body card-body-custom">
            <h5 class="card-header-color text-light animate__animated animate__backInDown">{{states}}</h5>
            <ul class="text-light">
                <li class="cRow animate__animated animate__backInLeft">
                    <dt>Total Population</dt>
                    <dd>{{total_population}}</dd>
                </li>
                
                <li class="cRow animate__animated animate__backInLeft">
                    <dt>Vaccinated Population</dt>
                    <dd>{{unvaccinated_population}}</dd>
                </li>
                <li class="cRow animate__animated animate__backInLeft">
                    <dt>Unvaccinated Population</dt>
                    <dd>{{vaccinated_population}}</dd>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>

</template>

<script>

import Map from './components/Map.vue'

export default{
    name: 'App',
    components:{
        Map
    },
    data(){
        return{
            states:'',
            total_population:'',
            unvaccinated_population: '',
            vaccinated_population: '',
            success: false,
        }
    },
    methods:{
        retrieveData(id){
            axios
            .get(`http://127.0.0.1:8000/api/population/${id}`)
            .then( response => {
                this.states = response.data.states;
                this.total_population = response.data.total_population;
                this.unvaccinated_population = response.data.unvaccinated_population;
                this.vaccinated_population = response.data.vaccinated_population;
                this.success = true;
            })
            .catch( error => {
                console.log(error);
            });
        }
    }
}
</script>