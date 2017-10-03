var input = [1, 2, 3, 4, 5, 6];
function isEven(x) {return x % 2 == 0;};

function filter(arr, fn) {
	var output = [];
	for(var i = 0; i < arr.length; i++) {
		if(fn(arr[i])) {
			output.push(arr[i]);
		}
	}
return(output);
};

console.log(filter(input, isEven));
document.write('<hr>Результат функции "filter": [' + filter(input, isEven) + ']');