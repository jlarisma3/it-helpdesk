<template>
  <button :type="type" :class="['px-4 py-2', css]" class="inline-flex items-center
   border border-transparent rounded-md font-semibold text-xs
   uppercase tracking-widest
  focus:outline-none
  focus:ring disabled:opacity-25
  transition">
    <slot></slot>
  </button>
</template>

<script>
import { defineComponent } from 'vue'

export default defineComponent({
  props: {
    type: {
      type: String,
      default: 'submit',
    },
    btn_class : {
      type: String,
      default: 'submit'
    },
  },

    computed: {
      css() {
          return {
              'submit': 'focus:ring-gray-300 bg-gray-800 text-white hover:bg-gray-700 active:bg-gray-900 focus:border-gray-900',
              'cancel': 'focus:ring-gray-100 bg-gray-100 text-gray-700 hover:bg-gray-100 active:bg-gray-100',
              'danger': 'focus:ring-gray-100 bg-red-600 text-white hover:bg-red-100 active:bg-red-100',
          }[this.btn_class]
      }
    }
})
</script>
