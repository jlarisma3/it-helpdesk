<template>
  <div>
    <!-- Profile Photo File Input -->
    <input type="file" class="hidden"
           ref="photo"
           @change="updatePhotoPreview">

    <!-- Current Profile Photo -->
    <div class="mt-2" v-show="! photoPreview">
      <img :src="profile.profile_photo_url" :alt="profile.name" class="h-20 w-20 object-cover">
    </div>

    <!-- New Profile Photo Preview -->
    <div class="mt-2" v-show="photoPreview">
        <span class="block w-20 h-20 bg-cover bg-no-repeat bg-center"
              :style="'background-image: url(\'' + photoPreview + '\');'">
        </span>
    </div>

    <button-action
        :css="'px-2.5 py-1.5 border-gray-500 bg-white text-gray-700 mr-2 mt-3'"
        type="button" @click.prevent="selectNewPhoto">
      Select New Photo
    </button-action>

  </div>
</template>
<script>
import { defineComponent } from 'vue'
import ButtonAction from "./Button";

let photourl = 'https://ui-avatars.com/api/?name=User&color=7F9CF5&background=random'
export default defineComponent({
    name: "PhotoForm",

    components: {
      ButtonAction
    },

    props: ['user'],

    /*emits: [],*/

    data() {
        return {
          photoPreview: null
        }
    },


    computed: {
      profile() {
        return this.user
            ? this.user
            : { name: 'Blank', profile_photo_url: photourl  }
      }
    },

    methods: {
      updatePhotoPreview() {
        const photo = this.$refs.photo.files[0];

        if (! photo) return;

        const reader = new FileReader();

        reader.onload = (e) => {
          this.photoPreview = e.target.result;
        };

        reader.readAsDataURL(photo);
      },

      clearPhotoFileInput() {
        if (this.$refs.photo?.value) {
          this.$refs.photo.value = null;
        }
      },

      selectNewPhoto() {
        this.$refs.photo.click();
      },

      getRefPhoto() {
        return this.$refs.photo;
      }
    }
})
</script>