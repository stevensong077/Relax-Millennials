function draw(copy,canvas,cobj,xobj,selectobj){
    this.copy=copy;
    this.canvas=canvas;
    this.cobj=cobj;
    this.xobj=xobj;
    this.selectobj=selectobj;
    this.bgcolor="#FF3333";
    this.borderColor="#FF3333";
    this.borderWidth=10;
    this.type="stroke";
    this.shapes="pen";
    this.width=canvas.width;
    this.height=canvas.height;
    this.history=[];
    this.flag=true;
}
draw.prototype= {
    init: function () {//initial
        this.xobj.css("display", "none");
        this.selectobj.css("display", "none");

        this.cobj.fillStyle = this.bgcolor;
        this.cobj.strokeStyle = this.borderColor;
        this.cobj.lineWidth = this.borderWidth;
    },
    pen: function () {
        var that = this;
        that.init();
        that.copy.onmousemove = function () {
        };
        that.copy.onmousedown = function (e) {
            var startx = e.offsetX;
            var starty = e.offsetY;
            that.init();
            that.cobj.beginPath();
            that.cobj.moveTo(startx, starty);
            that.copy.onmousemove = function (e) {
                var endx = e.offsetX;
                var endy = e.offsetY;
                that.cobj.lineTo(endx, endy);
                that.cobj.stroke();
            };
            that.copy.onmouseup = function () {
                that.cobj.closePath();
                var data = that.cobj.getImageData(0, 0, that.width, that.height);
                that.history.push(data);
                that.copy.onmousemove = null;
                that.copy.onmouseup = null;
            }
        }
    },
    
    //eraser function
    xp: function (xobj, w, h) {
        var that = this;
        that.init();
        that.copy.onmousemove = function (e) {
            var ox = e.offsetX;
            var oy = e.offsetY;
            xobj.css({
                display: "block",
                width: w,
                height: h
            })
            var left = ox - w / 2;
            var top = oy - h / 2;
            if (left < 0) {
                left = 0;
            }
            if (left > that.width - w) {
                left = that.width - w;
            }
            if (top < 0) {
                top = 0;
            }
            if (top > that.height - h) {
                top = that.height - h;
            }
            xobj.css({
                left: left,
                top: top,
            })
        }
        that.copy.onmousedown = function () {
            that.init();
            that.copy.onmousemove = function (e) {
                var ox = e.offsetX;
                var oy = e.offsetY;
                var left = ox - w / 2;
                var top = oy - h / 2;
                if (left < 0) {
                    left = 0;
                }
                if (left > that.width - w) {
                    left = that.width - w;
                }
                if (top < 0) {
                    top = 0;
                }
                if (top > that.height - h) {
                    top = that.height - h;
                }
                xobj.css({
                    left: left,
                    top: top,
                    display: "block"
                })
                that.cobj.clearRect(left, top, w, h);
            }
            that.copy.onmouseup = function () {
                xobj.css({
                    display: "none"
                })
                that.history.push(that.cobj.getImageData(0, 0, that.width, that.height));
                that.copy.onmousemove = null;
                that.copy.onmouseup = null;
                that.xp(xobj, w, h);
            }
        }
    }
}