<template>
    <div class="work">
        <FilterWork v-on:type-selected="handleTypeSelected"/>
        <div class="work__link">
            <ul>
                <li v-for="projectsPost in projectsPosts" :key="projectsPost.id">
                    <a :href="projectsPost.meta.github" target="_blank">
                        <img :src="projectsPost._embedded['wp:featuredmedia'][0].media_details.sizes.full.source_url">
                    </a>
                    <p><i class="fa-solid fa-arrow-up-right-from-square"></i></p>
                </li>
            </ul>
            <div class="test"></div>
        </div>
    </div>
</template>

<script>

import postService from '../services/postService.js';
import FilterWork from '../components/FilterWork.vue';

export default {
  components: {
      FilterWork,
  },
  name: 'Work',

  data(){
    return {
      projectsPosts: [],
    };
  },

  async created(){
      console.log("Le composant loadProjects vient d'être créer")
         //je suis au niveau de la creation du composant dans son cycle de vie !
      this.projectsPosts = await postService.loadProjects();
  },
  methods: {
      handleTypeSelected: async function(selectedType){
          this.projectsPosts = await postService.getProjectByType(selectedType);

      }
  }
}

</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">

.work__link{
   
    ul{
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        padding: 0;

        li{
            position: relative;
            list-style: none;
            height: 360px;
            width: 360px;
            margin: 0.5rem;
            //border: solid #ffff 0.5px;
            overflow: hidden;

            p{
                position: absolute;
                top: 3%;
                left: 92%;
                color: #ffff;
            }

            a{
                img{
                    max-width : 100%;
                    min-width: 100%;
                    height : auto;
                    transition: transform .5s;
                }
                }

                img:hover{
                    transform: scale(1.1);
                }
            }
    }
}
</style>