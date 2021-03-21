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
				let arr = new Array();
				var navigate = this.$router;
				for(var object in result) {
				arr.push(
				DG.marker([result[object].Lat, result[object].Lng])
				);

					arr[arr.length-1].alt=result[object].Id;
					arr[arr.length-1].addTo(this.map);
					console.log(arr[arr.length-1].alt);
				}
				var group = DG.featureGroup(arr);
                group.addTo(this.map);
                group.on('click', function(e) {
                   navigate.push({ name: 'lookCard', query: { cardId: e.eventTargets[0].alt } });
                });
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