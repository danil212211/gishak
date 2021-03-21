<template>
    <div class="vue-tempalte">
        <form action="#" v-on:submit.prevent="signupUser">
            <h3>Регистрация</h3>

            <div class="form-group">
                <label>Почта</label>
                <input v-model="user.login" type="email" class="form-control form-control-lg" />
            </div>

            <div class="form-group">
                <label>Пароль</label>
                <input v-model="user.password" type="password" class="form-control form-control-lg" />
            </div>

            <button type="submit" class="btn btn-dark btn-lg btn-block btn-signup">Зарегистрироваться</button>

        </form>
		<a v-on:click="$router.push('login')" class="login">Войти?</a>
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
    signupUser: function() {
      this.$axios.post('/api/signup.php',this.user)
      .then(response => {
	  			var answer = response.data.answer;
				
				if (answer=="good") {
				this.$cookies.set("uid",response.data.login);
				this.$cookies.set("hash",response.data.hash);
				this.$router.push('map')
				};
			console.log(answer);
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
.btn-signup{
width:10%;
min-width:250px;
margin: 0 auto;


}
a {
cursor: default;
}
</style>