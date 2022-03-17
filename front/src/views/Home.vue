<template>
  <div class="home">
    <main>
        <div v-for="post in posts" :key="post.id"   class="description">
            <img class="photo__img" :src="post._embedded['wp:featuredmedia'][0].media_details.sizes.full.source_url">
            <h1 class="description__title">{{post.title.rendered}}</h1>
            <p v-html="post.content.rendered" class="description__paragraph"></p>
        </div>
    </main>
    </div>
</template>

<script> 

import postService from '../services/postService.js';

export default {
  name: 'Home',
  components: {},
  
  data(){
    return {
      posts: [],
    };
  },

  async created(){
      console.log("Le composant PostList vient d'être créer")
         //je suis au niveau de la creation du composant dans son cycle de vie !
      this.posts = await postService.loadPosts();
  },
}

</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
main{
  line-height: 1.5rem;
  margin: auto;
}

.photo__img{
  display: block;
  margin: 1rem auto;
}

.description{
  text-align: center;
  color: #ffff;
  margin: 0.5rem;
}

.description__title{
  margin-top: 2.5rem;
  font-size: 26px;
  letter-spacing: 0.2rem;
  text-transform: uppercase;
}

.description__paragraph{
  margin-top: 1.5rem;
  margin-bottom: 2.5rem;
}
</style>
