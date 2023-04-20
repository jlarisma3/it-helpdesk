<template>
    <App>
        <template #exterior>
            <BranchForm
                :formshow="modal.branch"
                @close="() => { modal.branch = false }"
            />

            <DepartmentForm
                :formshow="modal.department"
                @close="() => { modal.department = false }"
            />
        </template>
        <template #main-content>
            <!-- form -->
            <FormSection @submitted="submit">
                <template #form-header>
                    <h2 class="text-base font-semibold leading-7 text-gray-900">User Info</h2>
                    <p class="mt-1 text-sm leading-6 text-gray-600">This information will be displayed publicly so be careful what you share.</p>
                </template>

                <template #form>
                    <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 md:col-span-2">
                        <div class="sm:col-span-3">
                            <TextForm
                                :type="'text'"
                                :label="'First Name *'"
                                :model-value="form.first_name"
                                :error="form.errors.first_name"
                                @update:model-value="(d) => { form.first_name = d; }"
                            />
                        </div>

                        <div class="sm:col-span-3">
                            <TextForm
                                :type="'text'"
                                :label="'Last Name *'"
                                :model-value="form.last_name"
                                :error="form.errors.last_name"
                                @update:model-value="(d) => { form.last_name = d; }"
                            />
                        </div>

                        <div class="sm:col-span-4">
                            <TextForm
                                :type="'email'"
                                :label="'Email *'"
                                :model-value="form.email"
                                :error="form.errors.email"
                                @update:model-value="(d) => { form.email = d; }"
                            />
                        </div>

                        <div class="sm:col-span-4">
                            <TextForm
                                :type="'text'"
                                :label="'Home Address'"
                                :model-value="form.address"
                                :error="form.errors.address"
                                @update:model-value="(d) => { form.address = d; }"
                            />
                        </div>

                        <div class="sm:col-span-4">
                            <TextForm
                                :type="'text'"
                                :label="'Contact No.'"
                                :model-value="form.contact_no"
                                :error="form.errors.contact_no"
                                @update:model-value="(d) => { form.contact_no = d; }"
                            />
                        </div>

                        <div class="sm:col-span-3">
                            <SelectForm
                                @click:add_new="() => { modal.branch = true }"
                                :has_add="true"
                                :label="'Branch *'"
                                :model-value="form.branch_id"
                                :error="form.errors.branch_id"
                                @update:model-value="(d) => { form.branch_id = d; }"
                            >
                                <option v-for="(branch, i) in $page.props.common.branches" :key="i" :value="branch.id">
                                    {{ branch.name }}
                                </option>
                            </SelectForm>
                        </div>

                        <div class="sm:col-span-3">
                            <SelectForm
                                @click:add_new="() => { modal.department = true }"
                                :has_add="true"
                                :label="'Department *'"
                                :model-value="form.department_id"
                                :error="form.errors.department_id"
                                @update:model-value="(d) => { form.department_id = d; }"
                            >
                                <option v-for="(department, i) in $page.props.common.departments" :key="i" :value="department.id">
                                    {{ department.name }}
                                </option>
                            </SelectForm>
                        </div>

                        <div class="sm:col-span-3">
                            <SelectForm
                                :label="'User Role *'"
                                :model-value="form.role_id"
                                :error="form.errors.role_id"
                                @update:model-value="(d) => { form.role_id = d; }"
                            >
                                <option v-for="(role, i) in $page.props.common.roles" :key="i" :value="role.id">
                                    {{ role.name }}
                                </option>
                            </SelectForm>
                        </div>

                        <div class="sm:col-span-3">
                            <SelectForm
                                :class="{'hidden': form.role_id != 2}"
                                :label="'Support Group'"
                                :model-value="form.support_group_id"
                                :error="form.errors.support_group_id"
                                @update:model-value="(d) => { form.support_group_id = d; }"
                            >
                                <option v-for="(group, i) in $page.props.common.groups" :key="i" :value="group.id">
                                    {{ group.name }}
                                </option>
                            </SelectForm>
                        </div>

                        <div class="sm:col-span-3">
                            <SelectForm
                                :label="'User Status *'"
                                :model-value="form.status_id"
                                :error="form.errors.status_id"
                                @update:model-value="(d) => { form.status_id = d; }"
                            >
                                <option v-for="(st, i) in $page.props.common.status" :key="i" :value="st.id">
                                    {{ st.name }}
                                </option>
                            </SelectForm>
                        </div>
                    </div>
                </template>

                <template #actions>
                    <LinkButton :href="route('user.index')" :btn_class="'cancel'">
                        Cancel
                    </LinkButton>
                    <Button>
                        Save
                    </Button>
                </template>
            </FormSection>
        </template>
    </App>
</template>
<script>
import { defineComponent } from 'vue'
import { useForm } from "@inertiajs/inertia-vue3";
import App from "../../../Layout/Dashboard/App.vue";
import FormSection from "../../../Components/Widgets/FormSection.vue";
import TextForm from "../../../Components/Widgets/TextForm.vue";
import SelectForm from "../../../Components/Widgets/SelectForm.vue";
import LinkButton from "../../../Components/Widgets/LinkButton.vue";
import Button from "../../../Components/Widgets/Button.vue";
import Modal from "../../../Components/Widgets/Modal.vue";
import BranchForm from "./Partials/BranchForm.vue";
import DepartmentForm from "./Partials/DepartmentForm.vue";

export default defineComponent({
    name: "Form",

    components: {DepartmentForm, BranchForm, Modal, Button, LinkButton, SelectForm, TextForm, FormSection, App},

    /*props: [],*/

    /*emits: [],*/


    data() {
        return {
            form: useForm({
                first_name: '',
                last_name: '',
                photo: null,
                email: '',
                address: '',
                contact_no: '',
                status_id: 'default_val',
                role_id: 'default_val',
                branch_id: 'default_val',
                department_id: 'default_val',
                support_group_id: 'default_val',
                password: '',
                _method: ''
            }),

            modal: {
                branch: false,
                department: false
            }
        }
    },

    /*
    computed() {},
    */


    methods: {
        submit() {
            console.log(this.form);
        },
    },

    beforeMount() {
        for(let i in this.$page.props.user) {
            if(this.form[i] !== undefined)
                this.form[i] = this.$page.props.user[i];
        }
    }

})
</script>
