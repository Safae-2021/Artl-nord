<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>The Coffee Bean</title>

  <link rel="stylesheet" href="main.css" />
</head>
<body>

<style>



* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: montserrat, sans-serif;
}

.timer {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  min-height: 100vh;
  /* background-image: url("background.jpg");
  background-size: cover;
  background-position: center; */
  position: relative;
}
.timer:after {
  display: block;
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 0;
  /* background-color: rgba(34, 34, 34, 0.5); */
}
.timer .content {
  position: relative;
  z-index: 1;
}
.timer .content h1 {
  color: #FFF;
  font-size: 28px;
  font-weight: 900;
}
.timer .content h1 span {
  font-weight: 400;
}
@media screen and (min-width: 480px) {
  .timer .content h1 {
    font-size: 36px;
  }
}
@media screen and (min-width: 768px) {
  .timer .content h1 {
    font-size: 42px;
  }
}
@media screen and (min-width: 1024px) {
  .timer .content h1 {
    font-size: 56px;
  }
}
@media screen and (min-width: 1280px) {
  .timer .content h1 {
    font-size: 72px;
  }
}
.timer .content h2 {
  color: #FFF;
  font-size: 42px;
  font-weight: 900;
  margin: 30px 0px;
}
@media screen and (min-width: 480px) {
  .timer .content h2 {
    font-size: 56px;
  }
}
@media screen and (min-width: 768px) {
  .timer .content h2 {
    font-size: 72px;
  }
}
@media screen and (min-width: 1024px) {
  .timer .content h2 {
    font-size: 96px;
  }
}
@media screen and (min-width: 1280px) {
  .timer .content h2 {
    font-size: 128px;
  }
}
.timer .content .countdown {
  color: #FFF;
  font-size: 36px;
  font-weight: 400;
}
@media screen and (min-width: 480px) {
  .timer .content .countdown {
    font-size: 42px;
  }
}
@media screen and (min-width: 768px) {
  .timer .content .countdown {
    font-size: 56px;
  }
}
@media screen and (min-width: 1024px) {
  .timer .content .countdown {
    font-size: 72px;
  }
}
@media screen and (min-width: 1280px) {
  .timer .content .countdown {
    font-size: 88px;
  }
}

</style>


  <header class="timer">
    <!-- <div class="content"> -->
      
      <div class="countdown">00 : 00 : 00 : 00</div>
     

    <!-- </div> -->
  </header>
  <script >



      // Setup End Date for Countdown (getTime == Time in Milleseconds)
let launchDate = new Date("Jan 28, 2023 12:00:00").getTime();

// Setup Timer to tick every 1 second
let timer = setInterval(tick, 1000);

function tick () {
  // Get current time
  let now = new Date().getTime();
  // Get the difference in time to get time left until reaches 0
  let t = launchDate - now;

  // Check if time is above 0
  if (t > 0) {
    // Setup Days, hours, seconds and minutes
    // Algorithm to calculate days...
    let days = Math.floor(t / (1000 * 60 * 60 * 24));
    // prefix any number below 10 with a "0" E.g. 1 = 01
    if (days < 10) { days = "0" + days; }
    
    // Algorithm to calculate hours
    let hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    if (hours < 10) { hours = "0" + hours; }

    // Algorithm to calculate minutes
    let mins = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
    if (mins < 10) { mins = "0" + mins; }

    // Algorithm to calc seconds
    let secs = Math.floor((t % (1000 * 60)) / 1000);
    if (secs < 10) { secs = "0" + secs; }

    // Create Time String
    let time = `${days} : ${hours} : ${mins} : ${secs}`;

    // Set time on document
    document.querySelector('.countdown').innerText = time;
  }
}
  </script>
</body>
</html>