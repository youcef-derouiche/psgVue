import { createRouter, createWebHashHistory } from 'vue-router';
import Login from './components/Login.vue'; // Composant pour la page de connexion
import Register from './components/Register.vue'; // Composant pour la page d'inscription
import Calendrier from './components/Calendrier.vue';
import Meteo from './components/Meteo.vue';

// Configuration des routes
const routes = [
  {
    path: '/', // Chemin pour la page de connexion
    name: 'Login',
    component: Login,
  },
  {
    path: '/register', // Chemin pour la page d'inscription
    name: 'Register',
    component: Register,
  },
  {
    path: '/calendrier', // Chemin pour la page d'inscription
    name: 'Calendrier',
    component: Calendrier,
  },
  {
    path: '/meteo', // Chemin pour la page d'inscription
    name: 'Meteo',
    component: Meteo,
  },
];

// Création du routeur
const router = createRouter({
  history: createWebHashHistory(), // Utilisation du mode hash pour les URLs
  routes,
});

export default router;
