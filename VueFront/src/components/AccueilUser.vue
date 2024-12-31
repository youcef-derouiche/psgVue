<template>
  <div>
    <!-- Barre de navigation -->
    <nav class="navbar">
      <div class="logo">
        <img src="@/assets/images/psg.png" alt="PSG Logo" class="logo-img" />
      </div>
      <div class="nav-links">
        <router-link to="/Classement">Classement</router-link>  |
        <router-link to="/psg-results">Résultats des matchs</router-link> |
        <router-link to="/JoueursUser">Voir les joueurs du club</router-link> |
        <router-link to="/BoutiqueUser">Voir les stock de la boutique</router-link>
      </div>
      <button class="logout-button" @click="logout">Déconnexion</button>
    </nav>

    <!-- Section héroïque -->
    <header class="hero-section">
      <h1 class="hero-title">Bienvenue sur le site officiel des supporters du PSG !</h1>
      <p class="hero-description">
        Découvrez les classements, résultats et joueurs de votre club favori.
      </p>
      <button class="cta-button" @click="scrollToHistory">En savoir plus sur l'histoire du club</button>
    </header>

    <!-- Section principale -->
    <div class="user-dashboard">
      
    </div>

    <!-- Section histoire -->
    <section class="history-section" id="history">
      <h2 class="history-title">L'histoire du Paris Saint-Germain</h2>
      <p class="history-content">
        Le Paris Saint-Germain (PSG) a été fondé en 1970 grâce à la fusion entre le Stade 
        Saint-Germain et le Paris FC. Depuis ses débuts, le club est devenu une institution 
        incontournable dans le monde du football, notamment grâce à ses performances et à sa 
        popularité croissante.
      </p>
      <div class="history-image">
        <img src="@/assets/images/fondation-psg.jpg" alt="Fondation du PSG" />
        <p>Le PSG lors de ses premiers matchs en 1970.</p>
      </div>
      <p class="history-content">
        Les années 80 ont marqué un tournant avec l'arrivée de grandes stars comme Safet 
        Sušić, qui a transformé le jeu offensif du club. C’est aussi durant cette décennie 
        que le PSG remporte son premier titre de Ligue 1, en 1986.
      </p>
      <div class="history-image">
        <img src="@/assets/images/psg-1986.jpg" alt="PSG Champion 1986" />
        <p>Les joueurs du PSG célébrant leur premier titre de Ligue 1 en 1986.</p>
      </div>
      <p class="history-content">
        Avec l'arrivée du Qatar Sports Investments (QSI) en 2011, le PSG entre dans une 
        nouvelle ère. Le club attire des stars internationales comme Neymar Jr., Kylian Mbappé, 
        et Lionel Messi. Le Parc des Princes devient un véritable temple du football moderne.
      </p>
      <div class="history-image">
        <img src="@/assets/images/psg-2022.jpg" alt="PSG Moderne" />
        <p>Les stars actuelles du PSG célébrant leurs victoires.</p>
      </div>
      <p class="history-content">
        Aujourd'hui, le PSG est reconnu comme l'un des meilleurs clubs au monde, avec un 
        palmarès impressionnant comprenant des titres de Ligue 1, des Coupes nationales, 
        et des performances remarquables en Ligue des Champions.
      </p>
    </section>
  </div>
</template>

<script>
export default {
  methods: {
    logout() {
      localStorage.removeItem("authToken");
      this.$router.push("/login");
    },
    scrollToHistory() {
      const historySection = document.getElementById("history");
      if (historySection) {
        historySection.scrollIntoView({ behavior: "smooth" });
      }
    }
  }
};
</script>

<style scoped>
/* Style pour la barre de navigation */
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

/* Section histoire */
.history-section {
  background-color: #f4f4f4;
  padding: 50px 20px;
  text-align: center;
}

.history-title {
  font-size: 28px;
  font-weight: bold;
  color: #002b5c;
  margin-bottom: 20px;
}

.history-content {
  font-size: 18px;
  color: #333;
  line-height: 1.6;
  margin-bottom: 15px;
}

.history-image {
  margin: 20px 0;
  text-align: center;
}

.history-image img {
  max-width: 100%;
  height: auto;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.history-image p {
  font-size: 16px;
  color: #555;
  margin-top: 10px;
}
</style>
