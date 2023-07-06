const { createApp } = Vue;

createApp({
    data() {
        return {
            apiUrl: 'server.php',
            toDoList: [],
        }
    }, mounted() {
        axios.get(this.apiUrl).then((response) => {
            this.toDoList = response.data;
            console.log(this.toDoList)
        })
    }
}).mount('#app');