<template>
    <App>
        <template #side-content>
            <div>
                Sides
            </div>
        </template>
        <template #main-content>
            <div class="xl:pr-96">
                Main
            </div>
        </template>
    </App>
</template>
<script>
import { defineComponent } from 'vue'
import App from "../../Layout/Dashboard/App.vue";

export default defineComponent({
    name: "Index",
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
