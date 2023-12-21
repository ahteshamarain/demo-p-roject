$(document).ready(function () {
    let pname = $("#pname");
    let pprice = $("#pprice");
    let addpro = $("#addpro");
    let cat_add_msg = $('#cat_add_msg');
    $("#status").change(function () {
      // Get the selected value
      let status = $(this).val();
  
      // console.log(cat_des, cat_name, selectedValue, addCat);
  
      addpro.on("click", function () {
        $.ajax({
          url: "insertpro.php",
          method: "POST",
          data: {
            name: pname.val(),
            price: pprice.val(),
            status: status,
            image: pimage[0].files[0]
          },
          success: function (data) {
            console.log(data);
            cat_add_msg.html(data);
            
          },
        });
      });
    });
  });
  