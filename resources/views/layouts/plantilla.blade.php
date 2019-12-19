<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>plantilla</title>

    <style>
        body{
            background-color: #2C3A47;
            color: #d1d8e0;
            font-family: fantasy;
        }
        @media(max-width: 2000px){
       
            .crearpeli{ 
                background: #bdc3c7;  /* fallback for old browsers */
                background: -webkit-linear-gradient(to top, #2c3e50, #bdc3c7);  /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to top, #2c3e50, #bdc3c7); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

                text-decoration: none;
                color:  #d1d8e0;
                padding: 10px;
                border-radius: 12px;
                
            }
            .crearpeli:hover{
                color:white;
                padding: 15px;
            }
        
            .imagenCabecera{  
                width:200px; 
                margin-left: 40px;
            }
    
            .cabecera{
                text-align: center;
                font-size: x-large;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                color: white;
                width: 100%;
                margin-left: 10px;
                margin-bottom: -40px;
                
            }
            .contenido form{
                width:200px; 
                margin: 0 auto;
            }
            
            .contenido{
                text-align: center;
                display: grid;
                grid-auto-flow: row;
                grid-template-columns: repeat(auto-fill, minmax(380px, 300px));
            }
            
            .centrar{
                justify-content: center;
            }
    
            .pelicula{
                background: #bdc3c7;  /* fallback for old browsers */
                background: -webkit-linear-gradient(to top, #2c3e50, #bdc3c7);  /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to top, #2c3e50, #bdc3c7); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    
                margin: 0 15px;
                border-radius: 12px;
                padding-bottom: 1px;
                height: auto;
                
            }
    
            .actores ul{
                list-style: none;
                text-align: auto;
                padding: 0 40px;
            }
    
            .titulo{
                padding-top: 0;
                margin-top: 0;
                padding: 0 40px;
                justify-content: center;
                height: 110px;
                text-align: center;
                margin-bottom: 20px;
                display: grid;
                align-content: center;
                background: rgba(0, 0, 0, .1);
                
            }

        
    
            .titulo a{
                text-decoration: none;
                color: black;
                font-size: 35px;
            }
    
            .reseña{
                padding-bottom: 0;
            }
    
            .actores{
                text-align: center;
                padding: 0 40px;
            }
    
            .imgn{
                padding-top: 10px;
                margin-bottom: 0;
                margin-top: 15px;
                padding-bottom: 10px;
                width: 300px;
                height: 200px;
                border-radius: 60px;
            }
            .imagen{
                margin-bottom: 0;    
            }
            .duracion{
                font-weight: bold;
                padding: 0 40px;
            }
            .reseña{
                padding-bottom: 0px;
                padding: 0 40px;
                margin-bottom: 10px;
                align-content: space-around;
            }
    
            .cali{
                background: #2193b0;  /* fallback for old browsers */
                background: -webkit-linear-gradient(to bottom, #6dd5ed, #2193b0);  /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to bottom, #6dd5ed, #2193b0); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                border-radius: 100px;
                font-weight: bold;
                font-size: 40px;
                color: white;          
                margin-left: 100px;
                margin-right: 100px;
                
                
            }
            
            .cali p{
            padding-top: 22px;
            padding-bottom: 22px;
            margin-top: 0px;
            margin-bottom: 10px;  
            
            }

            .fechaestreno{
                padding: 0 40px;
            }
            .director{
                padding: 0 40px;
            }
    
            .pais{
                padding: 0 40px;
            }
            .clasi{
                padding: 0 40px;
            }
    
            hr{
                width: 80%;
            }
            .peliculas{
                background: #bdc3c7;  /* fallback for old browsers */
                background: -webkit-linear-gradient(to top, #2c3e50, #bdc3c7);  /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to left, #2c3e50, #bdc3c7); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                color: #d1d8e0;
                border-radius: 12px;
                padding-left: 0;
                font-family: fantasy;
                margin-bottom: 40px;
            
            }

            .res{
                display: grid;
            }
            .res p{
            background: rgba(0, 0, 0, .1);
            display: grid;
                height: 160px;
                font-size: 12px;
                text-align: justify;
                padding-top: 10px;
                padding-bottom: 10px;
            }
        }

        @media (max-width: 1000px){
           
            .crearpeli{ 
                background: #bdc3c7;  /* fallback for old browsers */
                background: -webkit-linear-gradient(to top, #2c3e50, #bdc3c7);  /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to top, #2c3e50, #bdc3c7); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

                text-decoration: none;
                color:  #d1d8e0;
                padding: 10px;
                border-radius: 12px;
                
            }
            .crearpeli:hover{
                color:white;
                padding: 15px;
            }
        
        
            .imagenCabecera{  
                width:200px; 
                margin-left: 40px;
            }
    
            .cabecera{
                text-align: center;
                font-size: x-large;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                color: white;
                width: 95%;
                margin-bottom: -40px;
            }
            .contenido form{
                width:200px; 
                margin: 0 auto;
            }
            
            .contenido{
                text-align: center;
                display: grid;
                grid-auto-flow: row;
                grid-template-columns: repeat(auto-fill, minmax(380px, 300px));
            }
            
            .centrar{
                justify-content: center;
            }
    
            .pelicula{
                background: #bdc3c7;  /* fallback for old browsers */
                background: -webkit-linear-gradient(to top, #2c3e50, #bdc3c7);  /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to top, #2c3e50, #bdc3c7); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    
                margin: 0 15px;
                border-radius: 12px;
                padding-bottom: 1px;
                height: auto;
                
            }
    
            .actores ul{
                list-style: none;
                text-align: auto;
                padding: 0 40px;
            }
    
            .titulo{
                padding-top: 0;
                margin-top: 0;
                padding: 0 40px;
                justify-content: center;
                height: 110px;
                text-align: center;
                margin-bottom: 20px;
                display: grid;
                align-content: center;
            }
    
            .titulo a{
                text-decoration: none;
                color: black;
                font-size: 30px;
            }
    
            .reseña{
                padding-bottom: 0;
            }
    
            .actores{
                text-align: center;
                padding: 0 40px;
            }
    
            .imgn{
                padding-top: 10px;
                margin-bottom: 0;
                margin-top: 15px;
                padding-bottom: 10px;
                width: 300px;
                height: 200px;
                border-radius: 60px;
            }
            .imagen{
                margin-bottom: 0;    
            }
            .duracion{
                font-weight: bold;
                padding: 0 40px;
            }
            .reseña{
                padding-bottom: 0px;
                padding: 0 40px;
                margin-bottom: 10px;
                align-content: space-around;
            }
    
            .cali{
                background: #2193b0;  /* fallback for old browsers */
                background: -webkit-linear-gradient(to bottom, #6dd5ed, #2193b0);  /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to bottom, #6dd5ed, #2193b0); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                border-radius: 100px;
                font-weight: bold;
                font-size: 40px;
                color: white;          
                margin-left: 100px;
                margin-right: 100px;
                
                
            }
            
            .cali p{
            padding-top: 22px;
            padding-bottom: 22px;
            margin-top: 0px;
            margin-bottom: 10px;  
            
            }

            .fechaestreno{
                padding: 0 40px;
            }
            .director{
                padding: 0 40px;
            }
    
            .pais{
                padding: 0 40px;
            }
            .clasi{
                padding: 0 40px;
            }
    
            hr{
                width: 80%;
            }
            .peliculas{
            background: #bdc3c7;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to top, #2c3e50, #bdc3c7);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to left, #2c3e50, #bdc3c7); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            color: #d1d8e0;
            border-radius: 12px;
            padding-left: 0;

            
            }

            .res{
                display: grid;
            }
            .res p{
            background: rgba(0, 0, 0, .1);
            display: grid;
                height: 100px;
                font-size: 10px;
                text-align: justify;
            }
        }

   
      /*
        @media(max-width: 710px){
            .cali{
                  background: #2193b0;  
                  background: -webkit-linear-gradient(to bottom, #6dd5ed, #2193b0); 
                  background: linear-gradient(to bottom, #6dd5ed, #2193b0); 
                  border-radius: 100px;
                  font-weight: bold;
                  font-size: 40px;
                  color: white;          
                  margin-left: 230px;
                  margin-right: 230px;    
              }
          }
      */

       
            @media (max-width: 600px){

                .crearpeli{ 
                background: #bdc3c7;  /* fallback for old browsers */
                background: -webkit-linear-gradient(to top, #2c3e50, #bdc3c7);  /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to top, #2c3e50, #bdc3c7); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

                text-decoration: none;
                color:  #d1d8e0;
                padding: 10px;
                border-radius: 12px;
                
            }
            .crearpeli:hover{
                color:white;
                padding: 15px;
            }
        
          
              .imagenCabecera{  
                  width:200px; 
                  margin-left: 40px;
              }
      
              .cabecera{
                  text-align: center;
                  font-size: x-large;
                  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                 color: white;
                 margin-bottom: -50px;
              }
              .contenido form{
                  width:200px; 
                  margin: 0 auto;
              }
              
              .contenido{
                  text-align: center;
                  display: grid;
                  grid-auto-flow: row;
              }
              
              .centrar{
                  justify-content: center;
              }
      
              .pelicula{
                  background: #bdc3c7;  /* fallback for old browsers */
                  background: -webkit-linear-gradient(to top, #2c3e50, #bdc3c7);  /* Chrome 10-25, Safari 5.1-6 */
                  background: linear-gradient(to top, #2c3e50, #bdc3c7); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      
                 margin: 0 15px;
                 border-radius: 12px;
                 padding-bottom: 1px;
                 width: 440px;
              }
      
              .actores ul{
                  list-style: none;
                  text-align: auto;
                  padding: 0 40px;
              }
      
              .titulo{
                  padding-top: 0;
                  margin-top: 0;
                  padding: 0 40px;
              }
      
              .titulo a{
                  text-decoration: none;
                  color: black;
                  font-size: 35px;
              }
      
              .reseña{
                  padding-bottom: 0;
              }
      
              .actores{
                  text-align: center;
                  padding: 0 40px;
              }
      
              .imgn{
                  padding-top: 10px;
                  margin-bottom: 0;
                  margin-top: 15px;
                  padding-bottom: 10px;
                  width: 300px;
                  height: 200px;
                  border-radius: 60px;
              }
              .imagen{
                  margin-bottom: 0;    
              }
              .duracion{
                  font-weight: bold;
                  padding: 0 40px;
              }
              .reseña{
                  padding-bottom: 0px;
                  padding: 0 40px;
                  margin-bottom: 10px;
              }
      
              .cali{
                  background: #2193b0;  /* fallback for old browsers */
                  background: -webkit-linear-gradient(to bottom, #6dd5ed, #2193b0);  /* Chrome 10-25, Safari 5.1-6 */
                  background: linear-gradient(to bottom, #6dd5ed, #2193b0); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                  border-radius: 100px;
                  font-weight: bold;
                  font-size: 40px;
                  color: white;          
                  margin-left: 130px;
                  margin-right: 130px;
                  
                  
              }
             
             .cali p{
              padding-top: 10px;
              padding-bottom: 10px;
              margin-top: 0px;
              margin-bottom: 10px;  
              
              }

              .fechaestreno{
                   padding: 0 40px;
              }
              .director{
                  padding: 0 40px;
              }
      
              .pais{
                  padding: 0 40px;
              }
              .clasi{
                  padding: 0 40px;
              }
      
              hr{
                  width: 80%;
              }
            .peliculas{
                color: #d1d8e0;
            }
              
          }

          

        
              
          </style>
      
</head>
<body>
    <div class="cabecera">
        @yield("cabecera")
     
    </div>

    <div class="contenido">
        @yield("contenido") 
    </div>


    <div id="app">
        <div class="pie">
                @yield("pie")
        </div>
        <pie-component></pie-component>
    </div>
    <script src="/js/app.js"></script>

     
    
</body>
</html>