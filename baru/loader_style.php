<style>
	svg {
	  height: 0px;
	  width: 0px;
	}

	@keyframes loader {
	  50% {
	    transform: translateY(-16px);
	    background-color: #1b98e0;
	  }
	}

	.loader {
	  filter: url("#goo");
	  width: 100px;
	  margin: 0 auto;
	  position: relative;
	  top: 50vh;
	  transform: translateY(-10px);
	}
	.loader > div {
	  float: left;
	  height: 20px;
	  width: 20px;
	  border-radius: 100%;
	  background-color: #006494;
	  animation: loader 0.8s infinite;
	}

	.loader > div:nth-child(1) {
	  animation-delay: 0.16s;
	}

	.loader > div:nth-child(2) {
	  animation-delay: 0.32s;
	}

	.loader > div:nth-child(3) {
	  animation-delay: 0.48s;
	}

	.loader > div:nth-child(4) {
	  animation-delay: 0.64s;
	}

	.loader > div:nth-child(5) {
	  animation-delay: 0.8s;
	}
	.animate-bottom {
	  position: relative;
	  -webkit-animation-name: animatebottom;
	  -webkit-animation-duration: 1s;
	  animation-name: animatebottom;
	  animation-duration: 1s
	}

	@-webkit-keyframes animatebottom {
	  from { bottom:-100px; opacity:0 } 
	  to { bottom:0px; opacity:1 }
	}

	@keyframes animatebottom { 
	  from{ bottom:-100px; opacity:0 } 
	  to{ bottom:0; opacity:1 }
	}

	#myDiv {
	  display: none;
	}
</style>