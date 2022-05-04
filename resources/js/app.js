import { createApp, h } from 'vue'
import { createInertiaApp, Link } from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'

createInertiaApp({
  resolve: name => require(`./Pages/${name}`),
  title: title => title ? `${title} - Inertia App` : 'Inertia App',
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .component("Link", Link)
      .mount(el)
  },
});

InertiaProgress.init({
    delay: 250,
    color: '#35a3fc',
    includeCSS: true,
    showSpinner: true,
});