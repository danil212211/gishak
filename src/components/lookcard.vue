<template>
  <NavBar></NavBar>
</template>

<script>
export default {
data() {
    return { id: this.cardId }
},
  methods: {
  
  },
props: {
  cardId: String,
},  mounted: 
  function() {
  console.log(this.id);
  }
  
}
</script>
<style scoped>

</style>