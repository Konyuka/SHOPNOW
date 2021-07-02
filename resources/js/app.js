import Vue from 'vue'
import VueMeta from 'vue-meta'
import { createInertiaApp } from '@inertiajs/inertia-vue'
import { InertiaProgress } from '@inertiajs/progress'
Vue.use(VueMeta)

// import store from "./store";
Vue.mixin({ methods: { route: window.route } })

InertiaProgress.init()

createInertiaApp({
    resolve: name => require(`./Pages/${name}`),
    setup({ el, app, props }) {
        new Vue({
            metaInfo: {
                titleTemplate: title => (title ? `${title} - Multi Vendor` : 'Multi Vendor'),
            },
            render: h => h(app, props),
        }).$mount(el)
    },
})





