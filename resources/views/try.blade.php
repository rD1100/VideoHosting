<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/a3783e84ce.js" crossorigin="anonymous"></script>
    <title>try</title>
</head>
<body>
    <style>
        button:hover{
            color: red
        }
        input:focus{
            outline: none;
        }

       
       
 
        .btn:hover{
            /* background: gray; */
            color: red
        }
      
        h1{
            
            color: gold

        }
        .h-1:hover{
          color: red;
        }
        .h-1{
            margin-top: 70px;
            background: green
        }

    </style>
    <div style="position: relative;">
        <form action="" style="background-color: grey;border-radius: 25px;position: relative;">
            <input style="width: 100%;height: 100%;display: block;padding: 6px 40px 6px 20px;border-radius: 25px;font-size: 20px;border:none;box-shadow:0 5px 8px 3px black; " type="text" name="" id="">
            <button type="submit" style="position: absolute;top: 0;width: 50px;height: 100%;cursor: pointer;border: none;font-size: 18px;background: none">
                <i class="fa-solid fa-magnifying-glass" ></i>
               
                
            </button>
        </form>
    </div>
      
<br>
<input type="text" style="margin-top:30px;margin-left: 40px ">
    </div>


    <div style="margin-top: 30px;margin-left: 40px;width: 120px; ">
        <form action="" class="btn">
            
            <button class="tmbl" style="width: 100%;font-size:20px;background: none;cursor: pointer;padding: 10px 17px 10px 15px;  color: white;   display: flex;background: black;
            justify-content: space-between;">
                    {{-- <div class="grp"> --}}
                        <div class="icon">
                            <i class="fa-solid fa-rotate-right"  style="font-size:18px"></i>
                        </div>
                        <div class="head">
                            reload
                        </div>
                    {{-- </div> --}}
                    
                

            </button>
        </form>
     
    </div>

    <div style="position: relative;left: 40px;top: 30px;width:100px;border: solid red;">
       <div class="tmbl" style="display: flex;justify-content: space-between;padding: 10px; background: blueviolet;font-size: 25px;color: aliceblue">
        
        <div>
            <i class="fa-solid fa-rotate-right"  style="font-size:18px"></i>
        </div>
        <div style="">
            reload
        </div>
       </div>
       
    </div>


    <div class="h-1">
        <h1>
            title
        </h1>
    </div>

    <div>
        <input type="file"  id="btn" hidden/>
        <label for="btn" style="border: solid black;"> 
            upload
        </label>
    </div>

</body>
</html>