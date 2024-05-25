<template>
  <div id="app">
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
      <a class="navbar-brand" href="#">Gestión de Recursos Humanos</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <router-link class="nav-link" to="/">Home</router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" to="/employees">Empleados</router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" to="/departments">Departamentos</router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" to="/payrolls">Nóminas</router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" to="/benefits">Beneficios</router-link>
          </li>
          <li class="nav-item">
            <router-link class="nav-link" to="/trainings">Capacitaciones</router-link>
          </li>
        </ul>
      </div>
    </nav>
    <router-view/>
  </div>
</template>

<script>
export default {
  name: 'App'
};
</script>

<style>
/* Estilos opcionales para App */
</style>
