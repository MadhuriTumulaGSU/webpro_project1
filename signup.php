<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Millionaire</title>
        <!-- <link rel="stylesheet" href="signup_style.css"> -->
        <link rel="icon" type="image/x-icon" href="images/logo.png">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
        
        <!--Stylesheet-->
        <style media="screen">
            
   ::-webkit-scrollbar {
  width: 10px;
}

/* Track 
::-webkit-scrollbar-track {
  background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #555; 
}


      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #080710;
    background-image: url('images/signupback.jpeg');
/*    background-repeat: no-repeat;*/
    background-size: 100%;
    resize: none;

}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -30px;
    bottom: -80px;
}
form{
    height: 1280px;
    width: 500px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 100%;
    left: 50%;
    bottom: 110%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 30px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 10px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}

a {
    text-decoration: none;
}

        </style>

    </head>
    <body>
        <form method="post" action="signup-submit.php" enctype="multipart/form-data">
            <fieldset>
                <legend><h1>New Player Signup:</h1></legend>
                <div class="field">
                    <label class="left">
                            Name:
                    </label>
                    <div class="column">
                        <input type="text" name="name" id="name" size="16" required>
                    </div>
                </div> <br><br>
                <div class="field">
                    <label class="left">
                            Email ID:
                    </label>
                    <div class="column">
                        <input type="email" name="email" id="email" size="16" required>
                    </div>
                </div><br><br>
                <div class="field">
                    <label class="left">
                            Date of Birth:
                    </label>
                    <div class="column">
                        <input type="date" name="dob" id="dob" required>
                    </div>
                </div><br><br>
                <div class="field">
                    <label class="left">
                            Gender:
                    </label>
                    <div class="column">
                        <input type="radio" id="Male" name="gender" value="M">
                        <label for="Male">Male</label>
                        <input type="radio" id="Female" name="gender" value="F">
                        <label for="Female">Female</label><br>
                    </div>
                </div><br><br>
                
                <div class="field">
                    <label class="left">
                            Phone:
                    </label>
                    <div class="column">
                        <input type="text" name="phone" id="phone" size="16" required>
                    </div>
                </div><br><br>
                <div class="field">
                    <label class="left">
                            Password:
                    </label>
                    <div class="column">
                        <input type="password" name="password" id="password" size="16" required>
                    </div>
                </div><br><br>
                <div class="field">
                    <label class="left">
                            Upload Photo:
                    </label>
                    <div class="column">
                        <input type="file" name="photo" id="photo" accept=".jpeg" required>
                    </div>
                </div><br><br>
                <input type="submit" value="Sign Up"> <br><br>
                Already Signed up? <a href="login.php" style="color: red;">Click Here to Login!</a>

            </fieldset>
        </form>

    </body>
</html>