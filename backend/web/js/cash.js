var money = 1000.00;
var pushMoney = 0.00;
document.getElementById('moneyT').innerHTML = money;

$('.plus100').click(
	function () {
		pushMoney += 100;
		if (money < pushMoney)
			alert("Не достаточно денег");
		else
			document.getElementById('usr').value = pushMoney;
	}
);
$('.plus500').click(
	function () {
		pushMoney += 500;
		if (money < pushMoney)
			alert("Не достаточно денег");
		else
			document.getElementById('usr').value = pushMoney;
	}
);
$('.plus1000').click(
	function () {
		pushMoney += 1000;
		if (money < pushMoney)
			alert("Не достаточно денег");
		else
			document.getElementById('usr').value = pushMoney;
	}
);
$('.plusAll').click(
	function () {
		pushMoney = money;
		if (money < pushMoney)
			alert("Не достаточно денег");
		else
			document.getElementById('usr').value = pushMoney;
	}
);
$('.push').click(
	function () {
		
		if (money < pushMoney)
			alert("Минимальная сумма выплаты составляет 100 рублей");
		else{
			alert("Деньги будут зачислены в течении 2-3 часов");
			money = money - pushMoney;
			pushMoney = 0;
			money = money - pushMoney;
			document.getElementById('usr').value = pushMoney;
			document.getElementById('moneyT').innerHTML = money;
		}
	}
);

