$(document).ready(function () {
  //Admin Login Start.
  $("#btnSubmitAdd").click(function () {
    $("#btnSubmitAdd").html("Sumitting...");
    var reg_no = $("#reg_no").val();
    var validity = $("#validity").val();
    var type = $("#type").val();

    $.ajax({
      type: "post",
      url: "card-action.php",
      data: {
        reg_no: reg_no,
        validity: validity,
        type: type,
        action: "Add",
      },
      success: function (data) {
        var x = data;
        if (x == "Record added successfully.") {
          window.location = "./cards.php";
        } else {
          $("#btnSubmitAdd").html("Submit");
          $("#msg").html(data);
          $("#msg").slideDown("slow");
          $("#msg").slideUp(3000);
        }
      },
    });
  });

  //Admin Login End.

  //Admin Login Start.
  $("#btnSubmitUpdate").click(function () {
    $("#btnSubmitUpdate").html("Sumitting...");
    var card_no = $("#id").val();
    var validity = $("#validity").val();
    var type = $("#type").val();

    $.ajax({
      type: "post",
      url: "card-action.php",
      data: {
        card_no: card_no,
        validity: validity,
        type: type,

        action: "Update",
      },
      success: function (data) {
        var x = data;
        if (x == "Record updated successfully.") {
          window.location = "./cards.php";
        } else {
          $("#btnSubmitUpdate").html("Update");
          $("#msg").html(data);
          $("#msg").slideDown("slow");
          $("#msg").slideUp(3000);
        }
      },
    });
  });
});
