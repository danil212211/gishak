<template>
  <div>
  <NavBar></NavBar>
  <div> {{Id}}}</div>
  <div >{{Name}}</div>
  <div >{{Description}}</div>
  
  <div >{{Photos}}</div>
  
  <div >{{Files}}</div>
  
  <div >{{Lat}}</div>
  
  <div >{{Lng}}</div>
  
  </div>
</template>

<script>
export default {
data() {
    return { 
	Id: this.cardId,
	Name:'',
	Description:'',
	Photos:'',
	Files:'',
	Lat:'',
	Lng:''
	}
},
  methods: {
  getCard() {
        this.$axios.post('/api/getobjectbyid.php',{Id:this.Id})
      .then(response => {
			var data = response.data;
			this.Name=data.Name;
			this.Description=data.Description
			this.Photos=data.Photos;
			this.Files=data.Files;
			this.Lat=data.Lat;
			this.Lng=data.Lng;
			console.log(data);
			
			})
	  .catch(error => {})	
  }
  },
props: {
  cardId: String,
},  mounted: 
  function() { 
  this.getCard();
  }
  
}
</script>
<style scoped>

</style>