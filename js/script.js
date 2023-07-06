const { createApp } = Vue;

createApp({
    data() {
        return {
            apiUrl: 'server.php',
            toDoList: null,
            toDoItem: '',
        };
    },
    mounted() {
        axios.get(this.apiUrl).then((response) => {
            this.toDoList = response.data;
            console.log(this.toDoList);
        });
    },
    methods: {
        updateTodoList() {
            const newTask = {
                toDo: this.toDoItem,
                status: false,
            };

            axios.post(this.apiUrl, { newTask }, {
                headers: { 'Content-Type': 'multipart/form-data' },
            }).then((response) => {
                this.toDoItem = '';
                this.toDoList = response.data;
            });
        },

        changeStatus(obj) {
            obj.status = !obj.status;
        }
    },
}).mount('#app');