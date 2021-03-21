<template>
<div >
  <NavBar></NavBar>
     <div ref="map" style="width:100%; height: 75vh;"></div>   
</div>
</template>

<script>

export default {
  data() {
    return {
	       map: null
	}
  },
  methods: {
  setMarkers() {
        this.$axios.post('/api/getobjects.php')
      .then(response => {
				var result=response.data;
				console.log(result);
				    var navigate = this.$router;
				for(var object in result) {
					DG.marker([result[object].Lat, result[object].Lng])
					.on('click',
					function() 
					{ 
					navigate.push({ name: 'lookCard', query: { cardId: result[object].Id } });
					}
					).addTo(this.map);
				}
				})		
	  .catch(error => {});	
  },

  cardClickHandler(event) {
  console.log(event);
  }
   },
   mounted:
   function() {
    console.log("ok");
	this.map= new DG.map(this.$refs.map, {
                    center: [62.034482696715386, 129.69491446800936],
                    zoom: 10
                          }); 
   console.log(this.map);
   this.setMarkers();
   } 
}
</script>
<style scoped>

</style>