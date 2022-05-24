<template>
  <header>
    <router-link to="/user"><div class="logo"></div></router-link>

    <nav>
      <router-link to="/">Accueil</router-link>
      <router-link to="/reservation">Reservation</router-link>
      <router-link to="/noustrouver">Nous trouver</router-link>
      <router-link to="/agenda">Agenda</router-link>
    </nav>
  </header>
  <router-view />
</template>

<style>
header {
  display: flex;
}
.wrapper {
  height: 100vh;
  display: flex;
  justify-content: space-around;
  flex-direction: column;
}
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;

  color: #e8e6e9;
}

body {
  height: 100vh;
  background: url(./assets/pink.png) no-repeat center/cover fixed;
}
.logo {
  background: url(./assets/ilotlogoremove.png) no-repeat center/cover;
  height: 16vh;
  width: 40vw;
  flex-wrap: wrap;
  /* animation: opacity 5s ease-out; */
  /* animation-delay: 5s; */
  animation: opacity 1s ease-out;
}
nav {
  display: flex;
  justify-content: space-around;
  list-style: none;
  align-items: center;
  margin-top: 10px;
  width: 100%;
  margin-left: auto;
  margin-right: auto;

  border-radius: 15px;

  animation: opacity 5s ease-out;
  height: 16vh;
}

nav a {
  font-weight: bold;
  color: antiquewhite;
  text-decoration: none;
  letter-spacing: 5px;
}

nav a:hover {
  color: pink;
}

nav a.router-link-exact-active {
  color: #e8e6e9;
  text-decoration: transparent;
}
</style>
