<template>
    <div>
        <label class="block text-sm font-medium text-gray-700">{{ label }}</label>
        <div class="mt-1">
            <input
                :readonly="read_only || false"
                :value="modelValue"
                @input="$emit('update:modelValue', $event.target.value)"
                :type="type"
                :class="{ 'bg-gray-200': read_only }"
                class="block w-full rounded-md border-gray-300 sm:text-sm" />
        </div>

        <error-message v-if="error" :message="error" />
    </div>
</template>
<script>
import { defineComponent } from 'vue'
import ErrorMessage from './ErrorMessage';

export default defineComponent({
    name: "TextForm",

    components: { ErrorMessage },

    props: [
        'label',
        'type',
        'modelValue',
        'error',
        'read_only'
    ],

    emits: ['update:modelValue'],

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
