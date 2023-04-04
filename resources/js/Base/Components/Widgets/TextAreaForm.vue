<template>
<div>
    <label for="about" class="block text-sm font-medium leading-6 text-gray-900">{{ label }}</label>
    <div class="mt-2">
        <textarea id="about" name="about" rows="3" class="block w-full rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:py-1.5 sm:text-sm sm:leading-6" />
    </div>
    <p class="mt-3 text-sm leading-6 text-gray-600">Write a few details about your concern.</p>
</div>
</template>
<script>
import { defineComponent } from 'vue'

export default defineComponent({
    name: "TextAreaForm",

    /*components: {},*/

    props: ['label'],

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
