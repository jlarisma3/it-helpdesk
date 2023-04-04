<template>
    <App>
        <template #main-content>
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-3xl">
                    <FormSection>
                        <template #form>
                            <div class="space-y-12">
                                <div class="border-b border-gray-900/10 pb-12">
                                    <h2 class="text-base font-semibold leading-7 text-gray-900">Create A Ticket</h2>
                                    <p class="mt-1 text-sm leading-6 text-gray-600">Fill out form of your ticket</p>

                                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                        <div class="sm:col-span-4">
                                            <SelectForm :label="'Ticket Type'">
                                                <option selected>Request</option>
                                            </SelectForm>
                                        </div>

                                        <div class="sm:col-span-4">
                                            <SelectForm :label="'Assigned Group'">
                                                <option selected>IT Support</option>
                                            </SelectForm>
                                        </div>

                                        <div class="sm:col-span-4">
                                            <SelectForm :label="'Urgency'">
                                                <option selected>High</option>
                                            </SelectForm>
                                        </div>

                                        <div class="sm:col-span-4">
                                            <TextForm
                                                :type="'text'"
                                                :label="'Title'" />
                                        </div>

                                        <div class="sm:col-span-6">
                                            <TextAreaForm :label="'Description'" />
                                        </div>

                                        <div  class="col-span-full">
                                            <UploadForm />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </template>

                        <template #actions>
                            <Button>Save</Button>
                        </template>
                    </FormSection>
                </div>
            </div>
        </template>
    </App>
</template>
<script>
import { defineComponent } from 'vue'
import App from "../../Layout/Dashboard/App.vue";
import FormSection from "../../Components/Widgets/FormSection.vue";
import SelectForm from "../../Components/Widgets/SelectForm.vue";
import TextForm from "../../Components/Widgets/TextForm.vue";
import TextAreaForm from "../../Components/Widgets/TextAreaForm.vue";
import UploadForm from "../../Components/Widgets/UploadForm.vue";
import Button from "../../Components/Widgets/Button.vue";

export default defineComponent({
    name: "Form",

    components: {Button, UploadForm, TextAreaForm, TextForm, SelectForm, FormSection, App}

    /*props: [],*/

    /*emits: [],*/

    /*
    data() {
        return {}
    },*/

    /*
    computed() {},
    */

    /*
    methods() {},
    */
})
</script>
