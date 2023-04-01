<template>
    <nav class="space-y-1" aria-label="Sidebar">
        <a v-for="item in filters" :key="item.name" :href="item.href" :class="[item.current ? 'bg-gray-300 text-gray-900' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900', 'group flex items-center rounded-md px-3 py-2 text-sm font-medium']" :aria-current="item.current ? 'page' : undefined">
            <span class="truncate">{{ item.name }}</span>
            <span v-if="item.count" :class="[item.current ? 'bg-white' : 'bg-gray-100 text-gray-600 group-hover:bg-gray-200', 'ml-auto inline-block rounded-full py-0.5 px-3 text-xs']">{{ item.count }}</span>
        </a>
    </nav>
</template>
<script>
import { defineComponent } from 'vue'

const filters = [
    { name: 'Open', href: '#', current: true, count: '5' },
    { name: 'Queued', href: '#', current: false },
    { name: 'Ongoing', href: '#', current: false, count: '19' },
    { name: 'Fixed', href: '#', current: false },
    { name: 'Closed', href: '#', current: false },
]

export default defineComponent({
    name: "Filter",

    setup() {
        return {
            filters
        }
    },

    /*components: {},*/

    /*props: [],*/

    /*emits: [],*/

    /*
    data() {
        return {}
    },*/

    /*
    computed() {},
    */

    /*
    methods() {},
    */
})
</script>
