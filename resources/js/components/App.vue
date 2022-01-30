<template>
  <div>
    <file-pond
      name="image"
      ref="pond"
      label-idle="Click to choose image, or drag here..."
      server="/upload"
      @init="filepondInitialized"
    />
  </div>
</template>


<script>
import vueFilePond from "vue-filepond";
import "filepond/dist/filepond.min.css";
import FilePondPluginFileValidaeType from 'filepond-plugin-file-validate-type';


//use vueFilePond function to create our component
const FilePond = vueFilePond(FilePondPluginFileValidaeType);

export default {
  components: {
    FilePond,
  },
  methods: {
    filepondInitialized() {
       console.log('Filepond object', this.$refs.pond);
    }
  }
};
</script>