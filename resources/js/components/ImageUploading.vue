<template>
  <div>
    <file-pond
      name="image"
      ref="pond"
      label-idle="Click to choose image, or drag here..."
      @init="filepondInitialized"
      accepted-file-types="image/*"
    />
  </div>
</template>


<script>
import vueFilePond, { setOptions } from "vue-filepond";
import "filepond/dist/filepond.min.css";
import FilePondPluginFileValidaeType from "filepond-plugin-file-validate-type";

setOptions({
  server: {
    process: {
      url: "./upload",
      method: "POST",
      headers: {
        "X-CSRF-TOKEN": document.head.querySelector('meta[name="csrf-token"]')
          .content,
      },
    },
  },
});

//use vueFilePond function to create our component
const FilePond = vueFilePond(FilePondPluginFileValidaeType);

export default {
  components: {
    FilePond,
  },
  data() {
    return {
      images: [],
    };
  },
  mounted() {
    axios
      .get("/images/show")
      .then((response) => {
        this.images = response.data;
      })
      .catch((erorr) => {
        console.log(erorr);
      });
  },
  methods: {
    filepondInitialized() {
      console.log("Filepond object", this.$refs.pond);
    },
  },
};
</script>