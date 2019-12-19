<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    html{
        padding-top: 30px;
        }
        body{
            background-color: #2C3A47;
            color: #d1d8e0;
            font-family: fantasy;
        }

    @media(max-width: 2000px){
    .imagenCabecera{  
        width:200px; 
        margin-left: 40px;
    }

    .cabecera2{
        text-align: center;
        font-size: x-large;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: white;
        margin-top: 20px;
        margin-bottom: 20px;
        margin-left: 15px;
        margin-right: 15px;
    }
    
    .contenido2 form{
        margin: 0 auto;
        color: gray;
        background-color: white;
        margin: 0;
        border-radius: 30px;
        

    }

    .crear{
       background-color: #fff;
        margin: 0 15px;
        border-radius: 12px;
        padding-bottom: 1px;
        display: grid;
       
    }

    .crear2{
        background-color: white;
        text-align: center;
        border-radius: 122px;
    }

  

    input,textarea{
        border: 0;
        outline: none
    }
    .campo{
        border: 1px solid #ccc;
        padding: 20px;
        width: 250px;
        height: 8px;
        border-radius: 12px;
        margin-bottom: 10px;
    }

    .campo:focus{
        border-color: #18A383;
    }
    p{
        text-align: left;
        padding: 1%;
        margin: 0 300px;
        margin-left: 400px;
        }

    .fecha{
        text-align: center;
    }

    .reseña{
       height: 200px;
    }
    

    .boton{
        background-color: #182C61;
        text-align: center;
        border-radius: 12px;
        padding: 20px;
        padding-left: 60px;
        padding-right: 60px;
        margin-top: 10px;
        font-weight: bold;
        font-size: 20px;
        color:white;
    }
    .registrar{
        background-color: white;
        color: black;
        border-radius: 12px;
        padding-left: 90px;
    }
    .centrar-contenido{
            text-align: center;
        }
      }

    @media (max-width: 1000px){

    .imagenCabecera{  
        width:200px; 
        margin-left: 40px;
    }

    .cabecera2{
        text-align: center;
        font-size: x-large;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: white;
        margin-top: 20px;
        margin-bottom: 20px;
        margin-left: 15px;
        margin-right: 15px;
    }
    
    .contenido2 form{
        margin: 0 auto;
        color: gray;
        background-color: white;
        margin: 0;
        border-radius: 30px;
        

    }

    .crear{
       background-color: #fff;
        margin: 0 15px;
        border-radius: 12px;
        padding-bottom: 1px;
        display: grid;
       
    }

    .crear2{
        background-color: white;
        text-align: center;
        border-radius: 122px;
    }

    .crear2 table{
        justify-content: center;
   
    }

    input,textarea{
        border: 0;
        outline: none
    }
    .campo{
        border: 1px solid #ccc;
        padding: 20px;
        width: 250px;
        height: 8px;
        border-radius: 12px;
        margin-bottom: 10px;
    }

    .campo:focus{
        border-color: #18A383;
    }
    p{
        text-align: left;
        padding: 1%;
        margin: 0 250px;
        }

    .fecha{
        text-align: center;
    }

    .reseña{
       height: 200px;
    }
    

    .boton{
        background-color: #182C61;
        text-align: center;
        border-radius: 12px;
        padding: 20px;
        padding-left: 60px;
        padding-right: 60px;
        margin-top: 10px;
        font-weight: bold;
        font-size: 20px;
        color:white;
    }
    .registrar{
        background-color: white;
        color: black;
        border-radius: 12px;
        padding-left: 90px;
 }
 .centrar-contenido{
        text-align: center;
    }
}
              
 @media(max-width: 600px){
    td{
        text-align: left
    }

    .imagenCabecera{  
        width:200px; 
        margin-left: 40px;
    }

    .cabecera2{
        text-align: center;
        font-size: x-large;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color: white;
        margin-top: 20px;
        margin-bottom: 20px;
        margin-left: 15px;
        margin-right: 15px;
    }
    
    .contenido2 form{
        margin: 0 auto;
        color: gray;
        background-color: white;
        margin: 0;
        border-radius: 30px;
        

    }

    .crear{
       background-color: #fff;
        margin: 0 15px;
        border-radius: 12px;
        padding-bottom: 1px;
        display: grid;
       
    }

    .crear2{
        background-color: white;
        text-align: center;
        border-radius: 122px;
    }

    .crear2 table{
        justify-content: center;
   
    }

    input,textarea{
        border: 0;
        outline: none
    }
    .campo{
        border: 1px solid #ccc;
        padding: 20px;
        width: 250px;
        height: 8px;
        border-radius: 12px;
        margin-bottom: 10px;
    }

    .campo:focus{
        border-color: #18A383;
    }
    p{
        text-align: left;
        padding: 1%;
        margin: 0 60px;
        
    }

    .fecha{
        text-align: center;
    }

    .reseña{
       height: 150px;
    }
    .centrar-contenido{
        text-align: center;
    }

    .boton{
        background-color: #182C61;
        text-align: center;
        border-radius: 12px;
        padding: 20px;
        padding-left: 60px;
        padding-right: 60px;
        margin-top: 10px;
        font-weight: bold;
        font-size: 20px;
        color:white;
        border: 1px solid blue;
    }
   


    .registrar{
        background-color: white;
        color: black;
        border-radius: 12px;
        padding-left: 90px;
    }

    .eli:hover{
        color: white;
        background-color: red;
    }
    
    .success:hover{
        color: white;
        background-color: green;
    }
  
 }
    
</style>
<body>
        <div class="cabecera2">
                @yield("cabecera2")
             
            </div>
        
            <div class="contenido2">
                @yield("contenido2") 
            </div>
             
            <div class="pie2">
                @yield("pie2")
            </div>
</body>
</html>