$(document).ready(function() {
    searchbar = $(".search-bar");
    $(".search").on("click", function(e) {
        e.preventDefault();
        searchbar.toggleClass("hide");
    });
    $(".search-close").on("click", function() {
        searchbar.toggleClass("hide");
    });
});
