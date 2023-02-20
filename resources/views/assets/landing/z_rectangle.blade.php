<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.rectangle {
  height: 200px;
  width: 100vw;
  background-color: #4d2997;
}
.rectangle-white {
  height: 50px;
  width: 100vw;
  background-color: transparent;
}
.triangle-left {
	width: 0;
	height: 0;
	border-top: 0px solid transparent;
	border-left: 100vw solid #4d2997;
	border-bottom: 20vw solid transparent;
}
.triangle-right {
	width: 0;
	height: 0;
	border-bottom: 0px solid transparent;
	border-right: 100vw solid #4d2997;
	border-top: 10vw solid transparent;
}
</style>
</head>
<body>

<div class="rectangle"></div>
<div class="triangle-left"></div>

<div class="rectangle-white"></div>

<div class="triangle-right"></div>
<div class="rectangle"></div>

</body>
</html> 