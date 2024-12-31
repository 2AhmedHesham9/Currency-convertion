
<?php
include("conn.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Converter</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

 <div class="navbar">
    
    <ul class="links">
        <!-- <h2 >C-$-C</h2 > -->
        <li><a href="#home" class="fa fa-fw fa-home">Home</a></li>
        <li><a href="#currency">Currency</a></li>
        <li><a href="#convert">Convert</a></li>
        <li><a href="#login"class="fa fa-fw fa-user">Login</a></li>


    </ul>
    

 </div>
 <div class="container-home">
    <div id="home" class="home" >
        <h1 style="color: blue;font-size: 3vw;">Welcome to my website...</h1>
        <h2 style="box-shadow: 20px 20px 50px 15px rgb(39, 22, 153); color: rgb(0, 0, 0);background-color: rgb(255, 255, 255);border-radius: 15px 20px ;padding: 20px;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. <br> Blanditiis eius distinctio dolorum quae doloremque, magnam <br>
            ad molestias. Iusto, atque, quae in veritatis nobis velit vel, porro natus ducimus quas placeat.</h2>
    
       
    
    </div>

 </div>


<div class="cards_page"  id="currency">
 <h1 class="heading" >Countreis Currency</h1>
 <hr>

    <div class="cards">
        
        
        <div class="card">
           <img src="https://img.freepik.com/free-photo/flag-egypt_1401-105.jpg" alt="" style="">
            <div class="card__content">
              <p class="card__title">Egypt</p>
              <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
            </div>
          </div>
          
        <div class="card">
            <img src="https://media.istockphoto.com/id/525982638/vector/palestine-flag.jpg?s=612x612&w=0&k=20&c=agfJtXme3_SCpGTqRaOk7yQQHptpZ4aiV6Rt4l6pigg=" alt="" style="">
           <div class="card__content">
              <p class="card__title">Palastine</p>
              <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
            </div>
          </div>
          
        <div class="card">
            <img src="https://www.americanflags.com/media/magefan_blog/2017/08/Flag-of-the-USA.jpg" alt="" style="">
           <div class="card__content">
              <p class="card__title"  style="font-size:xx-large;">America</p>
              
              <?php
                    $sql="SELECT cur_price FROM currency WHERE cur_name='dollar' ";
                    $result=mysqli_query($conn,$sql)  ;
                    if($result->num_rows > 0)
                    {
                        $row=$result->fetch_assoc();
                          ?>  
                <p  style="font-size:x-large;color:green;display:inline;">Buy :</p>
                <p class="card__description" name="dollar" id="dollar" style="font-size:larger;color:green;display:inline;"><?php echo $row['cur_price'];?></p>
                          
          </div>
        </div>
                    
                        
                        <?php 

                        }
                  ?>
       
          
          
        <div class="card">
            <img src="https://c4.wallpaperflare.com/wallpaper/73/703/815/portugal-soccer-wallpaper-preview.jpg" alt="" style="">
            <div class="card__content">
              <p class="card__title">Portoghal</p>
              <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
            </div>
          </div>
          
        <div class="card">
            <img src="data:image/jpeg;base64,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" alt="" style="">
            <div class="card__content">
              <p class="card__title">Saudi Arabia</p>
              <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
            </div>
          </div>
          
        <div class="card">
            <img src="data:image/jpeg;base64,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" alt="" style="">
            <div class="card__content">
              <p class="card__title">Kuit </p>
              <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
            </div>
          </div>
          
        <div class="card">
            <img src="https://img.freepik.com/free-photo/flag-egypt_1401-105.jpg" alt="" style="">
            <div class="card__content">
              <p class="card__title">Card Title</p>
              <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
            </div>
          </div>
          
        <div class="card">
          <img src="data:image/jpeg;base64,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uv3OStx1vPU9VjnuE6sVW7YjE2AFzkGg8e81vtMHgug/CqWOKY56ZaqvbUQ1d8j072uR2dMBiQdM7bHSdYo47OAeyrKN7PTy38NDr5z0KpU1elfLe3aICdRrl3MsUqVODvE4+Ox2LxEdDESvZ3tkksmtnHfuMBT6OcFWnphsCEcaMUoEEa7O17+yef5TMj0dxGFr01r4amgp95aboqgMBZWK21A7gBBAPcGmgmWptoCLgEXGhB+R1HpISkoJIUAsbsQACx8SeZm85pNpCIFFlAAGwAsB8JVBgHlXdU77abLmsfzMBuNhe1+Qtc7TGcS6VYDD27bF0aZOwLgk+gF/8t4ie3EuC0K5/FoYeoOfbUEqH5ttMfS6IUUqB6VR6KqQVpUEw9Ojodiq0rsDzuSdYBZUOsXA1qq0sN22KJIDNQouaaBmyhnZraZtBa9ybDWbJSxLuWXsqlIZe7UbsrEn9lQzG437wAllwbhT0cImFrVu0C0lol0z03JK5WOcOTmJOhFjc+MyOEwop01phmcKoXNVYu7WG7M2rE8zAKMX22Q9mENQAZc5K02PO9gzAemvnLgE2FxrYXAOl+didxBXW4Pla+lr+HjJMAmIEQBERAEREAREQBERAEmRJgEREQBERAEREAREQBERAEREAREQBERAEREAREQBKRTHha5ubcz5nnsPgLbSqIBDDzI22t47aylEA0F9ydSTubnUnbXblsNJXEAREQBERAEREAREQBERAEREASZEmARERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBERAEREAREQBJkSYB//2Q==" alt="">
            <div class="card__content">
              <p class="card__title">Emirat</p>
              <p class="card__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
            </div>
          </div>
          
    </div>

  </div>



















<div   id="convert" class="convert" >


    <h1 class="heading ">Currency Converter</h1>
    <hr>
    <div class="container">
        <h2>Amount to convert:</h2>
       
                <input type="number" placeholder="0.00" class="money" id="amount" name="mon">
                <br>

                <span style="margin: 5px; display: inline;">
                    <strong  style="background-color:black;width: 10%;
                    height: 35px;
                    font-family: 'Pacifico', cursive;
                    border-radius: 8px ;
                    margin-left: 10px; margin-right: -12px; " >From</strong>

                    <select class="sel" name="country1" id="sel1" style="margin-left: 10px;">
                        <option value="">select currency...</option>
                        <option value="egypt">Egyption Pound</option>
                        <option value="portoghal">Prtoghal Euro</option>
                        <option value="america">America dollar</option>
                        <option value="kuit">Kuwiti dinar </option>
                        <option value="saudia">Saudi Riyal </option>
                        <option value="emirat">Emirat dirham</option>


                    </select>
               
                   

                        <strong  style="background-color:black;
                        height: 35px;
                        font-family: 'Pacifico', cursive;
                        border-radius: 8px ;
                        margin-left: 10px; margin-right: -30px;" >To</strong>
                       <select class="sel" name="" id="sel2" style="margin-left: 30px; ">
                           <option value="">select currency...</option>
                           <option value="america">America dollar</option>
                           <option value="kuit">Kuwiti dinar </option>
                           <option value="saudia">Saudi Riyal </option>
                           <option value="portoghal">Prtoghal Euro</option>
                           <option value="emirat">Emirat dirham</option>
                           <option value="egypt">Egyption Pound</option>
                          
                       </select>
                    

                   
              
                </span>
         

                <button onclick="sub()" type="submit" class="btn">Convert</button>
                <button type="submit" onclick=" reset()"  class="btn">Reset</button>



                <div id="finalAmount" class="text-center">
 
                    <!-- Display the converted amount -->
                    <h2 id="conv" style="display: none;">Converted Amount :
                        <span class="finalValue" style="color:green;">
                        </span>
                    </h2>
                </div>


    </div>
    <hr>
</div>


<div id=login>
<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form>
					<label for="chk" aria-hidden="true" class="label-login">Sign up</label>
					<input type="text" name="txt" placeholder="User name" required="" class="input-login">
					<input type="email" name="email" placeholder="Email" required="" class="input-login">
					<input type="password" name="pswd" placeholder="Password" required="" class="input-login">
					<button class="button-login">Sign up</button>
				</form>
			</div>

			<div class="login">
				<form>
					<label for="chk" aria-hidden="true" class="label-login">Login</label>
					<input type="email" name="email" placeholder="Email" required="" class="input-login">
					<input type="password" name="pswd" placeholder="Password" required="" class="input-login">
					<button class="button-login">Login</button>
				</form>
			</div>
	</div>

</div>
   

    <script src="script.js"></script>
    
</body>
</html>