var cars = ["orange", "red", "green", "blue", "white", "yellow", "pink"];
var group = document.querySelector("#cars");

var circ = ""
cars.map(function(car, i) {
	let speed = Math.random() * .9 + 5;
	circ += `<g id="car${i}" style="color: ${car}">
<use xlink:href="#F1CAR">
    <animateMotion begin="0.1s" dur="${speed}s" repeatCount="indefinite" rotate="auto">
      <mpath xlink:href="#path"/>
    </animateMotion>
</use>
</g>`
})
group.innerHTML = circ;
