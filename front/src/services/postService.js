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
};

export default postService;