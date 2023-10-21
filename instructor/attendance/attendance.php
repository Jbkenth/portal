<?php include('server.php')?>
<!DOCTYPE html>
<html>
<head>
  <title>Attendance by JBKENTH</title>
  <meta name="viewport" content="width=device-width, initial-scale=0.5, maximum-scale=0.5, user-scalable=no" />
  <link rel="stylesheet" type="text/css" href="ken.css" />
</head>
<body>
<h1 class="at">ATTENDANCE SHEET</h1>
<p class="at"><i>by JBKENTH</i></p>
  <input type="radio" class="radio"onclick="enable()" />
  <label class="radio">Click to Open</label>
<table style="border:1px solid black">
  <tr>
    <td class="up"><b>NAME</b></td>
    <td class="up"><select>
      <option disabled selected hidden>Month</option>
      <option value="January">January</option>
        <option value="February">February</option>
        <option value="March">March</option>
        <option value="April">April</option>
        <option value="May">May</option>
        <option value="June">June</option>
        <option value="July">July</option>
        <option value="August">August</option>
        <option value="September">September</option>
        <option value="October">October</option>
        <option value="November">November</option>
        <option value="December">December</option>
    </select>
      <select>
        <option disabled selected hidden>Day</option>
        <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>
          <option value="13">13</option>
          <option value="14">14</option>
          <option value="15">15</option>
          <option value="16">16</option>
          <option value="17">17</option>
          <option value="18">18</option>
          <option value="19">19</option>
          <option value="20">20</option>
          <option value="21">21</option>
          <option value="22">22</option>
          <option value="23">23</option>
          <option value="24">24</option>
          <option value="25">25</option>
          <option value="26">26</option>
          <option value="27">27</option>
          <option value="28">28</option>
          <option value="29">29</option>
          <option value="30">30</option>
          <option value="31">31</option>
      </select>
      <select>
        <option disabled selected hidden>Year</option>
        <option value="2030">2030</option>
          <option value="2029">2029</option>
          <option value="2028">2028</option>
          <option value="2027">2027</option>
          <option value="2026">2026</option>
          <option value="2025">2025</option>
          <option value="2024">2024</option>
          <option value="2023">2023</option>
        </select>
    </td>
  </tr>
  <tr>
    <td class="n">Balutan, John Kenneth O.</td>
    <td class="c"><input type="checkbox" name="a" id="a" value="1" disabled=""/></td>
    </tr>
  <tr>
    <td class="n">Dela Cerna, John Cloud</td>
    <td class="c"><input type="checkbox" name="a2" id="a2" value="1" disabled=""/></td>
    </tr>
  <tr>
    <td class="n">Dela Cruz, Vismark</td>
    <td class="c"><input type="checkbox" name="a3" id="a3" value="1" disabled=""/></td>
    </tr>
  <tr>
    <td class="n">Ledon, Fel John</td>
    <td class="c"><input type="checkbox" name="a4" id="a4" value="1" disabled=""/></td>
    </tr>
</table>
  <script src="ken2.js"></script>
</body>
</html>