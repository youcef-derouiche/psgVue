<template>
  <div id="app">
    <nav>
      <router-link to="/">Connexion</router-link> |
      <router-link to="/register">Inscription</router-link> | 
      <router-link to="/calendrier">Calendrier</router-link> | 
      <router-link to="/meteo">Météo</router-link>

    </nav>
    <router-view /> <!-- Affiche le composant en fonction de la route -->
  </div>
</template>

<script setup>
</script>

<style>
nav {
  margin-bottom: 20px;
  text-align: center;
}

a {
  text-decoration: none;
  margin: 0 10px;
}

a:hover {
  text-decoration: underline;
}
</style>
