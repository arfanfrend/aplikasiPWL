
$(function(){
    $(".success-mess").on("click", ".tambah",function(e){
        e.preventDefault();
       $.ajax({
           type: "POST",
           url: "edit.php",
           success: function (response) {
            $(".success-mess").hide().fadeIn(500).html(response);
            $(".header").html("Tambah Data Pegawai");
            $(".ubah").hide();

           }
       });
    });

    $(".success-mess").on("click", ".keluartambah",function(e){
        e.preventDefault();
       $.ajax({
           type: "POST",
           url: "pegawai.php",
           success: function (response) {
            $(".success-mess").hide().fadeIn(500).html(response);
           }
       });
    });

    $(".success-mess").on("click", "#simpanpegawai",function(e){
        e.preventDefault();
        var id =$("#id").val();
        var nama =$("#nama").val();
        var tanggal = $("#tanggal").val();
        var jk = $("#jk").val();
        var hp = $("#hp").val();
        var alamat = $("#alamat").val();
       
            $.ajax({
                type:"POST",
                url:"simpanpegawai.php?sub=tambah",
                data:{
                    id:id,
                    nama:nama,
                    tanggal:tanggal,
                    jk:jk,
                    hp:hp,
                    alamat:alamat
                    
                },
                success: function(data) {
                   if( data == "sukses"){
                    alert("Berhasil Menambahkan Data!!!");
                    pegawai().hide().fadeIn(500).html(data);
                    
                   }else {
                       tambah();
                       alert("Galat Menambahkan Data!!!");
                   }
    
                  }
    
            });
    });

    $(".success-mess").on("click", ".edit",function(e){
        e.preventDefault();
       var id = $(this).attr("value");
       $.ajax({
           type: "GET",
           url: "edit.php",
           data:{
               id:id,
           },
           success: function (response) {
            $(".success-mess").hide().fadeIn(500).html(response);
            $(".header").html("Edit Data Pegawai");
            $(".simpantambah").hide();
           }
       });
    });

    $(".success-mess").on("click", ".hapus", function(e){
        e.preventDefault();
        if(confirm("Apakah Yakin Ingin Menghapus Data ?")){

       
         var id = $(this).attr("value");
         $.ajax({
             type: "POST",
             url : "simpanpegawai.php",
             data : {
                 id : id,
                 sub : "hapus",
               
             },
 
             success : function(response){
                 if(response == "sukses"){
                    pegawai().html(response);
                 } else {
                     alert("Gagal Menghapus Data");
                 }
             }
             
         });
        
        }
      
    });

      $(".success-mess").on("click", ".ubah", function(e){
        e.preventDefault();
        var id =$("#id").val();
        var nama =$("#nama").val();
        var tanggal = $("#tanggal").val();
        var jk = $("#jk").val();
        var hp = $("#hp").val();
        var alamat = $("#alamat").val();
       
            $.ajax({
                type:"POST",
                url:"simpanpegawai.php?sub=edit",
                data:{
                    id:id,
                    nama:nama,
                    tanggal:tanggal,
                    jk:jk,
                    hp:hp,
                    alamat:alamat
                    
                    
                },
                success: function(response) {
                   if( response == "sukses"){
                    alert("Berhasil Mengubah Data!!!");
                    pegawai().hide().fadeIn(500).html(response);
                    
                   }else {
                      
                       alert("Galat Mengubah Data!!!");
                   }
    
                  }

            });
      });

});

$(function(){
//    pegawai();

    $(".success-mess").on("keyup","#search", function(e){
        e.preventDefault();
        var search = $("#search").val();
        $.ajax({
            url: "search.php?search=search" ,
            type: "POST",
            data : {
                search:search
            },
            success: function(response) {
                $("#out").html(response);
             }
            
        });
    });
});

$(function(){
    $(".success-mess").on("keyup","#caripegawai", function(){
       var cari = $("#caripegawai").val();
            $.ajax({
                url: "cariabsen.php?cari=cari" ,
                type: "POST",
                data : {
                    cari:cari
                },
                success: function(response) {
                    $("#cari-absen").html(response);
                 }
                
            });
        });

        $(".success-mess").on("click", "#masukabsen", function(){
            var id = $("#caripegawai").val();
            var nama = $("#nama").val();
            var jam = $("#jam").val();
            var tanggal = $("#tanggal").val();
            $.ajax({
                url: "absen.php?sub=absen",
                type:"POST",
                data: {
                    id:id,
                    nama:nama,
                    jam:jam,
                    tanggal:tanggal
                },
                success:function(response){
                    if( response == "sukses"){
                        alert("Berhasil Menambahkan Data!!!");
                        tableabsen().hide().fadeIn(500).html(response);
                        
                       }else {
                        tableabsen().hide().fadeIn(500).html(response);
                           alert("Galat Menambahkan Data!!!");
                       }
                }

            })
        });

        $(".success-mess").on("click", "#keluarabsen", function(){
            $.ajax({url:"home.php",success:function(response){
                $('.success-mess').hide().fadeIn(500).html(response);
            }});
        });
    });

// $(document).ready(function(){
//     $(document).on('change', '#file', function(){
//      var name = document.getElementById("file").files[0].name;
//      var form_data = new FormData();
//      var ext = name.split('.').pop().toLowerCase();
//      if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1)
//      {
//       alert("Invalid Image File");
//      }
//      var oFReader = new FileReader();
//      oFReader.readAsDataURL(document.getElementById("file").files[0]);
//      var f = document.getElementById("file").files[0];
//      var fsize = f.size||f.fileSize;
//      if(fsize > 2000000)
//      {
//       alert("Ukuran File Gambar Terlalu Besar Maksimal 2MB");
//      }
//      else
//      {
//       form_data.append("file", document.getElementById('file').files[0]);
//       $.ajax({
//        url:"edit.php",
//        method:"POST",
//        success:function(data)
//        {
//         $('.success-mess').html(data);
//        }
//       });
//      }
//     });
//    });


$(function(){
     $("header").on("click","#acc", function(){
            $.ajax({
                url: "account.php" ,
                type: "POST",
                success: function(response) {
                    $('.success-mess').hide().fadeIn(500).html(response);
                 }
                
            });
        });
    });

function tableabsen() {  
    $.ajax({
            url: 'absentable.php',
            type: 'POST',
            success: function(response) {
                $('.success-mess').hide().fadeIn(500).html(response);
               
            }
    });
}

$(function(){
    $(".success-mess").on("click", ".tambahabsen", function(){
       
        $.ajax({url:"absen.php",success:function(response){
            $('.success-mess').hide().fadeIn(500).html(response);
        }});
    });
});
    

function absen() {  
    $.ajax({
        url: 'absen.php',
        type: 'POST',
        success: function(response) {
            $('.success-mess').hide().fadeIn(500).html(response);
           
        }
    });
}

function account() {  
    $.ajax({
        url: 'account.php',
        type: 'POST',
        success: function(response) {
            $('.success-mess').hide().fadeIn(500).html(response);
            
            
           
        }
    });
}

function home(){
    $.ajax({
        url: 'home.php',
        type: 'POST',
        success: function(response) {
            $('.success-mess').hide().fadeIn(500).html(response);
            
            
           
        }
    });
}

function pegawai(){
    $.ajax({
        url: 'pegawai.php',
        type: 'POST',
        success: function(response) {
            $('.success-mess').hide().fadeIn(500).html(response);
           
           
        }
    });
   
}

