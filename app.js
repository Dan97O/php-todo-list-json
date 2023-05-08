
const { createApp } = Vue
createApp({
  data() {
    return {
      tasks: null,
      api_url: './tasks.json',
      new_task: ''
    }
  },
  methods: {
    add_task() {
      //console.log('add a new task to the list');
      const data = {
        new_task: {
          name: this.new_task,
          completed: false,
        }
      }

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
    },

    toggleCompleted(task) {
      task.completed = !task.completed;
    },

    completeTask(i) {
      this.tasks.splice(i, 1);
    },
  },
  mounted() {
    axios
      .get(this.api_url)
      .then(response => {
        //console.log(response);
        this.tasks = response.data
      })
      .catch(error => {
        console.error(error.message);
      })
  }
}).mount('#app')