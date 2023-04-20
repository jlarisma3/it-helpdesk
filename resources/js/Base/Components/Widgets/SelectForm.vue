<template xmlns="http://www.w3.org/1999/html">
  <div>
    <div class="flex items-center space-x-2">
        <label class="block text-sm font-medium text-gray-700">{{ label }}</label>
        <a v-if="has_add === true" @click="$emit('click:add_new')" class="text-sm text-indigo-300 flex items-center" href="javascript:void(0)">
            <PlusSmallIcon class="h-5 w-4" />
            Add new
        </a>
    </div>
    <div class="mt-1">
      <select
          v-model="proxySelected"
          :name="name"
          class="block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
       <option value="default_val">-- Select --</option>
       <slot></slot>
      </select>
    </div>

    <error-message v-if="error" :message="error" />
  </div>
</template>
<script>
import { defineComponent } from 'vue'
import ErrorMessage from './ErrorMessage';
import { PlusSmallIcon } from "@heroicons/vue/24/outline";

export default defineComponent({
    name: "SelectForm",

    components: { ErrorMessage,PlusSmallIcon },

    props: [
        'label',
        'name',
        'modelValue',
        'error',
        'has_add'
    ],

    emits: ['update:modelValue', 'click:add_new'],

    /*
    data() {
        return {}
    },*/

  computed: {
    proxySelected: {
      get() {
        return this.modelValue;
      },

      set(val) {
        this.$emit("update:modelValue", val);
      },
    },
  },

    /*
    methods() {},
    */
})
</script>
