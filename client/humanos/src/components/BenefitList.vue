<template>
    <div>
      <h1>Lista de Beneficios</h1>
      <ul>
        <li v-for="benefit in benefits" :key="benefit.id">{{ benefit.name }}</li>
      </ul>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        benefits: []
      };
    },
    mounted() {
      this.fetchBenefits();
    },
    methods: {
      fetchBenefits() {
        this.$axios.get('/api/benefits')
          .then(response => {
            this.benefits = response.data;
          })
          .catch(error => {
            console.error('Error fetching benefits:', error);
          });
      }
    }
  };
  </script>
  