<template>
<div>
<NavBar></NavBar>
<b-container  >
<div>
  <b-card 
  class="123"
    overlay
	img-fluid
    :img-src="previewImage"
    text-variant="white"
    img-height="400"
    :title="Name">
    <b-card-text>
      {{Description}}
    </b-card-text>
  </b-card>
</div>
      <b-form-textarea
        id="textarea-default"
        placeholder="Имя"
		v-model="Name"
		style="margin-bottom:10px"
      ></b-form-textarea>
      <b-form-textarea
        id="textarea-default"
		style="margin-bottom:10px"
		v-model="Description"
        placeholder="Описание"
      ></b-form-textarea>
    <b-form-file
      :state="Boolean(file1)"
	  @change=uploadImage
	  accept="image/*"
	  v-model="previewImage"
      placeholder="Фото"
      drop-placeholder="Фото"
	  style="margin-bottom:10px;"
    ></b-form-file>
	    <b-form-file
      :state="Boolean(file1)"
	  accept="file/*"
	  v-model="file"
      placeholder="Файл"
      drop-placeholder="Файл"
    ></b-form-file>
<button class="btn btn-primary" style="margin-bottom:20px; margin-top:10px;">Добавить объект</button>
</b-container>
</div>
</template>
<script>
export default {
  data() {
    return {
	Name:'',
	file: '',
	map: null,
	marker:null,
	Description:'',
	previewImage:'https://picsum.photos/900/250/?image=3'
	}
	},
        methods:{
            uploadImage(e){
                const image = e.target.files[0];
                const reader = new FileReader();
                reader.readAsDataURL(image);
                reader.onload = e =>{
                    this.previewImage = e.target.result;
                    console.log(this.previewImage);
                };
            }
},
mounted(){

			this.map = new DG.map(this.$refs.map, {
		center: [62.034482696715386, 129.69491446800936],
                    zoom: 10
                });
                marker = new DG.marker([62.034482696715386, 129.69491446800936], {
                    draggable: true
                }).addTo(this.map);
                marker.on('drag', function(e) {
                    var lat = e.target._latlng.lat.toFixed(3),
                        lng = e.target._latlng.lng.toFixed(3);

                    locationInfo.innerHTML = lat + ', ' + lng;
                });
          


}
}
</script>
<style scoped>
.b-col{
background:grey;
}
b-container fluid{
position:fixed;
left:50%;
  transform: translate(-50%, -50%);
}
.card-img{
object-fit:cover;
}
</style>