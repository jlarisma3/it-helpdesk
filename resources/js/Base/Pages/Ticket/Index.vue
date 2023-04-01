<template>
    <AppSplit>
        <template #side-content>
            <div class="relative min-h-screen overflow-hidden">
                <div class="absolute inset-0 h-full w-full">
                    <div class="p-8">
                        <Filter />
                    </div>
                </div>
            </div>
        </template>
        <template #main-content>
            <div class="p-8">
                <Table>
                    <template #table-header>
                        <div class="sm:flex-auto">
                            <h1 class="text-base font-semibold leading-6 text-gray-900">Your Open Tickets</h1>
                            <p class="mt-2 text-sm text-gray-700">A list of all the tickets with OPEN status.</p>
                        </div>
                        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                            <button type="button" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create Ticket</button>
                        </div>
                    </template>
                </Table>
            </div>
        </template>
    </AppSplit>
</template>
<script>
import { defineComponent } from 'vue'
import Table from "../../Components/Widgets/Table.vue";
import Filter from "../../Components/Utilities/Filter.vue";
import AppSplit from "../../Layout/Dashboard/AppSplit.vue";

export default defineComponent({
    name: "Index",
    components: {Filter, Table, AppSplit},

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
