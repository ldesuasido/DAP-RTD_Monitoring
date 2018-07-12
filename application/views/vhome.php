<?php include('header.php');?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.5">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <META HTTP-EQUIV="refresh" CONTENT="300">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title>Document</title>
    <script type="application/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

</head>
<style type="text/css">
@-webkit-keyframes blinker {  
  from { opacity: 1.0; }
  to { opacity: 0.0; }
}

.blink {
    -webkit-animation-name: blinker;  
    -webkit-animation-iteration-count: infinite;  
    -webkit-animation-timing-function: cubic-bezier(1.0,0,0,1.0);
    -webkit-animation-duration: 1s; 
    background-color:red;
  color:white;
  }
  </style>
<body style="font-family:'Roboto',sans-serif;overflow:hidden;"scroll="no">
 
        <div>
            <div style="overflow:hidden;" class="container">
        <table style="height:100%;width:10%; position: absolute; top: 0; bottom: 0; left: 0;" border="0">
     
        <tr class="table-primary"style="font-size:15px;" cellpadding="0">
            
        <th  scope="col" rowspan="2" ><br><br><br><br>Interval</th>
            <th cellpadding="0"scope="col" colspan="5" >Hedcor</th>
            <th scope="col" colspan="8" >APRI</th>
            <th scope="col" colspan="3">TLI</th>
            <th scope="col"  >TMO</th>
            <th scope="col" >CPPC</th>
            <th scope="col" >EAUC</th>
           
        </tr>
      
  
 
        <tr class="table-primary">
             
            <th scope="col"  >SAL</th>
            <th scope="col"  >IR1</th>
            <th scope="col"  >IR3</th>
            <th scope="col"  >SAB</th>
            <th scope="col"  >BAK</th>
            <th scope="col" colspan="6" >Makban</th>
            <th scope="col" colspan="2" >Tiwi</th>  
            <th scope="col" >G01</th>
            <th scope="col" >G02</th> 
            <th scope="col" >G03</th>
            <th scope="col" >PB</th>
            <th scope="col" >G01</th>
            <th scope="col" >G01</th> 

        </tr>
        <tr class="table table-info"> 
        <th ><strong> RTD</strong></th>
           <th><div id="hedcor_0"></div></th>
           <th><div id="hedcor2_0"></div></th>
           <th><div id="hedcor3_0"></div></th>
           <th><div id="hedcor4_0"></div></th>
           <th><div id="hedcor4_0"></div></th>
           <th><div id="mkbna_0"></div></th>
           <th><div id="mkbnb_0"></div></th>
           <th><div id="mkbnc_0"></div></th>
           <th><div id="mkbnd_0"></div></th>
           <th><div id="mkbne_0"></div></th>
           <th><div id="mkbno_0"></div></th>
           <th><div id="tiwia_0"></div></th>
           <th><div id="tiwic_0"></div></th>
           <th><div id="tlig01_0"></div></th>
           <th><div id="tlig02_0"></div></th>
           <th><div id="tlig03_0"></div></th> 
           <th><div id="tmopb_0"></div></th>
           <th><div id="cppcg01_0"></div></th>
           <th><div id="eaucg01_0"></div></th> 
        </tr>
 
        <tr class="table-info" >
            <th>DAP</th> 
            <th id="hedcor_time"colspan="5"></th>
            <th id="apri_time" colspan="8" ></th>
            <th id="tli_time" colspan="3"></th>
            <th id="tmo_time"   ></th>
            <th id="cppc_time" ></th>
            <th id="eauc_time" ></th>
        </tr>
   
       
       
           

        <tr class="table-active">

            <td><strong>1</strong></td>
            <td><div id="hedcor_1"></div></td>
            <td><div id="hedcor2_1"></div></td>
            <td><div id="hedcor3_1"></div></td>
            <td><div id="hedcor4_1"></div></td>
            <td><div id="hedcor5_1"></div></td>
            <td><div id="mkbna_1"></div></td>
            <td><div id="mkbnb_1"></div></td>
            <td><div id="mkbnc_1"></div></td>
            <td><div id="mkbnd_1"></div></td>
            <td><div id="mkbne_1"></div></td>
            <td><div id="mkbno_1"></div></td>
            <td><div id="tiwia_1"></div></td>
            <td><div id="tiwic_1"></div></td>
            <td><div id="tlig01_1"></div></td>
            <td><div id="tlig02_1"></div></td>
            <td><div id="tlig03_1"></div></td>
            <td><div id="tmopb_1"></div></td>
            <td><div id="cppcg01_1"></div></td>
            <td><div id="eaucg01_1"></div></td>
            
           
           
        
        </tr>
                <tr class="table-secondary">

            <td><strong>2</strong></td>
            <td><div id="hedcor_2"></div></td>
            <td><div id="hedcor2_2"></div></td>
            <td><div id="hedcor3_2"></div></td>
            <td><div id="hedcor4_2"></div></td>
            <td><div id="hedcor5_2"></div></td>
            <td><div id="mkbna_2"></div></td>
            <td><div id="mkbnb_2"></div></td>
            <td><div id="mkbnc_2"></div></td>
            <td><div id="mkbnd_2"></div></td>
            <td><div id="mkbne_2"></div></td>
            <td><div id="mkbno_2"></div></td>
            <td><div id="tiwia_2"></div></td>
            <td><div id="tiwic_2"></div></td>
            <td><div id="tlig01_2"></div></td>
            <td><div id="tlig02_2"></div></td>
            <td><div id="tlig03_2"></div></td> 
            <td><div id="tmopb_2"></div></td>
            <td><div id="cppcg01_2"></div></td>
            <td><div id="eaucg01_2"></div></td>
           
           
           
        </tr>
                <tr class="table-active">

            <td><strong>3</strong></td>
            <td><div id="hedcor_3"></div></td>
            <td><div id="hedcor2_3"></div></td>
            <td><div id="hedcor3_3"></div></td>
            <td><div id="hedcor4_3"></div></td>
            <td><div id="hedcor5_3"></div></td>
            <td><div id="mkbna_3"></div></td>
            <td><div id="mkbnb_3"></div></td>
            <td><div id="mkbnc_3"></div></td>
            <td><div id="mkbnd_3"></div></td>
            <td><div id="mkbne_3"></div></td>
            <td><div id="mkbno_3"></div></td>
            <td><div id="tiwia_3"></div></td>
            <td><div id="tiwic_3"></div></td>
            <td><div id="tlig01_3"></div></td>
            <td><div id="tlig02_3"></div></td>
            <td><div id="tlig03_3"></div></td> 
            <td><div id="tmopb_3"></div></td>
            <td><div id="cppcg01_3"></div></td>
            <td><div id="eaucg01_3"></div></td>
           
            
        </tr>
                <tr class="table-secondary">

           
           <td><strong>4</strong></td>
            <td><div id="hedcor_4"></div></td>
            <td><div id="hedcor2_4"></div></td>
            <td><div id="hedcor3_4"></div></td>
            <td><div id="hedcor4_4"></div></td>
            <td><div id="hedcor5_4"></div></td>
            <td><div id="mkbna_4"></div></td>
            <td><div id="mkbnb_4"></div></td>
            <td><div id="mkbnc_4"></div></td>
            <td><div id="mkbnd_4"></div></td>
            <td><div id="mkbne_4"></div></td>
            <td><div id="mkbno_4"></div></td>
            <td><div id="tiwia_4"></div></td>
            <td><div id="tiwic_4"></div></td>
            <td><div id="tlig01_4"></div></td>
            <td><div id="tlig02_4"></div></td>
            <td><div id="tlig03_4"></div></td> 
            <td><div id="tmopb_4"></div></td>
            <td><div id="cppcg01_4"></div></td>
            <td><div id="eaucg01_4"></div></td>
        </tr>
                <tr class="table-active">

            <td><strong>5</strong></td>
            <td><div id="hedcor_5"></div></td>
            <td><div id="hedcor2_5"></div></td>
            <td><div id="hedcor3_5"></div></td>
            <td><div id="hedcor4_5"></div></td>
            <td><div id="hedcor5_5"></div></td>
            <td><div id="mkbna_5"></div></td>
            <td><div id="mkbnb_5"></div></td>
            <td><div id="mkbnc_5"></div></td>
            <td><div id="mkbnd_5"></div></td>
            <td><div id="mkbne_5"></div></td>
            <td><div id="mkbno_5"></div></td>
            <td><div id="tiwia_5"></div></td>
            <td><div id="tiwic_5"></div></td>
            <td><div id="tlig01_5"></div></td>
            <td><div id="tlig02_5"></div></td>
            <td><div id="tlig03_5"></div></td> 
            <td><div id="tmopb_5"></div></td>
            <td><div id="cppcg01_5"></div></td>
            <td><div id="eaucg01_5"></div></td>
        </tr>
                <tr class="table-secondary">

           <td><strong>6</strong></td>
            <td><div id="hedcor_6"></div></td>
            <td><div id="hedcor2_6"></div></td>
            <td><div id="hedcor3_6"></div></td>
            <td><div id="hedcor4_6"></div></td>
            <td><div id="hedcor5_6"></div></td>
            <td><div id="mkbna_6"></div></td>
            <td><div id="mkbnb_6"></div></td>
            <td><div id="mkbnc_6"></div></td>
            <td><div id="mkbnd_6"></div></td>
            <td><div id="mkbne_6"></div></td>
            <td><div id="mkbno_6"></div></td>
            <td><div id="tiwia_6"></div></td>
            <td><div id="tiwic_6"></div></td>
            <td><div id="tlig01_6"></div></td>
            <td><div id="tlig02_6"></div></td>
            <td><div id="tlig03_6"></div></td> 
            <td><div id="tmopb_6"></div></td>
            <td><div id="cppcg01_6"></div></td>
            <td><div id="eaucg01_6"></div></td>
        </tr>
                <tr class="table-active">

            <td><strong>7</strong></td>
            <td><div id="hedcor_7"></div></td>
            <td><div id="hedcor2_7"></div></td>
            <td><div id="hedcor3_7"></div></td>
            <td><div id="hedcor4_7"></div></td>
            <td><div id="hedcor5_7"></div></td>
            <td><div id="mkbna_7"></div></td>
            <td><div id="mkbnb_7"></div></td>
            <td><div id="mkbnc_7"></div></td>
            <td><div id="mkbnd_7"></div></td>
            <td><div id="mkbne_7"></div></td>
            <td><div id="mkbno_7"></div></td>
            <td><div id="tiwia_7"></div></td>
            <td><div id="tiwic_7"></div></td>
            <td><div id="tlig01_7"></div></td>
            <td><div id="tlig02_7"></div></td>
            <td><div id="tlig03_7"></div></td> 
            <td><div id="tmopb_7"></div></td>
            <td><div id="cppcg01_7"></div></td>
            <td><div id="eaucg01_7"></div></td>
        </tr>
                <tr class="table-secondary">

            <td><strong>8</strong></td>
            <td><div id="hedcor_8"></div></td>
            <td><div id="hedcor2_8"></div></td>
            <td><div id="hedcor3_8"></div></td>
            <td><div id="hedcor4_8"></div></td>
            <td><div id="hedcor5_8"></div></td>
            <td><div id="mkbna_8"></div></td>
            <td><div id="mkbnb_8"></div></td>
            <td><div id="mkbnc_8"></div></td>
            <td><div id="mkbnd_8"></div></td>
            <td><div id="mkbne_8"></div></td>
            <td><div id="mkbno_8"></div></td>
            <td><div id="tiwia_8"></div></td>
            <td><div id="tiwic_8"></div></td>
            <td><div id="tlig01_8"></div></td>
            <td><div id="tlig02_8"></div></td>
            <td><div id="tlig03_8"></div></td> 
            <td><div id="tmopb_8"></div></td>
            <td><div id="cppcg01_8"></div></td>
            <td><div id="eaucg01_8"></div></td>
        </tr>
                <tr class="table-active">

            <td><strong>9</strong></td>
            <td><div id="hedcor_9"></div></td>
            <td><div id="hedcor2_9"></div></td>
            <td><div id="hedcor3_9"></div></td>
            <td><div id="hedcor4_9"></div></td>
            <td><div id="hedcor5_9"></div></td>
            <td><div id="mkbna_9"></div></td>
            <td><div id="mkbnb_9"></div></td>
            <td><div id="mkbnc_9"></div></td>
            <td><div id="mkbnd_9"></div></td>
            <td><div id="mkbne_9"></div></td>
            <td><div id="mkbno_9"></div></td>
            <td><div id="tiwia_9"></div></td>
            <td><div id="tiwic_9"></div></td>
            <td><div id="tlig01_9"></div></td>
            <td><div id="tlig02_9"></div></td>
            <td><div id="tlig03_9"></div></td> 
            <td><div id="tmopb_9"></div></td>
            <td><div id="cppcg01_9"></div></td>
            <td><div id="eaucg01_9"></div></td>
        </tr>
                <tr class="table-secondary">

            <td><strong>10</strong></td>
            <td><div id="hedcor_10"></div></td>
            <td><div id="hedcor2_10"></div></td>
            <td><div id="hedcor3_10"></div></td>
            <td><div id="hedcor4_10"></div></td>
            <td><div id="hedcor5_10"></div></td>
            <td><div id="mkbna_10"></div></td>
            <td><div id="mkbnb_10"></div></td>
            <td><div id="mkbnc_10"></div></td>
            <td><div id="mkbnd_10"></div></td>
            <td><div id="mkbne_10"></div></td>
            <td><div id="mkbno_10"></div></td>
            <td><div id="tiwia_10"></div></td>
            <td><div id="tiwic_10"></div></td>
            <td><div id="tlig01_10"></div></td>
            <td><div id="tlig02_10"></div></td>
            <td><div id="tlig03_10"></div></td> 
            <td><div id="tmopb_10"></div></td>
            <td><div id="cppcg01_10"></div></td>
            <td><div id="eaucg01_10"></div></td>
        </tr>
                <tr class="table-active">

            <td><strong>11</strong></td>
            <td><div id="hedcor_11"></div></td>
            <td><div id="hedcor2_11"></div></td>
            <td><div id="hedcor3_11"></div></td>
            <td><div id="hedcor4_11"></div></td>
            <td><div id="hedcor5_11"></div></td>
            <td><div id="mkbna_11"></div></td>
            <td><div id="mkbnb_11"></div></td>
            <td><div id="mkbnc_11"></div></td>
            <td><div id="mkbnd_11"></div></td>
            <td><div id="mkbne_11"></div></td>
            <td><div id="mkbno_11"></div></td>
            <td><div id="tiwia_11"></div></td>
            <td><div id="tiwic_11"></div></td>
            <td><div id="tlig01_11"></div></td>
            <td><div id="tlig02_11"></div></td>
            <td><div id="tlig03_11"></div></td> 
            <td><div id="tmopb_11"></div></td>
            <td><div id="cppcg01_11"></div></td>
            <td><div id="eaucg01_11"></div></td>
        </tr>
                <tr class="table-secondary">

           <td><strong>12</strong></td>
            <td><div id="hedcor_12"></div></td>
            <td><div id="hedcor2_12"></div></td>
            <td><div id="hedcor3_12"></div></td>
            <td><div id="hedcor4_12"></div></td>
            <td><div id="hedcor5_12"></div></td>
            <td><div id="mkbna_12"></div></td>
            <td><div id="mkbnb_12"></div></td>
            <td><div id="mkbnc_12"></div></td>
            <td><div id="mkbnd_12"></div></td>
            <td><div id="mkbne_12"></div></td>
            <td><div id="mkbno_12"></div></td>
            <td><div id="tiwia_12"></div></td>
            <td><div id="tiwic_12"></div></td>
            <td><div id="tlig01_12"></div></td>
            <td><div id="tlig02_12"></div></td>
            <td><div id="tlig03_12"></div></td> 
            <td><div id="tmopb_12"></div></td>
            <td><div id="cppcg01_12"></div></td>
            <td><div id="eaucg01_12"></div></td>
        </tr>
                <tr class="table-active">

           <td><strong>13</strong></td>
            <td><div id="hedcor_13"></div></td>
            <td><div id="hedcor2_13"></div></td>
            <td><div id="hedcor3_13"></div></td>
            <td><div id="hedcor4_13"></div></td>
            <td><div id="hedcor5_13"></div></td>
            <td><div id="mkbna_13"></div></td>
            <td><div id="mkbnb_13"></div></td>
            <td><div id="mkbnc_13"></div></td>
            <td><div id="mkbnd_13"></div></td>
            <td><div id="mkbne_13"></div></td>
            <td><div id="mkbno_13"></div></td>
            <td><div id="tiwia_13"></div></td>
            <td><div id="tiwic_13"></div></td>
            <td><div id="tlig01_13"></div></td>
            <td><div id="tlig02_13"></div></td>
            <td><div id="tlig03_13"></div></td> 
            <td><div id="tmopb_13"></div></td>
            <td><div id="cppcg01_13"></div></td>
            <td><div id="eaucg01_13"></div></td>
        </tr>
                <tr class="table-secondary">

            <td><strong>14</strong></td>
            <td><div id="hedcor_14"></div></td>
            <td><div id="hedcor2_14"></div></td>
            <td><div id="hedcor3_14"></div></td>
            <td><div id="hedcor4_14"></div></td>
            <td><div id="hedcor5_14"></div></td>
            <td><div id="mkbna_14"></div></td>
            <td><div id="mkbnb_14"></div></td>
            <td><div id="mkbnc_14"></div></td>
            <td><div id="mkbnd_14"></div></td>
            <td><div id="mkbne_14"></div></td>
            <td><div id="mkbno_14"></div></td>
            <td><div id="tiwia_14"></div></td>
            <td><div id="tiwic_14"></div></td>
            <td><div id="tlig01_14"></div></td>
            <td><div id="tlig02_14"></div></td>
            <td><div id="tlig03_14"></div></td> 
            <td><div id="tmopb_14"></div></td>
            <td><div id="cppcg01_14"></div></td>
            <td><div id="eaucg01_14"></div></td>
        </tr>        <tr class="table-active">

            <td><strong>15</strong></td>
            <td><div id="hedcor_15"></div></td>
            <td><div id="hedcor2_15"></div></td>
            <td><div id="hedcor3_15"></div></td>
            <td><div id="hedcor4_15"></div></td>
            <td><div id="hedcor5_15"></div></td>
            <td><div id="mkbna_15"></div></td>
            <td><div id="mkbnb_15"></div></td>
            <td><div id="mkbnc_15"></div></td>
            <td><div id="mkbnd_15"></div></td>
            <td><div id="mkbne_15"></div></td>
            <td><div id="mkbno_15"></div></td>
            <td><div id="tiwia_15"></div></td>
            <td><div id="tiwic_15"></div></td>
            <td><div id="tlig01_15"></div></td>
            <td><div id="tlig02_15"></div></td>
            <td><div id="tlig03_15"></div></td> 
            <td><div id="tmopb_15"></div></td>
            <td><div id="cppcg01_15"></div></td>
            <td><div id="eaucg01_15"></div></td>
        </tr>
                <tr class="table-secondary">

         <td><strong>16</strong></td>
            <td><div id="hedcor_16"></div></td>
            <td><div id="hedcor2_16"></div></td>
            <td><div id="hedcor3_16"></div></td>
            <td><div id="hedcor4_16"></div></td>
            <td><div id="hedcor5_16"></div></td>
            <td><div id="mkbna_16"></div></td>
            <td><div id="mkbnb_16"></div></td>
            <td><div id="mkbnc_16"></div></td>
            <td><div id="mkbnd_16"></div></td>
            <td><div id="mkbne_16"></div></td>
            <td><div id="mkbno_16"></div></td>
            <td><div id="tiwia_16"></div></td>
            <td><div id="tiwic_16"></div></td>
            <td><div id="tlig01_16"></div></td>
            <td><div id="tlig02_16"></div></td>
            <td><div id="tlig03_16"></div></td> 
            <td><div id="tmopb_16"></div></td>
            <td><div id="cppcg01_16"></div></td>
            <td><div id="eaucg01_16"></div></td>
        </tr>
               
                <tr class="table-active">

           <td><strong>17</strong></td>
            <td><div id="hedcor_17"></div></td>
            <td><div id="hedcor2_17"></div></td>
            <td><div id="hedcor3_17"></div></td>
            <td><div id="hedcor4_17"></div></td>
            <td><div id="hedcor5_17"></div></td>
            <td><div id="mkbna_17"></div></td>
            <td><div id="mkbnb_17"></div></td>
            <td><div id="mkbnc_17"></div></td>
            <td><div id="mkbnd_17"></div></td>
            <td><div id="mkbne_17"></div></td>
            <td><div id="mkbno_17"></div></td>
            <td><div id="tiwia_17"></div></td>
            <td><div id="tiwic_17"></div></td>
            <td><div id="tlig01_17"></div></td>
            <td><div id="tlig02_17"></div></td>
            <td><div id="tlig03_17"></div></td> 
            <td><div id="tmopb_17"></div></td>
            <td><div id="cppcg01_17"></div></td>
            <td><div id="eaucg01_17"></div></td>
        </tr>
                <tr class="table-secondary">

            <td><strong>18</strong></td>
            <td><div id="hedcor_18"></div></td>
            <td><div id="hedcor2_18"></div></td>
            <td><div id="hedcor3_18"></div></td>
            <td><div id="hedcor4_18"></div></td>
            <td><div id="hedcor5_18"></div></td>
            <td><div id="mkbna_18"></div></td>
            <td><div id="mkbnb_18"></div></td>
            <td><div id="mkbnc_18"></div></td>
            <td><div id="mkbnd_18"></div></td>
            <td><div id="mkbne_18"></div></td>
            <td><div id="mkbno_18"></div></td>
            <td><div id="tiwia_18"></div></td>
            <td><div id="tiwic_18"></div></td>
            <td><div id="tlig01_18"></div></td>
            <td><div id="tlig02_18"></div></td>
            <td><div id="tlig03_18"></div></td> 
            <td><div id="tmopb_18"></div></td>
            <td><div id="cppcg01_18"></div></td>
            <td><div id="eaucg01_18"></div></td>
        </tr>
                <tr class="table-active">

           <td><strong>19</strong></td>
            <td><div id="hedcor_19"></div></td>
            <td><div id="hedcor2_19"></div></td>
            <td><div id="hedcor3_19"></div></td>
            <td><div id="hedcor4_19"></div></td>
            <td><div id="hedcor5_19"></div></td>
            <td><div id="mkbna_19"></div></td>
            <td><div id="mkbnb_19"></div></td>
            <td><div id="mkbnc_19"></div></td>
            <td><div id="mkbnd_19"></div></td>
            <td><div id="mkbne_19"></div></td>
            <td><div id="mkbno_19"></div></td>
            <td><div id="tiwia_19"></div></td>
            <td><div id="tiwic_19"></div></td>
            <td><div id="tlig01_19"></div></td>
            <td><div id="tlig02_19"></div></td>
            <td><div id="tlig03_19"></div></td> 
            <td><div id="tmopb_19"></div></td>
            <td><div id="cppcg01_19"></div></td>
            <td><div id="eaucg01_19"></div></td>
        </tr>
                <tr class="table-secondary">

           <td><strong>20</strong></td>
            <td><div id="hedcor_20"></div></td>
            <td><div id="hedcor2_20"></div></td>
            <td><div id="hedcor3_20"></div></td>
            <td><div id="hedcor4_20"></div></td>
            <td><div id="hedcor5_20"></div></td>
            <td><div id="mkbna_20"></div></td>
            <td><div id="mkbnb_20"></div></td>
            <td><div id="mkbnc_20"></div></td>
            <td><div id="mkbnd_20"></div></td>
            <td><div id="mkbne_20"></div></td>
            <td><div id="mkbno_20"></div></td>
            <td><div id="tiwia_20"></div></td>
            <td><div id="tiwic_20"></div></td>
            <td><div id="tlig01_20"></div></td>
            <td><div id="tlig02_20"></div></td>
            <td><div id="tlig03_20"></div></td> 
            <td><div id="tmopb_20"></div></td>
            <td><div id="cppcg01_20"></div></td>
            <td><div id="eaucg01_20"></div></td>
        </tr>        <tr class="table-active">

            <td><strong>21</strong></td>
            <td><div id="hedcor_21"></div></td>
            <td><div id="hedcor2_21"></div></td>
            <td><div id="hedcor3_21"></div></td>
            <td><div id="hedcor4_21"></div></td>
            <td><div id="hedcor5_21"></div></td>
            <td><div id="mkbna_21"></div></td>
            <td><div id="mkbnb_21"></div></td>
            <td><div id="mkbnc_21"></div></td>
            <td><div id="mkbnd_21"></div></td>
            <td><div id="mkbne_21"></div></td>
            <td><div id="mkbno_21"></div></td>
            <td><div id="tiwia_21"></div></td>
            <td><div id="tiwic_21"></div></td>
            <td><div id="tlig01_21"></div></td>
            <td><div id="tlig02_21"></div></td>
            <td><div id="tlig03_21"></div></td>
            <td><div id="tmopb_21"></div></td>
            <td><div id="cppcg01_21"></div></td>
            <td><div id="eaucg01_21"></div></td>
        </tr>
                <tr class="table-secondary">

            <td><strong>22</strong></td>
            <td><div id="hedcor_22"></div></td>
            <td><div id="hedcor2_22"></div></td>
            <td><div id="hedcor3_22"></div></td>
            <td><div id="hedcor4_22"></div></td>
            <td><div id="hedcor5_22"></div></td>
            <td><div id="mkbna_22"></div></td>
            <td><div id="mkbnb_22"></div></td>
            <td><div id="mkbnc_22"></div></td>
            <td><div id="mkbnd_22"></div></td>
            <td><div id="mkbne_22"></div></td>
            <td><div id="mkbno_22"></div></td>
            <td><div id="tiwia_22"></div></td>
            <td><div id="tiwic_22"></div></td>
            <td><div id="tlig01_22"></div></td>
            <td><div id="tlig02_22"></div></td>
            <td><div id="tlig03_22"></div></td> 
            <td><div id="tmopb_22"></div></td>
            <td><div id="cppcg01_22"></div></td>
            <td><div id="eaucg01_22"></div></td>
        </tr>
                <tr class="table-active">

           <td><strong>23</strong></td>
            <td><div id="hedcor_23"></div></td>
            <td><div id="hedcor2_23"></div></td>
            <td><div id="hedcor3_23"></div></td>
            <td><div id="hedcor4_23"></div></td>
            <td><div id="hedcor5_23"></div></td>
            <td><div id="mkbna_23"></div></td>
            <td><div id="mkbnb_23"></div></td>
            <td><div id="mkbnc_23"></div></td>
            <td><div id="mkbnd_23"></div></td>
            <td><div id="mkbne_23"></div></td>
            <td><div id="mkbno_23"></div></td>
            <td><div id="tiwia_23"></div></td>
            <td><div id="tiwic_23"></div></td>
            <td><div id="tlig01_23"></div></td>
            <td><div id="tlig02_23"></div></td>
            <td><div id="tlig03_23"></div></td> 
            <td><div id="tmopb_23"></div></td>
            <td><div id="cppcg01_23"></div></td>
            <td><div id="eaucg01_23"></div></td>
        </tr>
                <tr class="table-secondary">

            <td><strong>24</strong></td>
            <td><div id="hedcor_24"></div></td>
            <td><div id="hedcor2_24"></div></td>
            <td><div id="hedcor3_24"></div></td>
            <td><div id="hedcor4_24"></div></td>
            <td><div id="hedcor5_24"></div></td>
            <td><div id="mkbna_24"></div></td>
            <td><div id="mkbnb_24"></div></td>
            <td><div id="mkbnc_24"></div></td>
            <td><div id="mkbnd_24"></div></td>
            <td><div id="mkbne_24"></div></td>
            <td><div id="mkbno_24"></div></td>
            <td><div id="tiwia_24"></div></td>
            <td><div id="tiwic_24"></div></td>
            <td><div id="tlig01_24"></div></td>
            <td><div id="tlig02_24"></div></td>
            <td><div id="tlig03_24"></div></td>
            <td><div id="tmopb_24"></div></td>
            <td><div id="cppcg01_24"></div></td>
            <td><div id="eaucg01_24"></div></td>
        </tr>
       
