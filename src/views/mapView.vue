<template>
  <div class="box">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23238.820182107476!2d5.341485699703805!3d43.27546536468883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12c9c72e93712809%3A0x1d5231674a47cd8b!2s176%20Cor%20Pr%C3%A9sident%20John%20Fitzgerald%20Kennedy%2C%2013007%20Marseille!5e0!3m2!1sfr!2sfr!4v1648819027220!5m2!1sfr!2sfr"
      width="300"
      height="300"
      style="border: 0"
      loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"
    >
    </iframe>
    <div class="text-container">
      <div class="image"></div>
      <h2>Nous trouver</h2>
      <p class="p">
        Adresse : 176 Corniche Président John Fitzgerald Kennedy 13007 Marseille
      </p>
    </div>
  </div>
</template>
<style scoped>
.box {
  width: 60%;
  margin: 2rem auto;
  padding: 2em;
  display: flex;
  align-content: center;
  align-items: center;
  height: 60vh;

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
  animation: bg 1s cubic-bezier(0.19, 1, 0.22, 1) 1;
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

.image {
  background: url(../assets/corniche.jpg) center/cover;
  height: 20vh;
  width: 25vw;
  border-radius: 15px;
  margin-bottom: 20px;
}

.text-container {
  display: flex;
  justify-content: center;
  flex-direction: column;
  align-content: center;
  align-items: center;
  margin-left: 20px;
}
p {
  letter-spacing: 5px;
}

iframe {
  border-radius: 15px;
}
</style>
