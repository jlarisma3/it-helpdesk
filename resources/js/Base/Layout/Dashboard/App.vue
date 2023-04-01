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

            <main class="py-10">
                <div class="px-4 sm:px-6 lg:px-8">
                    <!-- Your content -->
                    <slot name="main-content">
                        <!-- main content here -->
                    </slot>
                </div>
            </main>
            <!-- aside content -->
            <aside v-if="hasSideContent" class="fixed inset-y-0 left-72 hidden w-96 overflow-y-auto border-r border-gray-200 px-4 py-6 sm:px-6 lg:px-8 xl:block">
                <slot name="side-content">
                    <!-- side content here -->
                </slot>
            </aside>
        </div>
    </div>
</template>

<script setup>
import { ref, computed, useSlots } from 'vue'

import {
    Bars3Icon
} from '@heroicons/vue/24/outline'

import Sidebar from "../../Components/Dashboard/Sidebar.vue";
import Header from "../../Components/Dashboard/Header.vue";

const sidebarOpen = ref(false)
const sideContent = useSlots()
const mainContent = useSlots()

const hasSideContent = computed((props, context) => {
    console.log(mainContent);
});

</script>
