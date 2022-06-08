//importamos vue
import { createApp } from 'vue';
//importamos la app de App.vue

import Signin from './Signin.vue';
import Signup from './Signup.vue';
import VaccineUpdate from './VaccineUpdate.vue';
import StateUpdate from './StateUpdate.vue';
import CreateVaccine from './CreateVaccine.vue';

//creamos la aplicacion y se le pasa el modulo principal
//montamos la app y como parametro sera el contenedor a donde se cargara la app

const login = createApp(Signin);
login.mount('#signin');

const signin = createApp(Signup);
signin.mount('#signup');

const vaccineUpdate = createApp(VaccineUpdate);
vaccineUpdate.mount('#vaccine_update');

const stateUpdate = createApp(StateUpdate);
stateUpdate.mount('#state_update');

const createVaccine = createApp(CreateVaccine);
createVaccine.mount('#create_vaccine')