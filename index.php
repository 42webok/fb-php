<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Facebook Like & Followers</title>
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700;800;900&display=swap");

*, *:before, *:after {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
body{
  transition: all 1s ease;
}
body,
button {
  font-family: "Nunito", sans-serif;
  background-color: #3a4551;
}
#services , #taskcompleted , #about , #contact{
  transition: all 1s ease;
}
.container {
  min-height: 100vh;
  width: 100%;
  background-color: #485461;
  background-image: linear-gradient(135deg, #485461 0%, #28313b 74%);
  overflow-x: hidden;
  transform-style: preserve-3d;
}

.navbar {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 10;
  height: 3rem;
}

.menu {
  max-width: 72rem;
  width: 100%;
  margin: 0 auto;
  padding: 0 2rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
  color: #fff;
  
}

.logo {
  font-size: 2rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2px;
    line-height: 4rem;
  color: rgb(32, 32, 32);
}

.logo span {
  font-weight: 300;
  color: white;
}

.hamburger-menu {
  height: 4rem;
  width: 3rem;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: flex-end;
}

.bar {
  width: 1.9rem;
  height: 1.5px;
  border-radius: 2px;
  background-color: #eee;
  transition: 0.5s;
  position: relative;
}

.bar:before,
.bar:after {
  content: "";
  position: absolute;
  width: inherit;
  height: inherit;
  background-color: #eee;
  transition: 0.5s;
}

.bar:before {
  transform: translateY(-9px);
}

.bar:after {
  transform: translateY(9px);
}

.main {
  position: relative;
  width: 100%;
  left: 0;
  z-index: 5;
  overflow: hidden;
  transform-origin: left;
  transform-style: preserve-3d;
  transition: 0.5s;
}

header {
  min-height: 100vh;
  width: 100%;
  background: url('assets/img/img11.webp') no-repeat top center / cover;
  position: relative;
}

.overlay {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background-color: rgb(64 74 84 / 80%);
  display: flex;
  justify-content: center;
  align-items: center;
}

.inner {
  max-width: 35rem;
  text-align: center;
  color: #fff;
  padding: 0 2rem;
}

.title {
  text-transform: uppercase;
  font-size: 2.7rem;
}

.paragraph {
  margin: 1rem 0;
  font-size: 17px;
  font-weight: 400;
}

.paragraph a {
  color: rgba(0, 0, 0, .8);
  font-size: .8rem;
  font-weight: bold;
}

/* .btn {
  margin-top: 1rem;
  padding: 0.6rem 1.8rem;
  background-color: rgba(0, 0, 0, .75);
  border: none;
  border-radius: 25px;
  color: #fff;
  cursor: pointer;
  text-decoration: none;
  box-shadow: 0px 3px 6px rgba(0, 0, 0, .25);
} */

.btn-53,
.btn-53 *,
.btn-53 :after,
.btn-53 :before,
.btn-53:after,
.btn-53:before {
  border: 0 solid;
  box-sizing: border-box;
}

.btn-53 {
  -webkit-tap-highlight-color: transparent;
  -webkit-appearance: button;
  background-color: #000;
  background-image: none;
  color: #fff;
  cursor: pointer;
  font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont,
    Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif,
    Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
  font-size: 100%;
  line-height: 1.5;
  margin: 0;
  -webkit-mask-image: -webkit-radial-gradient(#000, #fff);
  padding: 0;
}

.btn-53:disabled {
  cursor: default;
}

.btn-53:-moz-focusring {
  outline: auto;
}

.btn-53 svg {
  display: block;
  vertical-align: middle;
}

.btn-53 [hidden] {
  display: none;
}

.btn-53 {
  border: 1px solid;
  border-radius: 999px;
  box-sizing: border-box;
  display: block;
  font-weight: 900;
  overflow: hidden;
  margin-top: 1.7rem;
  padding: 0.6rem 1.8rem;
  position: relative;
  text-transform: uppercase;
}

.btn-53 .original {
  background: radial-gradient(circle at 10% 20%, rgb(255, 156, 156) 0%, rgb(179, 201, 241) 90%);
  color: #000000;
  display: grid;
  inset: 0;
  place-content: center;
  position: absolute;
  transition: transform 0.2s cubic-bezier(0.87, 0, 0.13, 1);
}

.btn-53:hover .original {
  transform: translateY(100%);
  color: #000;
  background-color: #fff;
}

.btn-53 .letters {
  display: inline-flex;
}

.btn-53 span {
  opacity: 0;
  transform: translateY(-15px);
  transition: transform 0.2s cubic-bezier(0.87, 0, 0.13, 1), opacity 0.2s;
}

.btn-53 span:nth-child(2n) {
  transform: translateY(15px);
}

.btn-53:hover span {
  opacity: 1;
  transform: translateY(0);
}

.btn-53:hover span:nth-child(2) {
  transition-delay: 0.1s;
}

.btn-53:hover span:nth-child(3) {
  transition-delay: 0.2s;
}

.btn-53:hover span:nth-child(4) {
  transition-delay: 0.3s;
}

.btn-53:hover span:nth-child(5) {
  transition-delay: 0.4s;
}

.btn-53:hover span:nth-child(6) {
  transition-delay: 0.5s;
}


.container.active .bar {
  transform: rotate(360deg);
  background-color: transparent;
}

.container.active .bar:before {
  transform: translateY(0) rotate(45deg);
}

.container.active .bar:after {
  transform: translateY(0) rotate(-45deg);
}

.container.active .main {
  animation: main-animation 0.5s ease;
  cursor: pointer;
  transform: perspective(1300px) rotateY(20deg) translateZ(310px) scale(0.5);
}

@keyframes main-animation {
  from {
    transform: translate(0);
  }

  to {
    transform: perspective(1300px) rotateY(20deg) translateZ(310px) scale(0.5);
  }
}

.links {
  position: absolute;
  width: 30%;
  right: 0;
  top: 0;
  height: 100vh;
  z-index: 2;
  display: flex;
  justify-content: center;
  align-items: center;
}

ul {
  list-style: none;
}

.links a {
  text-decoration: none;
  color: #eee;
  padding: 0.7rem 0;
  display: inline-block;
  font-size: 1rem;
  font-weight: 300;
  text-transform: uppercase;
  letter-spacing: 1px;
  transition: 0.3s;
  opacity: 0;
  transform: translateY(10px);
  animation: hide 0.5s forwards ease;
}

.links a:hover {
  color: #fff;
}

.container.active .links a {
  animation: appear 0.5s forwards ease var(--i);
}

@keyframes appear {
  from {
    opacity: 0;
    transform: translateY(10px);
  }
  to {
    opacity: 1;
    transform: translateY(0px);
  }
}

@keyframes hide {
  from {
    opacity: 1;
    transform: translateY(0px);
  }
  to {
    opacity: 0;
    transform: translateY(10px);
  }
}
.central{
  display: flex;
  justify-content: center;
  align-items: center;
}
.shadow {
  position: absolute;
  width: 100%;
  height: 100vh;
  top: 0;
  left: 0;
  transform-style: preserve-3d;
  transform-origin: left;
  transition: 0.5s;
  background-color: white;
}

.shadow.one {
  z-index: -1;
  opacity: 0.15;
}

.shadow.two {
  z-index: -2;
  opacity: 0.1;
}

.container.active .shadow.one {
  animation: shadow-one 0.6s ease-out;
  transform: perspective(1300px) rotateY(20deg) translateZ(215px) scale(0.5);
}

@keyframes shadow-one {
  0% {
    transform: translate(0);
  }

  5% {
    transform: perspective(1300px) rotateY(20deg) translateZ(310px) scale(0.5);
  }

  100% {
    transform: perspective(1300px) rotateY(20deg) translateZ(215px) scale(0.5);
  }
}

.container.active .shadow.two {
  animation: shadow-two 0.6s ease-out;
  transform: perspective(1300px) rotateY(20deg) translateZ(120px) scale(0.5);
}

@keyframes shadow-two {
  0% {
    transform: translate(0);
  }

  20% {
    transform: perspective(1300px) rotateY(20deg) translateZ(310px) scale(0.5);
  }

  100% {
    transform: perspective(1300px) rotateY(20deg) translateZ(120px) scale(0.5);
  }
}

.container.active .main:hover + .shadow.one {
  transform: perspective(1300px) rotateY(20deg) translateZ(230px) scale(0.5);
}

.container.active .main:hover {
  transform: perspective(1300px) rotateY(20deg) translateZ(340px) scale(0.5);
}
/* Services Section */
#services{
  margin-top: 40px;
  padding: 20px;
}
#services h1{
text-align: center;
font-size: 2.5rem;
color: white;
}
#services .central2{
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
}
.e-card {
  margin: 50px auto;
  background: transparent;
  box-shadow: 0px 8px 28px -9px rgba(0,0,0,0.45);
  position: relative;
  width: 260px;
  height: 340px;
  border-radius: 16px;
  overflow: hidden;
}

