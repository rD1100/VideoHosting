<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    {{-- <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@700&display=swap" rel="stylesheet"> --}}
    <script src="https://kit.fontawesome.com/a3783e84ce.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <style>
        html, body {
        height: 100%;
        }
    </style>
    <title>Sign In</title>
</head>
<body style="height: 100%;">
    <div style="display: flex;justify-content: center;align-items: center;height: 100%;width: 100%;">
        <div style="border: solid white;width: 25%;height: 56%; background: white; border-radius: 5px;">
            <div style="">
                <div style="border-bottom: 1px solid black;text-align: center;font-size: 30px;padding: 10px">
                    <span style="font-weight: bold;">Sign</span> In 
                </div>
                <div style="padding: 20px 15px 10px 15px;">
                    <div style="width: 95%">
                        {{-- <form action="" > --}}
                            <div style=" margin-bottom: 15px;display: flex;">
                                <div style=" width: 100%;padding: 0px 0px 0px 10px;border-radius: 5px 0px 0px 5px;border: 1px solid rgb(156, 153, 153); ">
                                    <input style="width: 96%;height: 35px;font-size: 17px;border: none;" type="email" placeholder="Email">
                                </div >
                               
                                <div style="border:1px solid rgb(156, 153, 153);border-left:none;padding: 7px 10px 5px 10px;background: rgb(206, 204, 204);margin-right: -0.5px;border-radius: 0 5px 5px 0;">
                                    <i style="font-size: 18px;" class="fa-solid fa-envelope"></i>
                                </div>
                            </div>
                            {{-- password --}}
                              <div style="margin-bottom: 15px;display: flex;">
                                <div style=" width: 100%;padding: 0px 0px 0px 10px;border-radius: 5px 0px 0px 5px;border: 1px solid rgb(156, 153, 153); ">
                                    <input style="width: 96%;height: 35px;font-size: 17px;border: none;" type="password" placeholder="Password">
                                </div >
                               
                                <div style="border:1px solid rgb(156, 153, 153);border-left:none;padding: 7px 10px 5px 10px;background: rgb(206, 204, 204);margin-right: -0.5px;border-radius: 0 5px 5px 0;">
                            
                                        <i style="font-size: 18px;" class="fa-solid fa-key"></i>
                                </div>
                            </div>


                           
                                <a href="/dashboard" style="display: flex;justify-content: right;margin-bottom:15px;">
                                    <button style="cursor: pointer;border: none;width: 80px;background: rgb(100, 6, 231);color: white;font-size: 15px;padding: 10px 10px 10px 10px;border-radius: 5px;" type="submit"> 
                                        Sign In
                                    </button>
                                </a>
                         
                        
                           
                        {{-- </form>  --}}
                        <button  style="align-items: center;justify-content: space-evenly;display: flex; cursor: pointer;border:none;background: rgb(177, 8, 8);padding: 10px 40px 10px 40px;color: white;font-size: 15px;border-radius: 5px;width: 100%; margin-bottom:15px;">
                            
                            <div style="font-size: 20px;">
                                <i class="fa-brands fa-google-plus-g"></i>
                            </div>
                            <div>
                                Sign in Using Google
                            </div>
                             
                        </button>
                        <div>
                            <div style=" margin-bottom: 8px;">
                                <a href="" style="font-size: 15px;color: rgba(0, 4, 247, 0.644);text-decoration:none; ">
                                    I forget my password
                                </a>

                            </div>    
                            <div style="">
                                <a href="/SignUp" style="font-size: 15px;color: rgba(0, 4, 247, 0.644);text-decoration:none; ">
                                    Register New User
                                </a>
    
                        </div>
                     
                    </div>
                </div>
       
            </div>
        </div>
    </div>
  
</body>
</html>