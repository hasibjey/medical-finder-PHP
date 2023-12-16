$(document).ready(function() {

    // admin navigation
    $('.admin-img').on('click', function() {
        $(".admin-nav").toggleClass('admin-nav-active');
    })

    $(document).on("click", function (e) {
      if (
        $(".admin-img").is(e.target) ||
        $(".admin-nav").is(e.target) ||
        $(".admin-list").children("img").is(e.target) ||
        $(".admin-link").is(e.target) ||
        $(".admin-link").children("i").is(e.target)
      ) {
      } else {
        $(".admin-nav").removeClass("admin-nav-active");
      }
    });




});