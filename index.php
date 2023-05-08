<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>

<div id="app">






    <ul>
      <li v-for="task in tasks">
        {{task}}
      </li>
    </ul>


    <div class="add_task">
      <input type="text" v-model="new_task" @keyup.enter="add_task" placeholder="Type a task here">
      <button @click="add_task">Invia</button>
    </div>









</div>


<!-- cdn axios -->
<script src='https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js'></script>
<!-- cdn vue -->
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<!-- cdn bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src='./app.js'></script>
</body>
</html>
