<template>
<v-row
  align="center"
  justify="center"
  v-if="$store.state.hotels"
>
  <v-col
    cols="12"
    sm="12"
    md="4"
    lg="3"
    v-for="hotel in $store.state.hotels"
    :key="hotel.id"
  >
    <v-card
       :loading="loading"
       max-width="374"
     >
       <v-img
         height="250"
         :src="hotel.image"
       ></v-img>

       <v-card-title>{{hotel.name}}</v-card-title>
       <v-card-text>
         <v-row align="center">
           <v-rating
             :value="hotel.stars"
             color="amber"
             half-increments
             dense
             size="14"
             readonly
           ></v-rating>

           <div class="grey--text ml-4">{{hotel.stars}}</div>
         </v-row>

         <div class="my-4 subtitle-1 black--text">
           $ {{hotel.price}} • {{hotel.country}}, {{hotel.city}}
         </div>

         <div>{{hotel.address}}</div>
       </v-card-text>

       <v-divider class="mx-4"></v-divider>
       <v-card-actions>
         <v-btn
           color="deep-purple accent-4"
           text
           @click="reserve"
         >
           ver
         </v-btn>
       </v-card-actions>
     </v-card>
  </v-col>
  </v-row>
  <v-row
  align="center"
  justify="center"
   v-else
   >
    <p>Sin Hoteles</p>
  </v-row>
</template>
<script>
const axios = require('axios');
export default {
  data: () => ({
    loading: false,
    selection: 1,
  }),
  created: function () {
   this.getHotels()
  },
  methods: {
     reserve () {
       this.loading = true

       setTimeout(() => (this.loading = false), 2000)
     },
     getHotels () {
      axios.get(this.$store.state.api.url + 'api/hoteles')
      .then(res => {
        this.$store.state.hotels = res.data
        console.log(this.$store.state.hotels)
      })
     }
   }
};
</script>
<style lang="scss">
</style>
