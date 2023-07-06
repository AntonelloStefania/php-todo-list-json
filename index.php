<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="./style/style.css">
        <title>ToDoList</title>
    </head>
    <body>
        <div class="">
            <div id="app">
                <div class="container-title">
                    <div class="header-row">
                        <div class="col-12">
                            <h1>To Do List</h1>
                        </div>
                    </div>
                </div>
                <div class="container card-container">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <ul class="card ">
                                <li class=" d-flex justify-content-between" v-for="(obj,index) in toDoList" :key="obj">
                                    <div>
                                        <span :class="obj.status ? 'text-delete':'fw-bold'" @click="changeStatus(obj)" class="task">{{obj.toDo}}</span>
                                    </div>
                                    <div>
                                        <button class="btn fw-bold col-auto  btn-sm ms-5" :class="obj.status ? 'btn-success' : 'btn-warning text-white'" @click="changeStatus(obj)">{{obj.status ? 'Done':'To do'}}</button>
                                        <button class="btn col-auto btn-danger btn-sm ms-5" @click="deleteTask(index)"><i class="fa-solid fa-trash" style="color: #fff;"></i></button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="input-group mb-2 mt-3 search-bar">
                                <input type="text" name="" placeholder="insert task" class="form-control" v-model="toDoItem" @keyup.enter="updateTodoList">
                                <button class="btn btn-success " @click="updateTodoList">add task</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="./js/script.js"></script>
    </body>
</html>