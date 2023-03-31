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
                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">
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
                            </th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                        <tr v-for="person in people" :key="person.email">
                            <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">{{ person.name }}</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ person.title }}</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ person.email }}</td>
                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ person.role }}</td>
                            <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm sm:pr-0">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900"
                                >Edit<span class="sr-only">, {{ person.name }}</span></a
                                >
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <Page />
    </div>
</template>

<script setup>
import { ChevronDownIcon } from '@heroicons/vue/20/solid'
import Page from "./Page.vue";

const people = [
    { name: '100012', title: 'Front-end Developer', email: 'lindsay.walton@example.com', role: 'Member' },
    { name: '100012', title: 'Front-end Developer', email: 'lindsay.walton@example.com', role: 'Member' },
    { name: '100012', title: 'Front-end Developer', email: 'lindsay.walton@example.com', role: 'Member' },
    { name: '100012', title: 'Front-end Developer', email: 'lindsay.walton@example.com', role: 'Member' },
    { name: '100012', title: 'Front-end Developer', email: 'lindsay.walton@example.com', role: 'Member' },
    // More people...
]
</script>
