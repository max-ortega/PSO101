<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PLM Supplies</title>
</head>
<style>
*{
        margin: 0;
        padding: 0;
    
    } 
    .plmbg{
        background-image: url("/images/gradientbg.png");
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        background-size: 100% 100%;
        height: 100vh;
    }
    .Rectangle3{
        position: absolute;
        width: 375px;
        height: 540px;
        left: 100px;
        top: 60px;
        background: #FFFFFF;
        border-radius: 20px;  
    }
    img{
        position: absolute;
        width: 330px;
        height: 80px;
        left: 120px;
        top: 80px;
    }
    .text{
        position: absolute;
        width: 350px;
        height: 170px;
        left: 127px;
        top: 210px;
        font-family: Arial;
        font-style: normal;
        font-weight: bold;
        font-size: 24px;
        line-height: 36px;
        color: #2D6B9A;
    }
    .text2{
        position: absolute;
        width: 350px;
        height: 170px;
        left: 110px;
        top: 30px;
        font-family: Arial;
        font-style: normal;
        font-size: 15px;
        line-height: 36px;
        color: white;
    }
    .text2 a{
        color: white;
        text-decoration: none;
    }
    .email{
    position: absolute;
    width: 350px;
    height: 170px;
    left: 130px;
    top: 300px;
    font-family: Arial;
    font-size: 15px;
    color: black;
  }
  .em{
    position: absolute;
    width: 350px;
    height: 170px;
    top: -5px;
    font-family: Arial;
    font-size: 15px;
    color: black;
  }
  .pw{
    position: absolute;
    width: 350px;
    height: 170px;
    top: 60px;
    font-family: Arial;
    font-size: 15px;
    color: black;
  }
  .username{
    position: absolute;
    width: 300px;
    height: 20x;
    top: 20px;
    padding: 5px;
    border: 2px solid lightblue;
    border-radius: 5px;
  }
  .password{
    position: absolute;
    width: 300px;
    height: 15px;
    top: 85px;
    padding: 5px;
    border: 2px solid lightblue;
    border-radius: 5px;
  }
  .checkbox{
    position: absolute;
    width: 15px;
    height: 15px;
    left: 131px;
    top: 425px;
    font-family: Arial;
    font-size: 15px;
    color: black;
  }
  .keep{
    position: absolute;
    width: 350px;
    height: 170px;
    left: 155px;
    top: 426px;
    font-family: Arial;
    font-size: 12px;
    color: black;
  }
  .btn1
  {
    position: fixed;
    background-color: #4F74BB;
    top: 68%;
    left: 9.5%;
    font-size: 12px;
    border: none;
    height: 30px; 
    width: 310px;
    border-radius: 5px;
  }
  .btn1 a{
    color: white;
    text-decoration: none;
  }

  
</style>
<body class="plmbg">

        <div class="Rectangle3"></div>  
        <img src="/images/PLMLogo.png" alt="plmlogo">
        <div class="text">
        <h1>PLM Supplies <br></h1>
        <h3>Sign In </h3> </div>

        <div class="email"> 
            <h4 class="em"> Email Address </h4>
            <br>
            <input class="username" placeholder="juandelacruz@plm.edu.ph">
            <br> <br>
            <h4 class="pw"> Password </h4>
            <br>
            <input class="password" type="password" placeholder="••••••••••">
            <i class="bi bi-eye-slash" id="togglePassword"></i> 
        </div>

        <div>
        <form> 
            <input type="checkbox" class="checkbox">
            <p class="keep">Keep me signed in</p>
            
        </form>
        </div>

        <div><button class="btn1"><a href="dbsupply">Login</a></button></div>
        
        <div class="text2"><a href="/test">  <span> &#8592; </span> Back to Main</div>

 
</body>
</html>
