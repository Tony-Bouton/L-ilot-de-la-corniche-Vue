<template>
  <div class="login-container">
    <form class="login" action="">
      <input type="text" placeholder="Utilisateur" id="username" required />
      <input
        type="password"
        placeholder="Mot de Passe"
        id="password"
        required
      />

      <a href="/ilotresaVue/dist/tableau.php">valider</a>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      msg: "ok",
    };
  },
};
</script>

<style>
.login {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  margin-top: -229px;
}
.login-container {
  position: relative;
  transform: translateY(417px);
  height: 100vh;
}

input {
  padding: 5px;
  border-radius: 10px;
  margin: 1.5vh;
  border: 0.5px;
}

button:hover {
  cursor: pointer;
  background: #e495e4;
  color: white;
}

button {
  background: pink;
  color: black;
  border: 10px;
}
#valider {
  border-radius: 10px;
  background: antiquewhite;
}

a {
  text-decoration: none;
  color: rgba(128, 128, 128, 0.859);
}

a:hover {
  color: black;
}

.home {
  position: relative;
  top: 0;
  color: white;
}

.dialog-box {
  width: 556px;
  height: 66vh;
  margin-left: auto;
  margin-right: auto;
  text-align: center;
  background: rgba(253, 136, 185, 0.555);
  position: relative;
  color: green;
  font-size: 2rem;

  border-radius: 10px;
}
</style>
