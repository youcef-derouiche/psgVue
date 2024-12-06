<template>
    <div class="calendar">
      <h1>PSG Match Calendar 2024-2025</h1>
      <ul v-if="fixtures.length > 0">
        <li v-for="fixture in fixtures" :key="fixture.id">
          <strong>{{ formatDate(fixture.date) }}</strong> - {{ fixture.teams.home.name }} vs {{ fixture.teams.away.name }}
        </li>
      </ul>
      <p v-else>Loading match data...</p>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        fixtures: [],
      };
    },
    mounted() {
      this.fetchMatchCalendar();
    },
    methods: {
      async fetchMatchCalendar() {
        const API_KEY = "8cd83de1a43005b2f54db4f3beb117fa"; // Replace with your API key
        const endpoint = "https://v3.football.api-sports.io/fixtures?team=85&season=2024";
  
        try {
          const response = await fetch(endpoint, {
            method: "GET",
            headers: {
              "x-rapidapi-key": API_KEY,
              "x-rapidapi-host": "v3.football.api-sports.io",
            },
          });
  
          const data = await response.json();
          if (data.response) {
            this.fixtures = data.response.map((fixture) => ({
              id: fixture.fixture.id,
              date: fixture.fixture.date,
              teams: fixture.teams,
            }));
          }
        } catch (error) {
          console.error("Error fetching match calendar:", error);
        }
      },
      formatDate(date) {
        const options = { weekday: "long", year: "numeric", month: "long", day: "numeric" };
        return new Date(date).toLocaleDateString("fr-FR", options);
      },
    },
  };
  </script>
  
  <style scoped>
  .calendar {
    font-family: Arial, sans-serif;
    margin: 20px;
  }
  h1 {
    text-align: center;
    margin-bottom: 20px;
  }
  ul {
    list-style-type: none;
    padding: 0;
  }
  li {
    margin: 10px 0;
    font-size: 16px;
  }
  </style>
  