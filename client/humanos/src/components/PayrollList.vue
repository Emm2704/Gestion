<template>
    <div>
      <h1>Lista de Nóminas</h1>
      <ul>
        <li v-for="payroll in payrolls" :key="payroll.id">
          {{ payroll.employee_name }} - {{ payroll.amount }}
        </li>
      </ul>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        payrolls: []
      };
    },
    mounted() {
      this.fetchPayrolls();
    },
    methods: {
      fetchPayrolls() {
        this.$axios.get('/api/payrolls')
          .then(response => {
            this.payrolls = response.data;
          })
          .catch(error => {
            console.error('Error fetching payrolls:', error);
          });
      }
    }
  };
  </script>
  