</div>
 
</table>
<table  cellpadding="10" style="height:90%;width:32%; position: absolute; top:0; bottom: 0; left: 900;border:1px solid;overflow:hidden; vertical-align:inherit;  "align="left">
     <tr>
        <th scope="col" colspan="10"><div style='font-size:20px;'>System Messages </div>  </th>
     </tr>     
  
     <tr>
     <td  colspan="10" ><div id="table_body" style="text-align:justify"></div> </td>  
     </tr>
 
</table>
</div>
<div class="content">
<script type="text/javascript" >

var downloading = 0;  
function pad(number, length) {
   
   var str = '' + number;
   while (str.length < length) {
       str = '0' + str;
   }
  
   return str;
  
}
$(document).ready(function() {
            get_data(); 
            get_msg();
            setInterval('get_data();',28000);
            setInterval('get_msg();',350000);
	    }
);
 
function get_msg(){
    $("#table_body").html("Retrieving messages..");
	 $.ajax({
      url: "http://139.162.47.11/mrms/index.php/DAP/get_SYSMSGS_data",
      type: "post",
	  dataType: "json",
      data: {},
      success: function(d){
			
		 
			var msgs = "";
			if(d == null)
			{
				return;
			}
			for(key in d['msgs'])
			{
				msgs = msgs + d['msgs'][key]['msg_datetime'] + ": " + d['msgs'][key]['msg_details'] + "<BR /><BR />";
			} 
            $("#table_body").html(msgs); 
      },
      error:function(){ 
          get_msg();
      }   
    }); 


}
          
           
        //       //tmo
        //       jQuery.getJSON('http://139.162.47.11/mrms/index.php/DAP/get_data_tmo', function(tdata) {
               
        //        var ctr=0;
        //        $.each(tdata['dap_data'], function(key, value) {
        //            console.log(jQuery.isPlainObject(value));
                  
        //          //dap tmo     
        //                for(ctr = 1;ctr <= 24; ctr++){
        //        if( tdata['dap_data']['2TMO_G01']['h'+ctr]>=0){
        //            $("#tmom3_"+ctr).html(trueRound(tdata['dap_data']['2TMO_G01']['h'+ctr],2));
        //        }
        //        if( tdata['dap_data']['2TMO_G02']['h'+ctr]>=0){
        //            $("#tmom4_"+ctr).html(trueRound(tdata['dap_data']['2TMO_G02']['h'+ctr],2));
        //        }
        //        if( tdata['dap_data' ]['2TMO_G03']['h'+ctr]>=0){
        //            $("#tmom5_"+ctr).html(trueRound(tdata['dap_data']['2TMO_G03']['h'+ctr],2));
        //        }
        //        if( tdata['dap_data']['2TMO_G04']['h'+ctr]>=0){
        //            $("#tmom6_"+ctr).html(trueRound(tdata['dap_data']['2TMO_G04']['h'+ctr],2));
        //        }
        //        if( tdata['dap_data']['2TMO_PB']['h'+ctr]>=0){
        //            $("#tmopb_"+ctr).html(trueRound(tdata['dap_data']['2TMO_PB']['h'+ctr],2));
        //        }
                
              
        //                 }
        //        });
              
        //    });
     

                 function trueRound(value, digits){
                        var x = (Math.round((value*Math.pow(10,digits)).toFixed(digits-1))/Math.pow(10,digits)).toFixed(digits);
                        return x.replace(/(\.[0-9]*?)0+$/, "$1").replace(/\.$/, "");        
                 }
                  
         //get dap,amp data
                 function get_data(){
                    if(downloading == 1){
                            return;
                        }
                        
                        downloading = 1;
                        var dnow = new Date();
                        var curr_rtd_hr = dnow.getHours()+1;
                        console.log(curr_rtd_hr);
                         
                    $.ajax({
                    url: "http://127.0.0.1/web/index.php/controller/get_all_data",
                    type: "post",
                    dataType: "json",
                    data: {},
                    success: function(data){
                            if(data == null)
                            {
                                get_data();
                                return;
                            }
                            console.log(data);
                           
                            //var dapraw_json =data;
                        // var arr = JSON.parse(dapraw_json);
                        var sr="";
                            function pad(n, width, z) {
                                z = z || '0';
                                n = n + '';
                                return n.length >= width ? n : new Array(width - n.length + 1).join(z) + n;
                            }

                            data.forEach(function(arr) {
                          //dap
                                if(arr['dap_partid'] == "HEDCOR" && arr['dap_resoid']=="1SLANGN_G01" ) {
                                $("#hedcor_time").html(arr['dap_sr_ddown'].substr(-9));
                                for(var i = 1; i <= 24; ++i) {      
                                sr= arr['dap_sr_' + pad(i, 2)];      
                                    if(sr>=0&&sr!=null){
                                $("#hedcor_"+i).html(trueRound(sr,2));
                            }
                                
                                }
                                }
                                if(arr['dap_partid'] == "HEDCORHE" && arr['dap_resoid']=="1NMHC_G01" ) { 
                                for(var i = 1; i <= 24; ++i) {      
                                sr= arr['dap_sr_' + pad(i, 2)];      
                                    if(sr>=0&&sr!=null && sr!=null){
                                $("#hedcor2_"+i).html(trueRound(sr,2));
                            }
                                
                                }
                                }
                                if(arr['dap_partid'] == "HEDCOR" && arr['dap_resoid']=="1NMHC_G03" ) {
                                for(var i = 1; i <= 24; ++i) {      
                                sr= arr['dap_sr_' + pad(i, 2)];      
                                    if(sr>=0&&sr!=null){
                                $("#hedcor3_"+i).html(trueRound(sr,2));
                            }
                                
                                }
                                }
                                if(arr['dap_partid'] == "HSABI" && arr['dap_resoid']=="1SABANG_G01" ) {
                                for(var i = 1; i <= 24; ++i) {      
                                sr= arr['dap_sr_' + pad(i, 2)];      
                                    if(sr>=0&&sr!=null){
                                $("#hedcor4_"+i).html(trueRound(sr,2));
                            }
                                
                                }
                                }
                                if(arr['dap_partid'] == "HEDCORBA" && arr['dap_resoid']=="1HEDCOR_G01" ) {
                                for(var i = 1; i <= 24; ++i) {      
                                sr= arr['dap_sr_' + pad(i, 2)];      
                                    if(sr>=0&&sr!=null){
                                $("#hedcor5_"+i).html(trueRound(sr,2));
                            }
                                
                                }
                                }
                                 
                                

                                if(arr['dap_partid'] == "APRI" && arr['dap_resoid']=="3MKBN_A" ) {
                                $("#apri_time").html(arr['dap_sr_ddown'].substr(-9));
                                for(var i = 1; i <= 24; ++i) {      
                                sr= arr['dap_sr_' + pad(i, 2)];      
                                    if(sr>=0&&sr!=null){
                                $("#mkbna_"+i).html(trueRound(sr,2));
                            }
                                
                                }
                               
                                }
                                if(arr['dap_partid'] == "APRI" && arr['dap_resoid']=="3MKBN_B" ) {
                                for(var i = 1; i <= 24; ++i) {      
                                sr= arr['dap_sr_' + pad(i, 2)];      
                                    if(sr>=0&&sr!=null){
                                $("#mkbnb_"+i).html(trueRound(sr,2));
                            }
                                
                                }
                                }
                                if(arr['dap_partid'] == "APRI" && arr['dap_resoid']=="3MKBN_C" ) {
                                for(var i = 1; i <= 24; ++i) {      
                                sr= arr['dap_sr_' + pad(i, 2)];      
                                    if(sr>=0&&sr!=null){
                                $("#mkbnc_"+i).html(trueRound(sr,2));
                            }
                                
                                }
                                }
                                if(arr['dap_partid'] == "APRI" && arr['dap_resoid']=="3MKBN_D" ) {
                                for(var i = 1; i <= 24; ++i) {      
                                sr= arr['dap_sr_' + pad(i, 2)];      
                                    if(sr>=0&&sr!=null){
                                $("#mkbnd_"+i).html(trueRound(sr,2));
                            }
                                
                                }
                                }
                                if(arr['dap_partid'] == "APRI" && arr['dap_resoid']=="3MKBN_E" ) {
                                for(var i = 1; i <= 24; ++i) {      
                                sr= arr['dap_sr_' + pad(i, 2)];      
                                    if(sr>=0&&sr!=null){
                                $("#mkbne_"+i).html(trueRound(sr,2));
                            }
                                
                                }
                                }
                                if(arr['dap_partid'] == "APRI" && arr['dap_resoid']=="3ORMAT_G01" ) {
                                for(var i = 1; i <= 24; ++i) {      
                                sr= arr['dap_sr_' + pad(i, 2)];      
                                    if(sr>=0&&sr!=null){
                                $("#mkbno_"+i).html(trueRound(sr,2));
                            }
                                
                                }
                                }
                                if(arr['dap_partid'] == "APRI" && arr['dap_resoid']=="3TIWI_A" ) {
                                for(var i = 1; i <= 24; ++i) {      
                                sr= arr['dap_sr_' + pad(i, 2)];      
                                    if(sr>=0&&sr!=null){
                                $("#tiwia_"+i).html(trueRound(sr,2));
                            }
                                
                                }
                                }
                                if(arr['dap_partid'] == "APRI" && arr['dap_resoid']=="3TIWI_C" ) {
                                for(var i = 1; i <= 24; ++i) {      
                                sr= arr['dap_sr_' + pad(i, 2)];      
                                    if(sr>=0&&sr!=null){
                                $("#tiwic_"+i).html(trueRound(sr,2));
                            }
                                
                                }
                                }
                                if(arr['dap_partid'] == "TLI" && arr['dap_resoid']=="3PAGBIL_G01" ) {
                                $("#tli_time").html(arr['dap_sr_ddown'].substr(-9));
                                for(var i = 1; i <= 24; ++i) {      
                                sr= arr['dap_sr_' + pad(i, 2)];      
                                    if(sr>=0&&sr!=null){
                                $("#tlig01_"+i).html(trueRound(sr,2));
                            }
                                
                                }
                                }
                                if(arr['dap_partid'] == "TLI" && arr['dap_resoid']=="3PAGBIL_G02" ) {
                                for(var i = 1; i <= 24; ++i) {      
                                sr= arr['dap_sr_' + pad(i, 2)];      
                                    if(sr>=0&&sr!=null){
                                $("#tlig02_"+i).html(trueRound(sr,2));
                            }
                                
                                }
                                }
                                if(arr['dap_partid'] == "PEC" && arr['dap_resoid']=="3PAGBIL_G03" ) {
                                for(var i = 1; i <= 24; ++i) {      
                                sr= arr['dap_sr_' + pad(i, 2)];      
                                    if(sr>=0&&sr!=null){
                                $("#tlig03_"+i).html(trueRound(sr,2));
                            }
                                
                                }
                                }
                            //     if(arr['dap_partid'] == "TMO" && arr['dap_resoid']=="2TMO_G01" ) {
                            //     for(var i = 1; i <= 24; ++i) {      
                            //     sr= arr['dap_sr_' + pad(i, 2)];      
                            //         if(sr>=0&&sr!=null){
                            //     $("#tmom3_"+i).html(trueRound(sr,2));
                            // }
                                
                            //     }
                            //     }
                            //     if(arr['dap_partid'] == "TMO" && arr['dap_resoid']=="2TMO_G02" ) {
                            //     for(var i = 1; i <= 24; ++i) {      
                            //     sr= arr['dap_sr_' + pad(i, 2)];      
                            //         if(sr>=0&&sr!=null){
                            //     $("#tmom4_"+i).html(trueRound(sr,2));
                            // }
                                
                            //     }
                            //     }
                                if(arr['dap_partid'] == "TMO" && arr['dap_resoid']=="2TMO_PB" ) {
                                $("#tmo_time").html(arr['dap_sr_ddown'].substr(-9));
                                for(var i = 1; i <= 24; ++i) {      
                                sr= arr['dap_sr_' + pad(i, 2)];      
                                    if(sr>=0&&sr!=null){
                                $("#tmopb_"+i).html(trueRound(sr,2));
                            }
                                
                                }
                                }
                            //     if(arr['dap_partid'] == "TMO" && arr['dap_resoid']=="2TMO_G04" ) {
                            //     for(var i = 1; i <= 24; ++i) {      
                            //     sr= arr['dap_sr_' + pad(i, 2)];      
                            //         if(sr>=0&&sr!=null){
                            //     $("#tmom6_"+i).html(trueRound(sr,2));
                            // }
                                
                            //     }
                            //     }
                                if(arr['dap_partid'] == "EAUC") {
                                $("#eauc_time").html(arr['dap_sr_ddown'].substr(-9));
                                for(var i = 1; i <= 24; ++i) {      
                                sr= arr['dap_sr_' + pad(i, 2)];      
                                    if(sr>=0&&sr!=null){
                                $("#eaucg01_"+i).html(trueRound(sr,2));
                            }
                                
                                }
                                }
                                if(arr['dap_partid'] == "CPPC") {
                                $("#cppc_time").html(arr['dap_sr_ddown'].substr(-9));
                                for(var i = 1; i <= 24; ++i) {      
                                sr= arr['dap_sr_' + pad(i, 2)];      
                                    if(sr>=0&&sr!=null){
                                $("#cppcg01_"+i).html(trueRound(sr,2));
                            }
                                
                                }
                                }
                                //amp
                                if(arr['amp_partid'] == "HEDCOR"&& arr['amp_resoid']=='1SLANGN_G01') {
                                for(var i = 1; i <= 24; ++i) {      
                                    rtd= arr['rtd_mw_' + pad(i, 2)];          
                                    if( rtd>=0 && rtd !=null){ 
                                    $("#hedcor_"+i).html( "<b>"+trueRound(rtd,2));
                                    $("#hedcor_0").html( "<B style='font-size:15px;color:WHITE';' >"+trueRound(rtd,2));
                             }
                                          rtdm=arr['rtd_mw_' + pad(i-1, 2)]; 
                                             if(rtd!=rtdm&&i>1&&rtd!=null){
                                                    document.getElementById('hedcor_' + i).parentNode.style.backgroundColor = '#F44335';
                                                    document.getElementById('hedcor_' + i).style.color = '#FFFFFF';
                                                    $("#hedcor_0").html( "<B style='font-size:15px;color:WHITE;' class='blink' >"+trueRound(rtd,2));

                                  }
                                }
                            }
                                    if(arr['amp_partid'] == "HEDCORHE"&& arr['amp_resoid']=='1NMHC_G01') {
                                    for(var i = 1; i <= 24; ++i) {      
                                        rtd= arr['rtd_mw_' + pad(i, 2)];          
                                        if( rtd>=0 && rtd !=null){ 
                                        $("#hedcor2_"+i).html( "<b>"+trueRound(rtd,2));
                                        $("#hedcor2_0").html( "<B style='font-size:15px;color:WHITE;'>"+trueRound(rtd,2));
                                    }
                                        rtdm=arr['rtd_mw_' + pad(i-1, 2)]; 
                                        if(rtd!=rtdm&&i>1&&rtd!=null){
                                            document.getElementById('hedcor2_' + i).parentNode.style.backgroundColor = '#FF0000';
                                            document.getElementById('hedcor2_' + i).style.color = '#FFFFFF';
                                            $("#hedcor2_0").html( "<B style='font-size:15px;color:WHITE'class='blink'>"+trueRound(rtd,2));
                                        }
                                    }
                                    }
                                    if(arr['amp_partid'] == "HEDCOR"&& arr['amp_resoid']=='1NMHC_G03') {
                                    for(var i = 1; i <= 24; ++i) {      
                                        rtd= arr['rtd_mw_' + pad(i, 2)];          
                                        if( rtd>=0 && rtd !=null){ 
                                        $("#hedcor3_"+i).html("<b>"+trueRound(rtd,2));
                                        $("#hedcor3_0").html( "<B style='font-size:15px;color:WHITE;'>"+trueRound(rtd,2));
                                    }
                                        rtdm=arr['rtd_mw_' + pad(i-1, 2)]; 
                                        if(rtd!=rtdm&&i>1&&rtd!=null){
                                            document.getElementById('hedcor3_' + i).parentNode.style.backgroundColor = '#FF0000';
                                            document.getElementById('hedcor3_' + i).style.color = '#FFFFFF';
                                            $("#hedcor3_0").html( "<B style='font-size:15px;color:WHITE;'class='blink'>"+trueRound(rtd,2));

                                        }
                                    }
                                    }
                                    if(arr['amp_partid'] == "HSABI"&& arr['amp_resoid']=='1SABANG_G01') {
                                    for(var i = 1; i <= 24; ++i) {      
                                        rtd= arr['rtd_mw_' + pad(i, 2)];          
                                        if( rtd>=0 && rtd !=null){ 
                                        $("#hedcor4_"+i).html("<b>"+trueRound(rtd,2));
                                        $("#hedcor4_0").html( "<B style='font-size:15px;color:WHITE;'>"+trueRound(rtd,2));
                                    }
                                        rtdm=arr['rtd_mw_' + pad(i-1, 2)]; 
                                        if(rtd!=rtdm&&i>1&&rtd!=null){
                                            document.getElementById('hedcor4_' + i).parentNode.style.backgroundColor = '#FF0000';
                                            document.getElementById('hedcor4_' + i).style.color = '#FFFFFF';
                                            $("#hedcor4_0").html( "<B style='font-size:15px;color:WHITE;'class='blink'>"+trueRound(rtd,2));

                                        }
                                    }
                                    }
                                    if(arr['amp_partid'] == "HEDCORBA"&& arr['amp_resoid']=='1HEDCOR_G01') {
                                    for(var i = 1; i <= 24; ++i) {      
                                        rtd= arr['rtd_mw_' + pad(i, 2)];          
                                        if( rtd>=0 && rtd !=null){ 
                                        $("#hedcor5_"+i).html("<b>"+trueRound(rtd,2));
                                        $("#hedcor5_0").html( "<B style='font-size:15px;color:WHITE;'>"+trueRound(rtd,2));
                                    }
                                        rtdm=arr['rtd_mw_' + pad(i-1, 2)]; 
                                        if(rtd!=rtdm&&i>1&&rtd!=null){
                                            document.getElementById('hedcor5_' + i).parentNode.style.backgroundColor = '#FF0000';
                                            document.getElementById('hedcor5_' + i).style.color = '#FFFFFF';
                                            $("#hedcor5_0").html( "<B style='font-size:15px;color:WHITE;'class='blink'>"+trueRound(rtd,2));

                                        }
                                    }
                                    }
                                    if(arr['amp_partid'] == "APRI" && arr['amp_resoid']=="3MKBN_A" ) {
                                    for(var i = 1; i <= 24; ++i) {      
                                        rtd= arr['rtd_mw_' + pad(i, 2)];      
                                        if( rtd>=0 && rtd !=null){ 
                                        $("#mkbna_"+i).html("<b>"+trueRound(rtd,2));
                                        $("#mkbna_0").html( "<B style='font-size:15px;color:WHITE;'>"+trueRound(rtd,2));
                                    }
                                    rtdm=arr['rtd_mw_' + pad(i-1, 2)]; 
                                        if(rtd!=rtdm&&i>1&&rtd!=null){
                                            document.getElementById('mkbna_' + i).parentNode.style.backgroundColor = '#FF0000';
                                            document.getElementById('mkbna_' + i).style.color = '#FFFFFF';
                                            $("#mkbna_0").html( "<B style='font-size:15px;color:WHITE;'class='blink'>"+trueRound(rtd,2));

                                        }
                                    }
                                    }
                                    if(arr['amp_partid'] == "APRI" && arr['amp_resoid']=="3MKBN_B" ) {
                                    for(var i = 1; i <= 24; ++i) {      
                                        rtd= arr['rtd_mw_' + pad(i, 2)];      
                                        if( rtd>=0 && rtd !=null){ 
                                        $("#mkbnb_"+i).html("<b>"+trueRound(rtd,2));
                                        $("#mkbnb_0").html( "<B style='font-size:15px;color:WHITE;'>"+trueRound(rtd,2));
                                    }
                                    rtdm=arr['rtd_mw_' + pad(i-1, 2)]; 
                                        if(rtd!=rtdm&&i>1&&rtd!=null){
                                            document.getElementById('mkbnb_' + i).parentNode.style.backgroundColor = '#FF0000';
                                            document.getElementById('mkbnb_' + i).style.color = '#FFFFFF';
                                            $("#mkbnb_0").html( "<B style='font-size:15px;color:WHITE;'class='blink'>"+trueRound(rtd,2));

                                        }
                                    }
                                    }
                                    if(arr['amp_partid'] == "APRI" && arr['amp_resoid']=="3MKBN_C" ) {
                                    for(var i = 1; i <= 24; ++i) {      
                                        rtd= arr['rtd_mw_' + pad(i, 2)];      
                                        if( rtd>=0 && rtd !=null){ 
                                        $("#mkbnc_"+i).html("<b>"+trueRound(rtd,2));
                                        $("#mkbnc_0").html( "<B style='font-size:15px;color:WHITE;'>"+trueRound(rtd,2));
                                    }
                                    rtdm=arr['rtd_mw_' + pad(i-1, 2)]; 
                                        if(rtd!=rtdm&&i>1&&rtd!=null){
                                            document.getElementById('mkbnc_' + i).parentNode.style.backgroundColor = '#FF0000';
                                            document.getElementById('mkbnc_' + i).style.color = '#FFFFFF';
                                            $("#mkbnc_0").html( "<B style='font-size:15px;color:WHITE;'class='blink'>"+trueRound(rtd,2));

                                        }
                                    }
                                    }
                                    if(arr['amp_partid'] == "APRI" && arr['amp_resoid']=="3MKBN_D" ) {
                                    for(var i = 1; i <= 24; ++i) {      
                                        rtd= arr['rtd_mw_' + pad(i, 2)];      
                                        if( rtd>=0 && rtd !=null){ 
                                        $("#mkbnd_"+i).html("<b>"+trueRound(rtd,2));
                                        $("#mkbnd_0").html( "<B style='font-size:15px;color:WHITE;'>"+trueRound(rtd,2));
                                    }
                                    rtdm=arr['rtd_mw_' + pad(i-1, 2)]; 
                                        if(rtd!=rtdm&&i>1&&rtd!=null){
                                            document.getElementById('mkbnd_' + i).parentNode.style.backgroundColor = '#FF0000';
                                            document.getElementById('mkbnd_' + i).style.color = '#FFFFFF';
                                            $("#mkbnd_0").html( "<B style='font-size:15px;color:WHITE;'class='blink'>"+trueRound(rtd,2));

                                        }
                                    }
                                    }
                                    if(arr['amp_partid'] == "APRI" && arr['amp_resoid']=="3MKBN_E" ) {
                                    for(var i = 1; i <= 24; ++i) {      
                                        rtd= arr['rtd_mw_' + pad(i, 2)];      
                                        if( rtd>=0 && rtd !=null){ 
                                        $("#mkbne_"+i).html("<b>"+trueRound(rtd,2));
                                        $("#mkbne_0").html( "<B style='font-size:15px;color:WHITE;'>"+trueRound(rtd,2));
                                    }
                                    rtdm=arr['rtd_mw_' + pad(i-1, 2)]; 
                                        if(rtd!=rtdm&&i>1&&rtd!=null){
                                            document.getElementById('mkbne_' + i).parentNode.style.backgroundColor = '#FF0000';
                                            document.getElementById('mkbne_' + i).style.color = '#FFFFFF';
                                            $("#mkbne_0").html( "<B style='font-size:15px;color:WHITE;'class='blink'>"+trueRound(rtd,2));

                                        }
                                    }
                                    }
                                    if(arr['amp_partid'] == "APRI" && arr['amp_resoid']=="3ORMAT_G01" ) {
                                    for(var i = 1; i <= 24; ++i) {      
                                        rtd= arr['rtd_mw_' + pad(i, 2)];      
                                        if( rtd>=0 && rtd !=null){ 
                                        $("#mkbno_"+i).html("<b>"+trueRound(rtd,2));
                                        $("#mkbno_0").html( "<B style='font-size:15px;color:WHITE;'>"+trueRound(rtd,2));
                                    }
                                    rtdm=arr['rtd_mw_' + pad(i-1, 2)]; 
                                        if(rtd!=rtdm&&i>1&&rtd!=null){
                                            document.getElementById('mkbno_' + i).parentNode.style.backgroundColor = '#FF0000';
                                            document.getElementById('mkbno_' + i).style.color = '#FFFFFF';
                                            $("#mkbno_0").html( "<B style='font-size:15px;color:WHITE;'class='blink'>"+trueRound(rtd,2));

                                        }
                                    }
                                    }
                                    if(arr['amp_partid'] == "APRI" && arr['amp_resoid']=="3TIWI_A" ) {
                                    for(var i = 1; i <= 24; ++i) {      
                                        rtd= arr['rtd_mw_' + pad(i, 2)];      
                                        if( rtd>=0 && rtd !=null){ 
                                        $("#tiwia_"+i).html("<b>"+ trueRound(rtd,2));
                                        $("#tiwia_0").html( "<B style='font-size:15px;color:WHITE;'>"+trueRound(rtd,2));
                                    }
                                    rtdm=arr['rtd_mw_' + pad(i-1, 2)]; 
                                        if(rtd!=rtdm&&i>1&&rtd!=null){
                                            document.getElementById('tiwia_' + i).parentNode.style.backgroundColor = '#FF0000';
                                            document.getElementById('tiwia_' + i).style.color = '#FFFFFF';
                                            $("#tiwia_0").html( "<B style='font-size:15px;color:WHITE;'class='blink'>"+trueRound(rtd,2));

                                        }
                                    }
                                    }
                                    if(arr['amp_partid'] == "APRI" && arr['amp_resoid']=="3TIWI_C" ) {
                                    for(var i = 1; i <= 24; ++i) {      
                                        rtd= arr['rtd_mw_' + pad(i, 2)];      
                                        if( rtd>=0 && rtd !=null){ 
                                        $("#tiwic_"+i).html("<b>"+ trueRound(rtd,2));
                                        $("#tiwic_0").html( "<B style='font-size:15px;color:WHITE;'>"+trueRound(rtd,2));
                                    }
                                    rtdm=arr['rtd_mw_' + pad(i-1, 2)]; 
                                        if(rtd!=rtdm&&i>1&&rtd!=null){
                                            document.getElementById('tiwic_' + i).parentNode.style.backgroundColor = '#FF0000';
                                            document.getElementById('tiwic_' + i).style.color = '#FFFFFF';
                                            $("#tiwic_0").html( "<B style='font-size:15px;color:WHITE;'class='blink'>"+trueRound(rtd,2));

                                        }
                                    }
                                    }
                                    if(arr['amp_partid'] == "TLI" && arr['amp_resoid']=="3PAGBIL_G01" ) {
                                    for(var i = 1; i <= 24; ++i) {      
                                        rtd= arr['rtd_mw_' + pad(i, 2)];      
                                        if( rtd>=0 && rtd !=null){ 
                                        $("#tlig01_"+i).html( "<b>"+trueRound(rtd,2));
                                        $("#tlig01_0").html( "<B style='font-size:15px;color:WHITE;'>"+trueRound(rtd,2));
                                    }
                                    rtdm=arr['rtd_mw_' + pad(i-1, 2)]; 
                                        if(rtd!=rtdm&&i>1&&rtd!=null){
                                            document.getElementById('tlig01_' + i).parentNode.style.backgroundColor = '#FF0000';
                                            document.getElementById('tlig01_' + i).style.color = '#FFFFFF';
                                            $("#tlig01_0").html( "<B style='font-size:15px;color:WHITE;'class='blink'>"+trueRound(rtd,2));

                                        }
                                    }
                                    }
                                    if(arr['amp_partid'] == "TLI" && arr['amp_resoid']=="3PAGBIL_G02" ) {
                                    for(var i = 1; i <= 24; ++i) {      
                                        rtd= arr['rtd_mw_' + pad(i, 2)];      
                                        if( rtd>=0 && rtd !=null){ 
                                        $("#tlig02_"+i).html( "<b>"+trueRound(rtd,2));
                                        $("#tlig02_0").html( "<B style='font-size:15px;color:WHITE;'>"+trueRound(rtd,2));
                                    }
                                    rtdm=arr['rtd_mw_' + pad(i-1, 2)]; 
                                        if(rtd!=rtdm&&i>1&&rtd!=null){
                                            document.getElementById('tlig02_' + i).parentNode.style.backgroundColor = '#FF0000';
                                            document.getElementById('tlig02_' + i).style.color = '#FFFFFF';
                                            $("#tlig02_0").html( "<B style='font-size:15px;color:WHITE;'class='blink'>"+trueRound(rtd,2));

                                        }
                                    }
                                    }
                                    if(arr['amp_partid'] == "PEC" && arr['amp_resoid']=="3PAGBIL_G03" ) {
                                    for(var i = 1; i <= 24; ++i) {      
                                        rtd= arr['rtd_mw_' + pad(i, 2)];      
                                        if( rtd>=0 && rtd !=null){ 
                                        $("#tlig03_"+i).html( "<b>"+ trueRound(rtd,2));
                                        $("#tlig03_0").html( "<B style='font-size:15px;color:WHITE;'>"+trueRound(rtd,2));
                                    }
                                    rtdm=arr['rtd_mw_' + pad(i-1, 2)]; 
                                        if(rtd!=rtdm&&i>1&&rtd!=null){
                                            document.getElementById('tlig03_' + i).parentNode.style.backgroundColor = '#FF0000';
                                            document.getElementById('tlig03_' + i).style.color = '#FFFFFF';
                                            $("#tlig03_0").html( "<B style='font-size:15px;color:WHITE;'class='blink'>"+trueRound(rtd,2));

                                        }
                                    }
                                    }
                                    // if(arr['amp_partid'] == "TMO" && arr['amp_resoid']=="2TMO_G01" ) {
                                    // for(var i = 1; i <= 24; ++i) {      
                                    //     rtd= arr['rtd_mw_' + pad(i, 2)];      
                                    //     if( rtd>=0 && rtd !=null){ 
                                    //     $("#tmom3_"+i).html("<b>"+ trueRound(rtd,2));
                                    //     $("#tmom3_0").html( "<B style='font-size:15px;color:WHITE;'>"+trueRound(rtd,2));
                                    // }
                                    // rtdm=arr['rtd_mw_' + pad(i-1, 2)]; 
                                    //     if(rtd!=rtdm&&i>1&&rtd!=null){
                                    //         document.getElementById('tmom3_' + i).parentNode.style.backgroundColor = '#FF0000';
                                    //         document.getElementById('tmom3_' + i).style.color = '#FFFFFF';
                                    //         $("#tmom3_0").html( "<B style='font-size:15px;color:WHITE;'class='blink'>"+trueRound(rtd,2));

                                    //     }
                                    // }
                                    // }
                                    // if(arr['amp_partid'] == "TMO" && arr['amp_resoid']=="2TMO_G02" ) {
                                    // for(var i = 1; i <= 24; ++i) {      
                                    //     rtd= arr['rtd_mw_' + pad(i, 2)];      
                                    //     if( rtd>=0 && rtd !=null){ 
                                    //     $("#tmom4_"+i).html("<b>"+ trueRound(rtd,2));
                                    //     $("#tmom4_0").html( "<B style='font-size:15px;color:WHITE;'>"+trueRound(rtd,2));
                                    // }
                                    // rtdm=arr['rtd_mw_' + pad(i-1, 2)]; 
                                    //     if(rtd!=rtdm&&i>1&&rtd!=null){
                                    //         document.getElementById('tmom4_' + i).parentNode.style.backgroundColor = '#FF0000';
                                    //         document.getElementById('tmom4_' + i).style.color = '#FFFFFF';
                                    //         $("#tmom4_0").html( "<B style='font-size:15px;color:WHITE;'class='blink'>"+trueRound(rtd,2));

                                    //     }
                                    // }
                                    // }
                                    if(arr['amp_partid'] == "TMO" && arr['amp_resoid']=="2TMO_PB" ) {
                                    for(var i = 1; i <= 24; ++i) {      
                                        rtd= arr['rtd_mw_' + pad(i, 2)];      
                                        if( rtd>=0 && rtd !=null){ 
                                        $("#tmopb_"+i).html( "<b>"+trueRound(rtd,2));
                                        $("#tmopb_0").html( "<B style='font-size:15px;color:WHITE;'>"+trueRound(rtd,2));
                                    }
                                    rtdm=arr['rtd_mw_' + pad(i-1, 2)]; 
                                        if(rtd!=rtdm&&i>1&&rtd!=null){
                                            document.getElementById('tmopb_' + i).parentNode.style.backgroundColor = '#FF0000';
                                            document.getElementById('tmopb_' + i).style.color = '#FFFFFF';
                                            $("#tmopb_0").html( "<B style='font-size:15px;color:WHITE;'class='blink'>"+trueRound(rtd,2));

                                        }
                                    }
                                    }
                                    // if(arr['amp_partid'] == "TMO" && arr['amp_resoid']=="2TMO_G04" ) {
                                    // for(var i = 1; i <= 24; ++i) {      
                                    //     rtd= arr['rtd_mw_' + pad(i, 2)];      
                                    //     if( rtd>=0 && rtd !=null){ 
                                    //     $("#tmom6_"+i).html("<b>"+ trueRound(rtd,2));
                                    //     $("#tmom6_0").html( "<B style='font-size:15px;color:WHITE;'>"+trueRound(rtd,2));
                                    // }
                                    // rtdm=arr['rtd_mw_' + pad(i-1, 2)]; 
                                    //     if(rtd!=rtdm&&i>1&&rtd!=null){
                                    //         document.getElementById('tmom6_' + i).parentNode.style.backgroundColor = '#FF0000';
                                    //         document.getElementById('tmom6_' + i).style.color = '#FFFFFF';
                                    //         $("#tmom6_0").html( "<B style='font-size:15px;color:WHITE;'class='blink'>"+trueRound(rtd,2));

                                    //     }
                                    // }
                                    // }
                                    if(arr['amp_partid'] == "EAUC" && arr['amp_resoid']=="5EAUC_G01") {
                                    for(var i = 1; i <= 24; ++i) {      
                                        rtd= arr['rtd_mw_' + pad(i, 2)];      
                                        if( rtd>=0 && rtd !=null){ 
                                        $("#eaucg01_"+i).html("<b>"+trueRound(rtd,2));
                                        $("#eaucg01_0").html( "<B style='font-size:15px;color:WHITE;'>"+trueRound(rtd,2));
                                    }
                                    rtdm=arr['rtd_mw_' + pad(i-1, 2)]; 
                                        if(rtd!=rtdm&&i>1&&rtd!=null){
                                            document.getElementById('eaucg01_' + i).parentNode.style.backgroundColor = '#FF0000';
                                            document.getElementById('eaucg01_' + i).style.color = '#FFFFFF';
                                            $("#eaucg01_0").html( "<B style='font-size:15px;color:WHITE;'class='blink'>"+trueRound(rtd,2));

                                        }
                                    }
                                    }
                                    if(arr['amp_partid'] == "CPPC" && arr['amp_resoid']=="5CPPC_G01") {
                                    for(var i = 1; i <= 24; ++i) {      
                                        rtd= arr['rtd_mw_' + pad(i, 2)];      
                                        if( rtd>=0 && rtd !=null){ 
                                        $("#cppcg01_"+i).html("<b>"+trueRound(rtd,2));
                                        $("#cppcg01_0").html( "<B style='font-size:15px;color:WHITE;'>"+trueRound(rtd,2));
                                    }
                                    rtdm=arr['rtd_mw_' + pad(i-1, 2)]; 
                                        if(rtd!=rtdm&&i>1&&rtd!=null){
                                            document.getElementById('cppcg01_' + i).parentNode.style.backgroundColor = '#FF0000';
                                            document.getElementById('cppcg01_' + i).style.color = '#FFFFFF';
                                            $("#cppcg01_0").html( "<B style='font-size:15px;color:WHITE;'class='blink'>"+trueRound(rtd,2));

                                        }
                                    }
                                    }
                                            });

                                            downloading = 0;
                                    },
                                    error:function(){
                                            downloading = 0;
                                        get_data();
                                    }   
                                    }); 
                                }
         
</script>   

 
</div>
 
</body>
</html>
<?php include('footer.php');?>
