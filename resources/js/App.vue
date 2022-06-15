<template>

<Map v-on:idSet="retrieveData"/>

<div v-if="success">
    este es un test papus
    <p>State name: {{states}}</p>
    <p>Total population: {{total_population}}</p>
    <p>Unvaccinated Population: {{unvaccinated_population}}</p>
    <p>Vaccinated Population:{{vaccinated_population}}</p>
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
            success: false
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