<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="./style/style.css">
        <title>ToDoList</title>
    </head>
    <body>
        <div class="wrapper-custom">
            <div id="app">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <ul class="card ">
                                <li class="" v-for="obj in toDoList" :key="obj">
                                    <span>{{obj}}</span>
                                    <span class="ms-3">{{obj.status ? 'done':'undone'}}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="input-group mb-2">
                                <input type="text" name="" placeholder="insert task" class="form-control" v-model="toDoItem" @keyup.enter="updateTodoList">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="./js/script.js"></script>
    </body>
</html>