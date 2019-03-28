<?php
//1 - Faça um programa que verifique e mostre os números entre 1.000 e 2.000 (inclusive) que, quando divididos por 11,produzam resto igual a 5.
	echo "</br></br> Exercicio 1 </br>";
	$num1 = 1000;


	for ($i=1000; $i <= 2000; $i++) {
		if ($i % 11 == 5);		 
		

		print $i;	
	
}

?>

<?php
//2 - Faça um programa que leia u mvalor n, inteiro e positivo, calcule e mostre a seguinte soma: s = 1 + 1/2 + 1/3 + 1/4 ... + 1/n.
	echo "</br></br> Exercicio 2 </br>";
		$n = 2;
		$s = 1+(1/2)+(1/3)+(1/4)+(1/$n);

	echo $s;
	echo "<br>"	

?>

<?php
//Exercicio3
	echo "</br></br> Exercicio 3 </br>";
 	for ($i = 0; $i <= 10; $i++) {
 	   for($a= 0 ; $a <= 10 ; $a++){
 	     echo "$i * $a =". $i*$a ."</br>";      
    }    
		  echo "</br>";
	}
?>

<?php	
//4 - Faça um programa que leia cinco grupos de quatro valores (A,B,C,D) e mostre-os na ordem lida. em seguida, mostre-os na ordem lida. Em seguida, mostre-os em ordem crescente e decrescente.
	echo "</br></br> Exercicio 4 </br>";

	$grupo1 = [5,10,7,2];
	$grupo2 = [5,25,7,35];
	$grupo3 = [5,11,3,4];
	$grupo4 = [5,8,6,50];
	$grupo5 = [5,40,2,1];

	//Grupo 1
	echo "Grupo 1 Ordem Normal: ".json_encode($grupo1)."<br>";
	sort($grupo1);
	echo "Grupo 1 Ordem Crescente: ".json_encode($grupo1)."<br>";
	rsort($grupo1);
	echo "Grupo 1 Ordem Decrescente: ".json_encode($grupo1)."<br>";

	//Grupo 2
	echo "</br>Grupo 2 Ordem Normal: ".json_encode($grupo2)."<br>";
	sort($grupo2);
	echo "Grupo 2 Ordem Crescente: ".json_encode($grupo2)."<br>";
	rsort($grupo2);
	echo "Grupo 2 Ordem Decrescente: ".json_encode($grupo2)."<br>";

	//Grupo 3
	echo "</br>Grupo 3 Ordem Normal: ".json_encode($grupo3)."<br>";
	sort($grupo3);
	echo "Grupo 3 Ordem Crescente: ".json_encode($grupo3)."<br>";
	rsort($grupo3);
	echo "Grupo 3 Ordem Decrescente: ".json_encode($grupo3)."<br>";

	//Grupo 4
	echo "</br>Grupo 4 Ordem Normal: ".json_encode($grupo4)."<br>";
	sort($grupo4);
	echo "Grupo 4 Ordem Crescente: ".json_encode($grupo4)."<br>";
	rsort($grupo4);
	echo "Grupo 4 Ordem Decrescente: ".json_encode($grupo4)."<br>";

	//Grupo 5
	echo "</br>Grupo 5 Ordem Normal: ".json_encode($grupo5)."<br>";
	sort($grupo5);
	echo "Grupo 5 Ordem Crescente: ".json_encode($grupo5)."<br>";
	rsort($grupo5);
	echo "Grupo 5 Ordem Decrescente: ".json_encode($grupo5)."<br>";

?>

<?php
//5 - Uma loja tem 15 clientes cadastrados e deseja enviar uma correspondência a cada um deles anunciando um bônus especial.Faça um programa que leia o nome do cliente e o valor de suas compras no ano passado. Calcule e mostre um bônus de 10% se o valor das compras for menor que R$1.000 e de 15% caso contrário.
	echo "</br></br> Exercicio 5 </br>";
		$nomes = ["Nathaniel","Blair","Daniel","Serena","Rachel","Joy",
			  "Chandler","Monica","Ross","Eleven","Mike","Will",
			  "Dustin","Finn","Samanta"];

		$compras = rand(0,2000);

			if($compras < 1000){

		echo $nomes[array_rand($nomes)].", ganhou 10% de bônus";
			}else{

		echo $nomes[array_rand($nomes)].", ganhou 15% de bônus";
	}


?>

<?php
//6 - Uma companhia de teatro deseja dar uma série de espetaculos. A direção calcula que R$5,00 o ingresso, serão vendidos 120 ingressos, e que as despesas serão R$200,00. Diminuindo-se R$0,50 o preço dos ingressos espera-se que as vendas aumentem em 26 ingressos.
// Faça um programa que escreva uma tabelade valores e lucros esperando em funçao do preço do ingresso, fazendo-se variar esse preço R$5,00 a R$1,00 de R$0,50 em R$0,50.Escreva, ainda olucro máximo esperado, o preço do ingresso e a quantidade de ingressos vendidos para a obtenção desse lucro.
	echo "</br></br> Exercicio 6 </br>";


