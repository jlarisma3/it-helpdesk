<template>
    <div>
        <div class="sm:flex sm:items-center">
            <slot name="table-header" />
        </div>
        <div class="mt-8 flow-root">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead>
                        <tr>
<!--                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">
                                <a href="#" class="group inline-flex">
                                    ID
                                    <span class="invisible ml-2 flex-none rounded text-gray-400 group-hover:visible group-focus:visible">
                      <ChevronDownIcon class="h-5 w-5" aria-hidden="true" />
                    </span>
                                </a>
                            </th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                <a href="#" class="group inline-flex">
                                    Subject
                                    <span class="ml-2 flex-none rounded bg-gray-100 text-gray-900 group-hover:bg-gray-200">
                      <ChevronDownIcon class="h-5 w-5" aria-hidden="true" />
                    </span>
                                </a>
                            </th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                <a href="#" class="group inline-flex">
                                    Group
                                    <span class="invisible ml-2 flex-none rounded text-gray-400 group-hover:visible group-focus:visible">
                      <ChevronDownIcon class="invisible ml-2 h-5 w-5 flex-none rounded text-gray-400 group-hover:visible group-focus:visible" aria-hidden="true" />
                    </span>
                                </a>
                            </th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                <a href="#" class="group inline-flex">
                                    Assignee
                                    <span class="invisible ml-2 flex-none rounded text-gray-400 group-hover:visible group-focus:visible">
                      <ChevronDownIcon class="invisible ml-2 h-5 w-5 flex-none rounded text-gray-400 group-hover:visible group-focus:visible" aria-hidden="true" />
                    </span>
                                </a>
                            </th>
                            <th scope="col" class="relative py-3.5 pl-3 pr-0">
                                <span class="sr-only">Edit</span>
                            </th>-->

                            <template v-for="(column, i) in sortables" :key="i">
                                <th scope="col" :class="[{'sm:pl-0' : i == 0}, 'py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900']">
                                    <a v-if="column.sortable" @click="sortData(column)" href="javascript:void(0)" class="group inline-flex">
                                        {{ column.label }}
                                        <span class="ml-2 flex-none rounded text-gray-400 group-hover:visible group-focus:visible">
                                            <ChevronDownIcon v-if="column.direction != undefined && column.direction == 'desc'" class="h-5 w-5" aria-hidden="true" />
                                            <ChevronUpIcon v-else class="h-5 w-5" aria-hidden="true" />
                                        </span>
                                    </a>
                                    <span v-else>{{ column.label }}</span>
                                </th>
                            </template>
                            <th v-if="hasActions" scope="col" class="relative py-3.5 pl-3 pr-0">&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                            <tr  v-for="(item, k) in source_data" :key="k">
                                <td v-for="(column, i) in columns" :key="i" :class="[{'sm:pl-0' : (i == 0)}, 'whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900']" >
                                    {{ tableData(column, item) }}
                                </td>
                                <!-- actions -->
                                <td v-if="hasActions">
                                    <slot name="actions" :data="item"></slot>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <Page
            v-if="page_settings"
            :settings="page_settings"
            @update:page="setFilter"
        />
    </div>
</template>

<script>
import { defineComponent } from "vue";
import { ChevronDownIcon, ChevronUpIcon } from '@heroicons/vue/20/solid'
import Page from "./Page.vue";

export default defineComponent({
    name: "Table",

    components: { ChevronUpIcon, ChevronDownIcon, Page },

    props: [
        'columns',
        'data',
        'has_actions',
        'source'
    ],

    data() {
        return {
            source_data: [],
            page_settings: null,
            filter: {},
            sortables: []

        }
    },

    computed: {
        hasActions() {
            return !! this.$slots.actions;
        }
    },

    methods: {
        tableData(setting, item) {
            if(setting.column.match(/\./) != null)
            {
                let rel = setting.column.split('.');
                let tmp;
                for (let i = 0; i < rel.length; i++) {
                    if(i == 0) {
                        tmp = item[rel[i]];
                    }
                    else {
                        tmp = tmp == null ? '' : tmp[rel[i]];
                    }
                }

                return tmp || '--';
            }

            return item[setting.column] || '--';
        },

        getSource() {
            axios[this.source.method](this.source.url + this.getQueryFilter()).then((res) => {
                this.initTable(res.data);
            });
        },

        initTable(response) {
            this.source_data = response.data;
            this.page_settings = response.meta;
        },

        setFilter(filter) {
            this.filter[filter.type] = filter;

            this.getSource();
        },

        sortData(column) {

            let sort;
            for(let x in this.sortables) {
                if(column.column == this.sortables[x].column) {
                    this.sortables[x].direction = this.sortables[x].direction === 'asc'
                        ? 'desc'
                        : 'asc';

                    sort = this.sortables[x];
                } else this.sortables[x].direction = 'asc';
            }

            let filter = {
                type: 'sort',
                value: encodeURI(
                    JSON.stringify({
                        column: sort.column,
                        direction: sort.direction
                    })
                )
            }

            this.setFilter(filter);
        },

        getQueryFilter() {
            let url = [];

            let filter;
            for(filter in this.filter) {
                url.push(this.filter[filter].type + '=' + this.filter[filter].value);
            }

            return (url.length > 0)
                ? '?' + url.join('&')
                : '';
        },

        setSortables() {
            /*this.sortables = this.columns.filter((column) => {
                return column.sortable == true;
            });*/

            this.sortables = this.columns;
        }
    },

    beforeMount() {
        if(this.source != undefined)
            this.getSource();

        this.setSortables();
    }
})
</script>
