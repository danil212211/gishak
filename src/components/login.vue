<template>
    <div class="vue-tempalte">
        <form action="#" v-on:submit.prevent="loginUser">
            <h3>Вход</h3>

            <div class="form-group">
                <label>Почта</label>
                <input v-model="user.login" type="email" class="form-control form-control-lg" />
            </div>

            <div class="form-group">
                <label>Пароль</label>
                <input v-model="user.password" type="password" class="form-control form-control-lg" />
            </div>

            <button type="submit" class="btn btn-dark btn-lg btn-block btn-login">Войти</button>

        </form>
		<a v-on:click="$router.push('signup')" class="register">Зарегистрироваться?</a>
    </div>
</template>

<script>
export default {
  data() {
    return {
	user : {
	login: '',
	password: ''
	}
	}
  },
  methods: {
    loginUser: function() {
      this.$axios.post('/api/login.php',this.user)
      .then(response => {
			var answer = response.data.answer;
			if (answer=="no") {console.log(answer); this.$router.push('signup');}
			if (answer=="yes") {this.$router.push('map')};
			
			})
	  .catch(error => {})	
       }
   }

}
</script>
<style scoped>
.form-control-lg {
width:25%;
min-width:250px;
  margin: 0 auto;
}
.btn-login{
width:10%;
min-width:100px;
margin: 0 auto;
}
a {
cursor: default;
}
</style>