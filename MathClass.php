<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Operations</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 2rem;
        }
        div{
            display: flex;
            flex-direction: column;
        }
    </style>
    <script>
        function calculate()
        {
            var x = document.getElementById('x-value').value;
            var y = document.getElementById('y-value').value;
            var operation = document.getElementById('Operation').value;
            var req = new XMLHttpRequest();
            req.open("GET","calculator.php?x="+x+"&y="+y+"&op="+operation,true);
            req.send();
            req.onreadystatechange = function ()
            {
                if(req.readyState==4 && req.status == 200)
                {
                    // alert(req.responseText);
                    document.getElementById('output').innerHTML = req.responseText;
                }
            }
        }
    </script>
</head>

<body>
    <form>
        <h1>Math Operations</h1>
        <div>
            <label for="x-value">Enter Value X </label>
            <input type="number"  id="x-value">
        </div>
        <div>
            <label for="y-value">Enter Value Y </label>
            <input type="number"  id="y-value">
        </div>
        <div>
            <label for="operation">Select an Operation</label>
            <select  id="Operation">
                <option value="add">ADD(X+Y)</option>
                <option value="power">POWER(X^Y)</option>
                <option value="subtract">SUBTRACT(X-Y)</option>
                <option value="multiply">MULTIPLY(X*Y)</option>
                <option value="fact">FACTORIAL(X!)</option>
                <option value="fact-series">FACTORIAL SERIES(X!)</option>
            </select>
        </div>
        <input type="button" value="Get result" onclick="calculate()">
        <h1>Output</h1>
        <h3 id='output'></h3>
    </form>
</body>

</html>