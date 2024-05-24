<template>
    <div>
      <h1>Lista de Departamentos</h1>
      <ul>
        <li v-for="department in departments" :key="department.id">{{ department.name }}</li>
      </ul>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        departments: []
      };
    },
    mounted() {
      this.fetchDepartments();
    },
    methods: {
      fetchDepartments() {
        this.$axios.get('/api/departments')
          .then(response => {
            this.departments = response.data;
          })
          .catch(error => {
            console.error('Error fetching departments:', error);
          });
      }
    }
  };
  </script>
  