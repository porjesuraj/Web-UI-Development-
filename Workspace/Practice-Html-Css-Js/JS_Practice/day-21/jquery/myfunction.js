function changeH1()
{
    const newH1 = document.getElementById('my-h1')
    newH1.innerHTML = `changed h1`
}
function add()
{
    const number1 = parseFloat(document.getElementById('num1').value)
    const number2 = parseFloat(document.getElementById('num2').value) 

   const answer = parseFloat(number1 + number2)
   const result = document.getElementById('result').innerHTML = `result = ${answer}`
}


function showAlert()
{
    alert('there is a alert')
}