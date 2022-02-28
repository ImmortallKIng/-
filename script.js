function hide() {
  if (document.getElementById("isDepositAmount").checked == true){
      document.getElementById("depositAmount").hidden = false;
      document.getElementById("depositAmount").required = true;
}
  else {document.getElementById("depositAmount").hidden = true;
        document.getElementById("depositAmount").required = false;
        }
}

function viewProfits(response) {
  console.log(response);
  var finalSum = JSON.parse(response);
  document.getElementById("line").hidden = false;
  document.getElementById("sumText").hidden = false;
  document.getElementById("finalSum").hidden = false;
  document.getElementById("finalSum").value = "₽ " + finalSum;

}

function validateForm() {
  if ($('#select').val() == 1) {
    if (($('term').val() > 5) || ($('term').val() < 0))
      alert("срок вклада не должен превышать 60 месяцев");
  }

  if ($('#select').val() == 0) {
    if (($('term').val() > 60) || ($('term').val() < 0))
      alert("срок вклада не должен превышать 60 месяцев");
  }

  var validator = $('#mainForm').validate({
    rules: {
      sum: {
        required: true,
        digits: true,
        range: [1000, 3000000]
      },
      depositAmount: {
        required: true,
        digits: true,
        range: [0, 3000000]
      },
      percent: {
        required: true,
        digits: true,
        range: [3, 100]
      },
      term: {
        required: true,
        digits: true,
        range: [1,60]
      }
    },
    messages: {
      sum: {
        required: "Это поле обязательно",
        digits: "Ведите целое число",
        range: "Сумма должна быть от 1000 до 3000000"
      },
      depositAmount: {
        required: "Это поле обязательно",
        digits: "Ведите целое число",
        range: "Пополнение должно быть от 0 до 3000000"
      },
      percent: {
        required: "Это поле обязательно",
        digits: "Ведите целое число",
        range: "Процент должены быть от 3 до 100"
      },
      term: {
        required: "Это поле обязательно",
        digits: "Ведите целое число",
        range: "Общее колличество месяцев должно быть не более 60-и"
      }
    }
  });

  if (!validator.form()) {
    validator.showErrors();
    return;
  }

  $.ajax({
    url: 'calc.php',
    method: 'post',
    data: $('#mainForm').serialize() + $('#select').val(),
    success: response => viewProfits(response)
  });
}
