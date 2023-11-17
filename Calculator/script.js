let display = document.getElementById('display');

function appendCharacter(character) {
  display.value += character;
}

function clearDisplay() {
  display.value = '';
}

function backspace() {
  display.value = display.value.slice(0, -1);
}

function calculate() {
  try {
    display.value = eval(display.value);
  } catch (error) {
    display.value = 'Error';
  }
}

function calculateSquareRoot() {
  let num = parseFloat(display.value);
  display.value = Math.sqrt(num);
}

function calculateLog() {
  let num = parseFloat(display.value);
  display.value = Math.log10(num);
}

function calculateSin() {
  let num = parseFloat(display.value);
  display.value = Math.sin((num * Math.PI) / 180);
}

function calculateCos() {
  let num = parseFloat(display.value);
  display.value = Math.cos((num * Math.PI) / 180);
}

function calculateTan() {
  let num = parseFloat(display.value);
  display.value = Math.tan((num * Math.PI) / 180);
}

// Listen for key presses
document.addEventListener('keydown', (event) => {
  const key = event.key;
  
  if (key >= '0' && key <= '9') {
    appendCharacter(key);
  } else if (key === '+' || key === '-' || key === '*' || key === '/' || key === '.') {
    appendCharacter(key);
  } else if (key === 'Enter') {
    calculate();
  } else if (key === 'Backspace') {
    backspace();
  }
});
