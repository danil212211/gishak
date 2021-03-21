<template>
  <NavBar></NavBar>
</template>

<script>
export default {
data() {
    return { Id: this.cardId }
},
  methods: {
  getCard() {
        this.$axios.post('/api/getobjectbyid.php',{Id:this.Id})
      .then(response => {
			var data = response.data;
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