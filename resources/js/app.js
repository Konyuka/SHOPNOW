import Vue from 'vue'
import VueMeta from 'vue-meta'
import { createInertiaApp } from '@inertiajs/inertia-vue'
import { InertiaProgress } from '@inertiajs/progress'
import store from './store'


import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';
import swal from 'sweetalert2';

window.Swal = swal;
Vue.use(VueSweetalert2);
Vue.use(VueMeta)

Vue.mixin({ methods: { route: window.route } })

InertiaProgress.init()

createInertiaApp({
    resolve: name => require(`./Pages/${name}`),
    setup({ el, app, props }) {
        new Vue({
            store,
            metaInfo: {
                titleTemplate: title => (title ? `${title} - Multi Vendor` : 'Multi Vendor'),
            },
            render: h => h(app, props),
        }).$mount(el)
    },
})





