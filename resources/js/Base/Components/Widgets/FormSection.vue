<template>
    <div>
        <form @submit.prevent="$emit('submitted')">
            <slot name="form"></slot>

            <div class="mt-3 flex items-center justify-end text-right" v-if="hasActions">
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
