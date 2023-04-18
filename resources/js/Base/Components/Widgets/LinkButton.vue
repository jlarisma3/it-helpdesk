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
    btn_class : {
      type: String,
      default: 'submit'
    },
    href: {
      type: String,
      default: '#'
    }
  },
    computed: {
        css() {
            return {
                'submit': 'focus:ring-gray-300 bg-gray-800 text-white hover:bg-gray-700 active:bg-gray-900 focus:border-gray-900',
                'cancel': 'focus:ring-gray-100 bg-white text-gray-700 hover:bg-gray-100 active:bg-gray-100 border-gray-600',
                'danger': 'focus:ring-gray-100 bg-red-600 text-white hover:bg-red-100 active:bg-red-100',
            }[this.btn_class]
        }
    }
})
</script>
