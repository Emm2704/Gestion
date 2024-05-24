
<template>
    <div>
      <h1>Lista de Empleados</h1>
      <ul>
        <li v-for="employee in employees" :key="employee.id">{{ employee.name }}</li>
      </ul>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        employees: []
      };
    },
    mounted() {
      this.fetchEmployees();
    },
    methods: {
      fetchEmployees() {
        this.$axios.get('/api/employees')
          .then(response => {
            this.employees = response.data;
          })
          .catch(error => {
            console.error('Error fetching employees:', error);
          });
      }
    }
  };
  </script>
  