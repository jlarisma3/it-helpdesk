<template>
    <App>
        <template #side-content>
            <div class="relative min-h-[400px] overflow-hidden">
                <div class="absolute inset-0 h-full w-full">
                    <div class="mt-4">
                    </div>
                </div>
            </div>
        </template>
        <template #main-content>
            <div class="xl:pl-96">
                <div class="sm:flex items-center gap-x-3">
                    <EnvelopeIcon class="text-gray-400 h-6 w-6" />
                    <h1 class="font-bold text-gray-800">Damaged monitor</h1>
                </div>
                <div class="text-sm text-gray-500">
                    <span>Yesterday 04:00pm • John Doe • Support Group</span>
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
                <div class="mt-16">
                    <CommentBox />
                    <Comment class="mt-8 pt-8 border-t border-gray-200"/>
                </div>
            </div>
        </template>
    </App>
</template>
<script>
import { defineComponent } from 'vue'
import App from "../../Layout/Dashboard/App.vue";
import { EnvelopeIcon } from "@heroicons/vue/20/solid";
import TextDetails from "../../Components/Widgets/TextDetails.vue";
import TextForm from "../../Components/Widgets/TextForm.vue";
import CommentBox from "../../Components/Utilities/CommentBox.vue";
import Comment from "./Components/Comment.vue";

export default defineComponent({
    name: "Details",

    components: {Comment, CommentBox, TextForm, TextDetails, App, EnvelopeIcon}

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
