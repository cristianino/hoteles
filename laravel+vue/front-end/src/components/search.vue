<template>
  <v-row
    align="center"
  >
    <v-col
    cols="3"
    >
      <v-select v-model="filter" :items="filters" label="Buscar por..."></v-select>
    </v-col>
    <v-col
    cols="7"
    >
    <v-text-field
      placeholder="Buscar..."
      single-line
      color="white"
      hide-details
      v-model="search"
    ></v-text-field>
    </v-col>
    <v-col
    cols="2"
    >
      <v-btn @click="getHotels">Buscar</v-btn>
    </v-col>
  </v-row>
</template>
<script>

const axios = require('axios')
export default {
  data: () => ({
    filter: 'nombre',
    filters: [
      'nombre',
      'precio',
      'pais',
      'ciudad',
      'estrellas'
    ],
    search: ''
  }),
  methods: {
     getHotels () {
      axios.post(this.$store.state.api.url + 'api/hoteles/filtro/' + this.filter, {
      data: this.search
      })
      .then(res => {
        console.log('filro', res.data)
        this.$store.state.hotels = res.data
        console.log(this.$store.state.hotels)
      })
     }
   }
};
</script>
