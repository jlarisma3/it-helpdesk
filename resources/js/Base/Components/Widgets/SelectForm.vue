<template xmlns="http://www.w3.org/1999/html">
  <div>
    <label class="block text-sm font-medium text-gray-700">{{ label }}</label>
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

export default defineComponent({
    name: "SelectForm",

    components: { ErrorMessage },

    props: [
      'label',
      'name',
      'modelValue',
      'error',
    ],

    emits: ['update:modelValue'],

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