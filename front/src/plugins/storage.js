//todo dans storage nous voulons plusieurs methodes : 
// - une methode set, qui va nous permettre d'enregister
// une nouvelle entrée coté LocalStorage
// - une methode get, qui va nous permettre de récupérer une entrée
// - une methode unset, qui va nous permettre de supprimer une entée 

const storage = {

    set: function(keyName, value) {
        // je transforme ma variable en JSON
        // https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/JSON/stringify
        const json = JSON.stringify(value);
        // pour par la suite l'enregistrer coté localstorage
        // https://developer.mozilla.org/en-US/docs/Web/API/Window/localStorage
        window.localStorage.setItem(keyName, json);
    },

    get: function(keyName){
        const json = window.localStorage.getItem(keyName);
        // après avoir récupéré ma chaine de caractère JSON, je vais vouloir le transformer en objet 
        const value = JSON.parse(json);
        return value;
    },

    unset: function(keyName){
        window.localStorage.removeItem(keyName);
    }

};
export default storage;