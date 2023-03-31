<template>
  <Link :href="href" :class="css" class="inline-flex items-center px-4 py-2
   border border-transparent rounded-md font-semibold text-xs
   uppercase tracking-widest
  focus:outline-none
  focus:ring disabled:opacity-25
  transition">
    <slot></slot>
  </Link>
</template>

<script>
import { defineComponent } from 'vue'
import { Link } from '@inertiajs/inertia-vue3';

export default defineComponent({

  components: {
    Link
  },

  props: {
    css : {
      type: String,
      default: 'focus:ring-gray-300 bg-gray-800 text-white hover:bg-gray-700 active:bg-gray-900 focus:border-gray-900'
    },
    href: {
      type: String,
      default: '#'
    }
  }
})
</script>
