<template>
<div>
<b-container fluid>
<NavBar></NavBar>
  <b-row >

    <b-col sm="8" style="margin-bottom:10px">
      <b-form-textarea
        id="textarea-default"
        placeholder="Default textarea"
      ></b-form-textarea>
    </b-col>
    <b-col sm="8" style="margin-bottom:10px">
      <b-form-textarea
        id="textarea-default"
        placeholder="Default textarea"
      ></b-form-textarea>
    </b-col>
    <b-col sm="8" style="margin-bottom:10px">
    <b-form-file
      v-model="file1"
      :state="Boolean(file1)"
      placeholder="Choose a file or drop it here..."
      drop-placeholder="Drop file here..."
    ></b-form-file>
    </b-col>


  </b-row>
</b-container>
</div>
</template>
<script>
export default {
  data() {
    return {
	}
	},
  methods: {
   }

}
</script>
<style scoped>
.b-col{
background:grey;
}
</style>