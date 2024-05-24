<template>
    <div>
      <h1>Lista de Capacitaciones</h1>
      <ul>
        <li v-for="training in trainings" :key="training.id">{{ training.name }}</li>
      </ul>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        trainings: []
      };
    },
    mounted() {
      this.fetchTrainings();
    },
    methods: {
      fetchTrainings() {
        this.$axios.get('/api/trainings')
          .then(response => {
            this.trainings = response.data;
          })
          .catch(error => {
            console.error('Error fetching trainings:', error);
          });
      }
    }
  };
  </script>
  