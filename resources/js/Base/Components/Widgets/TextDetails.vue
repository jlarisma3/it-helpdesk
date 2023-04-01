<template>
    <div class="text-gray-800">
        <dt class="text-sm font-semibold">{{ label }}</dt>
        <dd class="mt-2 text-sm">
            <span class="flex-grow">{{ value }}</span>
        </dd>
    </div>
</template>
<script>
import { defineComponent } from 'vue'

export default defineComponent({
    name: "TextDetails",

    /*components: {},*/

    props: ['label', 'value'],

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
