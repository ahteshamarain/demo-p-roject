$(document).ready(function () {
  let cat_name = $("#cat_name");
  let cat_des = $("#cat_des");
  let addCat = $("#addCat");
  let cat_add_msg = $('#cat_add_msg');
  $("#status").change(function () {
    // Get the selected value
    let status = $(this).val();

    // console.log(cat_des, cat_name, selectedValue, addCat);

    addCat.on("click", function () {
      $.ajax({
        url: "insertCat.php",
        method: "POST",
        data: {
          cat_name: cat_name.val(),
          cat_des: cat_des.val(),
          cat_status: status,
        },
        success: function (data) {
          console.log(data);
          cat_add_msg.html(data);
          
        },
      });
    });
  });
});
