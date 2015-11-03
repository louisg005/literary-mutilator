<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Literary Mutilator</title>
		<script src="literary-mutilator.js" type="text/javascript"></script>
	</head>
	<body>
	<div id="click" onclick="clickEvent();">
		<p>Bacon ipsum dolor amet turkey spare ribs ham, landjaeger kielbasa jerky ground round ham hock pork loin biltong kevin beef ribs turducken bresaola pancetta. Filet mignon chicken shankle, chuck capicola short ribs t-bone beef ribs. Ham hock pork belly bacon leberkas. Bresaola hamburger tri-tip, cow pork loin shank pork belly jerky meatball chicken beef kielbasa tenderloin biltong.</p>
	</div>
	<div id="mouse" onmouseover="mouseOver();" onmouseout="mouseOut();">
		<p>Sausage pastrami drumstick t-bone frankfurter cupim brisket, shankle fatback pork belly sirloin ribeye short ribs turkey. Turkey cow jerky frankfurter prosciutto pork chop. Cow tri-tip jowl alcatra short loin landjaeger. Salami venison capicola meatloaf prosciutto. Sausage landjaeger brisket bacon. Swine fatback cow bresaola pork loin tail shankle filet mignon pancetta spare ribs rump meatball. Ground round kielbasa corned beef short loin jowl pig t-bone jerky chicken leberkas.</p>
	</div>
	<div id="drag1" draggable="true" ondragstart="drag(ev)">
		<p>Chicken kielbasa turducken kevin. Pancetta shank ribeye pork chop pig biltong. Tail meatball pork chop prosciutto capicola. Drumstick bresaola ball tip sausage, pastrami turducken shoulder ham meatball shank strip steak flank. Pork loin porchetta sausage brisket. Bacon pastrami pig beef ball tip turkey shank turducken alcatra porchetta bresaola short ribs drumstick cow. Pancetta tri-tip boudin sirloin kevin ham hock landjaeger filet mignon pork frankfurter tongue beef ribs porchetta biltong.</p>
	</div>
		<div id="div1" ondrop="drop(ev)" ondragover="allowDrop(ev)">
			<img src="frying-pan.jpg" alt="frying pan">
		</div>
	</body>
</html>