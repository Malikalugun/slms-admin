$(document).ready(function () {
  //Admin Login Start.
  $("#btnSubmitAdd").click(function () {
    $("#btnSubmitAdd").html("Sumitting...");
    var title = $("#title").val();
    var author = $("#author").val();
    var edition = $("#edition").val();
    var publisher = $("#publisher").val();
    var subject = $("#subject").val();
    var quantity = $("#quantity").val();
    $.ajax({
      type: "post",
      url: "book-action.php",
      data: {
        title: title,
        author: author,
        edition: edition,
        publisher: publisher,
        subject: subject,
        quantity: quantity,

        action: "Add",
      },
      success: function (data) {
        var x = data;
        if (x == "Record added successfully.") {
          window.location = "./books.php";
        } else {
          $("#btnSubmit").html("Submit");
          $("#msg").html(data);
          $("#msg").slideDown("slow");
          $("#msg").slideUp(300);
        }
      },
    });
  });

  //Admin Login End.

  //Admin Login Start.
  $("#btnSubmitUpdate").click(function () {
    $("#btnSubmitUpdate").html("Sumitting...");
    var id = $("#id").val();
    var title = $("#title").val();
    var author = $("#author").val();
    var edition = $("#edition").val();
    var publisher = $("#publisher").val();
    var subject = $("#subject").val();
    var quantity = $("#quantity").val();
    var status = $("#status").val();

    $.ajax({
      type: "post",
      url: "book-action.php",
      data: {
        book_id: id,
        title: title,
        author: author,
        edition: edition,
        publisher: publisher,
        subject: subject,
        quantity: quantity,
        status: status,
        action: "Update",
      },
      success: function (data) {
        var x = data;
        if (x == "Record updated successfully.") {
          window.location = "./books.php";
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
