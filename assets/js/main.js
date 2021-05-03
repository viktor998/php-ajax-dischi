Vue.config.devtools= true;

var app = new Vue({
    el: '#root',
    data:{
        dischi: [],
        selected:'All',
        checked: false,
        authors:[],
        
    },    
    mounted(){
        axios.get('http://localhost/php/php-vue-dischi/call.php')
        .then((response) => {
            console.log(response)
            this.dischi = response.data;
              
            this.dischi.forEach((element) => {
                
                if(!this.authors.includes(element.author)){
                    this.authors.push(element.author)
                    
                }
                
                
            }); 
            
        });   
    }
    

})