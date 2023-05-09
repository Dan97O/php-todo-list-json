<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- cdn bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- my style css -->
  <link rel="stylesheet" href="./assets/css/style.css">
  <title>Todo list</title>
</head>

<body>

  <div id="app">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-6">
          <h1 class="text-center mt-5 text-light">Todo List</h1>
          <div class="card d-flex justify-content-center mt-3 flex-wrap">
            <ul class="p-0 px-3 py-3 d-flex w-100 flex-wrap">
              <li class="my-2 w-100 d-flex align-items-center" v-for="(task, index) in tasks">
                <span class="w-75" :class="{ completed: task.completed }" @click="toggleCompleted(task)"> {{ task.name
                  }}</span>
                <button @click="completeTask(index)"
                  class="my_button py-2 px-2 bg-danger border-0 rounded d-flex align-items-center">
                  <i class="fa-solid fa-trash-can text-light "></i>
                </button>
              </li>
            </ul>
          </div>
        </div>
        <!-- /col-6 -->
      </div>
      <!-- /row -->


      <div class="row d-flex justify-content-center">
        <div class="col-6">
          <div class="card mt-3">
            <div class="card-body">
              <div class="add_task">
                <div class="input-group">
                  <input type="text" class="form-control" v-model="new_task" @keyup.enter="add_task"
                    placeholder="Type a task here">
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="button" @click="add_task">Invia</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /card-body -->
          </div>
          <!-- card -->
        </div>
        <!-- /col-6 -->
      </div>
      <!-- /row -->

    </div>
    <!-- /container -->
  </div>
  <!-- /app -->

  <!-- cdn axios -->
  <script src='https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js'></script>
  <!-- cdn vue -->
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <!-- cdn bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
  <script src='./app.js'></script>
</body>

</html>
