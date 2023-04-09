<template>
    <app>
        <template #main-content>
            <Statistics />
            <div class="mt-12">
<!--                <Table>
                    <template #table-header>
                        <div class="sm:flex-auto">
                            <h1 class="text-base font-semibold leading-6 text-gray-900">Your Tickets</h1>
                            <p class="mt-2 text-sm text-gray-700">A list of all the tickets in your account.</p>
                        </div>
                    </template>
                </Table>-->
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
