<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>KimTrong</title>

	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="./css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<script>
		var position = 1;
		let oldPosition = 1;
		
		function hideHomePage() {
			let pageH = document.getElementsByClassName("page-h")[0];
			var element = document.getElementById("home-page");
			element.classList.add("home-page-none");
			setTimeout(function () {
				let pageH = document.getElementsByClassName("page-h")[0];
				pageH.style.display = 'block';

				let body = document.getElementsByTagName("body")[0];
				body.style.overflow = 'scroll';
				body.style.overflowX = 'hidden';
			}, 1000);

		}

		function showHomePage() {
			var pageH = document.getElementsByClassName("page-h")[0];
			pageH = pageHLocal;
			pageH.classList.add("page-h-none");
			setTimeout(() => {
				pageH.parentNode.removeChild(pageH);
			}, 1000)

			var element = document.getElementById("home-page");
			element.classList.remove("home-page-none");

			let body = document.getElementsByTagName("body")[0];
			body.style.overflow = 'hidden';
		}

		function scrollNext(positionParam = -1) {
			oldPosition = position
			if (positionParam == -1) {
				if (position == 3) {
					position = 1;
				} else position++;
			} else {
				position = positionParam;
			}

			/////////////////////////////////////////
			if (oldPosition == 2 && position == 1) {
				let layer3 = document.getElementById('layer3')
				layer3.classList.remove('img-bg3-active')
				layer3.classList.add('img-bg3-unactive')

				let bannerText = document.getElementsByClassName('bannerText')[0]
				bannerText.classList.remove('bannerText-hide')

				let layer1 = document.getElementById('layer1')
				layer1.style.filter = 'none'

				let layer2 = document.getElementById('layer2')
				layer2.style.filter = ' none'
			}

			if (oldPosition == 3 && position == 1) {
				let layer3 = document.getElementById('layer3')
				layer3.classList.remove('img-bg3-active')
				layer3.classList.remove('img-bg3-hide')

				let bannerText = document.getElementsByClassName('bannerText')[0]
				bannerText.classList.remove('bannerText-hide')

				let layer1 = document.getElementById('layer1')
				layer1.style.filter = 'none'
				layer1.classList.remove('img-bg-active')

				let layer2 = document.getElementById('layer2')
				layer2.style.filter = ' none'
				layer2.classList.remove('img-bg2-hide')
			}
			//////////////////////////////////////////////
			if (oldPosition == 1 && position == 2) {
				let layer3 = document.getElementById('layer3')
				layer3.classList.add('img-bg3-active')
				//layer3.classList.remove('img-bg3-unactive')

				let bannerText = document.getElementsByClassName('bannerText')[0]
				bannerText.classList.add('bannerText-hide')

				let layer1 = document.getElementById('layer1')
				layer1.style.transition = '1s'
				layer1.style.filter = ' blur(5px)'

				let layer2 = document.getElementById('layer2')
				layer2.style.transition = '1s'
				layer2.style.filter = ' blur(5px)'
			} else if (oldPosition == 3 && position == 2) {
				let layer1 = document.getElementById('layer1')
				layer1.classList.remove('img-bg-active')
				layer1.style.filter = ' blur(5px)'

				let layer2 = document.getElementById('layer2')
				layer2.classList.remove('img-bg2-hide')
				layer2.style.filter = ' blur(5px)'

				let layer3 = document.getElementById('layer3')
				layer3.classList.remove('img-bg3-hide')

			}
			/////////////////////////////////////////////////////////
			if (oldPosition == 2 && position == 3) {
				let layer3 = document.getElementById('layer3')
				layer3.classList.add('img-bg3-hide')

				let layer2 = document.getElementById('layer2')
				layer2.classList.add('img-bg2-hide')
				layer2.style.filter = 'none'

				let layer1 = document.getElementById('layer1')
				layer1.classList.add('img-bg-active')
				layer1.style.filter = 'none'

			} else if (oldPosition == 1 && position == 3) {
				//play layer 3
				let layer3 = document.getElementById('layer3')
				layer3.classList.add('img-bg3-active')

				let bannerText = document.getElementsByClassName('bannerText')[0]
				bannerText.classList.add('bannerText-hide')

				let layer1 = document.getElementById('layer1')
				layer1.style.transition = '1s'
				layer1.style.filter = ' blur(5px)'

				let layer2 = document.getElementById('layer2')
				layer2.style.transition = '1s'
				layer2.style.filter = ' blur(5px)'

				//play layer 2
				setTimeout(function () {
					let layer3 = document.getElementById('layer3')
					layer3.classList.add('img-bg3-hide')

					let layer2 = document.getElementById('layer2')
					layer2.classList.add('img-bg2-hide')

					let layer1 = document.getElementById('layer1')
					layer1.classList.add('img-bg-active')
					layer1.style.filter = 'none'
				}, 1000)
			}


			//active item step left
			let itemStep = document.getElementsByClassName("item-step");
			for (let index = 0; index < itemStep.length; index++) {
				itemStep[index].classList.remove('item-step-active');
			}
			itemStep[position - 1].classList.add('item-step-active');
		}

		$(document).ready(function () {
			//scrollNext(0)
			// var cursor = document.createElement("div");
			// cursor.classList.add("cursor");
			// document.getElementById('home-page').appendChild(cursor);

			// var ul_menu = document.getElementById("ul_menu");
			// ul_menu.innerHTML = "";
			// listContent.forEach((element, index) => {
			// 	ul_menu.innerHTML += '<li> <a class="item-menu-header" href="#" onclick="scrollNext(' + index + ')">' + element.textH2 + '</a></li>';
			// });

			// function move(obj, event) {
			// 	obj.style = "";
			// 	obj.style.top = event.clientY + "px";
			// 	obj.style.left = event.clientX + "px";
			// }

			// if (cursor) {
			// 	window.addEventListener("mousemove", function (event) {
			// 		var e = event;
			// 		var c = cursor;
			// 		move(c, e);
			// 	});
			// }
		});

	</script>

