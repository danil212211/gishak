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
	   
        <form action="#" v-on:submit.prevent="sendData">
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
      :state="Boolean(image)"
	  @change=uploadImage
	  accept="image/*"
	  v-model="image"
      placeholder="Фото"
      drop-placeholder="Фото"
	  style="margin-bottom:10px;"
    ></b-form-file>
	    <b-form-file
      :state="Boolean(file)"
	  accept="file/*"
	  v-model="file"
      placeholder="Файл"
      drop-placeholder="Файл"
    ></b-form-file>
<button type="submit" v-on:click="sendData()" class="btn btn-primary" style="margin-bottom:20px; margin-top:10px;">Добавить объект</button>
</form>
</b-container>
</div>
</template>
<script>
export default {
  data() {
    return {
	Name:'',
	Description:'',
	file: '',
	map: null,
	marker:null,
	lat:62.034482696715386,
	lng:129.69491446800936,
	previewImage:'https://picsum.photos/900/250/?image=3',
	image :''
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
            },
			sendData() {
			console.log(this.Name);
			console.log(this.Description);
			console.log(this.image);
			console.log(this.file);
			console.log(this.lat);
			console.log(this.lng);
      this.$axios.post('/api/addcard.php',{
	  Name: this.Name,
	  Description: this.Description,
	  Image : this.image,
	  File : this.file,
	  Lat : this.lat,
	  Lng : this.lng
	  })
      .then(response => {
			var answer = response.data.answer;
			if (answer=="no") {console.log(answer); this.$router.push('signup');}
			if (answer=="yes") {
				this.$cookies.set("uid",response.data.login);
				this.$cookies.set("hash",response.data.hash);
				this.$router.push('map')
			};
			
			})
	  .catch(error => {})	
			
			
			}
},
mounted(){

			this.map = new DG.map(this.$refs.map, {
		center: [62.034482696715386, 129.69491446800936],
                    zoom: 10
                });
                this.marker = new DG.marker([62.034482696715386, 129.69491446800936], {
                    draggable: true
                }).addTo(this.map);
                this.marker.on('drag', function(e) {
					this.lat=e.latlng.lat;
					this.lng=e.latlng.lng;
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