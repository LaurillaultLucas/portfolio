import axios from 'axios'
import storage from '../plugins/storage.js'

const userService = {

    baseURI:'http://localhost:8080/portfolio/Back/web/wp-json/jwt-auth/v1',
    
    login: async function(login, password){
        // axios.post for send data in api
        let response = await axios.post(
            userService.baseURI + '/token',
            {
                username: login,
                password: password
            }
            ).catch(
                function(){
                    return false;
                }
            );
        return response.data;
    },

    isConnected: async function(){
        // get userData in localstorage
        const userData = storage.get('userData');
        
        if(userData != null){
            const token = userData.token;
            if(token){
                
                // Attention, il ne me suffit PAS d'envoyer des données comme nous avons pu le faire dans la methode login (ci-dessus), il va falloir que j'envoi ce token au back en passant par les en-têtes (headers) de ma requete ! 
                // Nous allons donc découvrir qu'il est possible de donner un 3eme argument a la methode post : 
                // axios.post(Endpoint, DonnesRequete, Options)
                const options = {
                    headers: {
                        Authorization: 'Bearer ' + token
                    }
                };

                //
                const response = await axios.post(
                    userService.baseURI + '/token/validate',
                    null, 
                    options).catch(
                        function(){
                            return false;
                        }
                    );

                return response.data;
                 
            }

        }

        return false;

    },

    logout: function(){
        storage.unset('userData');
    }
};

export default userService;


