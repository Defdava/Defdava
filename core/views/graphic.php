<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Company Form</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script> 
</head>
<body>
  <div class="container" style="margin-top: 150px;">
    <div class="about-us">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="inner-content-image">
              <img src="assets/images/grafik.jpg.png" alt="">
              <div class="right-content">
                <p>The graph shows that the number of business people is increasing from year to year. This is our opportunity to help make it easier for them to combine their projects with other companies</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="profit-calculator">
      <h2>Business Profit Calculator & Converter</h2>

      <form id="profit-form">
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="revenue">Revenue:</label>
              <input type="number" id="revenue" name="revenue" placeholder="Enter total revenue" required>
            </div>

            <div class="form-group">
              <label for="expenses">Expenses:</label>
              <input type="number" id="expenses" name="expenses" placeholder="Enter total expenses" required>
            </div>

            <div class="form-group">
              <label for="convert-to">Convert To:</label>
              <select id="convert-to" name="convert-to">
                <option value="usd">USD</option>
                <option value="eur">EUR</option>
                <option value="gbp">GBP</option>
              </select>
            </div>
          </div>
        </div>

        <button type="button" class="btn btn-primary" onclick="calculateProfit()">Calculate Profit & Convert</button>
      </form>

      <div id="result" class="result">
        <h3>Profit:</h3>
        <p id="profit-value">-</p>
        <h3>Converted Profit:</h3>
        <p id="converted-profit">-</p>
      </div>
    </section>
  </div>

  <footer>
  </footer>

  <script>
    function calculateProfit() {
      // Example data sets
      const dataSets = [
        { revenue: parseFloat(document.getElementById('revenue').value), expenses: parseFloat(document.getElementById('expenses').value) }
      ];

      const convertTo = document.getElementById('convert-to').value;
      const exchangeRate = { // Replace with actual exchange rates
        "usd": 1, // Base currency (USD)
        "eur": 0.94, // Euro exchange rate
        "gbp": 0.82, // GBP exchange rate
      };

      let totalProfit = 0;
      let totalConvertedProfit = 0;

      dataSets.forEach((data, index) => {
        // Calculate profit
        const profit = data.revenue - data.expenses;
        totalProfit += profit;

        // Update profit display
        const profitElement = document.createElement('p');
        profitElement.innerHTML = `Profit ${index + 1}: ${profit}`;
        document.getElementById('profit-value').appendChild(profitElement);

        // Convert profit if selected
        if (convertTo !== "usd") {
          const convertedProfit = profit * exchangeRate[convertTo];
          totalConvertedProfit += convertedProfit;
          
          const convertedProfitElement = document.createElement('p');
          convertedProfitElement.innerHTML = `Converted Profit ${index + 1}: ${convertedProfit.toFixed(2)}`;
          document.getElementById('converted-profit').appendChild(convertedProfitElement);
        }
      });

      const totalProfitElement = document.createElement('p');
      totalProfitElement.innerHTML = `Total Profit: ${totalProfit}`;
      document.getElementById('profit-value').appendChild(totalProfitElement);

      if (convertTo !== "usd") {
        const totalConvertedProfitElement = document.createElement('p');
        totalConvertedProfitElement.innerHTML = `Total Converted Profit: ${totalConvertedProfit.toFixed(2)}`;
        document.getElementById('converted-profit').appendChild(totalConvertedProfitElement);
      }
    }
  </script>
</body>
</html>
