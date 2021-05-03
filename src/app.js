var app = new Vue({
    el: '#root',
    data: {
        dischi:[],
    },
    created(){
        axios.get("http://localhost/4_php/php-ajax-dischi/call.php")
        .then((response) =>{
            this.dischi = response.data;
        })
    }
}) //fine root

console.log("bababaab");