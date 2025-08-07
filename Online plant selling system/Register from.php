<html>
<head>
  <center>
    <h1 style="color:ghostwhite;font-size:300%;font-family:COMIC SANS MS;"><u><b><i>Registation form</i></b></h1></u>
  </center>
  <title>Registation Form</title>
  <br>
  <link rel="stylesheet" type="text/css" href="sign.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <style>
    .myDiv {
      border: 2px outset white;
      width: 500px;
      height: 500px;
    }
    body {
      font-family: Arial, Helvetica, sans-serif;
      background-image: url("plants.jpg");
      background-repeat: no-repeat;
    }
    input[type=text], input[type=password] {
      width: 30%;
      padding: 9px 9px;
      margin: 2px 0;
      display: inline-block;
      border: 2px solid black;
      box-sizing: border-box;
    }
    button {
      background-color: #04AA6D;
      color: white;
      padding: 7px 2px;
      margin: 7px 0px;
      border: none;
      cursor: pointer;
      width: 20%;
    }
    .tab {
      display: inline-block;
      margin-left: 40px;
    }
  </style>
</head>
<body>
  
   
    <center>
<form action="connect.php" method="post">
<form>
<div class>
<p><button>firstname</button>
<input type="text"name="fname"placeholder="firstname"/></p>
</div>
<p><button>lastname</button>
<input type="text"name="lasname"placeholder="lastname"/></p>
</div>
<p><button>username</button>
<input type="text"name="uname"placeholder="username"/></p>
</div>
<p><button>phonenumber</button>
<input type="text"name="phonenumber"placeholder="phonenumber"/></p>
</div>
<p><button>email</button>
<input type="text"name="email"placeholder="email"/></p>
</div>
<p><button>password</button>
<input type="text"name="pword"placeholder="password"/></p>
</div>
        
        

        <input type="submit"name="register"value="register"/>

        <input type="login"name="log"value="log"/><a href="mennu.html">login</a><span class="tab"></span>
        
        <a href="menu.html">Go back</a><span class="tab"></span>
   
    </center>
  </form>
</body>
</html>