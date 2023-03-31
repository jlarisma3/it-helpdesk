<template>
  <button :type="type" :class="css" class="inline-flex items-center
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
    css : {
      type: String,
      default: 'px-4 py-2 focus:ring-gray-300 bg-gray-800 text-white hover:bg-gray-700 active:bg-gray-900 focus:border-gray-900'
    }
  }
})
</script>
