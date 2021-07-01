import Vue from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue'
import { InertiaProgress } from '@inertiajs/progress'
// import store from "./store";

InertiaProgress.init()

createInertiaApp({
    resolve: name => require(`./Pages/${name}`),
    setup({ el, app, props }) {
        new Vue({
            render: h => h(app, props),
        }).$mount(el)
    },
})





