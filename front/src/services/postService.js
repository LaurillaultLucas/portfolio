import axios from 'axios';

const postService = {
    baseURI: 'http://localhost:8080/portfolio/Back/web/wp-json/wp/v2',

        async loadPosts(){
            console.log('On est dans loadPost !!!');
            const response = await axios.get(postService.baseURI + '/posts?_embed=true');
            console.log(response.data);
            return response.data;
        },

        async loadProjects(){
            console.log('On est dans loadProjects !!!');
            const response = await axios.get(postService.baseURI + '/projects?_embed=true');
            console.log(response.data);
            return response.data;
        },

        async loadAboutPosts(){
            console.log('On est dans loadAboutPosts !!!');
            const response = await axios.get(postService.baseURI + '/about?_embed=true');
            console.log(response.data);
            return response.data;
        },

        async loadLink(){
            console.log('On est dans loadLink');
            const response = await axios.get(postService.baseURI + '/link?_embed=true');
            console.log(response.data);
            return response.data;
        },

        async loadTypesProjects(){
            const response = await axios.get(postService.baseURI + '/type-de-projet?_embed=true');
            return response.data;
        },

        async getProjectByType(selectedType){
            const response = await axios.get(postService.baseURI + '/projects?_embed=true&type-de-projet=' + selectedType);
            return response.data;
        },
};

export default postService;