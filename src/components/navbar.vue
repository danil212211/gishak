<template>
<b-navbar toggleable="lg" type="dark" variant="dark" fixed="top">
   <b-navbar-brand href="#">YktPlaces</b-navbar-brand>  
      <b-navbar-nav >
	  <button v-on:click="$router.push('addcard')"  class="btn btn-outline-secondary" > Добавить монумент</button>
	  <button  v-on:click="$router.push('map')" class="btn btn-outline-secondary" style="margin-left:10px"> Карта</button>
	  </b-navbar-nav>
	  <b-navbar-nav class="ml-auto">
	  
	  <button  v-on:click="$router.push('login')" class="btn btn-outline-secondary"> Выйти</button>
    </b-navbar-nav>
</b-navbar>
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
</style>