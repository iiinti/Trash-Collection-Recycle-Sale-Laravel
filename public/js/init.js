(function ($) {
    $(function () {
        $(".sidenav").sidenav();
        // $('.parallax').parallax();
        // $(".dropdown-trigger").dropdown({ hover: true });
        // $('.modal').modal();
        // $('select').formSelect();
        // $('.tooltipped').tooltip();
        // $('.datepicker').datepicker();

        if (
            "ontouchstart" in document.documentElement ||
            "ontouchstart" in window ||
            navigator.MaxTouchPoints > 0 ||
            navigator.msMaxTouchPoints > 0
        ) {
            $(".dropdown-trigger").dropdown();
        } else {
            $(".dropdown-trigger").dropdown({ hover: true });
        }
        $(".fixed-action-btn").floatingActionButton();
    }); // end of document ready
})(jQuery); // end of jQuery name space
