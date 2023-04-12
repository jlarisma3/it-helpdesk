<template>
    <div class="flex items-center justify-between border-t border-gray-200 bg-white py-3">
        <div class="flex flex-1 justify-between sm:hidden">
            <a href="#" class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
            <a href="#" class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
        </div>
        <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
            <div>
                <p class="text-sm text-gray-700">
                    Showing
                    {{ ' ' }}
                    <span class="font-medium">{{ settings.from }}</span>
                    {{ ' ' }}
                    to
                    {{ ' ' }}
                    <span class="font-medium">{{ settings.to }}</span>
                    {{ ' ' }}
                    of
                    {{ ' ' }}
                    <span class="font-medium">{{ settings.total }}</span>
                    {{ ' ' }}
                    results
                </p>
            </div>
            <div>
                <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                    <a href="#" class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                        <span class="sr-only">Previous</span>
                        <ChevronLeftIcon class="h-5 w-5" aria-hidden="true" />
                    </a>
                    <!-- Current: "z-10 bg-indigo-600 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600", Default: "text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-offset-0" -->
                    <template v-for="(page, i) in pageNumbers">
                        <a @click="$emit('update:page', page)" v-if="page.is_page == true" href="javascript:void(0)"
                           :class="[
                               {'text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0':page.current == false},
                               {'bg-indigo-600 z-10 text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600': page.current == true }, 'relative inline-flex items-center px-4 py-2 text-sm font-semibold']">
                            {{ page.value }}
                        </a>
                        <span v-if="page.is_page == false" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 ring-1 ring-inset ring-gray-300 focus:outline-offset-0">
                            ...
                        </span>
                    </template>
                    <a v-if="this.settings.last_page > 1 && this.settings.last_page != this.settings.current_page" href="#" class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                        <span class="sr-only">Next</span>
                        <ChevronRightIcon class="h-5 w-5" aria-hidden="true" />
                    </a>
                </nav>
            </div>
        </div>
    </div>
</template>

<script>
import { defineComponent } from 'vue';
import { ChevronLeftIcon, ChevronRightIcon } from '@heroicons/vue/20/solid'

export default defineComponent({
    name: "Page",

    components: {ChevronLeftIcon, ChevronRightIcon},

    props: ['settings'],

    emits: ['update:page'],

    computed: {
        pageNumbers() {
            const pagelinks = [];
            for(let i = 1; i <= this.settings.last_page; i++) {
                if (i <= 3 || i > this.settings.last_page - 3) {
                    pagelinks.push({
                        value: i,
                        is_page: true,
                        type: 'page',
                        current: this.settings.current_page == i
                    })
                } else if(i >= this.settings.current_page - 2 && i <= this.settings.current_page + 2) {
                    pagelinks.push({
                        value: i,
                        is_page: true,
                        type: 'page',
                        current: this.settings.current_page == i
                    })
                } else {
                    pagelinks.push({
                        value: '...',
                        is_page: false,
                        type: 'page',
                        current: this.settings.current_page == i
                    })
                }
            }

            return pagelinks;
        }
    },

    mounted() {
        //console.log(this.settings)
    }
})
</script>
