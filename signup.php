
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Be a Member to us! Create Now Your Account!">
    <title>Member Reg</title>
    
    <style>
        body{
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: linear-gradient(75deg, #2babff, #1100ff);
        }
        h1{
            color: white;
        }
        .container{
            text-align: center;
            width: 95%;
            padding: 25px;
            margin: 10px;
            border: 1px solid white;
            border-radius: 12px;
            height: auto;
          
        }
        .container form input{
            width: 90%;
            background: none;
            padding: 8px;
            margin: 5px;
            border: 0;
            border-bottom: 1px solid white;
            color: white;
        }
        #memberID{
            text-transform: capitalize;
        }
        ::placeholder{
            color: white;
            opacity: 0.7;
        }
        
        button.submit{
        cursor: pointer;
            color: white;
            background: none;
            padding: 8px;
            border: 1px solid white;
            margin: 10px;
            width: 100px;
            
        }
        button.login{
            background: none;
            border: 0;
            text-align: center;
            
            
        }
        button a{
            color: white;
            padding: 8px;
            text-decoration: none;
            border: 1px solid white;
            cursor: pointer;
            padding-left: 25px;
            padding-right: 25px;
        }
      
    </style>
</head>
<body>
    <div class="container">
        <h1>Member Form</h1>
        <form action="" method="POST" autocomplete="off">
            <input type="text" name="name" placeholder="Enter Name" minlength="4" required>
         
            <input type="email" name="email" placeholder="Enter email address"" required>
            <input type="password" name="key" placeholder="Enter Account Key or Password" minlength="8" required> <br>
       <button type="submit" name="submit" class="submit">Submit</button>
       <button class="login"><a href="login.php">Login</a></button>
        </form>
    </div>
</body>
  </html>
