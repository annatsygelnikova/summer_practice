<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Violations  Database</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <a href="index.php">Запросы в бд</a>
        <a href="showtable.php">Посмотреть бд</a>
    </header>

    <h1>Violations Database</h1>

    <form action="result.php" method="post">
        <label for="query">Выберите запрос:</label>
        <select name="query" id="query">
            <option value="0" disabled selected>Выберите запрос</option>
            <option value="1">1. Вывести информацию об автомобилях конкретного года выпуска.</option>
            <option value="2">2. Вывести информацию об автомобилях, паспорта владельцев которых начинается с символа.</option>
            <option value="3">3. Вывести информацию об автомобилях, страховая стоимость которых в диапазоне.</option>
            <option value="4">4. Вывести информацию об автомобиле с заданным госномером.</option>
            <option value="5">5. Вывести информацию обо всех нарушениях ПДД в некоторый промежуток времени.</option>
            <option value="6">6. Вывести величину страхового взноса.</option>
            <option value="7">7. Вывести среднюю страховую стоимость автомобиля.</option>
            <option value="8">8. Вывести минимальную и максимальную страховую стоимость.</option>
            <option value="9">9. Вывести информацию об автомобилях со страховой стоимостью больше.</option>
        </select>
        <br>
        
        <div id="inputs"></div>

        <input type="submit" name="submit" value="submit">
    </form>

    <script>
        document.getElementById("query").addEventListener("change", function() {
            var query = this.value;
            var inputsDiv = document.getElementById("inputs");
            inputsDiv.innerHTML = "";

            if (query === "1") {
                inputsDiv.innerHTML = `
                    <label for="year">Год выпуска:</label>
                    <input type="number" name="year" id="year" min="1950" required>
                    <br>
                `;
            } else if (query === "2") {
                inputsDiv.innerHTML = `
                    <label for="symbol">Символ:</label>
                    <input type="text" name="symbol" id="symbol" required>
                    <br>
                `;
            } else if (query === "3") {
                inputsDiv.innerHTML = `
                    <label for="min_cost">Нижний диапазон:</label>
                    <input type="number" name="min_cost" id="min_cost" min="0" required>
                    <br>
                    <label for="max_cost">Верхний диапазон:</label>
                    <input type="number" name="max_cost" id="max_cost" min="0" required>
                    <br>
                `;
            } else if (query === "4") {
                inputsDiv.innerHTML = `
                    <label for="license_plate">Госномер:</label>
                    <input type="text" name="license_plate" id="license_plate" required>
                    <br>
                `;
            } else if (query === "5") {
                inputsDiv.innerHTML = `
                    <label for="min_date">Нижний диапазон:</label>
                    <input type="date" name="min_date" id="min_date" required>
                    <br>
                    <br>
                    <label for="max_date">Верхний диапазон:</label>
                    <input type="date" name="max_date" id="max_date" required>
                    <br>
                    <br>
                `;
            } else if (query === "9") {
                inputsDiv.innerHTML = `
                    <label for="min_insurance_cost">Страховая стоимость больше:</label>
                    <input type="number" name="min_insurance_cost" id="min_insurance_cost" min="0" required>
                    <br>
                `;
            }
        });

        document.addEventListener("DOMContentLoaded", function() {
            var query = document.getElementById("query").value;
            var inputsDiv = document.getElementById("inputs");

            if (query === "1") {
                inputsDiv.innerHTML = `
                    <label for="year">Год выпуска:</label>
                    <input type="number" name="year" id="year" min="1950" required>
                    <br>
                `;
            } else if (query === "2") {
                inputsDiv.innerHTML = `
                    <label for="symbol">Символ:</label>
                    <input type="text" name="symbol" id="symbol" required>
                    <br>
                `;
            } else if (query === "3") {
                inputsDiv.innerHTML = `
                    <label for="min_cost">Нижний диапазон:</label>
                    <input type="number" name="min_cost" id="min_cost" min="0" required>
                    <br>
                    <label for="max_cost">Верхний диапазон:</label>
                    <input type="number" name="max_cost" id="max_cost" min="0" required>
                    <br>
                `;
            } else if (query === "4") {
                inputsDiv.innerHTML = `
                    <label for="license_plate">Госномер:</label>
                    <input type="text" name="license_plate" id="license_plate" required>
                    <br>
                `;
            } else if (query === "5") {
                inputsDiv.innerHTML = `
                    <label for="min_date">Нижний диапазон:</label>
                    <input type="date" name="min_date" id="min_date" required>
                    <br>
                    <br>
                    <label for="max_date">Верхний диапазон:</label>
                    <input type="date" name="max_date" id="max_date" required>
                    <br>
                    <br>
                `;
            } else if (query === "9") {
                inputsDiv.innerHTML = `
                    <label for="min_insurance_cost">Страховая стоимость больше:</label>
                    <input type="number" name="min_insurance_cost" id="min_insurance_cost" min="0" required>
                    <br>
                `;
            }
        });
    </script>
</body>
</html>
