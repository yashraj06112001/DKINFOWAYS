/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';
import { createApp } from 'vue';

/**
 * Next, we will create a fresh Vue application instance. You may then begin
 * registering components with the application instance so they are ready
 * to use in your application's views. An example is included for you.
 */

const app = createApp({});

import ExampleComponent from './components/ExampleComponent.vue';
import FormComponent from './components/FormComponent.vue';
import HeaderComponent from './components/HeaderComponent.vue';
import SignupComponent from './components/SignupComponent.vue';
import LoginerrorComponent from './components/LoginerrorComponent.vue';
import OptionComponent from './components/OptionComponent.vue';
import StockgetComponent from './components/StockgetComponent.vue';
import ProfileComponent from './components/ProfileComponent.vue'; 
import StockshowComponent from './components/StockshowComponent.vue';
app.component('example-component', ExampleComponent);
app.component('form-component', FormComponent);
app.component('header-component',HeaderComponent);
app.component('signup-component',SignupComponent);
app.component('loginerror-component',LoginerrorComponent);
app.component('option-component', OptionComponent);
app.component('stockget-component',StockgetComponent);
app.component('profile-component', ProfileComponent);
app.component('stockshow-component',StockshowComponent);



/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });

/**
 * Finally, we will attach the application instance to a HTML element with
 * an "id" attribute of "app". This element is included with the "auth"
 * scaffolding. Otherwise, you will need to add an element yourself.
 */

app.mount('#app');
