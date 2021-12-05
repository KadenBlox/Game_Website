<html>
  <head>
    <title>My Awesome Game!</title>

    <style>
      body {
        background-color:rgb(40,40,40);
        color:white;
        text-align:center;
        font-family:Arial, sans-serif;
        padding-top:30px;
      }

      h1 span {
        color:orange;
      }

      .button-layout {
        display:flex;
        justify-content:center;
        align-items:center;
        gap:10px;
      }

      .button {
        background-color:rgb(29,29,29);
        border-radius:5px;
        height:35px;
        width:75px;
        padding-left:5px;
        padding-right:5px;
        padding-top:17.5px;
      }

      .button a{
        text-decoration:none;
        color:white;
      }

      a:active {
        color:white;
        text-decoration:none;
      }

      .content {
        /*background-color:rgb(29,29,29);*/
        width:90%;
        display:flex;
        margin:auto;
        min-height:100px;
        border-radius:5px;
        padding:5px;
        justify-content:center;
        align-items:center;
        gap:10px;
      }

      .logo {
        max-width:100%;
        max-height:20%;
        display:block;
        margin:auto;
        border-radius:5px;
      }
    </style>
  </head>
  <body>
    <h1>My <span>Awesome</span> Game</h1>
    <p>My Awesome Game is a place where you can chill and hangout, do whatever you want with anyone. Being your friends, your family, or a stranger.</p>

    <div class="content">
      <img src="/assets/icon.jpg" alt="My Awesome Game Logo" />
      <div class="2">
      <h2>OUR GAME</h2>
      <p>Our game uses immersive and modern roblox technology such as the Spatial Voice API and Developer Modules which allow us to increase the amount of socialization in-game.</p>
      <div style="padding-right:15px;"></div>
      <h2>OUR REASON</h2>
      <p>We see that Roblox is a growing platform and the metaverse is getting stronger. Our game utlizes the modern technology and tools provided to enhance the metaverse in many different ways.</p>

    <div class="button-layout">
        <div class="button">
        <a href="#">Play Now!</a>
      </div>
      <div class="button">
        <a href="/contact">Contact</a>
      </div>
    </div>
    </div>
    </div>

    <div style="padding-bottom:25px;"></div>
  
  </body>
</html>
