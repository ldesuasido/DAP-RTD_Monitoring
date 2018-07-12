function get_data()
{
	if(downloading == 1)
	{
		return;
	}
	
	downloading = 1;
	var dnow = new Date();
	var curr_rtd_hr = dnow.getHours()+1;
	
	if(curr_deldate == (dnow.getYear()+1900 + "" + pad(dnow.getMonth()+1,2) + "" + pad(dnow.getDate(),2)) && dnow.getHours()+1 == curr_hour)
	{
		downloading = 0;
		return true;
	}
	
	clear_divs();
	document.getElementById("dap_title").innerHTML = "Retrieving data..";
	document.getElementById("rtd_title").innerHTML = "Retrieving data..";
	 $.ajax({
      url: "http://139.162.47.11/mrms/index.php/DAP/get_data_tli",
      type: "post",
	  dataType: "json",
      data: {},
      success: function(arr){
			if(d == null)
			{
				get_data();
				return;
			}
            var dapraw_json =arr;
            var data = JSON.parse(dapraw_json);
            var sr="";
                function pad(n, width, z) {
                z = z || '0';
                n = n + '';
                return n.length >= width ? n : new Array(width - n.length + 1).join(z) + n;
                }

                data.forEach(function(arr) {
                if(arr['dap_partid'] == "HEDCOR") {
                for(var i = 1; i <= 24; ++i) {      
                  sr= arr['dap_sr_' + pad(i, 2)];      
                    if( sr>=0){
                   $("#hedcor_"+i).html(trueRound(sr,2));
               }
                
                }
                }
                if(arr['dap_partid'] == "APRI" && arr['dap_resoid']=="3MKBN_A" ) {
                for(var i = 1; i <= 24; ++i) {      
                  sr= arr['dap_sr_' + pad(i, 2)];      
                    if( sr>=0){
                   $("#mkbna_"+i).html(trueRound(sr,2));
               }
                
                }
                }
                if(arr['dap_partid'] == "APRI" && arr['dap_resoid']=="3MKBN_B" ) {
                for(var i = 1; i <= 24; ++i) {      
                  sr= arr['dap_sr_' + pad(i, 2)];      
                    if( sr>=0){
                   $("#mkbnb_"+i).html(trueRound(sr,2));
               }
                
                }
                }
                if(arr['dap_partid'] == "APRI" && arr['dap_resoid']=="3MKBN_C" ) {
                for(var i = 1; i <= 24; ++i) {      
                  sr= arr['dap_sr_' + pad(i, 2)];      
                    if( sr>=0){
                   $("#mkbnc_"+i).html(trueRound(sr,2));
               }
                
                }
                }
                if(arr['dap_partid'] == "APRI" && arr['dap_resoid']=="3MKBN_D" ) {
                for(var i = 1; i <= 24; ++i) {      
                  sr= arr['dap_sr_' + pad(i, 2)];      
                    if( sr>=0){
                   $("#mkbnd_"+i).html(trueRound(sr,2));
               }
                
                }
                }
                if(arr['dap_partid'] == "APRI" && arr['dap_resoid']=="3MKBN_E" ) {
                for(var i = 1; i <= 24; ++i) {      
                  sr= arr['dap_sr_' + pad(i, 2)];      
                    if( sr>=0){
                   $("#mkbne_"+i).html(trueRound(sr,2));
               }
                
                }
                }
                if(arr['dap_partid'] == "APRI" && arr['dap_resoid']=="3ORMAT_G01" ) {
                for(var i = 1; i <= 24; ++i) {      
                  sr= arr['dap_sr_' + pad(i, 2)];      
                    if( sr>=0){
                   $("#mkbno_"+i).html(trueRound(sr,2));
               }
                
                }
                }
                if(arr['dap_partid'] == "APRI" && arr['dap_resoid']=="3TIWI_A" ) {
                for(var i = 1; i <= 24; ++i) {      
                  sr= arr['dap_sr_' + pad(i, 2)];      
                    if( sr>=0){
                   $("#tiwia_"+i).html(trueRound(sr,2));
               }
                
                }
                }
                if(arr['dap_partid'] == "APRI" && arr['dap_resoid']=="3TIWI_C" ) {
                for(var i = 1; i <= 24; ++i) {      
                  sr= arr['dap_sr_' + pad(i, 2)];      
                    if( sr>=0){
                   $("#tiwic_"+i).html(trueRound(sr,2));
               }
                
                }
                }
                if(arr['dap_partid'] == "TLI" && arr['dap_resoid']=="3PAGBIL_G01" ) {
                for(var i = 1; i <= 24; ++i) {      
                  sr= arr['dap_sr_' + pad(i, 2)];      
                    if( sr>=0){
                   $("#tlig01_"+i).html(trueRound(sr,2));
               }
                
                }
                }
                if(arr['dap_partid'] == "TLI" && arr['dap_resoid']=="3PAGBIL_G02" ) {
                for(var i = 1; i <= 24; ++i) {      
                  sr= arr['dap_sr_' + pad(i, 2)];      
                    if( sr>=0){
                   $("#tlig02_"+i).html(trueRound(sr,2));
               }
                
                }
                }
                if(arr['dap_partid'] == "TLI" && arr['dap_resoid']=="3PAGBIL_G03" ) {
                for(var i = 1; i <= 24; ++i) {      
                  sr= arr['dap_sr_' + pad(i, 2)];      
                    if( sr>=0){
                   $("#tlig03_"+i).html(trueRound(sr,2));
               }
                
                }
                }
                if(arr['dap_partid'] == "TMO" && arr['dap_resoid']=="2TMO_G01" ) {
                for(var i = 1; i <= 24; ++i) {      
                  sr= arr['dap_sr_' + pad(i, 2)];      
                    if( sr>=0){
                   $("#tmom3_"+i).html(trueRound(sr,2));
               }
                
                }
                }
                if(arr['dap_partid'] == "TMO" && arr['dap_resoid']=="2TMO_G02" ) {
                for(var i = 1; i <= 24; ++i) {      
                  sr= arr['dap_sr_' + pad(i, 2)];      
                    if( sr>=0){
                   $("#tmom4_"+i).html(trueRound(sr,2));
               }
                
                }
                }
                if(arr['dap_partid'] == "TMO" && arr['dap_resoid']=="2TMO_PB" ) {
                for(var i = 1; i <= 24; ++i) {      
                  sr= arr['dap_sr_' + pad(i, 2)];      
                    if( sr>=0){
                   $("#tmopb_"+i).html(trueRound(sr,2));
               }
                
                }
                }
                if(arr['dap_partid'] == "TMO" && arr['dap_resoid']=="2TMO_G04" ) {
                for(var i = 1; i <= 24; ++i) {      
                  sr= arr['dap_sr_' + pad(i, 2)];      
                    if( sr>=0){
                   $("#tmom6_"+i).html(trueRound(sr,2));
               }
                
                }
                }
                if(arr['dap_partid'] == "EAUC") {
                for(var i = 1; i <= 24; ++i) {      
                  sr= arr['dap_sr_' + pad(i, 2)];      
                    if( sr>=0){
                   $("#eaucg01_"+i).html(trueRound(sr,2));
               }
                
                }
                }
                if(arr['dap_partid'] == "CPPC") {
                for(var i = 1; i <= 24; ++i) {      
                  sr= arr['dap_sr_' + pad(i, 2)];      
                    if( sr>=0){
                   $("#cppcg01_"+i).html(trueRound(sr,2));
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

