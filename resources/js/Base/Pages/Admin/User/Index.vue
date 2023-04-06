<template>
    <App>
        <template #main-content>
            <Table>
                <template #table-header>
                    <div class="sm:flex-auto">
                        <h1 class="text-base font-semibold leading-6 text-gray-900">Your Tickets</h1>
                        <p class="mt-2 text-sm text-gray-700">A list of all the tickets in your account.</p>
                    </div>
                    <LinkButton :href="route('user.create')" v-if="userCan('user.create')">
                        Create User
                    </LinkButton>
                </template>
            </Table>
        </template>
    </App>
</template>
<script>
import { defineComponent } from 'vue'
import App from "../../../Layout/Dashboard/App.vue";
import Table from "../../../Components/Widgets/Table.vue";
import LinkButton from "../../../Components/Widgets/LinkButton.vue";

export default defineComponent({
    name: "Index",

    components: {LinkButton, Table, App},

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