.wave {
  position: absolute;
  width: 540px;
  height: 700px;
  opacity: 0.6;
  left: 0;
  top: 0;
  margin-left: -50%;
  margin-top: -70%;
  background: linear-gradient(744deg, #b69bc9, #6c5dc7 60%, #25c0c9);
}
#red .wave{
  background: linear-gradient(102.2deg, rgb(250, 45, 66) 9.6%, rgb(245, 104, 104) 96.1%);
}
#yellow .wave{
  background: radial-gradient(circle at 10% 20%, rgb(255, 200, 124) 0%, rgb(252, 251, 121) 90%);
}

.icon {
  width: 3em;
  margin-top: -1em;
  padding-bottom: 1em;
}

.infotop {
  text-align: center;
  font-size: 20px;
  position: absolute;
  top: 5.6em;
  left: 0;
  right: 0;
  color: rgb(255, 255, 255);
  font-weight: 600;
}

.name {
  font-size: 14px;
  font-weight: 100;
  position: relative;
  top: 1em;
  text-transform: lowercase;
}

.wave:nth-child(2),
.wave:nth-child(3) {
  top: 210px;
}

.playing .wave {
  border-radius: 40%;
  animation: wave 3000ms infinite linear;
}

.wave {
  border-radius: 40%;
  animation: wave 55s infinite linear;
}

.playing .wave:nth-child(2) {
  animation-duration: 4000ms;
}

.wave:nth-child(2) {
  animation-duration: 50s;
}

.playing .wave:nth-child(3) {
  animation-duration: 5000ms;
}

.wave:nth-child(3) {
  animation-duration: 45s;
}

@keyframes wave {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}
/* =============================== */
#taskcompleted{
  margin-top: 40px;
  padding: 20px;
}
#taskcompleted h1{
  text-align: center;
font-size: 2.5rem;
color: white;
}
#taskcompleted .central3{
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  margin-top: 45px;
}
.results-summary-container {
  cursor: pointer;
  font-family: "Hanken Grotesk", sans-serif;
  display: flex;
  flex-direction: column;
  width: 600px;
  gap: 10px;
  border-radius: 10px;
  box-shadow: 10px 10px 30px rgba(120, 87, 255, 0.8);
  backface-visibility: hidden;
}

.heading-primary,
.heading-secondary,
.heading-tertiary {
  color: #ffffff;
  text-transform: capitalize;
  margin-bottom: 15px;
  text-transform: uppercase;
  letter-spacing: 1px;
}

