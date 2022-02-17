require("./bootstrap");

//vue initialization
import { createApp } from "vue";
import ImageUploading from './components/ImageUploading.vue';

createApp(ImageUploading).mount('#app');