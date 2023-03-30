<template>
    <app>
        <template #main-content>
            Hello
        </template>
    </app>
</template>
<script>
import { defineComponent } from 'vue'
import App from "./Layout/Dashboard/App.vue";

export default defineComponent({
    name: "TestPage",

    components: {App},

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
