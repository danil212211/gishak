<template>


  <div class="home">
<div style="width:100%; height:768px; background:url(http://sch24.ru/pic/ypf.png) no-repeat; background-size: cover; text-align:center;">

</div>

<button style="float:left; margin-left:200px; width:304px; height:113px; background:url(http://sch24.ru/pic/but_tur.png) no-repeat; border:0px;" @click="$router.push('map')"></button>

<button style="float:left; margin-left:100px; width:304px; height:113px; background:url(http://sch24.ru/pic/but_sotr.png) no-repeat; border:0px;" @click="$router.push('login')"></button>

  </div>



</template>
<script>
export default {
  name: 'home',
  data () {
    return {
      msg: 'Welcome to Your Vue.js App'
    }
  }
}
</script>
<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
</style>
