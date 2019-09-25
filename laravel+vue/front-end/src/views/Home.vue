<template>
  <v-container
    fluid
  >
    <v-card>
    <search/>
    </v-card>
    <hoteles/>
  </v-container>
</template>

<script>
import hoteles from '../components/hoteles';
import search from '../components/search';
export default {
  components: {
    hoteles,
    search
  },
};
</script>
