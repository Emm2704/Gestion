<template>
    <div>
      <h1>Lista de Empleados</h1>
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Departamento ID</th>
            <th>Puesto</th>
            <th>Fecha de Contratación</th>
            <th>Salario</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="employee in employees" :key="employee.id">
            <td>{{ employee.id }}</td>
            <td>{{ employee.nombre }}</td>
            <td>{{ employee.apellido }}</td>
            <td>{{ employee.departamento_id }}</td>
            <td>{{ employee.puesto }}</td>
            <td>{{ employee.fecha_contratacion }}</td>
            <td>{{ employee.salario }}</td>
          </tr>
        </tbody>
      </table>
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
        this.$axios.get('/employees')
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
  
  <style>
  table {
    width: 100%;
    border-collapse: collapse;
  }
  th, td {
    border: 1px solid #ddd;
    padding: 8px;
  }
  th {
    background-color: #f2f2f2;
    text-align: left;
  }
  </style>
  