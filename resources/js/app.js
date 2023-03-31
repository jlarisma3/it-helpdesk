import {
    CalendarIcon,
    ChartPieIcon,
    DocumentDuplicateIcon,
    FolderIcon,
    HomeIcon,
    UsersIcon
} from "@heroicons/vue/24/outline";

require('./bootstrap');

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';
const projectDir = window.document.getElementsByTagName('project-view')[0]?.innerText || 'Project';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => require(`./${projectDir}/${name}.vue`),
    setup({ el, app, props, plugin }) {

        const vApp =  createApp({ render: () => h(app, props) })
            .use(plugin)
            .mixin({ methods: { route } })

        vApp.config.globalProperties.userCan = (routeName) => {
            if(routeName.length == 0)
                return false;

            let auths = usePage()
                .props
                .value?.access;

            return auths.some(r => r.route_name == routeName);
        };

        vApp.config.globalProperties.getMenu = (page) => {
            return [
                { name: 'Dashboard', href: '#', icon: HomeIcon, current: true },
                { name: 'Tickets', href: '#', icon: UsersIcon, current: false },
                { name: 'Assets', href: '#', icon: FolderIcon, current: false },
                { name: 'Users', href: '#', icon: CalendarIcon, current: false },
                { name: 'Branches', href: '#', icon: DocumentDuplicateIcon, current: false },
                { name: 'Reports', href: '#', icon: ChartPieIcon, current: false },
            ];
        }

        vApp.config.globalProperties.profileNavigation = (page) => {
            return [
                { name: 'Your profile s', href: '#' },
                { name: 'Sign out', href: '#' },
            ];
        }


        vApp.mount(el)

        return vApp;
    },
});

InertiaProgress.init({ color: '#4B5563' });
