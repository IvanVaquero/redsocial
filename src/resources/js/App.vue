
<template>
  <div id="app">
    <!-- <h1>{{ msg }}</h1> -->
    <!-- <router-link to="/">Login</router-link>
    <router-link to="/home">Home</router-link> -->
    <router-view/>
  </div>
</template>

<script>
export default {
  name: 'app',
  data () {
    return {
      msg: 'Welcome to Your Vue.js App'
    }
  }
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  /* margin-top: 60px; */
}
h1, h2 {
  font-weight: normal;
}

@import'~bootstrap/dist/css/bootstrap.css';
</style>
