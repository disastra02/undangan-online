require('./bootstrap');
require('./all');
import {createApp} from 'vue';

let app = createApp({});
app.component('admin', require('./layouts/Admin.vue').default);
app.mount("#app");
