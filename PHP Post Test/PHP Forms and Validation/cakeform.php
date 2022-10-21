
<body>
<?php
    $name_error="";
    $name="";
    $select_cake_error="";
    $selected_cake="";
    $select_fillings_error="";  
    $selected_fillings=[];  
    $select_flavor_error="";  
    $selected_flavor="";  
    $address_error="";
    $address="";
    $phonenumber_error="";
    $phonenumber="";
   

if(!empty($_POST['submitted']))
    {
    $name = trim($_POST["name"]);
    $address = trim($_POST["address"]);
    $phonenumber = trim($_POST["phonenumber"]);
    $error = false;

    if(empty($name))
        {
            $name_error = "Name is empty, Please enter your name.";
            $error=true;
        }
        if(empty($address))
        {
            $address_error = "Address is empty, Please enter your address.";
            $error=true;
        }
        if(empty($phonenumber))
        {
            $phonenumber_error = "Phone number is empty, Please enter your phone number.";
            $error=true;
        }

        if(empty($_POST["selectedcake"]))
        {
            $select_cake_error = "Please select a cake size";
            $error=true;
        }
         else
         { 
             $selected_cake = $_POST["selectedcake"];
        }
        if(!empty($_POST["Flavors"]))    
        {
            $selected_flavor = $_POST["Flavors"];
        }
        else
        {
            $select_flavor_error = "Please select a flavor from the list";
            $error=true;
        }
        $counter=0;
        if(!empty($_POST["Filling[]"])){    
            foreach($_POST["Filling[]"] as $checked)
            {       
                $selected_fillings[$counter] = $checked;
                $counter = $counter+1;
            }
        }else{  
            $select_fillings_error = "Please select your filling/s";
            $error=true;
        }
        if($error==true){       
            $error="* required field.";
         }
    }
?>
</body>
<!DOCTYPE html>
<html>
    <head>
        <title>Cake Forms</title>
        <link href="cakeform.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="wrap">
            <div>       
                <form method="post" action="">
                    <fieldset>
                    <legend>Make Your Own Cake!</legend>
                    <div class="cont_order">    
                        <div class="field_container"> 
                            <h4>Select Size for the Cake:</h4>
                            <p><input type="radio" name="selectedcake" value="Round6"
                            <?php echo ($selected_cake=="Round6")? "checked":"";?>/> Round cake 6" - serves 8 people</p> 
                            <p><input type="radio" name="selectedcake" value="Round8"
                            <?php echo ($selected_cake=="Round8")? "checked":"";?>/> Round cake 8" - serves 12 people</p>
                            <p><input type="radio" name="selectedcake" value="Round10"
                            <?php echo ($selected_cake=="Round10")? "checked":"";?>/> Round cake 10" - serves 16 people</p> 
                            <p><input type="radio" name="selectedcake" value="Round12"
                            <?php echo ($selected_cake=="Round12")? "checked":"";?>/> Round cake 12" - serves 30 people</p>
                            <span style="color:red"> <?php echo $select_cake_error; ?></span>
                        </div>
                        <div class="field_container"> 
                            <h4>Select a Cake Flavor:</h4>
                            <Select name="Flavors">
                                <option value="Flavor" disabled selected>Select Flavor</option>
                                <option value="Carrot">Carrot</option>
                                <option value="Chocolate">Chocolate</option>
                                <option value="Banana">Banana</option>
                                <option value="Red Velvet">Red Velvet</option>  
                                <option value="Strawberry">Strawberry</option>
                                <option value="Vanilla">Vanilla</option>
                                <option value="Combo">Combo</option>
                            </Select>   
                            <br/><span style="color:red"> <?php echo $select_flavor_error; ?></span>
                        </div><br/>
                        <div class="field_container">
                            <h4>Select Fillings:</h4>
                      
                            <label><input type="checkbox" value="Cream" name='Filling[]'/> Cream </label><br/>
                            <label><input type="checkbox" value="Fudge" name='Filling[]'/> Fudge </label><br/>
                            <label><input type="checkbox" value="Ganache" name='Filling[]'/> Ganache </label><br/>
                            <label><input type="checkbox" value="Hazelnut" name='Filling[]'/> Hazelnut </label><br/>
                            <label><input type="checkbox" value="Mousse" name='Filling[]'/> Mousse </label><br/>
                            <label><input type="checkbox" value="Pudding" name='Filling[]'/> Pudding </label>
                            <br/><span style="color:red"> <?php echo $select_fillings_error; ?></span>
                        </div>
</fieldset>
                    </div>
                    
                    <legend>Contact Details:</legend>   
                    <fieldset>
                    <div class="cont_container"> 
                        <label for="name">Name:</label><br/>  
                        <input type="text" id="name" name="name" 
                        value="<?php echo htmlentities($name)?>">
                        <br/>
                        <span style="color:red"><?php echo $name_error ?></span>
                        <br/>  
                        <label for="address">Address:</label><br/>  
                        <input type="text" id="address" name="address"
                        value="<?php echo htmlentities($address)?>">
                        <br/>
                        <span style="color:red""><?php echo $address_error ?></span>
                        <br/>
                        <label for="phonenumber">Phone Number:</label><br/>  
                        <input type="text" id="phonenumber" name="phonenumber"
                        value="<?php echo htmlentities($phonenumber)?>">
                        <br/>
                        <span style="color:red"><?php echo $phonenumber_error ?></span>
                    </div>
                    <span style="color:red"><?php echo $error ?></span><br/>
                    <input type="submit" name="submitted" id="submit" value="Submit">
                </form>
            </div>  
        </div>
</fieldset>
    </body>
</html>