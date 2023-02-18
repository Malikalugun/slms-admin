$(document).ready(function () {
  //Admin Login Start.
  $("#btnSubmitAdd").click(function () {
    $("#btnSubmitAdd").html("Sumitting...");
    var section = $("#section").val();
    var column_name = $("#column_name").val();

    $.ajax({
      type: "post",
      url: "location-action.php",
      data: {
        section: section,
        column_name: column_name,

        action: "Add",
      },
      success: function (data) {
        var x = data;
        if (x == "Record added successfully.") {
          window.location = "./locations.php";
        } else {
          $("#btnSubmit").html("Submit");
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
    var id = $("#id").val();
    var section = $("#section").val();
    var column_name = $("#column_name").val();
    var status = $("#status").val();

    $.ajax({
      type: "post",
      url: "location-action.php",
      data: {
        location_id: id,
        section: section,
        column_name: column_name,
        status: status,
        action: "Update",
      },
      success: function (data) {
        var x = data;
        if (x == "Record updated successfully.") {
          window.location = "./locations.php";
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
