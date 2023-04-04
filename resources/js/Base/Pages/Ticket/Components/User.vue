<template>
    <div>
        <h2 class="sr-only">Details</h2>
        <div class="space-y-4 px-8">
<!--            <div class="flex items-center space-x-2">
                <LockOpenIcon class="h-5 w-5 text-green-500" aria-hidden="true" />
                <span class="text-sm font-medium text-green-700">Open Issue</span>
            </div>
            <div class="flex items-center space-x-2">
                <ChatBubbleLeftEllipsisIcon class="h-5 w-5 text-gray-400" aria-hidden="true" />
                <span class="text-sm font-medium text-gray-900">4 comments</span>
            </div>
            <div class="flex items-center space-x-2">
                <CalendarIcon class="h-5 w-5 text-gray-400" aria-hidden="true" />
                <span class="text-sm font-medium text-gray-900">Created on <time datetime="2020-12-02">Dec 2, 2020</time></span>
            </div>-->
            <UserSmall />
            <div class="flex items-center space-x-2">
                <ChatBubbleLeftEllipsisIcon class="h-5 w-5 text-gray-400" aria-hidden="true" />
                <span class="text-sm font-medium text-gray-900">
                    Cebu Main Office, Cebu City
                </span>
            </div>
            <div class="flex items-center space-x-2">
                <CalendarIcon class="h-5 w-5 text-gray-400" aria-hidden="true" />
                <span class="text-sm font-medium text-gray-900">
                    5 Tickets Filed
                </span>
            </div>
        </div>
        <div class="mt-6 border-t border-gray-200 py-6">
            <div class="space-y-4 px-8">
<!--                <div>
                    <h2 class="text-sm font-medium text-gray-500">Ticket Type</h2>
                    <span class="text-sm font-medium text-gray-900">
                        Request
                    </span>
                </div>-->
                <TextDetails
                    :value="'Request'"
                    :label="'Ticket Type'"
                />
                <TextDetails
                    :value="'Support Group'"
                    :label="'Assigned Group'"
                />
                <TextDetails
                    :value="'April 03, 2023'"
                    :label="'Submitted At'"
                />

            </div>
        </div>
        <div class="mt-6 border-t space-y-4 px-8 border-gray-200 py-6">
            <Toggle :label="'Assign Assets'" />
            <template v-if="true">
                <SelectForm :label="'Asset Category'">
                    <option selected>Hardware</option>
                </SelectForm>
                <SelectForm :label="'Asset Code'">
                    <option selected>Acer Monitor (ACER-MON-10001)</option>
                </SelectForm>
            </template>
        </div>
        <div class="mt-6 border-t px-8 border-gray-200 py-6">
            <Toggle :label="'Assign To Me'" />
        </div>
    </div>
</template>
<script>
import { defineComponent } from 'vue'
import UserSmall from "../../../Components/Widgets/User.vue";
import {
    CalendarIcon,
    ChatBubbleLeftEllipsisIcon,
    LockOpenIcon
} from '@heroicons/vue/20/solid'
import Toggle from "../../../Components/Widgets/Toggle.vue";
import TextDetails from "../../../Components/Widgets/TextDetails.vue";
import SelectForm from "../../../Components/Widgets/SelectForm.vue";

export default defineComponent({
    name: "User",

    components: {
        SelectForm,
        TextDetails,
        Toggle,
        CalendarIcon,
        ChatBubbleLeftEllipsisIcon,
        LockOpenIcon,
        UserSmall
    }

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
