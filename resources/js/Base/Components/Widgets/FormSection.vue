<template>
    <div>
        <form @submit.prevent="$emit('submitted')">
            <div class="space-y-12">
                <div class="grid grid-cols-1 gap-x-8 gap-y-10 border-b border-gray-900/10 pb-12 md:grid-cols-3">
                    <div>
                        <slot name="form-header"></slot>
                    </div>
                    <slot name="form"></slot>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6" v-if="hasActions">
                <slot name="actions"></slot>
            </div>
        </form>
    </div>
</template>
<script>
import { defineComponent } from 'vue'

export default defineComponent({
    name: "FormSection",

    /*components: {},*/

    props: [],

    emits: ['submitted'],

    /*
    data() {
        return {}
    },*/

    computed: {
        hasActions() {
            return !! this.$slots.actions;
        }
    },

    /*
    methods() {},
    */
})
</script>
