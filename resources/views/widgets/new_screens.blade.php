<style>
 
.button1 {
   background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 8px 45px;
  text-align: center;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button1:hover {
 background-color: #AAAAAA; /* Green */
  border: none;
  color: white;
  padding: 8px 45px;
  text-align: center;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button2 {
   background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 4px 80px;
  text-align: center;
  display: inline-block;
  font-size: 15px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button2:hover {
 background-color: #AAAAAA; /* Green */
  border: none;
  color: white;
  padding: 4px 80px;
  text-align: center;
  display: inline-block;
  font-size: 15px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button3 {
   background-color: orange; /* Green */
  border: none;
  color: white;
  padding: 4px 80px;
  text-align: center;
  display: inline-block;
  font-size: 15px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button3:hover {
 background-color: #AAAAAA; /* Green */
  border: none;
  color: white;
  padding: 4px 80px;
  text-align: center;
  display: inline-block;
  font-size: 15px;

  transition-duration: 0.4s;
  cursor: pointer;
}
.button2 {border-radius: 12px;}
table {
  border-collapse: collapse;
  border: 1px solid white;
}
.button3 {border-radius: 12px;}
table {
  border-collapse: collapse;
  border: 1px solid white;
}


</style>


<div align="right" style="margin-right: 100px">            
    <?php
        date_default_timezone_set('America/Mexico_City'); ?>
        <p style="font-style: oblique; font-size: 25px; color: black;"><b><?php echo date('d-m-Y H:i:s'); ?>
        </b></p> 
</div>        
    
<div align="left" style="margin-left: 80px">
  <a href='javascript:seleccion(1);' class="button1">Mosaico </a>
  <a href='javascript:seleccion(2);' class="button1">Tramo 1 </a>
  <a href='javascript:seleccion(3);' class="button1">Tramo 2 </a>
  <a href='javascript:seleccion(4);' class="button1">Tramo 3 </a>
  <a href='javascript:seleccion(5);' class="button1">Tramo 4 </a>
  <a href='javascript:seleccion(6);' class="button1">Tramo 5 </a>
  <a href='javascript:seleccion(7);' class="button1">Tramo 6A </a>
  <a href='javascript:seleccion(8);' class="button1">Tramo 6B </a> 
  <a href='javascript:seleccion(9);' class="button1">Tramo 7 </a>
</div>


<div id="op1" style="display:block;width:1500px;height:200px;" align="center">
    
 <table>
        <tr>
        <td>
            <img src="data:image/jpg;base64,{{$columns[0]->picture}}" class="imagesCamera" style="width: 1000px; height: 650px; padding-left: 80px;">

        </td>
        <td></td>
          <td style="width:280px; height: 650px;" class="tdstyle">
            <img src="data:image/jpg;base64,{{$columns[1]->picture}}" class="imagesCamera">
            <img src="data:image/jpg;base64,{{$columns[2]->picture}}" class="imagesCamera">                        
            <img src="data:image/jpg;base64,{{$columns[3]->picture}}" class="imagesCamera">                        
       
        </td>
            <td style="width:280px; height: 650px;">   
            <img src="data:image/jpg;base64,{{$columns[4]->picture}}" class="imagesCamera">
            <img src="data:image/jpg;base64,{{$columns[5]->picture}}" class="imagesCamera">                        
            <img src="data:image/jpg;base64,{{$columns[6]->picture}}" class="imagesCamera">
              
        </td>
        </tr>

        <tr>
            <td>
                <p align="left" style="color: black; font-size: 18px; padding-left: 80px;"><b>{{$columns[0]->nombre_comercial}}</b></p>
            </td>
            <td></td>
            <td style="width: 130px;"></td>
            <td style="width: 130px;"></td>
        </tr>

    </table>

</div>
<div id="op2" style="display:none;width:1500px;height:200px;"  align="center">
  <table>
    <tr>
        <td>
            <img src="data:image/jpg;base64,{{$columns[2]->picture}}" class="imagesCamera" style="width: 1150px; height: 740px; padding-left: 80px;">
        </td>
        <td></td>
        <td></td>
        <td></td>
        <td style="width:100px; height: 580px;">
            <img src="data:image/jpg;base64,{{$columns[3]->picture}}" class="imagesCamera"><button class="button2">756-N</button>
            <img src="data:image/jpg;base64,{{$columns[4]->picture}}" class="imagesCamera"><button class="button2">756-S</button>
            <img src="data:image/jpg;base64,{{$columns[5]->picture}}" class="imagesCamera"><button class="button3">767-N</button>
            <img src="data:image/jpg;base64,{{$columns[6]->picture}}" class="imagesCamera"><button class="button3">767-S</button>
        </td>

        <td style="width:100px; height: 580px;" >   
            <img src="data:image/jpg;base64,{{$columns[7]->picture}}" class="imagesCamera"><button class="button3">778-N</button>
            <img src="data:image/jpg;base64,{{$columns[8]->picture}}" class="imagesCamera"><button class="button3">778-S</button>
            <img src="data:image/jpg;base64,{{$columns[9]->picture}}" class="imagesCamera"><button class="button2">552-N</button>   
            <img src="data:image/jpg;base64,{{$columns[10]->picture}}" class="imagesCamera"><button class="button2">552-S</button>  
        </td>
                                                
        <td style="width:100px; height: 580px;" >                                
            <img src="data:image/jpg;base64,{{$columns[11]->picture}}" class="imagesCamera"><button class="button2">542-N</button>            
            <img src="data:image/jpg;base64,{{$columns[12]->picture}}" class="imagesCamera"><button class="button2">542-S</button>            
        </td>
</tr>
    
        <tr>
            <td>
                <p align="left" style="color: black; font-size: 18px; padding-left: 80px;"><b>{{$columns[0]->nombre_comercial}}</b></p>
            </td><td></td><td style="width: 130px;"></td><td style="width: 130px;"></td>
        </tr>
    </table>
</div>
<div id="op3" style="display:none;width:1500px;height:200px;"  align="center">
 <table>
    <tr>
        <td>
            <img src="data:image/jpg;base64,{{$columns[9]->picture}}" class="imagesCamera" style="width: 1150px; height: 740px; padding-left: 80px;">
        </td>
        <td></td>
        <td></td>
        <td></td>
        <td style="width:100px; height: 580px;">
            <img src="data:image/jpg;base64,{{$columns[4]->picture}}" class="imagesCamera"><button class="button3">679-N</button>
            <img src="data:image/jpg;base64,{{$columns[2]->picture}}" class="imagesCamera"><button class="button3">679-S</button>
            <img src="data:image/jpg;base64,{{$columns[5]->picture}}" class="imagesCamera"><button class="button2">689-N</button>
            <img src="data:image/jpg;base64,{{$columns[6]->picture}}" class="imagesCamera"><button class="button2">689-S</button>
        </td>

        <td style="width:100px; height: 580px;" >   
            <img src="data:image/jpg;base64,{{$columns[7]->picture}}" class="imagesCamera"><button class="button2">706-N</button>
            <img src="data:image/jpg;base64,{{$columns[8]->picture}}" class="imagesCamera"><button class="button2">706-S</button>
            <img src="data:image/jpg;base64,{{$columns[9]->picture}}" class="imagesCamera"><button class="button3">715-N</button>   
            <img src="data:image/jpg;base64,{{$columns[10]->picture}}" class="imagesCamera"><button class="button3">715-S</button>  
        </td>
                                                
        <td style="width:100px; height: 580px;" >                                
            <img src="data:image/jpg;base64,{{$columns[11]->picture}}" class="imagesCamera"><button class="button3">606-S</button>            
            <img src="data:image/jpg;base64,{{$columns[1]->picture}}" class="imagesCamera"><button class="button3">606-S</button>
            <img src="data:image/jpg;base64,{{$columns[2]->picture}}" class="imagesCamera"><button class="button2">594-S</button>            
            <img src="data:image/jpg;base64,{{$columns[3]->picture}}" class="imagesCamera"><button class="button2">594-S</button>           
        </td>
</tr>
    
        <tr>
            <td>
                <p align="left" style="color: black; font-size: 18px; padding-left: 80px;"><b>{{$columns[0]->nombre_comercial}}</b></p>
            </td><td></td><td style="width: 130px;"></td><td style="width: 130px;"></td>
        </tr>
    </table>
</div>
<div id="op4" style="display:none;width:1500px;height:200px;"  align="center">
  <table>
    <tr>
        <td>
            <img src="data:image/jpg;base64,{{$columns[4]->picture}}" class="imagesCamera" style="width: 1150px; height: 740px; padding-left: 80px;">
        </td>
        <td></td>
        <td></td>
        <td></td>
        <td style="width:100px; height: 580px;">
            <img src="data:image/jpg;base64,{{$columns[5]->picture}}" class="imagesCamera"><button class="button2">791-N</button>
            <img src="data:image/jpg;base64,{{$columns[6]->picture}}" class="imagesCamera"><button class="button2">791-S</button>
            <img src="data:image/jpg;base64,{{$columns[7]->picture}}" class="imagesCamera"><button class="button3">802-N</button>
            <img src="data:image/jpg;base64,{{$columns[8]->picture}}" class="imagesCamera"><button class="button3">802-S</button>
        </td>

        <td style="width:100px; height: 580px;" >   
            <img src="data:image/jpg;base64,{{$columns[9]->picture}}" class="imagesCamera"><button class="button3">529-N</button>
            <img src="data:image/jpg;base64,{{$columns[10]->picture}}" class="imagesCamera"><button class="button3">529-S</button>
            <img src="data:image/jpg;base64,{{$columns[11]->picture}}" class="imagesCamera"><button class="button2">519-N</button>   
            <img src="data:image/jpg;base64,{{$columns[1]->picture}}" class="imagesCamera"><button class="button2">519-S</button>  
        </td>                                            
</tr>    
        <tr>
            <td>
                <p align="left" style="color: black; font-size: 18px; padding-left: 80px;"><b>{{$columns[0]->nombre_comercial}}</b></p>
            </td>
            <td></td>
            <td style="width: 130px;"></td>
            <td style="width: 130px;"></td>
        </tr>
    </table>
</div>
<div id="op5" style="display:none;width:1500px;height:200px;"  align="center">
  <table>
    <tr>
        <td>
            <img src="data:image/jpg;base64,{{$columns[7]->picture}}" class="imagesCamera" style="width: 1150px; height: 740px; padding-left: 80px;">
        </td>
        <td></td>
        <td></td>
        <td></td>
        <td style="width:100px; height: 580px;">
            <img src="data:image/jpg;base64,{{$columns[9]->picture}}" class="imagesCamera"><button class="button3">811-N</button>
            <img src="data:image/jpg;base64,{{$columns[8]->picture}}" class="imagesCamera"><button class="button3">811-S</button>
            <img src="data:image/jpg;base64,{{$columns[7]->picture}}" class="imagesCamera"><button class="button2">820-N</button>
            <img src="data:image/jpg;base64,{{$columns[6]->picture}}" class="imagesCamera"><button class="button2">820-S</button>
            
        </td>

        <td style="width:100px; height: 580px;" >   
            <img src="data:image/jpg;base64,{{$columns[5]->picture}}" class="imagesCamera"><button class="button2">829-N</button>
            <img src="data:image/jpg;base64,{{$columns[4]->picture}}" class="imagesCamera"><button class="button2">589-S</button>
            <img src="data:image/jpg;base64,{{$columns[3]->picture}}" class="imagesCamera"><button class="button3">509-N</button>
            <img src="data:image/jpg;base64,{{$columns[2]->picture}}" class="imagesCamera"><button class="button3">509-S</button>

        </td>

         <td style="width:100px; height: 580px;" >  
            <img src="data:image/jpg;base64,{{$columns[1]->picture}}" class="imagesCamera"><button class="button3">505-N</button>   
            <img src="data:image/jpg;base64,{{$columns[11]->picture}}" class="imagesCamera"><button class="button3">505-S</button> 
            <img src="data:image/jpg;base64,{{$columns[12]->picture}}" class="imagesCamera"><button class="button2">491-N</button>
            <img src="data:image/jpg;base64,{{$columns[2]->picture}}" class="imagesCamera"><button class="button2">491-S</button> 
        </td>
</tr>
    
        <tr>
            <td>
                <p align="left" style="color: black; font-size: 18px; padding-left: 80px;"><b>{{$columns[0]->nombre_comercial}}</b></p>
            </td>
            <td></td>
            <td style="width: 130px;"></td>
            <td style="width: 130px;"></td>
        </tr>
    </table>
</div>

<div id="op6" style="display:none;width:1500px;height:200px;"  align="center">
  <table>
    <tr>
        <td>
            <img src="data:image/jpg;base64,{{$columns[8]->picture}}" class="imagesCamera" style="width: 1150px; height: 740px; padding-left: 80px;">
        </td>
        <td></td>
        <td></td>
        <td></td>
        <td style="width:100px; height: 580px;">
            <img src="data:image/jpg;base64,{{$columns[7]->picture}}" class="imagesCamera"><button class="button2">840-N</button>
            <img src="data:image/jpg;base64,{{$columns[6]->picture}}" class="imagesCamera"><button class="button2">840-S</button>
            <img src="data:image/jpg;base64,{{$columns[5]->picture}}" class="imagesCamera"><button class="button3">856-N</button>
            <img src="data:image/jpg;base64,{{$columns[4]->picture}}" class="imagesCamera"><button class="button3">856-S</button>
        </td>
        <td style="width:100px; height: 580px;" >   
            <img src="data:image/jpg;base64,{{$columns[3]->picture}}" class="imagesCamera"><button class="button3">863-N</button>
            <img src="data:image/jpg;base64,{{$columns[2]->picture}}" class="imagesCamera"><button class="button3">863-S</button>
            <img src="data:image/jpg;base64,{{$columns[1]->picture}}" class="imagesCamera"><button class="button2">867-N</button>   
            <img src="data:image/jpg;base64,{{$columns[11]->picture}}" class="imagesCamera"><button class="button2">867-S</button>  
        </td>                                                
    </tr>
        <tr>
            <td>
                <p align="left" style="color: black; font-size: 18px; padding-left: 80px;"><b>{{$columns[0]->nombre_comercial}}</b></p>
            </td>
            <td></td>
            <td style="width: 130px;"></td>
            <td style="width: 130px;"></td>
        </tr>
    </table>
</div>


<div id="op7" style="display:none;width:1500px;height:200px;"  align="center">
 <table>
    <tr>
        <td>
            <img src="data:image/jpg;base64,{{$columns[0]->picture}}" class="imagesCamera" style="width: 1150px; height: 740px; padding-left: 80px;">
        </td>
        <td></td>
        <td></td>
        <td></td>
        <td style="width:100px; height: 580px;">
            <img src="data:image/jpg;base64,{{$columns[1]->picture}}" class="imagesCamera"><button class="button2">478-N</button>
            <img src="data:image/jpg;base64,{{$columns[2]->picture}}" class="imagesCamera"><button class="button2">478-S</button>
            <img src="data:image/jpg;base64,{{$columns[3]->picture}}" class="imagesCamera"><button class="button3">465-N</button>
            <img src="data:image/jpg;base64,{{$columns[4]->picture}}" class="imagesCamera"><button class="button3">465-S</button>
        </td>

        <td style="width:100px; height: 580px;">
            <img src="data:image/jpg;base64,{{$columns[4]->picture}}" class="imagesCamera"><button class="button3">459-N</button>
            <img src="data:image/jpg;base64,{{$columns[5]->picture}}" class="imagesCamera"><button class="button3">459-S</button>
        </td>
</tr>
        <tr>
            <td>
                <p align="left" style="color: black; font-size: 18px; padding-left: 80px;"><b>{{$columns[0]->nombre_comercial}}</b></p>
            </td>
            <td></td>
            <td style="width: 130px;"></td>
            <td style="width: 130px;"></td>
        </tr>
    </table>
</div>



<div id="op8" style="display:none;width:1500px;height:200px;"  align="center">
 <table>
    <tr>
        <td>
            <img src="data:image/jpg;base64,{{$columns[4]->picture}}" class="imagesCamera" style="width: 1150px; height: 740px; padding-left: 80px;">
        </td>
        <td></td>
        <td></td>
        <td></td>
        <td style="width:100px; height: 580px;">
            <img src="data:image/jpg;base64,{{$columns[3]->picture}}" class="imagesCamera"><button class="button2">877-N</button>
            <img src="data:image/jpg;base64,{{$columns[1]->picture}}" class="imagesCamera"><button class="button2">877-S</button>
            <img src="data:image/jpg;base64,{{$columns[2]->picture}}" class="imagesCamera"><button class="button3">881-N</button>
            <img src="data:image/jpg;base64,{{$columns[5]->picture}}" class="imagesCamera"><button class="button3">881-S</button>
        </td>

        <td style="width:100px; height: 580px;">
            <img src="data:image/jpg;base64,{{$columns[7]->picture}}" class="imagesCamera"><button class="button3">897-N</button>
            <img src="data:image/jpg;base64,{{$columns[6]->picture}}" class="imagesCamera"><button class="button3">897-S</button>
        </td>
</tr>
        <tr>
            <td>
                <p align="left" style="color: black; font-size: 18px; padding-left: 80px;"><b>{{$columns[0]->nombre_comercial}}</b></p>
            </td>
            <td></td>
            <td style="width: 130px;"></td>
            <td style="width: 130px;"></td>
        </tr>
    </table>
</div>


<div id="op9" style="display:none;width:1500px;height:200px;"  align="center">
 <table>
    <tr>
        <td>
            <img src="data:image/jpg;base64,{{$columns[6]->picture}}" class="imagesCamera" style="width: 1150px; height: 740px; padding-left: 80px;">
        </td>
        <td></td>
        <td></td>
        <td></td>
        <td style="width:100px; height: 580px;">
            <img src="data:image/jpg;base64,{{$columns[1]->picture}}" class="imagesCamera"><button class="button2">448-N</button>
            <img src="data:image/jpg;base64,{{$columns[2]->picture}}" class="imagesCamera"><button class="button2">448-S</button>
            <img src="data:image/jpg;base64,{{$columns[3]->picture}}" class="imagesCamera"><button class="button3">444-N</button>
            <img src="data:image/jpg;base64,{{$columns[4]->picture}}" class="imagesCamera"><button class="button3">444-S</button>
           
        </td>

        <td style="width:100px; height: 580px;">
             <img src="data:image/jpg;base64,{{$columns[4]->picture}}" class="imagesCamera"><button class="button3">440-N</button>
            <img src="data:image/jpg;base64,{{$columns[5]->picture}}" class="imagesCamera"><button class="button3">440-S</button>
            <img src="data:image/jpg;base64,{{$columns[1]->picture}}" class="imagesCamera"><button class="button2">419-N</button>
            <img src="data:image/jpg;base64,{{$columns[2]->picture}}" class="imagesCamera"><button class="button2">419-S</button>
        </td>
        <td style="width:100px; height: 580px;">
            <img src="data:image/jpg;base64,{{$columns[3]->picture}}" class="imagesCamera"><button class="button2">414-N</button>
            <img src="data:image/jpg;base64,{{$columns[4]->picture}}" class="imagesCamera"><button class="button2">414-S</button>
            <img src="data:image/jpg;base64,{{$columns[4]->picture}}" class="imagesCamera"><button class="button3">407-N</button>
            <img src="data:image/jpg;base64,{{$columns[5]->picture}}" class="imagesCamera"><button class="button3">407-S</button>
        </td>
</tr>
        <tr>
            <td>
                <p align="left" style="color: black; font-size: 18px; padding-left: 80px;"><b>{{$columns[0]->nombre_comercial}}</b></p>
            </td>
            <td></td>
            <td style="width: 130px;"></td>
            <td style="width: 130px;"></td>
        </tr>
    </table>
</div>




    


<!-- The Modal -->
<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
</div>

<script type="text/javascript">
    // Get the modal
    $(document).ready(function(){
        $('#screen img').click(function(){
            var modal = document.getElementById("myModal");
            var img = $(this).attr('id');
            var modalImg = document.getElementById("img01");
            var captionText = document.getElementById("caption");
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
            var span = document.getElementsByClassName("close")[0];
            span.onclick = function() {
                modal.style.display = "none";
            };
        });
        function blink(selector){
            $(selector).fadeOut('slow', function(){
                $(this).fadeIn('slow', function(){
                    blink(this);
                });
            });
        }
        blink('.card-home-alert');
    });
    function seleccion(opc)
{
  document.getElementById("op1").style.display="none";
  document.getElementById("op2").style.display="none";
  document.getElementById("op3").style.display="none";
  document.getElementById("op4").style.display="none";
  document.getElementById("op5").style.display="none";
  document.getElementById("op6").style.display="none";
  document.getElementById("op7").style.display="none";
  document.getElementById("op8").style.display="none";
  document.getElementById("op9").style.display="none";
  switch(opc)
  {
    case 1:
      document.getElementById("op1").style.display="block";
      break;
    case 2:
      document.getElementById("op2").style.display="block";
      break;
    case 3:
      document.getElementById("op3").style.display="block";
      break;
    case 4:
      document.getElementById("op4").style.display="block";
      break;
      case 5:
      document.getElementById("op5").style.display="block";
      break;
      case 6:
      document.getElementById("op6").style.display="block";
      break;
      case 7:
      document.getElementById("op7").style.display="block";
      break;
      case 8:
      document.getElementById("op8").style.display="block";
      break;
      case 9:
      document.getElementById("op9").style.display="block";
      break;
  }
}
</script>
