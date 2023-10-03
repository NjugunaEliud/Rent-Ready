<template>
  <!-- <header class="bg-white shadow"> -->
    <!-- <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">Dashboard</h1>
    </div>
  </header>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8"> -->
      <div>
        <h1 class="text-2xl font-semibold">Properties</h1>
        <div v-for="property in properties" :key="property.id">
          <h2 class="text-xl font-semibold">{{ property.property_name }}</h2>
          <p><strong>Address:</strong> {{ property.address }}</p>
          <p><strong>Property Type:</strong> {{ property.property_type }}</p>
          <p><strong>Rent Cost:</strong> ${{ property.rent_cost }}</p>
          <!-- <p><strong>Description:</strong> {{ property.description }}</p>
          <p><strong>Landlord ID:</strong> {{ property.landlord_id }}</p> -->
            <div class="image">
            <img :src="property.images[0].url" alt="Property Image" class="w-full" />
          </div>
          </div>
        </div>
     
</template>
 

<script>
import axios from "axios";
export default {
  data() {
    return {
      properties: {},
    };
  },
  mounted() {
    this.fetchProperties();
  },
  methods: {
    fetchProperties() {
      axios
        .get("http://127.0.0.1:8000/api/rentready/landlord") 
        .then((response) => {
          this.properties = response.data;
        })
        .catch((error) => {
          console.error("Error fetching properties:", error);
        });
    },
  },
};
</script>

<style>
.carousel {
  max-width: 500px; 
  margin: 0 auto;
}
</style>