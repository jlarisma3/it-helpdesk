<!--
  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<template>
    <!--
      This example requires updating your template:

      ```
      <html class="h-full bg-white">
      <body class="h-full">
      ```
    -->
    <div>
        <Sidebar />
        <div class="lg:pl-72">
            <div class="sticky top-0 z-40 flex h-16 shrink-0 items-center gap-x-4 border-b border-gray-200 bg-white px-4 shadow-sm sm:gap-x-6 sm:px-6 lg:px-8">
                <button type="button" class="-m-2.5 p-2.5 text-gray-700 lg:hidden" @click="sidebarOpen = true">
                    <span class="sr-only">Open sidebar</span>
                    <Bars3Icon class="h-6 w-6" aria-hidden="true" />
                </button>

                <!-- Separator -->
                <div class="h-6 w-px bg-gray-900/10 lg:hidden" aria-hidden="true" />

                <Header />
            </div>

            <div class="flex min-w-0 flex-1 flex-col overflow-hidden">
                <div class="relative z-0 flex flex-1 overflow-hidden">
                    <main class="relative z-0 flex-1 overflow-y-hidden focus:outline-none xl:order-last">
                        <slot name="main-content">
                            <!-- main content here -->
                        </slot>
                    </main>

                    <!-- aside content -->
                    <aside v-if="hasSideContent" class="hidden w-96 flex-shrink-0 border-r border-gray-200 xl:order-first xl:flex xl:flex-col">
                        <slot name="side-content">
                            <!-- side content here -->
                        </slot>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { defineComponent } from 'vue'

import {
    Bars3Icon
} from '@heroicons/vue/24/outline'

import Sidebar from "../../Components/Dashboard/Sidebar.vue";
import Header from "../../Components/Dashboard/Header.vue";

export default defineComponent({
    name: 'App',

    components: {Sidebar, Header, Bars3Icon},

    computed: {
        hasSideContent() {
            return !! this.$slots["side-content"];
        }
    }
})

</script>
