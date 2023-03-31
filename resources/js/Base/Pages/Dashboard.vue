<template>
    <app>
        <template #main-content>
            <Statistics />
            <div class="mt-12">
                <Table />
            </div>
        </template>
    </app>
</template>
<script>
import { defineComponent } from 'vue'
import App from "../Layout/Dashboard/App.vue";
import Statistics from "../Components/Utilities/Statistics.vue";
import Table from "../Components/Widgets/Table.vue";

export default defineComponent({
    name: "Dashboard",

    components: {Table, Statistics, App},

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