?>


<?php
	//Exercicio 7
	echo "</br></br> Exercicio 7 </br>";

	$idades = [1,5,9,12,18,24,35,40,45,50];
	$contadorMaior = 18; 
	$contadorMenor = 17;

	for($i=0; $i < 10; $i++){
		if($idades[$i] >= 18){
			$contadorMaior++;
		}if
			($idades[$i] < 18){
			$contadorMenor++;
		}
	}
	echo $idades[array_rand($idades)].",Maior de idade";
	
?>


<?php
//Exercicio 8 
echo "</br></br> Exercicio 8 </br>";

	$idades2 = [5,15,16,25,30,31,45,46,61,62];
	$f1 = 0;
	$f2 = 0;
	$f3 = 0;
	$f4 = 0;
	$f5 = 0;

	for($i=0; $i < 10; $i++){
		if($idades2[$i] <= 15){
			$f1++;
		}else if($idades2[$i] >= 16 && $idades2[$i] <= 30){
			$f2++;
		}else if($idades2[$i] >= 31 && $idades2[$i] <= 45){
			$f3++;
		}else if($idades2[$i] >= 46 && $idades2[$i] <= 60){
			$f4++;
		}else if($idades2[$i] > 61){
			$f5++;
		}
	}

	echo "Total de pessoas na 1° Faixa Etária: <br> ".$f1;
	echo "Total de pessoas na 2° Faixa Etária: <br> ".$f2;
	echo "Total de pessoas na 3° Faixa Etária: <br> ".$f3;
	echo "Total de pessoas na 4° Faixa Etária: <br> ".$f4;
	echo "Total de pessoas na 5° Faixa Etária: <br> ".$f5;
	echo "Porcentagem 1° Faixa Etária: <br> ". $f1/15;
	echo "Porcentagem 5° Faixa Etária: <br> ". $f5/15;

	echo "<br><br>";

?>
 
 <?php 
 //Exercicio 9
	echo "<b></br></br> Exercicio 9 </br></br></b>";
	
	$n1 = rand(0,10);
	switch ($n1) {
    case 0:
    	for ($x = 0; $x <= 0; $x++) {  
			echo "<br>";	
			echo "Número: ".$n1."</br>";	
			for($y = 0; $y <= 10; $y++){ 	
				echo "$x x $y = ".$x*$y."<br>"; 
			}
		}
    break;
    case 1:
       for ($x = 1; $x <= 1; $x++) {  
			echo "<br>";		
			echo "Número: ".$n1."</br>";	
			for($y = 0; $y <= 10; $y++){ 	
				echo "$x x $y = ".$x*$y."<br>"; 
			}
		}
    break;
    case 2:
       for ($x = 2; $x <= 2; $x++) {  
			echo "<br>";		
			echo "Número: ".$n1."</br>";	
			for($y = 0; $y <= 10; $y++){ 	
				echo "$x x $y = ".$x*$y."<br>"; 
			}
		}
    break;
    case 3:
       for ($x = 3; $x <= 3; $x++) {  
			echo "<br>";	
			echo "Número: ".$n1."</br>";		
			for($y = 0; $y <= 10; $y++){ 	
				echo "$x x $y = ".$x*$y."<br>"; 
			}
		}
    break;
    case 4:
       for ($x = 4; $x <= 4; $x++) {  
			echo "<br>";	
			echo "Número: ".$n1."</br>";		
			for($y = 0; $y <= 10; $y++){ 	
				echo "$x x $y = ".$x*$y."<br>"; 
			}
		}
    break;
    case 5:
       for ($x = 5; $x <= 5; $x++) {  
			echo "<br>";	
			echo "Número: ".$n1."</br>";		
			for($y = 0; $y <= 10; $y++){ 	
				echo "$x x $y = ".$x*$y."<br>"; 
			}
		}
    break;
    case 6:
       for ($x = 6; $x <= 6; $x++) {  
			echo "<br>";	
			echo "Número: ".$n1."</br>";		
			for($y = 0; $y <= 10; $y++){ 	
				echo "$x x $y = ".$x*$y."<br>"; 
			}
		}
    break;
    case 7:
       for ($x = 7; $x <= 7; $x++) {  
			echo "<br>";	
			echo "Número: ".$n1."</br>";		
			for($y = 0; $y <= 10; $y++){ 	
				echo "$x x $y = ".$x*$y."<br>"; 
			}
		}
    break;
    case 8:
       for ($x = 8; $x <= 8; $x++) {  
			echo "<br>";	
			echo "Número: ".$n1."</br>";		
			for($y = 0; $y <= 10; $y++){ 	
				echo "$x x $y = ".$x*$y."<br>"; 
			}
		}
    break;
    case 9:
       for ($x = 9; $x <= 9; $x++) {  
			echo "<br>";	
			echo "Número: ".$n1."</br>";		
			for($y = 0; $y <= 10; $y++){ 	
				echo "$x x $y = ".$x*$y."<br>"; 
			}
		}
    break;
    default:
       for ($x = 10; $x <= 10; $x++) {  
			echo "<br>";	
			echo "Número: ".$n1."</br>";		
			for($y = 0; $y <= 10; $y++){ 	
				echo "$x x $y = ".$x*$y."<br>"; 
			}
		}
    break;
}?>

 <?php 
   //Exercicio 11
	echo "<b></br></br> Exercicio 11 </br></br></b>";
	
	$vista = false;
	$transacoes = [100,150,200,250,330,420,500,650,850,700,950,1000,5420,1400,4000];
	if($vista == true){ 
		for($i = 0; $i < 14; $i++){
			echo "<br>Compra a vista: ".$transacoes[$i];
		}
		echo "<br>Valor TOTAL: ".array_sum($transacoes);
		echo "<br>Valor total a vista: ".array_sum($transacoes);
	}else{
		for($i = 0; $i < 14; $i++){
			echo "<br>Compra a prazo: ".$transacoes[$i]/3;
		}
		echo "<br>Valor TOTAL: ".array_sum($transacoes);
		echo "<br>Valor a prazo 3x: ".array_sum($transacoes)/3;
	}
