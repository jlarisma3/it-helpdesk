<template>
    <App>
        <template #main-content>
            <Table
                :columns="columns"
                :source="source"
            >
                <template #table-header>
                    <div class="sm:flex-auto">
                        <h1 class="text-base font-semibold leading-6 text-gray-900">Users</h1>
                        <p class="mt-2 text-sm text-gray-700">A list of all registered users under this system.</p>
                    </div>
                    <div class="pt-2 sm:pt-0">
                        <LinkButton :href="route('user.create')" v-if="userCan('user.create')">
                            Create User
                        </LinkButton>
                    </div>
                </template>
                <template #actions="{data}">
                    <a :href="route('user.show', {user: data.id})" class="text-sm text-indigo-600 hover:text-indigo-900">
                        View
                        <span class="sr-only">, {{ data.display_name }}</span>
                    </a>
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

const columns = [
    {label: 'ID', column: 'id', sortable: true},
    {label: 'Name', column: 'display_name', sortable: true},
    {label: 'Email', column: 'email', sortable: false},
    {label: 'Branch', column: 'branch', sortable: false},
    {label: 'Department', column: 'department', sortable: false},
];

const source = {
    url: route('user.all'),
    method: 'get'
};

export default defineComponent({
    name: "Index",

    components: {LinkButton, Table, App},

    setup() {
        return {
            columns,
            source
        }
    },

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
