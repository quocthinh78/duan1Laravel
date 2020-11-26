$(document).ready(function() {
    // Activate Carousel


    // Enable Carousel Indicators
    $(".item1").click(function() {
        $("#carouselExampleIndicators").carousel(0);
    });
    $(".item2").click(function() {
        $("#carouselExampleIndicators").carousel(1);
    });
    $(".item3").click(function() {
        $("#carouselExampleIndicators").carousel(2);
    });
    $(".item4").click(function() {
        $("#carouselExampleIndicators").carousel(3);
    });
    $(".left").click(function() {
        $("#carouselExampleIndicators").carousel("prev");
    });
    $(".right").click(function() {
        $("#carouselExampleIndicators").carousel("next");
    });
    // Enable Carousel Controls
});