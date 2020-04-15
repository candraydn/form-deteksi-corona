$(document).ready(function(){ // Ketika halaman sudah siap (sudah selesai di load)
	// Kita sembunyikan dulu untuk loadingnya
    $("#kab").hide();
    $("#kec").hide();
    $("#kel").hide();
    
	$("#prov").change(function(){ // Ketika user mengganti atau memilih data provinsi
		 // Sembunyikan dulu combobox kota nya
	
		$.ajax({
			type: "POST", // Method pengiriman data bisa dengan GET atau POST
			url: "config/optionKab.php", // Isi dengan url/path file php yang dituju
			data: {provinsi : $("#prov").val()}, // data yang akan dikirim ke file yang dituju
			dataType: "json",
			beforeSend: function(e) {
				if(e && e.overrideMimeType) {
					e.overrideMimeType("application/json;charset=UTF-8");
				}
			},
			success: function(response){ // Ketika proses pengiriman berhasil
				setTimeout(function(){
					// set isi dari combobox kota
					// lalu munculkan kembali combobox kotanya
					$("#kab").html(response.data_kota).show();
				}, 500);
			},
			error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
				alert(thrownError); // Munculkan alert error
			}
		});
    });
    $("#kab").change(function(){ // Ketika user mengganti atau memilih data provinsi
        // Sembunyikan dulu combobox kota nya
   
       $.ajax({
           type: "POST", // Method pengiriman data bisa dengan GET atau POST
           url: "config/optionKec.php", // Isi dengan url/path file php yang dituju
           data: {kabupaten : $("#kab").val()}, // data yang akan dikirim ke file yang dituju
           dataType: "json",
           beforeSend: function(e) {
               if(e && e.overrideMimeType) {
                   e.overrideMimeType("application/json;charset=UTF-8");
               }
           },
           success: function(response){ // Ketika proses pengiriman berhasil
               setTimeout(function(){
                   // set isi dari combobox kota
                   // lalu munculkan kembali combobox kotanya
                   $("#kec").html(response.data_kec).show();
               }, 500);
           },
           error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
               alert(thrownError); // Munculkan alert error
           }
       });
   });
   $("#kec").change(function(){ // Ketika user mengganti atau memilih data provinsi
    // Sembunyikan dulu combobox kota nya

   $.ajax({
       type: "POST", // Method pengiriman data bisa dengan GET atau POST
       url: "config/optionKel.php", // Isi dengan url/path file php yang dituju
       data: {kecamatan : $("#kec").val()}, // data yang akan dikirim ke file yang dituju
       dataType: "json",
       beforeSend: function(e) {
           if(e && e.overrideMimeType) {
               e.overrideMimeType("application/json;charset=UTF-8");
           }
       },
       success: function(response){ // Ketika proses pengiriman berhasil
           setTimeout(function(){
               // set isi dari combobox kota
               // lalu munculkan kembali combobox kotanya
               $("#kel").html(response.data_kel).show();
           }, 500);
       },
       error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
           alert(thrownError); // Munculkan alert error
       }
   });
});
});