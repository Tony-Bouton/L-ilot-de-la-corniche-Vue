<template>
  <div class="hello">
    <div class="box">
      <div class="content">
        <div class="img"></div>
        <div class="texte">
          <h2>Bienvenue à l'ilot de la corniche</h2>
          <p>
            Petite avancée sur la mer ,vue à couper le souffle ,tapas ,cocktail
            et fond musical.
          </p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "HelloWorld",
  props: {
    msg: String,
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.box {
  width: 60%;
  margin: 2rem auto;
  padding: 2em;

  align-items: center;
  background-repeat: no-repeat;
  background-image: linear-gradient(
      to right,
      antiquewhite 100%,
      antiquewhite 100%
    ),
    linear-gradient(to bottom, antiquewhite 100%, antiquewhite 100%),
    linear-gradient(to right, antiquewhite 100%, antiquewhite 100%),
    linear-gradient(to bottom, antiquewhite 100%, antiquewhite 100%);
  background-size: 100% 3px, 3px 100%, 100% 3px, 3px 100%;
  background-position: 0 0, 100% 0, 100% 100%, 0 100%;
  animation: bg 0.8s cubic-bezier(0.19, 1, 0.22, 1) 1;
  animation-play-state: running;
  border-radius: 15px;
}

/* Chrome, Safari, Opera */
@keyframes bg {
  0% {
    background-size: 0 3px, 3px 0, 0 3px, 3px 0;
  }
  25% {
    background-size: 100% 3px, 3px 0, 0 3px, 3px 0;
  }
  50% {
    background-size: 100% 3px, 3px 100%, 0 3px, 3px 0;
  }
  75% {
    background-size: 100% 3px, 3px 100%, 100% 3px, 3px 0;
  }
  100% {
    background-size: 100% 3px, 3px 100%, 100% 3px, 3px 100%;
  }
}

.content {
  background: rgb(246, 133, 167);
  padding: 2em;
  text-align: center;
  text-transform: uppercase;
  display: flex;
  justify-content: space-around;
  align-items: center;
  height: 50vh;
}

.img {
  background: url(../assets/accueil.jpg) center/cover;
  height: 50vh;
  width: 60vw;
  border-radius: 15px;
}

.texte {
  display: flex;
  flex-direction: column;
  justify-content: center;
  padding: 20px;
}

h2 {
  letter-spacing: 5px;
}
p {
  margin-top: 10px;
  font-size: 0.8em;
  margin-left: 50px;
  margin-right: 50px;
}
</style>