.heading-primary {
  font-size: 30px;
  font-weight: 700;
  background-image: linear-gradient(to right, #f7bb97, #dd5e89);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  transform: scale(1.4);
}

.heading-secondary {
  font-size: 24px;
  font-weight: 700;
  margin-top: 15px;
  letter-spacing: 1px;
}

.heading-secondary--blue {
  color: hsl(223, 17%, 92%);
}

.heading-tertiary {
  font-size: 20px;
  font-weight: 500;
  margin-bottom: 20px;
  color: hsl(221, 100%, 96%);
}

.paragraph {
  font-size: 17px;
  line-height: 1.6;
  color: hsl(221, 100%, 96%);
}

.paragraph-text-box {
  width: 100%;
}

.text-center {
  text-align: center;
}

.margin-1 {
  margin-bottom: 10px;
}

.results-summary-container__result {
  display: flex;
  flex-direction: column;
  text-align: center;
  align-items: center;
  justify-content: center;
  padding: 20px 10px;
  border-radius: 10px 10px 0 0;
  background-image: linear-gradient(to bottom, #aa076b, #61045f);
  .result-box {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  background-image: linear-gradient(-45deg, #ef629f, #42275a);
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  cursor: pointer;
}

.result {
  margin-top: -12px;
  font-size: 14px;
  font-weight: 400;
  color: hsl(241, 100%, 89%);
}
}

.results-summary-container__options {
  padding: 0 16px;
}

.summary-result-options {
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.result-option {
  width: 100%;
  height: 40px;
  background-color: hsl(0, 100%, 97%);
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px;
  border-radius: 3px;
  cursor: pointer;
}

.result-option-memory {
  background-color: hsl(39, 100%, 97%);
}

.result-option-verbal {
  background-color: hsl(166, 100%, 97%);
}

.result-option-Visual {
  background-color: hsl(234, 85%, 97%);
}

.icon-box {
  display: flex;
  font-size: 16px;
  align-items: center;
  gap: 2px;
}

.reaction-icon-text {
  color: hsl(0, 100%, 67%);
}

.memory-icon-text {
  color: hsl(39, 100%, 56%);
}

.verbal-icon-text {
  color: hsl(166, 100%, 37%);
}

.visual-icon-text {
  color: hsl(234, 85%, 45%);
}

.result-box {
  font-size: 14px;
  color: hsl(241, 100%, 89%);
  font-weight: 700;
}

.result-box span {
  font-size: 14px;
  color: hsl(224, 30%, 27%);
}

.btn {
  width: 100%;
  padding: 10px;
  color: #ffffff;
  background-image: linear-gradient(to right, #aa076b, #61045f);
  border: none;
  border-radius: 3px;
  font-size: 17px;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-weight: 500;
  cursor: pointer;
  margin: 15px 0 30px 0;
  transition: all 0.3s;
}

.btn:hover {
  transform: translateY(5px);
  background-image: linear-gradient(to left, #aa076b, #61045f);
}

.icon {
  cursor: pointer;
  filter: grayscale(1);
  transition: 0.3s linear;
}

.icon:hover {
  filter: grayscale(0);
}

@keyframes background {
  0% {
    background-image: linear-gradient(to right, #aa076b, #61045f);
  }

  50% {
    background-image: linear-gradient(to right, #aa076b, #61045f);
  }

  100% {
    background-image: linear-gradient(to right, #ef629f, #42275a);
  }
}

@keyframes gradient {
  0% {
    background-position: 0% 50%;
    background-image: linear-gradient(-45deg, #ef629f, #42275a);
  }

  50% {
    background-position: 100% 50%;
    background-image: linear-gradient(to bottom, #aa076b, #61045f);
  }

  100% {
    background-position: 0% 50%;
    background-image: linear-gradient(to top, #ef629f, #42275a);
  }
}

.confetti {
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  width: 360px;
  height: 50%;
  overflow: hidden;
  z-index: 1000;
}

.confetti-piece {
  position: absolute;
  width: 10px;
  height: 20px;
  background-color: hsl(39, 100%, 56%);
  top: 0;
  opacity: 0;
  animation: makeItRain 3000ms infinite ease-in-out;
}

.confetti-piece:nth-child(1) {
  left: 7%;
  transform: rotate(-10deg);
  animation-delay: 182ms;
  animation-duration: 2000ms;
}

.confetti-piece:nth-child(2) {
  left: 14%;
  transform: rotate(20deg);
  animation-delay: 161ms;
  animation-duration: 2076ms;
}

.confetti-piece:nth-child(3) {
  left: 21%;
  transform: rotate(-51deg);
  animation-delay: 481ms;
  animation-duration: 2103ms;
}

.confetti-piece:nth-child(4) {
  left: 28%;
  transform: rotate(61deg);
  animation-delay: 334ms;
  animation-duration: 1008ms;
}

.confetti-piece:nth-child(5) {
  left: 35%;
  transform: rotate(-52deg);
  animation-delay: 302ms;
  animation-duration: 1776ms;
}

.confetti-piece:nth-child(6) {
  left: 42%;
  transform: rotate(38deg);
  animation-delay: 180ms;
  animation-duration: 1168ms;
}

.confetti-piece:nth-child(7) {
  left: 49%;
  transform: rotate(11deg);
  animation-delay: 395ms;
  animation-duration: 1200ms;
}

.confetti-piece:nth-child(8) {
  left: 56%;
  transform: rotate(49deg);
  animation-delay: 14ms;
  animation-duration: 1887ms;
}

.confetti-piece:nth-child(9) {
  left: 63%;
  transform: rotate(-72deg);
  animation-delay: 149ms;
  animation-duration: 1805ms;
}

.confetti-piece:nth-child(10) {
  left: 70%;
  transform: rotate(10deg);
  animation-delay: 351ms;
  animation-duration: 2059ms;
}

.confetti-piece:nth-child(11) {
  left: 77%;
  transform: rotate(4deg);
  animation-delay: 307ms;
  animation-duration: 1132ms;
}

.confetti-piece:nth-child(12) {
  left: 84%;
  transform: rotate(42deg);
  animation-delay: 464ms;
  animation-duration: 1776ms;
}

.confetti-piece:nth-child(13) {
  left: 91%;
  transform: rotate(-72deg);
  animation-delay: 429ms;
  animation-duration: 1818ms;
}

.confetti-piece:nth-child(14) {
  left: 94%;
  transform: rotate(-72deg);
  animation-delay: 429ms;
  animation-duration: 818ms;
}

.confetti-piece:nth-child(15) {
  left: 96%;
  transform: rotate(-72deg);
  animation-delay: 429ms;
  animation-duration: 2818ms;
}

.confetti-piece:nth-child(16) {
  left: 98%;
  transform: rotate(-72deg);
  animation-delay: 429ms;
  animation-duration: 2818ms;
}

.confetti-piece:nth-child(17) {
  left: 50%;
  transform: rotate(-72deg);
  animation-delay: 429ms;
  animation-duration: 2818ms;
}

.confetti-piece:nth-child(18) {
  left: 60%;
  transform: rotate(-72deg);
  animation-delay: 429ms;
  animation-duration: 1818ms;
}

.confetti-piece:nth-child(odd) {
  background-color: hsl(0, 100%, 67%);
}

.confetti-piece:nth-child(even) {
  z-index: 1;
}

.confetti-piece:nth-child(4n) {
  width: 6px;
  height: 14px;
  animation-duration: 4000ms;
  background-color: #c33764;
}

.confetti-piece:nth-child(5n) {
  width: 3px;
  height: 10px;
  animation-duration: 4000ms;
  background-color: #b06ab3;
}

.confetti-piece:nth-child(3n) {
  width: 4px;
  height: 12px;
  animation-duration: 2500ms;
  animation-delay: 3000ms;
  background-color: #dd2476;
}

.confetti-piece:nth-child(3n-7) {
  background-color: hsl(166, 100%, 37%);
}

@keyframes makeItRain {
  from {
    opacity: 0;
  }

  50% {
    opacity: 1;
  }

  to {
    transform: translateY(200px);
  }
}

/* ========================================================== */

:root {
  --base-darker: #000;
  --base-lighter: #fbfbfb;
  --base-light: #aaaaaa;
}
#about{
  margin-top: 50px;
  padding: 20px;
}
#about .central5{
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
}
.hero-section {
  padding: 2rem 0;
  background-color: #3a4551;
}

.hero-section_title {
  font-size: clamp(1rem, 4vw, 3rem);
  line-height: 1.2;
  margin-top: 12px;
  text-align: center;
  color: var(--base-lighter);
  font-weight: 400;
}

.hero-section_title .quoted-text {
  color: var(--base-lighter);
}

.hero-section_cards {
  padding: 7rem 0;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
  gap: 1rem;
}

.hero-section_card {
  min-height: 450px;
  border-radius: 12px;
}

.hero-section_card_content {
  padding: 1.6rem;
}

.hero-section_card_title {
  font-size: 2rem;
  font-weight: 500;
  padding-bottom: 1.6rem;
}

.hero-section_card.card-1 {
  background: linear-gradient(to top, RGBA(0,0,0,0.2), RGBA(0,0,0,0.8)), url('assets/img/pii8.jpg') ;
  background-position: center;
  background-repeat: no-repeat;
}
.hero-section_card.card-2 {
   background: linear-gradient(to top, RGBA(0,0,0,0.2), RGBA(0,0,0,0.8)), url('assets/img/pii22.png') ;
  background-repeat: no-repeat;
  background-position: center;
}
.hero-section_card.card-3 {
  background: linear-gradient(to top, RGBA(0,0,0,0.2), RGBA(0,0,0,0.8)), url('assets/img/pi111.jpeg') ;
  background-repeat: no-repeat;
  /* background-size: cover; */
  background-position: center;
}

/* =================================================== */
#contact{
  margin-top: 50px;
  padding: 20px;
}
#contact h1{
  text-align: center;
  font-size: 2rem;
  color: white;
}
#contact .central0{
  transform: translateY(55px);
  display: flex;
  justify-content: center;
  align-items: center;
}
#contact .container {
  display: flex;
  width: 700px;
  height: 500px;
  max-width: 99%;
  align-items: center;
  justify-content: center;
  position: relative;
  overflow: hidden;
  background-color: #ffffff25;
  border-radius: 15px;
  box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.03);
  border: 0.1px solid rgba(128, 128, 128, 0.178);
}

#contact .left {
  width: 66%;
  height: 100%;
}

#contact .form {
  display: flex;
  flex-direction: column;
  justify-content: center;
  height: 100%;
  width: 100%;
  left: 0;
  backdrop-filter: blur(20px);
  position: relative;
}

#contact .form::before {
  position: absolute;
  content: "";
  width: 40%;
  height: 40%;
  right: 1%;
  z-index: -1;
  background: radial-gradient(
    circle,
    rgb(194, 13, 170) 20%,
    rgb(26, 186, 235) 60%,

    rgb(26, 186, 235) 100%
  );
  filter: blur(70px);
  border-radius: 50%;
}

#contact .right {
  width: 34%;
  height: 100%;
}

#contact .img {
  width: 100%;
  height: 100%;
}

