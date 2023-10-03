import { createApp } from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'
import './style.css'
import Vue from 'vue'
// import VueSlickCarousel from "vue-slick-carousel";
import "vue-slick-carousel/dist/vue-slick-carousel.css";
import "vue-slick-carousel/dist/vue-slick-carousel-theme.css";
// Vue.component("slick-carousel", VueSlickCarousel);


createApp(App)
.use(store)
.use(router).mount('#app')
