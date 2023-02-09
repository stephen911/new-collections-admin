$(function () {
  // alert('hi there');
  $("#socl").click(function () {
    swal({
      title: "Done!",
      text: "Record Deleted Successfully",
      timer: 1000,
      type: "success",
      padding: "2em",
      // target: document.querySelector("html")
    });
  });

  $(document).on("click", "#ddo", function () {
    swal({
      title: "Done!",
      text: "Record Deleted Successfully",
      timer: 1000,
      type: "success",
      padding: "2em",
      target: document.querySelector("html"),
    });
  });

  function resp(response) {
    response = response.trim();

    if (response == "success") {
      swal.close();
      swal({
        title: "Success",
        text: "Record added Successfully",
        timer: 1000,
        type: "success",
        padding: "2em",
        onOpen: function () {
          swal.showLoading();
        },
      }).then(function (result) {
        window.location.reload();
      });
    } else if (response == "deleted") {
      swal({
        title: "Done!",
        text: "Record Deleted Successfully",
        timer: 1000,
        type: "success",
        padding: "2em",
        onOpen: function () {
          swal.showLoading();
        },
      }).then(function (result) {
        window.location.reload();
      });
    }  else if (response == "loginsuccess") {
      swal({
        title: "Login Successful!",
        text: "will be redirected soon",
        timer: 2000,
        type: "success",
        padding: "2em",
        onOpen: function () {
          swal.showLoading();
        },
      }).then(function (result) {
        window.location = "dashboard.php";
      });
    } else if (response == "changepasssuccess") {
      swal({
        title: "Success",
        text: "Password updated successfuly",
        timer: 2000,
        type: "success",
        padding: "2em",
        onOpen: function () {
          swal.showLoading();
        },
      }).then(function (result) {
        window.location = "dashboard.php";
      });
    } else if (response == "Updated Successfully") {
      swal({
        title: "Success",
        text: "Update Successful",
        timer: 1000,
        type: "success",
        padding: "2em",
        onOpen: function () {
          swal.showLoading();
        },
      }).then(function (result) {
        // window.location = "users.php";
      });
    } else if (response == "pointsadded") {
      swal({
        title: "Success",
        text: "Credit points added Successfully",
        timer: 1000,
        type: "success",
        padding: "2em",
        onOpen: function () {
          swal.showLoading();
        },
      }).then(function (result) {
        window.location = "users.php";
      });
    } else if (response == "registered") {
      swal({
        title: "Success",
        text: "Registration Successful",
        timer: 1000,
        type: "success",
        padding: "2em",
        onOpen: function () {
          swal.showLoading();
        },
      }).then(function (result) {
        window.location = "ntcreg.php";
      });
    } else if (response == "payadded") {
      swal({
        title: "Success",
        text: "Payment added Successful",
        timer: 1000,
        type: "success",
        padding: "2em",
        onOpen: function () {
          swal.showLoading();
        },
      }).then(function (result) {
        // window.location = "users.php";
      });
    } else if (response == "beneadded") {
      swal({
        title: "Success",
        text: "Beneficiary added Successfully",
        timer: 1000,
        type: "success",
        padding: "2em",
        onOpen: function () {
          swal.showLoading();
        },
      }).then(function (result) {
        // window.location = "users.php";
      });
    } else if (response == "staffadded") {
      swal({
        title: "Success",
        text: "Staff added Successfully",
        timer: 1000,
        type: "success",
        padding: "2em",
        onOpen: function () {
          swal.showLoading();
        },
      }).then(function (result) {
        // window.location = "users.php";
      });
    } 
    else if (response == "rateadded") {
      swal({
        title: "Success",
        text: "Rate added Successfully",
        timer: 1000,
        type: "success",
        padding: "2em",
        onOpen: function () {
          swal.showLoading();
        },
      }).then(function (result) {
        // window.location = "users.php";
      });
    } 
    else if (response == "eventadded") {
      swal({
        title: "Success",
        text: "Event added Successfully",
        timer: 1000,
        type: "success",
        padding: "2em",
        onOpen: function () {
          swal.showLoading();
        },
      }).then(function (result) {
        // window.location = "users.php";
      });
    } else if (response == "attended") {
      swal({
        title: "Success",
        text: "Attendance Marked Successfully",
        timer: 1000,
        type: "success",
        padding: "2em",
        onOpen: function () {
          swal.showLoading();
        },
      }).then(function (result) {
        // window.location = "users.php";
      });
    } else if (response == "userdele") {
      swal({
        title: "Success",
        text: "User Deleted Successfully",
        timer: 1000,
        type: "success",
        padding: "2em",
        onOpen: function () {
          swal.showLoading();
        },
      }).then(function (result) {
        window.location = "staff.php";
      });
    } else if (response == "loginfailed") {
      swal({
        title: "Oops!",
        text: "Record not found in database! ",
        type: "error",
        padding: "2em",
      });
    } else {
      swal({
        title: "Attention!",
        text: response,
        type: "warning",
        padding: "2em",
      });
    }
  }

  function before() {
    swal({
      title: "Please Wait !",
      html: "request in progress...", // add html attribute if you want or remove
      allowOutsideClick: false,
      // onBeforeOpen: () => {
      //     Swal.showLoading()
      // },
    });
  }

  $(".welcome").submit(function (e) {
    e.preventDefault();
    // before();
    var staff = {
      url: "processor/processor.php?action=welcome",
      type: "post",
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp,
    };
    $.ajax(staff);
  });

  // update user
  $(".updateuser").submit(function (e) {
    e.preventDefault();
    // before();
    // var id = $(this).attr('id');
    var staff = {
      url: "processor.php?action=update",
      type: "post",
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp,
    };
    $.ajax(staff);
  });

  $(".updatestaff").submit(function (e) {
    e.preventDefault();
    // before();
    // var id = $(this).attr('id');
    var staff = {
      url: "processor.php?action=updatestaff",
      type: "post",
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp,
    };
    $.ajax(staff);
  });

  $(".updatebene").submit(function (e) {
    e.preventDefault();
    // before();
    // var id = $(this).attr('id');
    var staff = {
      url: "processor.php?action=updatebene",
      type: "post",
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp,
    };
    $.ajax(staff);
  });

  $(".updaterate").submit(function (e) {
    e.preventDefault();
    // before();
    // var id = $(this).attr('id');
    var staff = {
      url: "processor.php?action=updaterate",
      type: "post",
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp,
    };
    $.ajax(staff);
  });


  $(".pay").submit(function (e) {
    e.preventDefault();
    // before();
    // var id = $(this).attr('id');
    var staff = {
      url: "processor.php?action=pay",
      type: "post",
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp,
    };
    $.ajax(staff);
  });

  // login

  $(".login").submit(function (e) {
    e.preventDefault();
    // before();
    // var id = $(this).attr('id');
    var staff = {
      url: "processor.php?action=login",
      type: "post",
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp,
    };
    $.ajax(staff);
  });

  // $(".show").submit(function (e) {
  //   e.preventDefault();
  //   // before();
  //   // var id = $(this).attr('id');
  //   var staff = {
  //     url: "processor.php?action=show",
  //     type: "post",
  //     data: new FormData(this),
  //     cache: false,
  //     contentType: false,
  //     processData: false,
  //     beforeSend: before,
  //     success: resp,
  //   };
  //   $.ajax(staff);
  // });

  $(".showquiz").submit(function (e) {
    e.preventDefault();
    // before();
    // var id = $(this).attr('id');
    var staff = {
      url: "processor.php?action=showquiz",
      type: "post",
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp,
    };
    $.ajax(staff);
  });

  $(".showdiscert").submit(function (e) {
    e.preventDefault();
    // before();
    // var id = $(this).attr('id');
    var staff = {
      url: "processor.php?action=showdiscert",
      type: "post",
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp,
    };
    $.ajax(staff);
  });

  $(".showdiscert").submit(function (e) {
    e.preventDefault();
    // before();
    // var id = $(this).attr('id');
    var staff = {
      url: "processor.php?action=showdiscert",
      type: "post",
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp,
    };
    $.ajax(staff);
  });

  $(".settdate").submit(function (e) {
    e.preventDefault();
    // before();
    // var id = $(this).attr('id');
    var staff = {
      url: "processor.php?action=settdate",
      type: "post",
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp,
    };
    $.ajax(staff);
  });

  $(".showdisquiz").submit(function (e) {
    e.preventDefault();
    // before();
    // var id = $(this).attr('id');
    var staff = {
      url: "processor.php?action=showdisquiz",
      type: "post",
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp,
    };
    $.ajax(staff);
  });

  $(".showcredit").submit(function (e) {
    e.preventDefault();
    // before();
    // var id = $(this).attr('id');
    var staff = {
      url: "processor.php?action=showcredit",
      type: "post",
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp,
    };
    $.ajax(staff);
  });

  $(".showcreditconfirm").submit(function (e) {
    e.preventDefault();
    // before();
    // var id = $(this).attr('id');
    var staff = {
      url: "processor.php?action=showcreditconfirm",
      type: "post",
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp,
    };
    $.ajax(staff);
  });

  // register

  $(".register").submit(function (e) {
    e.preventDefault();

    var staff = {
      url: "processor.php?action=register",
      type: "post",
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp,
    };
    $.ajax(staff);
  });


  $(".bene").submit(function (e) {
    e.preventDefault();

    var staff = {
      url: "processor.php?action=bene",
      type: "post",
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp,
    };
    $.ajax(staff);
  });

  $(".staff").submit(function (e) {
    e.preventDefault();

    var staff = {
      url: "processor.php?action=staff",
      type: "post",
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp,
    };
    $.ajax(staff);
  });

  $(".rate").submit(function (e) {
    e.preventDefault();

    var staff = {
      url: "processor.php?action=rate",
      type: "post",
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp,
    };
    $.ajax(staff);
  });

  $(".event").submit(function (e) {
    e.preventDefault();

    var staff = {
      url: "processor.php?action=event",
      type: "post",
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp,
    };
    $.ajax(staff);
  });


  $(document).on("click", ".attend", function (e) {
    e.preventDefault();

    Swal.fire({
      title: "Are you sure?",
      text: "You want to confirm attendance",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, Mark Attendance!",
    }).then((result) => {
      if (result.isConfirmed) {
        var staff = {
          url: "processor.php?action=attend",
          type: "post",
          data: { id: $(this).attr("id") },

          beforeSend: before,
          success: resp,
        };
        $.ajax(staff);

      }
    });
  });

  $(document).on("click", ".payme", function (e) {
    e.preventDefault();

    Swal.fire({
      
      title: "Are you sure?",
      text: "You won't be able to revert this!",
      icon: "warning",
      
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, Renew!",
    }).then((result) => {
      if (result.isConfirmed) {
        var staff = {
          url: "processor.php?action=payrenewal",
          type: "post",
          data: { id: $(this).attr("id") },

          beforeSend: before,
          success: resp,
        };
        $.ajax(staff);

      }
    });
  });

  $(document).on("click", ".delme", function (e) {
    e.preventDefault();

    Swal.fire({
      title: "Are you sure?",
      text: "You won't be able to revert this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, Delete User!",
    }).then((result) => {
      if (result.isConfirmed) {
        var staff = {
          url: "processor.php?action=dele",
          type: "post",
          data: { id: $(this).attr("id") },
     
          beforeSend: before,
          success: resp,
        };
        $.ajax(staff);
        Swal.fire("Deleted!", "Your file has been deleted.", "success");
      }
    });
  });


  $(".changepass").submit(function (e) {
    e.preventDefault();
    // before();
    // var id = $(this).attr('id');
    var staff = {
      url: "processor.php?action=changepass",
      type: "post",
      data: new FormData(this),
      cache: false,
      contentType: false,
      processData: false,
      beforeSend: before,
      success: resp,
    };
    $.ajax(staff);
  });
});