#contact .container::after {
  position: absolute;
  content: "";
  width: 80%;
  height: 80%;
  right: -40%;
  background: rgb(157, 173, 203);
  background: radial-gradient(
    circle,
    rgba(157, 173, 203, 1) 61%,
    rgba(99, 122, 159, 1) 100%
  );
  border-radius: 50%;
  z-index: -1;
}

 #contact .input,
button {
  background: rgba(253, 253, 253, 0);
  outline: none;
  border: 1px solid rgba(255, 0, 0, 0);
  border-radius: 0.5rem;
  padding: 10px;
  margin: 10px auto;
  width: 80%;
  display: block;
  color: #425981;
  font-weight: 500;
  font-size: 1.1em;
}

 #contact .input-block {
  position: relative;
}

#contact label {
  position: absolute;
  left: 15%;
  top: 37%;
  pointer-events: none;
  color: gray;
}

#contact .forgot {
  display: block;
  margin: 5px 0 10px 0;
  margin-left: 35px;
  color: #5e7eb6;
  font-size: 0.9em;
}

#contact .input:focus + label,
#contact .input:valid + label {
  transform: translateY(-120%) scale(0.9);
  transition: all 0.4s;
}

#contact button {
  background-color: #5e7eb6;
  color: white;
  font-size: medium;
  box-shadow: 2px 4px 8px rgba(70, 70, 70, 0.178);
}

#contact a {
  color: #5e7eb6;
  display: none;
}

#contact .input {
  box-shadow: inset 4px 4px 4px rgba(165, 163, 163, 0.315),
    4px 4px 4px rgba(218, 218, 218, 0.13);
}
/* ========================= */
footer{
  margin-top: 100px;
  padding: 30px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
}
footer .txt{
  font-size: 18px;
  color: white;
  font-weight: 500px;
}
footer ul {
  list-style: none;
}

.example-2 {
  display: flex;
  justify-content: center;
  align-items: center;
}
.example-2 .icon-content {
  margin: 0 10px;
  position: relative;
}
.example-2 .icon-content .tooltip {
  position: absolute;
  top: -30px;
  left: 50%;
  transform: translateX(-50%);
  color: #fff;
  padding: 6px 10px;
  border-radius: 5px;
  opacity: 0;
  visibility: hidden;
  font-size: 14px;
  transition: all 0.3s ease;
}
.example-2 .icon-content:hover .tooltip {
  opacity: 1;
  visibility: visible;
  top: -50px;
}
.example-2 .icon-content a {
  position: relative;
  overflow: hidden;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  color: #4d4d4d;
  background-color: #fff;
  transition: all 0.3s ease-in-out;
}
.example-2 .icon-content a:hover {
  box-shadow: 3px 2px 45px 0px rgb(0 0 0 / 12%);
}
.example-2 .icon-content a svg {
  position: relative;
  z-index: 1;
  width: 30px;
  height: 30px;
}
.example-2 .icon-content a:hover {
  color: white;
}
.example-2 .icon-content a .filled {
  position: absolute;
  top: auto;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 0;
  background-color: #000;
  transition: all 0.3s ease-in-out;
}
.example-2 .icon-content a:hover .filled {
  height: 100%;
}

.example-2 .icon-content a[data-social="linkedin"] .filled,
.example-2 .icon-content a[data-social="linkedin"] ~ .tooltip {
  background-color: #0274b3;
}

.example-2 .icon-content a[data-social="github"] .filled,
.example-2 .icon-content a[data-social="github"] ~ .tooltip {
  background-color: #24262a;
}
.example-2 .icon-content a[data-social="instagram"] .filled,
.example-2 .icon-content a[data-social="instagram"] ~ .tooltip {
  background: linear-gradient(
    45deg,
    #405de6,
    #5b51db,
    #b33ab4,
    #c135b4,
    #e1306c,
    #fd1f1f
  );
}
.example-2 .icon-content a[data-social="youtube"] .filled,
.example-2 .icon-content a[data-social="youtube"] ~ .tooltip {
  background-color: #ff0000;
}


@media (max-width:700px){

.title {
    text-transform: uppercase;
    font-size: 2.3rem;
}
.paragraph {
    margin: 1rem 0;
    font-size: 16px;
    font-weight: 400;
}

.btn-53 {
  border: 1px solid;
  border-radius: 999px;
  box-sizing: border-box;
  display: block;
  font-weight: 900;
  overflow: hidden;
  margin-top: 1.7rem;
}
.logo {
    font-size: 1.4rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2px;
    line-height: 4rem;
    color: black;
}
}
@media (max-width: 500px) {
  .links {
    position: absolute;
    width: 30%;
    right: 0;
    top: 55%;
    left: 35%;
    height: 100vh;
    z-index: 2;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
}
ul {
    list-style: none;
    display: flex;
    flex-direction: row;
    /* justify-content: space-between; */
    /* margin-left: 3px; */
    flex-wrap: wrap;
}
.container.active .links a {
    animation: appear 0.5s forwards ease var(--i);
    margin-left: 8px;
    font-size: 17px;
}
}
    </style>
