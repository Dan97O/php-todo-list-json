
const { createApp } = Vue
createApp({
  data() {
    return {
      tasks: [],
      api_url: './tasks.json',
      api_completeTask: "./deleteTask.php",
      new_task: ''
    }
  },
  methods: {

    getTasks() {
      axios
        .get(this.api_url)
        .then((response) => {
          this.tasks = response.data;
        })
        .catch((error) => {
          console.error(error.message);
        });
    },

    add_task() {
      //console.log('add a new task to the list');
      const data = {
        new_task: {
          name: this.new_task,
          completed: false,
        }
      }

      if (this.add_task) {
        this.new_task = ''
        axios.post(
          './storeTasks.php',
          data,
          {
            headers: { 'Content-Type': 'multipart/form-data' }
          }).then(response => {
            //console.log(response);
            this.tasks = response.data
          })
          .catch(error => {
            console.error(error.message);
          })
      }

    },

    toggleCompleted(task) {
      task.completed = !task.completed;
    },

    completeTask(index) {
      const data = {
        completeTask: index,
      };

      axios
        .post(this.api_completeTask, data, {
          headers: { "Content-Type": "multipart/form-data" },
        })
        .then((response) => {
          this.tasks = response.data;
        })
        .catch((error) => {
          console.error(error.message);
        });
    },
  },
  mounted() {
    this.getTasks();
  }
}).mount('#app')