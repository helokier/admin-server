    //user
    $(document).ready(function() {
        $('.deletebtn').click(function(e) {
            var user_id = $(this).val();
            $('.deletebtn_id').val(user_id);
            console.log(user_id);
            $('#DeleteMotal').modal('show');

        });
    });
   //catelory
    $(document).ready(function () {
      $(".delete_dm").click(function (e) {
        var user_id = $(this).val();
        $(".deletedm_id").val(user_id);
        console.log(user_id);
        $("#DeleteDM").modal("show");
      });
    });

 $(document).ready(function () {
   $(".logout").click(function (e) {
     var users_id = $(this).val();
     console.log(users_id);
     $("#logoutModal").modal("show");
   });
 });