?>

<?php
	//Exercicio 12
	echo "<b></br></br> Exercicio 12 </br></br></b>";
	$idade3 = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,65,55,50,60];
	$peso = [2,10.5,13.10,14,15,16,17,18,19.50,20,21.40,40,23,54,10,20,54,56,58,50,10,21,22,24,21];
	$altura = [2.00,1.50,1.10,1.40,1.20,1.60,1.70,1.80,1.50,2.00,1.40,1,23,2,10,2.70,1.20,1.40,2.00,1.00,1.00,2.30,2.20,2.40,2.10];
	$contadorIdade = 0;
	$contadorAltura = 0;
	for($i=0; $i < 25; $i++){
		if($idade3[$i] >= 50){
			$contadorIdade++;
		}else if($idade3[$i] >= 10 && $idade3[$i] <= 20){
			$contadorAltura++;
		}
	}
	echo "O número de pessoas com idade maior que 50 é: ".$contadorIdade."<br>";
	echo "O número de pessoas com idade entre 10 e 20 é: ".$contadorAltura."<br>";
	echo "Porcentagem de peso: ".array_sum($peso)/100;

?>

<?php	
	//Exercicio 13
	echo "<b></br></br> Exercicio 13 </br></br></b>";
	$idades3 = [1,5,9,12,18,24,35];
	$peso2 = [10,50,90,120,180,240,75];
	$contadorPeso = 0; 
	$contadorMenor = 0;
	for($i=0; $i < 6; $i++){
		if($peso2[$i] >= 90){
			$contadorPeso++;
		}
	}
	echo "Total de Pessoas com mais de 90kg: ".$contadorPeso;
	echo "</br>Media idades: ".array_sum($idades3)/7;
?>

<?php	
	//Exercicio 15
	echo "<b></br></br> Exercicio 13 </br></br></b>";
	$n5 = [10,50,90,120,180,240,75,8,5,20];
	$contador3 = 0;
	for($i=0; $i < 10; $i++){
		if($n5[$i] >= 30 && $n5[$i] <= 90){
			$contador3++;
		}
	}
	echo "</br>Quantidade de números entre 30 e 90: ".$contador3;
?>
<?php	
	//Exercicio 16
	echo "<b></br></br> Exercicio 16 </br></br></b>";
	$idade4 = [1,2,3,4,5,6,7,8,9,10];
	$peso = [2,10.5,13.10,14,15,16,17,18,19.50,20];
	$altura = [2.00,1.50,1.10,1.40,1.20,1.60,1.70,1.80,1.50,2.00];
	$contadorIdade = 0;
	$contadorAltura = 0;
	for($i=0; $i < 25; $i++){
		if($idade3[$i] >= 50){
			$contadorIdade++;
		}else if($idade3[$i] >= 10 && $idade3[$i] <= 20){
			$contadorAltura++;
		}
	}
	echo "</br>Media idades: ".array_sum($idades4)/10;
?>

<?php	
	//Exercicio 17
	echo "<b></br></br> Exercicio 17 </br></br></b>";
	$idades5 = [1,5,9,12,18,24,35];
	echo "</br>Media homens: ".($idades5[0]+$idades5[1]+$idades5[2])/7;
	echo "</br>Media mulheres: ".($idades5[3]+$idades5[4]+$idades5[5]+$idades5[6])/7;
	echo "</br>Media idades: ".array_sum($idades5)/7;
?>

<?php	
	//Exercicio 19
	echo "<b></br></br> Exercicio 19 </br></br></b>";
	$idades6 = rand(0,100)+rand(0,100);
	if($idades6 == 0){
		echo "Idade igual a 0";
	}else{
		echo $idades6/2;
	}
?>

<?php	
	//Exercicio 20
	echo "<b></br></br> Exercicio 20 </br></br></b>";
	echo "menor numero: ".min(1,5,9,12,18,24,35)."<br>";
	echo "maior numero: ".max(1,5,9,12,18,24,35);
?>

