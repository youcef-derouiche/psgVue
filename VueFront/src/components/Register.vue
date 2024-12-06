<template>
    <header>
        <h1>S'inscrire</h1>
    </header>

    <div>
        <form @submit.prevent="handleSubmit">
            <div>
                <label for="nom">Nom : </label>
                <input
                    id="nom"
                    v-model="nom"
                    type="text"
                    placeholder="Entrez votre nom"
                    required
                />
            </div>
            <div>
                <label for="prenom">Prénom : </label>
                <input
                    id="prenom"
                    v-model="prenom"
                    type="text"
                    placeholder="Entrez votre prénom"
                    required
                />
            </div>

            <div>
                <label for="email">Email : </label>
                <input
                    id="email"
                    v-model="email"
                    type="email"
                    placeholder="Entrez votre email"
                    required
                />
            </div>

            <div>
                <label for="password">Mot de passe : </label>
                <input
                    id="password"
                    v-model="password"
                    type="password"
                    placeholder="Entrez votre mot de passe"
                    required
                />
            </div>

            <button type="submit">S'inscrire</button>
        </form>
    </div>
</template>

<script>
import axios from "axios";

export default {
  name: "Register",
  data() {
    return {
      nom: "",
      prenom: "",
      email: "",
      password: "",
    };
  },
  methods: {
    async handleSubmit() {
      // Validation côté client
      if (!this.nom || !this.prenom || !this.email || !this.password) {
        alert("Tous les champs doivent être remplis !");
        return;
      }

      try {
        // Appel API
        const response = await axios.post("http://localhost:3306/api/register", {
          nom: this.nom,
          prenom: this.prenom,
          email: this.email,
          password: this.password,
        });

        // Message de succès
        alert(response.data.success || "Utilisateur inscrit avec succès !");
        
        // Réinitialiser le formulaire
        this.nom = "";
        this.prenom = "";
        this.email = "";
        this.password = "";
      } catch (error) {
        // Gestion des erreurs
        console.error("Erreur lors de l'inscription :", error);
        if (error.response) {
          alert(error.response.data.error || "Une erreur s'est produite, veuillez réessayer.");
        } else {
          alert("Impossible de contacter le serveur.");
        }
      }
    },
  },
};
</script>

<style scoped>
/* Style inchangé */
header {
    text-align: center;
    margin-bottom: 20px;
}

form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    background-color: #f9f9f9;
}

div {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #0056b3;
}
</style>
