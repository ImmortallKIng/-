<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script type="text/javascript" src="assets/jquery-validation-1.19.3/dist/jquery.validate.min.js"></script>
    <link rel="stylesheet" href="assets/datepicker/css/datepicker.min.css">
    <script src="assets/datepicker/js/datepicker.min.js"></script>
    <script src="script.js"></script>
    <title>TestProject</title>
  </head>
  <body>
    <form id="mainForm" enctype="multipart/form">
      <div id="header">
        <img src="iq_dev.png" alt="лого" id="logo">
        <p id="headerText">Deposit Calculator</p>
      </div>
      <div id="main">
        <p id="head">Депозитный калькулятор</p>
        <p id="text">Калькулятор депозитов позволяет рассчитать ваши доходы после внесения суммы на счет в банке по
          опредленному тарифу.</p>
        <select name="select" id="select">
          <option value="0">месяц</option>
          <option value="1">год</option>
        </select>
        <input type="number" placeholder="Сумма пополнения вклада" value="0" id="depositAmount" name="depositAmount" hidden >
        <input type="number" placeholder="Срок вклада" value="" id="term" name="term" required >
        <input type="number" placeholder="Процентная ставка, % годовых" value="" id="percent" name="percent" required >
        <input type="number" autofocus placeholder="Сумма вклада" value="" id="sum" name="sum" required>
        <input type="text"   placeholder="Дата откытия"  class="datepicker-here" value="" id="startDate" name="startDate" required >
        <input type="checkbox" id="isDepositAmount" name="isDepositAmount" onclick="hide();">
        <input type="button" id="submit" name="submit" value="Рассчитать" onclick="validateForm(); viewProfits(response);">
        <p id="checkboxText">Ежемесячное пополнение вклада</p>

        <div id="line" hidden></div>
        <p id="sumText" hidden>Сумма к выплате</p>
        <input id="finalSum" type="text" disabled hidden>


      </div>
    </form>
  </body>
</html>
