<template>
    <div class="nav">
        <nav>
            <ul>
                <li><router-link class="home" :to="{name: 'home'}">Acceuil</router-link></li>
                <li><router-link class="about" :to="{name: 'about'}">À propos</router-link></li>
                <li><router-link class="work" :to="{name: 'work'}">Projets</router-link></li>
                <li><router-link class="contact" :to="{name: 'contact'}">Contact</router-link></li>
            </ul>
        </nav>
    </div>
</template>

<script>
export default {
  name: 'Nav'
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
nav{
  text-transform: uppercase;
  margin-bottom: 3rem;
}

ul{
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  padding: 0;
}

li{
  list-style: none;
}

a{
  color: #ffff;
  text-decoration: none;
  padding: 1rem 1rem 1rem 1rem;
  border: solid #ffff 1px;
  font-size: 13px;
  letter-spacing: 0.2rem;
  min-width: 5rem;
}

a:hover{
  background-color: #787880;
  transition: 0.5s;
}

.work, .about, .home{
  border-right: none;
}

@media screen and (max-width: 480px){

  a{
    font-size: 9px;
    padding: 1rem;
  }

}
</style>