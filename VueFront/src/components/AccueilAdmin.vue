<template>
  <div>
    <nav class="navbar">
      <div class="logo">
        

        <router-link to="/AccueilAdmin">
          <img src="@/assets/images/psg.png" alt="PSG Logo" class="logo-img" />
        </router-link>

      </div>
      <div class="nav-links">
        <router-link to="/JoueursAdmin">Gérer les joueurs du club</router-link> |
        <router-link to="/BoutiqueAdmin">Gérer la boutique</router-link>

      </div>
      <button class="logout-button" @click="logout">Déconnexion</button>
    </nav>
    <header class="hero-section">
      <h1 class="hero-title">PARIS SAINT-GERMAIN</h1>
      <p class="hero-description">
        Bienvenue sur la plateforme d'administration du club le plus prestigieux de France.
      </p>
      <button class="cta-button">Découvrir l'histoire...</button>
    </header>
    <div class="user-dashboard">
      <h2>Accueil des administrateurs</h2>
    </div>
  </div>
</template>

<script>
export default {
  methods: {
    logout() {
      localStorage.removeItem("authToken");
      this.$router.push("/login");
    }
  }
};
</script>

<style scoped>
/* Style de la barre de navigation */
.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: #002b5c; 
  padding: 15px 25px;
  color: white;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
}

.logo-img {
  height: 50px;
}

.nav-links {
  display: flex;
  gap: 20px;
}

.nav-links a {
  color: white;
  text-decoration: none;
  font-size: 18px;
  font-weight: 500;
}

.nav-links a:hover {
  text-decoration: underline;
  color: #c8102e; 
}

.logout-button {
  background-color: #c8102e; 
  border: none;
  padding: 12px 18px;
  color: white;
  font-size: 16px;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.logout-button:hover {
  background-color: #9b0d20; 
}

/* Section héroïque */
.hero-section {
  background: linear-gradient(45deg, #002b5c, #c8102e);
  color: white;
  text-align: center;
  padding: 50px 20px;
}

.hero-title {
  font-size: 36px;
  font-weight: bold;
  margin-bottom: 10px;
}

.hero-description {
  font-size: 20px;
  margin-bottom: 20px;
}

.cta-button {
  background-color: #ffffff;
  color: #002b5c;
  border: 2px solid #002b5c;
  padding: 10px 20px;
  font-size: 16px;
  font-weight: bold;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease, color 0.3s ease;
}

.cta-button:hover {
  background-color: #002b5c;
  color: white;
}

/* Tableau de bord */
.user-dashboard {
  text-align: center;
  margin: 20px;
}

.user-dashboard h2 {
  color: #002b5c;
  font-weight: bold;
}
</style>
