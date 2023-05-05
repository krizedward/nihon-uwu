import './bootstrap';
import {createApp} from 'vue'
import ExampleComponent from './components/ExampleComponent.vue'

const app = createApp({})

require('./bootstrap');

app.component('example-component', ExampleComponent)

app.mount('#app')
// membuat single page aplikasi lebih enak pakai vue