</head>
<body>
   

  <div class="container">
    <div class="navbar">
      <div class="menu">
        <h3 class="logo">Free<span>-Liker</span></h3>
        <div class="hamburger-menu">
          <div class="bar"></div>
        </div>
      </div>
    </div>
  
    <div class="main-container">
      <div class="main">
        <header>
          <div class="overlay">
            <div class="inner">
              <h2 class="title">Free Facebook Auto Liker</h2>
              <p class="paragraph">
                Get Facebook Post Reactions, Comments, Shares and Page Likes & Followers for Free
              </p>
              
            <a href="form.html"> <div class="central" >
                <button class="btn-53">
                  <div class="original" >LOGIN</div>
                  <div class="letters">
                    
                    <span>L</span>
                    <span>O</span>
                    <span>G</span>
                    <span>I</span>
                    <span>N</span>
                  </div>
                </button>
              </div></a> 
            </div>
          </div>
        </header>
      </div>
  
      <div class="shadow one"></div>
      <div class="shadow two"></div>
    </div>
  
    <div class="links">
      <ul>
        <li>
          <a href="#" style="--i: 0.05s;">Home</a>
        </li>
        <li>
          <a href="#services" style="--i: 0.1s;">Services</a>
        </li>
        <li>
          <a href="#taskcompleted" style="--i: 0.15s;">Completed Tasks</a>
        </li>
        <li>
          <a href="#about" style="--i: 0.25s;">About</a>
        </li>
        <li>
          <a href="#contact" style="--i: 0.3s;">Contact</a>
        </li>
      </ul>
    </div>
  </div>
  

  <!-- Services section  -->
  <section class="services" id="services">
    <h1 class="heading">Our Services</h1>
    <div class="central2" style="cursor: pointer;">
      

      <!-- Card -->
      <div class="e-card playing">
        <div class="image"></div>
        
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
        
      
            <div class="infotop">
      
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="icon">
        <path fill="currentColor" d="M19.4133 4.89862L14.5863 2.17544C12.9911 1.27485 11.0089 1.27485 9.41368 2.17544L4.58674
        4.89862C2.99153 5.7992 2 7.47596 2 9.2763V14.7235C2 16.5238 2.99153 18.2014 4.58674 19.1012L9.41368
        21.8252C10.2079 22.2734 11.105 22.5 12.0046 22.5C12.6952 22.5 13.3874 22.3657 14.0349 22.0954C14.2204
        22.018 14.4059 21.9273 14.5872 21.8252L19.4141 19.1012C19.9765 18.7831 20.4655 18.3728 20.8651
        17.8825C21.597 16.9894 22 15.8671 22 14.7243V9.27713C22 7.47678 21.0085 5.7992 19.4133 4.89862ZM4.10784
        14.7235V9.2763C4.10784 8.20928 4.6955 7.21559 5.64066 6.68166L10.4676 3.95848C10.9398 3.69152 11.4701
        3.55804 11.9996 3.55804C12.5291 3.55804 13.0594 3.69152 13.5324 3.95848L18.3593 6.68166C19.3045 7.21476
        19.8922 8.20928 19.8922 9.2763V9.75997C19.1426 9.60836 18.377 9.53091 17.6022 9.53091C14.7929 9.53091
        12.1041 10.5501 10.0309 12.3999C8.36735 13.8847 7.21142 15.8012 6.68783 17.9081L5.63981 17.3165C4.69466
        16.7834 4.10699 15.7897 4.10699 14.7235H4.10784ZM10.4676 20.0413L8.60933 18.9924C8.94996 17.0479 9.94402
        15.2665 11.4515 13.921C13.1353 12.4181 15.3198 11.5908 17.6022 11.5908C18.3804 11.5908 19.1477 11.6864
        19.8922 11.8742V14.7235C19.8922 15.2278 19.7589 15.7254 19.5119 16.1662C18.7615 15.3596 17.6806 14.8528
         16.4783 14.8528C14.2136 14.8528 12.3781 16.6466 12.3781 18.8598C12.3781 19.3937 12.4861 19.9021 12.68
         20.3676C11.9347 20.5316 11.1396 20.4203 10.4684 20.0413H10.4676Z"></path></svg><br>      
         LIKES
      <br>
      <div class="name" style="padding: 5px;">We Offer Highest rate of Facebook real likes to our user in the Market. Every user can get unlimited likes. If you love to post your stories, photos, and videos</div>
        </div>
      </div>
      <div class="e-card playing" id="red">
        <div class="image"></div>
        
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
        
      
            <div class="infotop">
      
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="icon">
        <path fill="currentColor" d="M19.4133 4.89862L14.5863 2.17544C12.9911 1.27485 11.0089 1.27485 9.41368 2.17544L4.58674
        4.89862C2.99153 5.7992 2 7.47596 2 9.2763V14.7235C2 16.5238 2.99153 18.2014 4.58674 19.1012L9.41368
        21.8252C10.2079 22.2734 11.105 22.5 12.0046 22.5C12.6952 22.5 13.3874 22.3657 14.0349 22.0954C14.2204
        22.018 14.4059 21.9273 14.5872 21.8252L19.4141 19.1012C19.9765 18.7831 20.4655 18.3728 20.8651
        17.8825C21.597 16.9894 22 15.8671 22 14.7243V9.27713C22 7.47678 21.0085 5.7992 19.4133 4.89862ZM4.10784
        14.7235V9.2763C4.10784 8.20928 4.6955 7.21559 5.64066 6.68166L10.4676 3.95848C10.9398 3.69152 11.4701
        3.55804 11.9996 3.55804C12.5291 3.55804 13.0594 3.69152 13.5324 3.95848L18.3593 6.68166C19.3045 7.21476
        19.8922 8.20928 19.8922 9.2763V9.75997C19.1426 9.60836 18.377 9.53091 17.6022 9.53091C14.7929 9.53091
        12.1041 10.5501 10.0309 12.3999C8.36735 13.8847 7.21142 15.8012 6.68783 17.9081L5.63981 17.3165C4.69466
        16.7834 4.10699 15.7897 4.10699 14.7235H4.10784ZM10.4676 20.0413L8.60933 18.9924C8.94996 17.0479 9.94402
        15.2665 11.4515 13.921C13.1353 12.4181 15.3198 11.5908 17.6022 11.5908C18.3804 11.5908 19.1477 11.6864
        19.8922 11.8742V14.7235C19.8922 15.2278 19.7589 15.7254 19.5119 16.1662C18.7615 15.3596 17.6806 14.8528
         16.4783 14.8528C14.2136 14.8528 12.3781 16.6466 12.3781 18.8598C12.3781 19.3937 12.4861 19.9021 12.68
         20.3676C11.9347 20.5316 11.1396 20.4203 10.4684 20.0413H10.4676Z"></path></svg><br>      
         REACTIONS
      <br>
      <div class="name" style="padding: 5px;">Now, social media is advanced, and you can react on your posts, not only like. There are different reactions like smile, heart, anger, and sadness</div>
        </div>
      </div>
      <div class="e-card playing" id="yellow">
        <div class="image"></div>
        
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
        
      
            <div class="infotop">
      
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="icon">
        <path fill="currentColor" d="M19.4133 4.89862L14.5863 2.17544C12.9911 1.27485 11.0089 1.27485 9.41368 2.17544L4.58674
        4.89862C2.99153 5.7992 2 7.47596 2 9.2763V14.7235C2 16.5238 2.99153 18.2014 4.58674 19.1012L9.41368
        21.8252C10.2079 22.2734 11.105 22.5 12.0046 22.5C12.6952 22.5 13.3874 22.3657 14.0349 22.0954C14.2204
        22.018 14.4059 21.9273 14.5872 21.8252L19.4141 19.1012C19.9765 18.7831 20.4655 18.3728 20.8651
        17.8825C21.597 16.9894 22 15.8671 22 14.7243V9.27713C22 7.47678 21.0085 5.7992 19.4133 4.89862ZM4.10784
        14.7235V9.2763C4.10784 8.20928 4.6955 7.21559 5.64066 6.68166L10.4676 3.95848C10.9398 3.69152 11.4701
        3.55804 11.9996 3.55804C12.5291 3.55804 13.0594 3.69152 13.5324 3.95848L18.3593 6.68166C19.3045 7.21476
        19.8922 8.20928 19.8922 9.2763V9.75997C19.1426 9.60836 18.377 9.53091 17.6022 9.53091C14.7929 9.53091
        12.1041 10.5501 10.0309 12.3999C8.36735 13.8847 7.21142 15.8012 6.68783 17.9081L5.63981 17.3165C4.69466
        16.7834 4.10699 15.7897 4.10699 14.7235H4.10784ZM10.4676 20.0413L8.60933 18.9924C8.94996 17.0479 9.94402
        15.2665 11.4515 13.921C13.1353 12.4181 15.3198 11.5908 17.6022 11.5908C18.3804 11.5908 19.1477 11.6864
        19.8922 11.8742V14.7235C19.8922 15.2278 19.7589 15.7254 19.5119 16.1662C18.7615 15.3596 17.6806 14.8528
         16.4783 14.8528C14.2136 14.8528 12.3781 16.6466 12.3781 18.8598C12.3781 19.3937 12.4861 19.9021 12.68
         20.3676C11.9347 20.5316 11.1396 20.4203 10.4684 20.0413H10.4676Z"></path></svg><br>      
         FOLLOWERS
      <br>
      <div class="name" style="padding: 5px;">You can get help in getting more followers for you. With the help of auto Free Liker, you can have more than 50 followers on every submission.</div>
        </div>
      </div>
       




    </div>
  </section>


  <!-- Task completed section -->
  <section id="taskcompleted">
    <h1>Task Completed</h1>
    <div class="central3">
      <div class="results-summary-container">
        <div class="confetti">
         <div class="confetti-piece"></div>
         <div class="confetti-piece"></div>
         <div class="confetti-piece"></div>
         <div class="confetti-piece"></div>
         <div class="confetti-piece"></div>
         <div class="confetti-piece"></div>
         <div class="confetti-piece"></div>
         <div class="confetti-piece"></div>
         <div class="confetti-piece"></div>
         <div class="confetti-piece"></div>
         <div class="confetti-piece"></div>
         <div class="confetti-piece"></div>
         <div class="confetti-piece"></div>
         <div class="confetti-piece"></div>
         <div class="confetti-piece"></div>
         <div class="confetti-piece"></div>
         <div class="confetti-piece"></div>
         <div class="confetti-piece"></div>
         <div class="confetti-piece"></div>
       </div>
       <div class="results-summary-container__result">
         <div class="heading-tertiary">Our Complete Tasks</div>
         <div class="result-box">
           <div class="heading-primary">945k</div>
           <p class="result">of 1000K</p>
         </div>
         <div class="result-text-box">
           <div class="heading-secondary">Excellent</div>
           <p class="paragraph">
             Our Tasks higher than 85% of the sites who have taken these Task.
           </p>
         </div>
       </div>
       <div class="results-summary-container__options">
         <div class="heading-secondary heading-secondary--blue">Summary</div>
         <div class="summary-result-options">
           <div class="result-option result-option-reaction">
             <div class="icon-box">
               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 20 20">
                 <path stroke="#F55" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.25" d="M10.833 8.333V2.5l-6.666 9.167h5V17.5l6.666-9.167h-5Z"></path>
               </svg>
               <span class="reaction-icon-text">Reaction</span>
             </div>
             <div class="result-box"><span>890k</span> / 1000</div>
           </div>
           <div class="result-option result-option-memory">
             <div class="icon-box">
               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 20 20">
                 <path stroke="#FFB21E" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.25" d="M5.833 11.667a2.5 2.5 0 1 0 .834 4.858"></path>
                 <path stroke="#FFB21E" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.25" d="M3.553 13.004a3.333 3.333 0 0 1-.728-5.53m.025-.067a2.083 2.083 0 0 1 2.983-2.824m.199.054A2.083 2.083 0 1 1 10 3.75v12.917a1.667 1.667 0 0 1-3.333 0M10 5.833a2.5 2.5 0 0 0 2.5 2.5m1.667 3.334a2.5 2.5 0 1 1-.834 4.858"></path>
                 <path stroke="#FFB21E" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.25" d="M16.447 13.004a3.334 3.334 0 0 0 .728-5.53m-.025-.067a2.083 2.083 0 0 0-2.983-2.824M10 3.75a2.085 2.085 0 0 1 2.538-2.033 2.084 2.084 0 0 1 1.43 2.92m-.635 12.03a1.667 1.667 0 0 1-3.333 0"></path>
               </svg>
               <span class="memory-icon-text">Funny React</span>
             </div>
             <div class="result-box"><span>900k</span> / 1000k</div>
           </div>
           <div class="result-option result-option-verbal">
             <div class="icon-box">
               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 20 20">
                 <path stroke="#00BB8F" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.25" d="M7.5 10h5M10 18.333A8.333 8.333 0 1 0 1.667 10c0 1.518.406 2.942 1.115 4.167l-.699 3.75 3.75-.699A8.295 8.295 0 0 0 10 18.333Z"></path>
               </svg>
               <span class="verbal-icon-text">Comments</span>
             </div>
             <div class="result-box"><span>770k</span> / 1000k</div>
           </div>
           <div class="result-option result-option-Visual">
             <div class="icon-box">
               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 20 20">
                 <path stroke="#1125D6" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.25" d="M10 11.667a1.667 1.667 0 1 0 0-3.334 1.667 1.667 0 0 0 0 3.334Z"></path>
                 <path stroke="#1125D6" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.25" d="M17.5 10c-1.574 2.492-4.402 5-7.5 5s-5.926-2.508-7.5-5C4.416 7.632 6.66 5 10 5s5.584 2.632 7.5 5Z"></path>
               </svg>
               <span class="visual-icon-text">Views</span>
             </div>
             <div class="result-box"><span>980k</span> / 1000k</div>
           </div>
           <div class="summary__cta">
             <button class="btn btn__continue">View Facebook Page</button>
           </div>
         </div>
       </div>
     </div>
    
    </div>

  </section>

  <!-- About -->

  <section id="about">
    <div class="central5">
      <section class="hero-section" style="cursor: pointer; " >
        <div class="container">
          <h1 class="hero-section_title">Why should you try <q><span class="quoted-text">Free Liker</span></q> To increase Your Post , Higlights?</h1>
          <div class="hero-section_cards">
            <div class="hero-section_card card-1">
              <div class="hero-section_card_content">
                <h2 class="hero-section_card_title" style="color: white;">Expert Guidance</h2>
                <p style="color: white;" class="hero-section_card_description">Free Liker is the best website in the market which helps Facebook users to get more likes on the posts. It helps you to have more reaction and comments on your photos. </p>
              </div>
            </div>
            <div class="hero-section_card card-2">
              <div class="hero-section_card_content">
                <h2 class="hero-section_card_title" style="color: white;">Personalized Solutions</h2>
                <p class="hero-section_card_description" style="color: white;">If you’re up for a page on Facebook, then the performance of your page depends on likes there on the page. If you have plenty, then you are good</p>
              </div>
            </div>
            <div class="hero-section_card card-3">
              <div class="hero-section_card_content">
                <h2 class="hero-section_card_title" style="color: white;"> Community</h2>
                <p class="hero-section_card_description" style="color: white;"> Free liker is the one who does it all for you. Free Liker provides you the Site through which your work gets a little easy. Our services are free to use and secured</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </section>

  <!-- ========================
    
    ================== -->
    <section id="contact">
      <h1>Contact Us</h1>
      <div class="central0">
        <div class="container">
          <div class="left">
              <form class="form">
                  <div class="input-block">
                      <input class="input" type="text" id="email" required="">
                      <label for="email">Email</label>
                  </div>
                  <div class="input-block">
                      <input class="input" type="text" id="pass" required="">
                      <label for="pass">Message</label>
                  </div>
                  <div class="input-block">
  <span class="forgot"><a href="#">Forgot Password?</a></span>
                  <button style="cursor: pointer;">Submit</button>
              </div>
              </form>
          </div>
          <div class="right">
              <div class="img"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 731.67004 550.61784" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <path d="M0,334.13393c0,.66003,.53003,1.19,1.19006,1.19H730.48004c.65997,0,1.19-.52997,1.19-1.19,0-.65997-.53003-1.19-1.19-1.19H1.19006c-.66003,0-1.19006,.53003-1.19006,1.19Z" fill="#3f3d56"></path>
                      <polygon points="466.98463 81.60598 470.81118 130.55703 526.26809 107.39339 494.98463 57.60598 466.98463 81.60598" fill="#a0616a"></polygon>
                      <circle cx="465.32321" cy="55.18079" r="41.33858" fill="#a0616a"></circle>
                      <polygon points="387.98463 440.60598 394.98463 503.39339 345.98463 496.60598 361.98463 438.60598 387.98463 440.60598" fill="#a0616a"></polygon>
                      <polygon points="578.98463 449.60598 585.98463 512.39339 536.98463 505.60598 552.98463 447.60598 578.98463 449.60598" fill="#a0616a"></polygon>
                      <path d="M462.48463,260.10598c-.66897,0-54.14584,2.68515-89.47714,4.46286-16.72275,.84141-29.45202,15.31527-28.15459,32.00884l12.63173,162.5283,36,1,.87795-131,71.12205,4-3-73Z" fill="#2f2e41"></path>
                      <path d="M619.48463,259.10598s9,69,2,76c-7,7-226.5-5.5-226.5-5.5,0,0,48.15354-69.53704,56.82677-71.51852,8.67323-1.98148,146.67323-8.98148,146.67323-8.98148l21,10Z" fill="#2f2e41"></path>
                      <path id="uuid-91047c5b-47d7-4179-8a16-40bd6d529b28-203" d="M335.12666,172.23337c-8.35907-11.69074-9.10267-25.48009-1.66174-30.79863,7.44093-5.31854,20.24665-.15219,28.60713,11.54383,3.40375,4.62627,5.65012,10.00041,6.55111,15.67279l34.79215,49.9814-19.8001,13.70807-35.7745-48.83421c-5.07753-2.68845-9.43721-6.55406-12.71405-11.27326Z" fill="#a0616a"></path>
                      <path d="M464.98463,112.60598l51-21,96,148s-67,15-90,18c-23,3-49-9-49-9l-8-136Z" fill="#6c63ff">
                      </path>
                      <path d="M526.98463,137.60598l-18.5-57.70866,24,18.20866s68,45,68,64c0,19,21,77,21,77,0,0,23.5,19.5,15.5,37.5-8,18,10.5,15.5,12.5,28.5,2,13-28.5,30.5-28.5,30.5,0,0-7.5-73.5-31.5-73.5-24,0-62.5-124.5-62.5-124.5Z" fill="#3f3d56"></path>
                      <path d="M468.56831,111.13035l-25.08368,9.97563s4,70,8,76c4,6,18,38,18,38v10.42913s-28,8.57087-27,13.57087c1,5,66,19,66,19,0,0-13-40-21-53-8-13-18.91632-113.97563-18.91632-113.97563Z" fill="#3f3d56"></path>
                      <path d="M452.48463,121.10598s-29-4-34,30c-5,34-1.82283,38.5-1.82283,38.5l-8.17717,19.5-27-30-26,17s47,76,66,74c19-2,47-57,47-57l-16-92Z" fill="#3f3d56"></path>
                      <path d="M597.32321,270.14478l-14.83858,209.96121-38.5-1.5s-8.5-198.5-8.5-201.5c0-3,4-20,29-21,25-1,32.83858,14.03879,32.83858,14.03879Z" fill="#2f2e41"></path>
                      <path d="M541.48463,484.10598s20-6,23-2c3,4,20,6,20,6l5,49s-14,10-16,12-55,4-56-8c-1-12,14-27,14-27l10-30Z" fill="#2f2e41"></path>
                      <path d="M394.48463,470.10598s6-5,8,9c2,14,9,37-1,40-10,3-110,4-110-5v-9l9-7,18.00394-2.869s34.99606-32.131,38.99606-32.131c4,0,17,13,17,13l20-6Z" fill="#2f2e41"></path>
                      <path d="M505.98463,77.60598s-20-24-28-22-3,5-3,5l-20-22s-16-6-31,13c0,0-9-16,0-25,9-9,12-8,14-13,2-5,16-9,16-9,0,0-.80315-7.19685,3.59843-3.59843s15.3937,3.59843,15.3937,3.59843c0,0,.06299-4,4.53543,0,4.47244,4,9.47244,2,9.47244,2,0,0,0,6.92126,3.5,6.96063,3.5,.03937,9.5-4.96063,10.5-.96063,1,4,8,6,9,18,1,12-4,47-4,47Z" fill="#2f2e41"></path>
                      <g>
                          <path d="M342.99463,178.84874l-114.2362,78.82694c-3.94205,2.72015-9.36214,1.72624-12.08229-2.21581l-32.16176-46.60891c-2.72015-3.94205-1.7259-9.36208,2.21615-12.08223l114.2362-78.82694c3.94205-2.72015,9.36214-1.72624,12.08229,2.21581l32.16176,46.60891c2.72015,3.94205,1.7259,9.36208-2.21615,12.08223Z" fill="#fff"></path>
                          <path d="M312.83914,120.30274l32.16148,46.6085c2.64627,3.83499,1.68408,9.08121-2.15091,11.72749l-56.06388,38.68602c-14.78562-4.04015-28.2774-13.11486-37.66263-26.71596-6.14766-8.9092-9.85314-18.77211-11.26649-28.80885l63.25494-43.6481c3.83499-2.64627,9.08121-1.68408,11.72749,2.15091Z" fill="#e6e6e6"></path>
                          <path d="M223.84012,260.20913c-3.0791,0-6.10938-1.46094-7.9873-4.18066l-32.16211-46.60938c-1.4668-2.12695-2.01758-4.7002-1.5498-7.24805,.4668-2.54785,1.89551-4.75879,4.02246-6.22559l114.23535-78.82715c4.39746-3.03223,10.44043-1.92285,13.47363,2.4707l32.16211,46.60938c1.4668,2.12695,2.01758,4.7002,1.5498,7.24805-.4668,2.54688-1.89551,4.75879-4.02148,6.22559l-114.23633,78.82715c-1.67578,1.15527-3.59082,1.70996-5.48633,1.70996Zm82.04785-142.80176c-1.50391,0-3.02344,.44043-4.35254,1.35742l-114.23633,78.82715c-1.6875,1.16309-2.82031,2.91797-3.19141,4.94043-.37109,2.02148,.06543,4.06445,1.22949,5.75l32.16211,46.60938c2.40625,3.48633,7.20215,4.36816,10.69043,1.96094l114.2373-78.82715c1.68652-1.16309,2.81934-2.91797,3.19043-4.94043,.37109-2.02148-.06543-4.06445-1.22949-5.75l-32.16211-46.60938c-1.48926-2.1582-3.89453-3.31836-6.33789-3.31836Z" fill="#3f3d56"></path>
                          <path d="M224.6666,236.93718c-2.89521,1.9978-3.6253,5.97848-1.6275,8.87369,1.9978,2.89521,5.97848,3.6253,8.87369,1.6275l11.76134-8.11573c2.89521-1.9978,3.6253-5.97848,1.6275-8.87369-1.9978-2.89521-5.97848-3.6253-8.87369-1.6275l-11.76134,8.11573Z" fill="#6c63ff"></path>
                          <path d="M232.63862,171.91114c-4.56802,3.15209-5.71978,9.43286-2.56769,14.00088,3.15209,4.56802,9.43252,5.71972,14.00054,2.56763l18.29546-12.6245c4.56802-3.15209,5.72007-9.43245,2.56797-14.00047-3.15209-4.56802-9.4328-5.72013-14.00082-2.56804l-18.29546,12.6245Z" fill="#6c63ff"></path>
                      </g>
                      <g>
                          <path d="M340.25926,185.80874H201.4659c-4.78947,0-8.68608-3.89636-8.68608-8.68583v-56.62834c0-4.78947,3.89661-8.68583,8.68608-8.68583h138.79336c4.78947,0,8.68608,3.89636,8.68608,8.68583v56.62834c0,4.78947-3.89661,8.68583-8.68608,8.68583Z" fill="#fff"></path>
                          <path d="M348.69017,120.49482v56.62784c0,4.65939-3.77152,8.43091-8.43091,8.43091h-68.11583c-9.87497-11.72273-15.82567-26.8544-15.82567-43.37931,0-10.82439,2.55172-21.04674,7.08876-30.11034h76.85275c4.65939,0,8.43091,3.77152,8.43091,8.43091Z" fill="#e6e6e6"></path>
                          <path d="M340.25907,186.80874H201.4661c-5.34082,0-9.68652-4.34473-9.68652-9.68555v-56.62891c0-5.34082,4.3457-9.68555,9.68652-9.68555h138.79297c5.34082,0,9.68652,4.34473,9.68652,9.68555v56.62891c0,5.34082-4.3457,9.68555-9.68652,9.68555ZM201.4661,112.80874c-4.23828,0-7.68652,3.44727-7.68652,7.68555v56.62891c0,4.23828,3.44824,7.68555,7.68652,7.68555h138.79297c4.23828,0,7.68652-3.44727,7.68652-7.68555v-56.62891c0-4.23828-3.44824-7.68555-7.68652-7.68555H201.4661Z" fill="#3f3d56"></path>
                          <path d="M209.87637,166.41564c-3.51759,0-6.37931,2.86172-6.37931,6.37931s2.86172,6.37931,6.37931,6.37931h14.28966c3.51759,0,6.37931-2.86172,6.37931-6.37931s-2.86172-6.37931-6.37931-6.37931h-14.28966Z" fill="#6c63ff"></path>
                          <path d="M253.36907,117.42253c-5.55,0-10.06511,4.51536-10.06511,10.06536s4.51511,10.06486,10.06511,10.06486h22.22841c5.55,0,10.06511-4.51486,10.06511-10.06486s-4.51511-10.06536-10.06511-10.06536h-22.22841Z" fill="#6c63ff"></path>
                      </g>
                      <g>
                          <path d="M456.25926,381.80874h-138.79336c-4.78947,0-8.68608-3.89636-8.68608-8.68583v-56.62834c0-4.78947,3.89661-8.68583,8.68608-8.68583h138.79336c4.78947,0,8.68608,3.89636,8.68608,8.68583v56.62834c0,4.78947-3.89661,8.68583-8.68608,8.68583Z" fill="#fff"></path>
                          <path d="M464.69017,316.49482v56.62784c0,4.65939-3.77152,8.43091-8.43091,8.43091h-68.11583c-9.87497-11.72273-15.82567-26.8544-15.82567-43.37931,0-10.82439,2.55172-21.04674,7.08876-30.11034h76.85275c4.65939,0,8.43091,3.77152,8.43091,8.43091Z" fill="#e6e6e6"></path>
                          <path d="M456.25907,382.80874h-138.79297c-5.34082,0-9.68652-4.34473-9.68652-9.68555v-56.62891c0-5.34082,4.3457-9.68555,9.68652-9.68555h138.79297c5.34082,0,9.68652,4.34473,9.68652,9.68555v56.62891c0,5.34082-4.3457,9.68555-9.68652,9.68555Zm-138.79297-74c-4.23828,0-7.68652,3.44727-7.68652,7.68555v56.62891c0,4.23828,3.44824,7.68555,7.68652,7.68555h138.79297c4.23828,0,7.68652-3.44727,7.68652-7.68555v-56.62891c0-4.23828-3.44824-7.68555-7.68652-7.68555h-138.79297Z" fill="#3f3d56"></path>
                          <path d="M325.87637,362.41564c-3.51759,0-6.37931,2.86172-6.37931,6.37931s2.86172,6.37931,6.37931,6.37931h14.28966c3.51759,0,6.37931-2.86172,6.37931-6.37931s-2.86172-6.37931-6.37931-6.37931h-14.28966Z" fill="#6c63ff"></path>
                          <path d="M369.36907,313.42253c-5.55,0-10.06511,4.51536-10.06511,10.06536s4.51511,10.06486,10.06511,10.06486h22.22841c5.55,0,10.06511-4.51486,10.06511-10.06486s-4.51511-10.06536-10.06511-10.06536h-22.22841Z" fill="#6c63ff"></path>
                      </g>
                      <path id="uuid-c026fd96-7d81-4b34-bb39-0646c0e08e96-204" d="M465.67391,331.01678c-12.74718,6.63753-26.5046,5.44058-30.72743-2.67249-4.22283-8.11308,2.6878-20.06802,15.44041-26.70621,5.05777-2.72156,10.69376-4.19231,16.43644-4.28916l54.36547-27.44139,10.79681,21.52636-53.36733,28.57487c-3.37375,4.65048-7.81238,8.42516-12.94437,11.00803Z" fill="#a0616a"></path>
                      <path d="M527.48463,97.10598s56-3,68,27c12,30,22,128,22,128l-122,66.37402-21-32.37402,82-64-29-125Z" fill="#3f3d56"></path>
                  </svg></div>
  
          </div>
      </div>



      </div>
    </section>
  


    <!-- ================================================= -->
    <footer>

     <div class="txt">
      www.free-liker.com Approved by Social Community 2021
     </div>




      <ul class="example-2">
        <li class="icon-content">
          <a
            href="https://linkedin.com/"
            aria-label="LinkedIn"
            data-social="linkedin"
          >
            <div class="filled"></div>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              class="bi bi-linkedin"
              viewBox="0 0 16 16"
              xml:space="preserve"
            >
              <path
                d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"
                fill="currentColor"
              ></path>
            </svg>
          </a>
          <div class="tooltip">LinkedIn</div>
        </li>
        <li class="icon-content">
          <a href="https://www.github.com/" aria-label="GitHub" data-social="github">
            <div class="filled"></div>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              class="bi bi-github"
              viewBox="0 0 16 16"
              xml:space="preserve"
            >
              <path
                d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"
                fill="currentColor"
              ></path>
            </svg>
          </a>
          <div class="tooltip">GitHub</div>
        </li>
        <li class="icon-content">
          <a
            href="https://www.instagram.com/"
            aria-label="Instagram"
            data-social="instagram"
          >
            <div class="filled"></div>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              class="bi bi-instagram"
              viewBox="0 0 16 16"
              xml:space="preserve"
            >
              <path
                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"
                fill="currentColor"
              ></path>
            </svg>
          </a>
          <div class="tooltip">Instagram</div>
        </li>
        <li class="icon-content">
          <a href="https://youtube.com/" aria-label="Youtube" data-social="youtube">
            <div class="filled"></div>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              fill="currentColor"
              class="bi bi-youtube"
              viewBox="0 0 16 16"
              xml:space="preserve"
            >
              <path
                d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"
                fill="currentColor"
              ></path>
            </svg>
          </a>
          <div class="tooltip">Youtube</div>
        </li>
      </ul>
      
    </footer>
    <script src="assets/js/script.js"></script>
  
</body>
</html>