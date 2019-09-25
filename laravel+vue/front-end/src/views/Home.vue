<template>
  <v-container
    fluid
  >
    <search/>
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
