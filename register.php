<!DOCTYPE html>
<html lang="en" data-bs-theme="">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container ">
        <div class="row">
            <h3>Registstion</h3>
            <form method="post" action="" enctype="multipart/form-data"> 
                <label> Firstname </label>         
                <input class="form-control" type="text" name="firstname" size="15"/> <br>  

                <label> Lastname: </label>         
                <input class="form-control" type="text" name="lastname" size="15"/> <br> 
                <label>  Religion </label>  <br>
                <select>  
                    <option value="Course">Course</option>  
                    <option value="BCA">BCA</option>  
                    <option value="BBA">BBA</option>  
                    <option value="B.Tech">B.Tech</option>  
                    <option value="MBA">MBA</option>  
                    <option value="MCA">MCA</option>  
                    <option value="M.Tech">M.Tech</option>  
                </select> <br><br>
                
                <label>Gender :</label><br>  
                <input type="radio" name="gender"/> Male <br>  
                <input type="radio" name="gender"/> Female <br>  
                <input type="radio" name="gender"/> Other <br><br>  
                    
                <label> Phone :  </label>   
                <input class="form-control"  type="text" name="phone" size="10"/> <br> <br>
                Address  
                <br> 
                <textarea class="form-control" cols="80" rows="5" value="address">  
                </textarea>  
                <br> 
                Email:  
                <input class="form-control" type="email" id="email" name="email"/> <br>    
       
                Password:  
                <input class="form-control" type="Password" id="pass" name="pass"> <br>   
     
                Re-type password:  
                <input class="form-control" type="Password" id="repass" name="repass"> <br>

                <label for="myfile">Select a file:</label><br>
                <input type="file" class="form-control" id="myfile" name="myfile"> <br><br>

                <input class="form-control bg-success" type="button" value="Submit"/>  
            </form>  
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>
