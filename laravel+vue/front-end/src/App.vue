<template>
<v-app id="inspire">
  <v-navigation-drawer
    v-model="drawer"
    app
  >
    <v-list dense>
      <v-list-item @click="$router.push('/home')">
        <v-list-item-action>
          <v-icon>mdi-home</v-icon>
        </v-list-item-action>
        <v-list-item-content>
          <v-list-item-title>Home</v-list-item-title>
        </v-list-item-content>
      </v-list-item>
    </v-list>
  </v-navigation-drawer>

  <v-app-bar
    app
    color="indigo"
    dark
  >
    <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>
    <v-toolbar-title @click="$router.push('/')" class="title-app">{{$store.state.app.title}}</v-toolbar-title>
  </v-app-bar>

  <v-content>
    <router-view></router-view>
  </v-content>
  <v-footer
    color="indigo"
    app
  >
    <span class="white--text">&copy; 2019 Cristian Niño</span>
  </v-footer>
</v-app>
</template>

<script>

export default {
  name: 'App',
  data: () => ({
    drawer: null,
    source: null,
  }),
};
</script>
<style lang="scss">
.title-app{
  transition-duration: 1s;
  transition-timing-function: ease;
  &:hover{
    cursor: pointer;
    transform: scale(1.2);
  }
}
</style>
