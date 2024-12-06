<template>
    <div>
        <h1>Connexion</h1>
    </div>
    <form>
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
            <label for="mdp">Mot de passe : </label>
            <input
                id="mdp"
                v-model="mdp"
                type="password"
                placeholder="Entrez votre mot de passe"
                required
            />
        </div>
        <button type="submit">Se Connecter</button>
    </form>
</template>

<script>
export default {
  data() {
    return {
      email: '',
      mdp: ''
    };
  }
};
</script>

<style scoped>
h1 {
    text-align: center;
    margin-bottom: 20px;
}

form {
    max-width: 400px; /* Limite la largeur du formulaire */
    margin: 0 auto; /* Centre le formulaire sur la page */
    padding: 20px; /* Ajoute de l'espace intérieur */
    border: 1px solid #ccc; /* Bordure autour du formulaire */
    border-radius: 5px; /* Coins arrondis */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Ombre légère pour le formulaire */
    background-color: #f9f9f9; /* Couleur de fond claire */
}

div {
    margin-bottom: 15px; /* Espace entre les éléments du formulaire */
}

label {
    display: block; /* Affiche les étiquettes en bloc */
    margin-bottom: 5px; /* Espace sous l'étiquette */
    font-weight: bold; /* Met les étiquettes en gras */
}

input {
    width: 100%; /* Remplit toute la largeur du conteneur */
    padding: 10px; /* Espace intérieur */
    border: 1px solid #ccc; /* Bordure autour des champs */
    border-radius: 4px; /* Coins arrondis */
    font-size: 16px; /* Taille de la police */
}

button {
    width: 100%; /* Bouton de largeur complète */
    padding: 10px; /* Espace intérieur */
    background-color: #007bff; /* Couleur de fond du bouton */
    color: white; /* Couleur du texte */
    border: none; /* Pas de bordure */
    border-radius: 5px; /* Coins arrondis */
    cursor: pointer; /* Change le curseur au survol */
    font-size: 16px; /* Taille de la police */
    margin-top: 10px; /* Espace au-dessus du bouton */
}

button:hover {
    background-color: #0056b3; /* Couleur de fond au survol */
}
</style>