</head>

<body onscroll="scrollPage()">

	<div id="home-page">
		<div class="header active-menu">
			<h2 class="logo">BeeLieve</h2>
			<div class="togle-menu">Menu</div>
			<ul id="ul_menu" class="">
				<li>
					<a class="item-menu-header" href="#">About Us</a>
				</li>
				<li>
					<a class="item-menu-header" href="#">Our work</a>
				</li>
				<li>
					<a class="item-menu-header" href="#">News/Events</a>
				</li>
				<li>
					<a class="item-menu-header" href="#">Careers</a>
				</li>
			</ul>
		</div>

		<div class='wrap-step'>
			<div class="item-step item-step-active" onclick="scrollNext(1)">
				1
			</div>
			<div class="item-step" onclick="scrollNext(2)">
				2
			</div>
			<div class="item-step" onclick="scrollNext(3)">
				3
			</div>
			<div class="line"></div>
		</div>

		<section id="layer1" class="img-bg img-bg1">

			<div class="element2"></div>
		</section>
		<section id="layer2" class="img-bg img-bg2"></section>
		<section id="layer3" class="img-bg img-bg3">
			<div class="bannerText">
				<h2 id="textH2-id" class="textH2">Nous croyons à</h2><br>
				<center><a class="btn-getstarted" onclick="hideHomePage()">About us</a></center>
			</div>
		</section>


		<div class="button-bottom" onclick="scrollNext()">
			<div class="arrow">></div>
		</div>

		<script>
			let layer1 = document.getElementById('layer1')
			let layer2 = document.getElementById('layer2')
			let layer3 = document.getElementById('layer3')
			$('#home-page').mousemove(function (e) {
				var movex1 = (e.pageX * -0.05 / 25);
				var movex2 = (e.pageX * -0.1 / 25);
				var movex3 = (e.pageX * -0.2 / 25);

				$('#layer1').css('background-position', movex1 + 'px ')
				$('#layer2').css('background-position', movex2 + 'px ')
				$('#layer3').css('background-position', movex3 + 'px ')
			})

			// $(document).ready(function () {
			// 	"use strict"
			// 	$("#img-bg-id").ripples({
			// 		dropRadius: 10,
			// 		perturbance: 0.01
			// 	})
			// });

			let allowScroll=true
			$(document).bind('mousewheel', function (evt) {
				if(allowScroll==true){
					allowScroll=false
					let delta = evt.originalEvent.wheelDelta
					if(delta>0){
						if(position==1)
						 scrollNext(3)
						else scrollNext(position-1)
					} 
					else scrollNext(-1)
					setTimeout(function(){
						allowScroll=true
					},1000)
				}
			})

		</script>

	</div>
</body>

</html>