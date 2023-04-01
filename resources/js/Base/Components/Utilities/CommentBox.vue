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
    <form action="#">
        <TabGroup v-slot="{ selectedIndex }">
            <TabList class="flex items-center">
                <Tab as="template" v-slot="{ selected }">
                    <button :class="[selected ? 'bg-gray-100 text-gray-900 hover:bg-gray-200' : 'bg-white text-gray-500 hover:bg-gray-100 hover:text-gray-900', 'rounded-md border border-transparent px-3 py-1.5 text-sm font-medium']">Write</button>
                </Tab>
                <Tab as="template" v-slot="{ selected }">
                    <button :class="[selected ? 'bg-gray-100 text-gray-900 hover:bg-gray-200' : 'bg-white text-gray-500 hover:bg-gray-100 hover:text-gray-900', 'ml-2 rounded-md border border-transparent px-3 py-1.5 text-sm font-medium']">Preview</button>
                </Tab>
            </TabList>
            <TabPanels class="mt-2">
                <TabPanel class="-m-0.5 rounded-lg p-0.5">
                    <label for="comment" class="sr-only">Comment</label>
                    <div>
                        <textarea rows="5" name="comment" id="comment" class="block w-full rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:py-1.5 sm:text-sm sm:leading-6" placeholder="Add your comment..." />
                    </div>
                </TabPanel>
                <TabPanel class="-m-0.5 rounded-lg p-0.5">
                    <div class="border-b">
                        <div class="mx-px mt-px px-3 pb-12 pt-2 text-sm leading-5 text-gray-800">Preview content will render here.</div>
                    </div>
                </TabPanel>
            </TabPanels>
        </TabGroup>
        <div class="mt-2 flex justify-end">
            <button type="submit" class="inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Post</button>
        </div>
    </form>
</template>

<script setup>
import { Tab, TabGroup, TabList, TabPanel, TabPanels } from '@headlessui/vue'
import { AtSymbolIcon, CodeBracketIcon, LinkIcon } from '@heroicons/vue/20/solid'
</script>
