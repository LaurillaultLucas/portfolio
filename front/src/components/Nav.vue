<template>
    <div class="nav">
        <nav>
            <ul>
                <div><router-link class="about" :to="{name: 'about'}">À propos</router-link></div>
                <li><a class="work__link" href="#work">Projets</a></li>
                <li><a class="cv__link" href="#cv">CV</a></li>
                <li><a class="contact__link" href="#contact">Contact</a></li>
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
  padding: 0;
}

li{
  list-style: none;
}

a{
  display: block;
  color: #ffff;
  text-decoration: none;
  padding: 1rem 1.25rem 1rem 1.45rem;
  border: solid #ffff 1px;
  font-size: 13px;
  letter-spacing: 0.2rem;
  min-width: 5rem;
  text-align: center;
}

a:hover{
  background-color: #787880;
  transition: 0.5s;
}

.about, .work__link, .cv__link{
  border-right: none;
}
</style>