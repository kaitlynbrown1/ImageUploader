<template>
    <div class="mt-4">
        <file-pond
            name="image"
            ref="pond"
            label-idle="Click to choose image, or drag here ..."
            server="/upload"
            @init="filepondInitalized"
            acceped-file-types="image/*"
        />
    </div>
</template>

<script>
import vueFilePond from 'vue-filepond';
import "filepond/dist/filepond.min.css";
import FilePondPluginFileValidateType from 'filepond-plugin-file-validate-type';

const FilePond = vueFilePond(FilePondPluginFileValidateType);

export default {
    components: {
        FilePond // file-pond
    },

    data() {
        return {

        }
    },
    methods: {
        filepondInitalized() {
            console.log('Filepond is ready!');
            console.log('Filepond object:', this.$refs.pond)
        }
    }
}
</script>