<template>
    <AppSplit>
        <template #side-content>
            <div class="relative min-h-screen overflow-hidden">
                <div class="absolute inset-0 h-full w-full">
                    <div class="py-8">
                        <User />
                    </div>
                </div>
            </div>
        </template>
        <template #main-content>
            <div class="p-8">
                <div class="sm:flex items-center justify-between">
                    <div>
                        <div class="sm:flex items-center gap-x-3">
                            <EnvelopeIcon class="text-gray-400 h-6 w-6" />
                            <h1 class="font-bold text-gray-800">Damaged monitor</h1>
                        </div>
                        <div class="text-sm text-gray-500">
                            <span>Yesterday 04:00pm • John Doe • Support Group</span>
                        </div>
                    </div>
                    <SelectMenuWithText />
                </div>
                <div class="mt-8">
                    <TextDetails
                        :label="'Description:'"
                        :value="'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer elementum neque nec ipsum laoreet,\n'+
'                        vel facilisis erat ultrices. Proin non hendrerit nunc. In non dictum elit. Vestibulum ac orci quis\n'+
'                        mi dignissim venenatis. Vestibulum neque felis, condimentum consectetur dolor id, volutpat sollicitudin neque.\n'+
'                        Maecenas dignissim sapien at dolor pharetra rutrum'"
                    />
                </div>
            </div>
            <div class="border-t border-b border-gray-200 p-8">
                <CommentBox />
            </div>
            <Comment class="mt-4 p-8"/>
        </template>
    </AppSplit>
</template>
<script>
import { defineComponent } from 'vue'
import AppSplit from "../../Layout/Dashboard/AppSplit.vue";
import { EnvelopeIcon } from "@heroicons/vue/20/solid";
import TextDetails from "../../Components/Widgets/TextDetails.vue";
import TextForm from "../../Components/Widgets/TextForm.vue";
import CommentBox from "../../Components/Utilities/CommentBox.vue";
import Comment from "./Components/Comment.vue";
import User from "./Components/User.vue";
import SelectMenuWithText from "../../Components/Widgets/SelectMenuWithText.vue";

export default defineComponent({
    name: "Details",

    components: {SelectMenuWithText, User, Comment, CommentBox, TextForm, TextDetails, AppSplit, EnvelopeIcon}

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
