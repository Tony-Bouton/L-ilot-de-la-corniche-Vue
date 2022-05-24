<template>
  <div class="box">
    <!-- <form action="C:\wamp64\www\ilotresaVue\src\index.php" method="POST"> -->
    <form
      action="/ilotresaVue/dist/reservation.php"
      method="POST"
      class="form-horizontal"
      role="form"
    >
      <p>Réservez</p>
      <input required type="text" name="nom" placeholder="nom" id="nom" />
      <input
        type="text"
        name="prenom"
        placeholder="prenom"
        id="prenom"
        required
      />
      <input type="email" name="mail" placeholder="mail" id="mail" required />
      <input
        type="number"
        name="tel"
        placeholder="numero de telephone"
        id="tel"
        required
      />
      <input
        type="text"
        name="jour"
        placeholder="jour de reservation"
        id="day"
        required
      />
      <input
        type="text"
        name="heure"
        placeholder="heure de reservation"
        id="time"
        required
      />
      <input
        type="number"
        name="nb"
        min="4"
        placeholder="nb de personnes"
        id="nb"
        required
      />
      <input type="submit" value="" name="envoyer" id="envoyer" />
    </form>
    <div class="texte">
      <div class="img-container"></div>
      <div class="text-container">
        <h2>info</h2>

        <ul>
          <li>reservation pour 4 personnes minimum</li>
          <li>réservation valable 15 min après l'horaire indiqué</li>
        </ul>
      </div>
    </div>
  </div>
</template>
<style scoped>
form {
  margin-left: auto;
  margin-right: auto;

  width: 40vw;
  display: flex;
  flex-direction: column;
  align-items: center;
  flex-wrap: wrap;
  padding: 3px;

  justify-content: space-around;
}

input {
  margin: 2%;
  border-radius: 5px;
  border: none;
  width: 20vw;
  border-bottom: grey solid 2px;
  padding: 5px;
  display: flex;
  justify-content: center;
  align-items: center;
  background: rgba(250, 235, 215, 0.616);
  color: black;
}

.box {
  width: 60%;
  height: 70vh;
  margin: 2rem auto;
  padding: 2em;
  display: flex;

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
  animation: bg 0.5s cubic-bezier(0.19, 1, 0.22, 1) 1;
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
  display: flex;

  background: rgb(246, 133, 167);
  padding: 2em;
  text-align: center;
  text-transform: uppercase;

  height: 60vh;
}
p {
  letter-spacing: 5px;
  font-weight: bold;
  color: antiquewhite;
  font-size: 1.5em;
  letter-spacing: 5px;
  font-weight: bolder;
}

.img-container {
  background: url(../assets/resa.jpg) center/cover;
  height: 40vh;
  border-radius: 15px;
}
</style>
