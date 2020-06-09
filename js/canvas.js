$(function() {
    var box = $(".box");
    var copy = $(".copy");
    var canvas = $("canvas");
    var cobj = canvas[0].getContext("2d");
    document.getElementsByClassName("color-item");
    var aColorBtn = document.getElementsByClassName("color-item");
    getColor();

    canvas.attr({
        width: box.width(),
        height: box.height()
    })

    $(".parent").hover(function() {
        $(this).find(".son").finish();
        $(this).find(".son").slideDown(200);
        this.style.background = "orange";
    }, function() {
        $(this).find(".son").finish();
        $(this).find(".son").slideUp(200);
        this.style.background = "rgb(190, 228, 245)";
    })

    var obj = new draw(copy[0], canvas[0], cobj, $(".xp"), $(".selectarea"));

    //paint type:
    $(".tool").click(function() {
        obj.pen();
    })

    //fill size
    $(".size ").find(".son li input").click(function() {
        obj.borderWidth = this.value;
    })

    //eraser
    $(".xpc li").click(function() {
        var w = $(this).attr("data-role");
        var h = $(this).attr("data-role");
        obj.xp($(".xp"), w, h);
    })

    //choose the color
    function getColor() {
        for (let i = 0; i < aColorBtn.length; i++) {
            aColorBtn[i].onclick = function() {
                for (let i = 0; i < aColorBtn.length; i++) {
                    aColorBtn[i].classList.remove("active");
                    this.classList.add("active");
                    activeColor = this.style.backgroundColor;
                    obj.borderColor = activeColor;
                }
            }
        }
    }


})