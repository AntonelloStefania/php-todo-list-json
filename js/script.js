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
            obj.status = !obj.status; // Inverte lo stato dell'oggetto (da true a false o da false a true)
            // Esegui una richiesta POST per aggiornare lo stato nel server
            axios.post(this.apiUrl, { updatedTask: obj }).then(() => {
                // Aggiorna solo lo stato locale dell'oggetto senza richiedere nuovamente la lista dei compiti dal server
            });

        }
    },
}).mount('#app');