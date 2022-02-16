 $(document).ready(function(){
        $("#hargaobat").keyup(function(){
          // console.log("berhasil")
          $(this).maskNumber({integer: true, thousands: "."})
        });
      });