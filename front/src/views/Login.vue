<template>
    <div class="login">
        <form @submit="handleSubmit">
            <input v-model="login" name="login" placeholder="Identifiant ou adresse-email" required>
            <input v-model="password" type="password" name="password" placeholder="Mot de passe" required>
            <div class="error" v-if="loginFailed">
                Echec de connexion
            </div>
            <input type="submit" value="Se connecter">
        </form>
    </div>
</template>

<script>
import userService from '../services/userService.js'
import storage from '../plugins/storage.js'

export default {
  components: {},
  name: 'Login',
  data(){
      return {
          login:'',
          password:'',
          loginFailed: false
      };
  },

  methods: {
      async handleSubmit(evt){
          evt.preventDefault();

          //if i have a login and a password
          
              let userData = await userService.login(this.login, this.password);

              if(userData){
                  storage.set('userData', userData);
                  this.loginFailed = false;
                  // Redirection vers la route user-home
                  this.$router.push('/');
              }
              else {
                  console.log('LOGIN FAILED');
                  this.loginFailed = true;
              }
      }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">


</style>