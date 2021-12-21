<template>
  <div class="home">
    <div class="container">
      <header>
        <div class="photo">
            <img class="photo__img" src="https://source.unsplash.com/random/200x200/?portrait" alt="">
        </div>
    </header>
    <main>
        <div class="description">
            <h1 class="description__title">lucas laurillault</h1>
            <p class="description__paragraph">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate maxime perspiciatis facilis nesciunt id deserunt ea sapiente voluptates quisquam.</p>
        </div>
            <nav>
                <ul>
                    <li><a class="about__link" href="#about">A propos</a></li>
                    <li><a class="work__link" href="#work">Projets</a></li>
                    <li><a class="cv__link" href="#cv">CV</a></li>
                    <li><a class="contact__link" href="#contact">Contact</a></li>
                </ul>
            </nav>
    </main>

    <footer>
        <p>My Portfolio</p>
    </footer>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Home',
  beforeCreate () {
    document.querySelector('body').setAttribute('style', 'margin: 0')
  },

}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
.home{
  display: flex;
  min-height: 100vh;
  background-color: #414145;
}

.container{
  color: #ffff;
  font-family: 'Source Sans Pro', Arial, Helvetica, sans-serif;
  line-height: 1.5rem;
  margin: auto;
  max-width: 800px;
}


header{
  margin-bottom: 3rem;
}


main{
  text-transform: uppercase;
  margin: 1rem;
}

footer{
  margin-top: 3rem;
  text-align: center;
}

.photo__img{
  display: block;
  margin: auto;
}

.description{
  border-top: solid #ffff 1px;
  border-bottom: solid #ffff 1px;
  text-align: center;
}

.description__title{
  margin-top: 2.5rem;
  font-size: 26px;
  letter-spacing: 0.3rem;
  font-weight: bold;
}

.description__paragraph{
  margin-top: 1.5rem;
  font-size: 13px;
  letter-spacing: 0.2rem;
  margin-bottom: 2.5rem;
}

nav{
  margin-top: 3rem;
}

ul{
  display: flex;
  justify-content: center;
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
  transition: 1s;
}

.about__link, .work__link, .cv__link{
  border-right: none;
}

</style>
