const span = document.querySelector(".typewriter");
const sentence = "Tlex Photography-Webshop";

let s = "";
let deleting = false;

function typewriter(index) {
	let timeoutID;

	s = sentence.substring(0, index);

	span.innerHTML = `${s}`;

	if (!deleting) {
		timeoutID = setTimeout(() => typewriter(index + 1), 500);
	}
	if (!deleting && s.length === sentence.length) {
		clearTimeout(timeoutID);
		timeoutID = null;
		deleting = true;
	}
	if (deleting) {
		timeoutID = setTimeout(() => typewriter(index - 1), 500);
	}
	if (deleting && s.length === 0) {
		clearTimeout(timeoutID);
		timeoutID = null;
		deleting = false;
		setTimeout(() => typewriter(index + 1), 500);
	}
}

typewriter(0);
