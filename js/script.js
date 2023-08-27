const { createApp } = Vue;

createApp({
    data(){
        return{
            discs: []
        }
    },
    created(){
        axios // chiamata axios al nostro personale json passando per un file php
            .get('http://localhost/PHP/php-dischi-json/read.php')
            .then(response => {
                console.log(response.data);
                this.discs = response.data;
            })
    }
}).mount('#app');