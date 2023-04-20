<template>
    <Modal :show="formshow" :max-width="'xl'">
        <FormSection
            @submitted="createDept"
            :css="'p-8 gap-y-10 border-b border-gray-900/10'"
            :actioncss="'py-4 px-8 flex items-center justify-end gap-x-6'"
        >
            <template #form>
                <TextForm
                    :type="'text'"
                    :label="'Department Name'"
                    :model-value="dept_form.name"
                    :error="dept_form.errors.name"
                    @update:model-value="(d) => { dept_form.name = d; }"
                />
            </template>

            <template #actions>
                <Button
                    @click="$emit('close')"
                    :btn_class="'cancel'"
                >
                    Cancel
                </Button>
                <Button>
                    Save
                </Button>
            </template>
        </FormSection>
    </Modal>
</template>
<script>
import { defineComponent } from 'vue'
import FormSection from "../../../../Components/Widgets/FormSection.vue";
import TextForm from "../../../../Components/Widgets/TextForm.vue";
import Button from "../../../../Components/Widgets/Button.vue";
import Modal from "../../../../Components/Widgets/Modal.vue";
import {useForm} from "@inertiajs/inertia-vue3";

export default defineComponent({
    name: "DepartmentForm",

    components: { FormSection, TextForm, Button, Modal},

    props: ['formshow'],

    emits: ['close'],

    data() {
        return {
            dept_form: useForm({
                name: ''
            })
        }
    },

    /*
    computed() {},
    */


    methods:{
        createDept() {

        }
    },
})
</script>
