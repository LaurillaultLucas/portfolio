<template>
        <div class="work__filter">
            <select
                v-if="projectTypes.length"
                @change="handleSelectedType"
                v-model="selectedType"
            >
                <option
                v-for="type in projectTypes"
                :key="type.id"
                :value="type.id"
                >{{type.name}}</option>
            </select>
        </div>
</template>

<script>
import postService from '../services/postService';

export default {
  name: 'FilterWork',
  async created(){
      this.projectTypes = await postService.loadTypesProjects();
  },

  data(){
      return {
          projectTypes: [],
          selectedType: 9,
      };
  },
  methods : {
    handleSelectedType: function(evt){
      console.log('event change');
      evt.preventDefault();
        this.$emit(
          'type-selected',
          this.selectedType
        );
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">

.work__filter{

    display: flex;
    justify-content: center;
    margin-top: 1.5rem;
    
        select{
            width: 120px;
            height: 30px;
            border: 1px solid #ffff;
            font-size: 13px;
            color: #fff;
            background-color: #11ffee00;
            letter-spacing: .1rem;
            font-weight: lighter;
        }
}

</style>