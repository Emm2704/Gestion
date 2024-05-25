<template>
  <div class="container">
    <h1 class="my-4">Lista de Empleados</h1>
    <div v-if="loading">Cargando...</div>
    <div v-else-if="error">{{ error }}</div>
    <table v-else class="table table-striped table-bordered">
      <thead class="thead-dark">
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
      loading: false,
      error: null,
      employees: []
    };
  },
  mounted() {
    this.fetchEmployees();
  },
  methods: {
    fetchEmployees() {
      this.loading = true;
      this.$axios.get('/employees')
        .then(response => {
          this.employees = response.data;
          this.loading = false;
        })
        .catch(error => {
          console.error('Error fetching employees:', error);
          this.error = 'Error al obtener la lista de empleados';
          this.loading = false;
        });
    }
  }
};
</script>

<style scoped>
/* Puedes agregar estilos personalizados aquí */
</style>


  