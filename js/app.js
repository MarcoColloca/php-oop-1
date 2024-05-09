const { createApp } = Vue

createApp({
    data() {
        return {
            title: 'PHP OOP',
            films: [],
        }
    },


    created(){
        this.fetchData();
    },


    methods:{
        fetchData(){
            axios.get('./server.php').then((res) => {
				this.films = res.data.results                
			})
        },
    }
}).mount('#app')