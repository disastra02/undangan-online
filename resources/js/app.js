require('./bootstrap');
require('./all');
import {createApp} from 'vue';
import router from './routes';

let app = createApp({}).use(router);
app.component('admin', require('./layouts/Admin.vue').default);

app.mount("#app");
