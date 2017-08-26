;(function(doc,win){
	var Matrix = function() {
		this.init();
		this.createCanvas();
		this.loopDraw();	
	}

	Matrix.prototype = {

		constructor:Matrix,
		viewport:0,
		context:0,
		_body:0,
		w:0,
		h:0,

		//初始化成员属性值
		init:function() {
			this.viewport = doc.createElement('canvas');
			this.context = 0;
			this._body = doc.getElementsByTagName('body')[0];
			this.w = document.documentElement.clientWidth;
			this.h = document.documentElement.clientHeight;
		},
	
		createCanvas:function(){	
			this._body.appendChild(this.viewport);
			this._body.style.backgroundColor = '#000';
			this._body.style.overflow = 'hidden';
			this.viewport.width = this.w;
			this.viewport.height = this.h;
			this.context = this.viewport.getContext('2d');
		},

		loopDraw:function(){
			var fontSizes = 16;
			var fontColors = '#0f0';
			var arr = [];
			var w = this.w;
			var h = this.h;
			var context = this.context;
			for(var i =0;i<this.w/fontSizes;i++){
				arr[i]=1;
			}
			function prints(){
				context.fillStyle = 'rgba(0,0,0,0.1)';
				context.fillRect(0,0,w,h);
				context.fillStyle = fontColors;
				context.font=fontSizes + "px Calibri";
				for(var n =0;n<arr.length;n++) {
					//写出数字
					context.fillText(Math.floor(Math.random()*2),n*fontSizes,arr[n]*(fontSizes+6));
					//重新渲染数字，有断断续续的感觉
					if(arr[n]*(fontSizes+6)>2/3*h&&Math.random()>0.78) {
						arr[n] = 0;
					}
					arr[n]++;
				}
			}
			setInterval(prints,50);
		}
	}
	win.Matrix = Matrix;
})(document,window);

window.onload = function() {
	new Matrix();
}