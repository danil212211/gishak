<template>
<b-navbar toggleable="lg" type="dark" variant="dark" fixed="top">
    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>
	
   <b-navbar-brand href="#">YktPlaces</b-navbar-brand>  
       <b-collapse id="nav-collapse" is-nav>
      <b-navbar-nav >
	  <button v-on:click="$router.push('addcard')"  class="btn btn-outline-secondary" > Добавить объект</button>
	  <button  v-on:click="$router.push('map')" class="btn btn-outline-secondary" style="margin-left:10px"> Карта</button>
	  </b-navbar-nav>
	  <b-navbar-nav class="ml-auto">
	  
	  <button  v-on:click="$router.push('login')" class="btn btn-outline-secondary"> Выйти</button>
    </b-navbar-nav>
	</b-collapse>
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