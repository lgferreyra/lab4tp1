miAplicacion.controller('control', function($scope){
	$scope.perdidas=0;
	$scope.ganadas=0;
	$scope.empatadas=0;
	$scope.eleccionMaquina;

	$scope.papel = function(){
	//	console.log("papel");
		$scope.comenzar();
		alert("la maquina selecciono: "+$scope.eleccionMaquina);
		var eleccionHumano="papel";
		if(eleccionHumano== $scope.eleccionMaquina)
		{
			alert("empate.");
			$scope.empatadas++;		

		}
		else if($scope.eleccionMaquina=="piedra")
		{
			alert("vos ganastes.");
			$scope.ganadas++;
		}
		else
		{
			alert("ganó la Maquina.");
			$scope.perdidas++;
		}
	};

	$scope.piedra = function(){
	//	console.log("papel");
		$scope.comenzar();
		alert("la maquina selecciono: "+$scope.eleccionMaquina);
		var eleccionHumano="piedra";
		if(eleccionHumano== $scope.eleccionMaquina)
		{
			alert("empate.");
			$scope.empatadas++;		

		}
		else if($scope.eleccionMaquina=="tijera")
		{
			alert("vos ganastes.");
			$scope.ganadas++;
		}
		else
		{
			alert("ganó la Maquina.");
			$scope.perdidas++;
		}
	};

	$scope.tijera = function(){
	//	console.log("papel");
		$scope.comenzar();
		alert("la maquina selecciono: "+$scope.eleccionMaquina);
		var eleccionHumano="tijera";
		if(eleccionHumano== $scope.eleccionMaquina)
		{
			alert("empate.");
			$scope.empatadas++;		

		}
		else if($scope.eleccionMaquina=="papel")
		{
			alert("vos ganastes.");
			$scope.ganadas++;
		}
		else
		{
			alert("ganó la Maquina.");
			$scope.perdidas++;
		}
	};

	$scope.comenzar = function(){
		var numeroSecreto =Math.floor( Math.random()*3)+1;
		//alert(numeroSecreto);
		console.log(numeroSecreto);
		switch(numeroSecreto)
		{
			case 1:
				$scope.eleccionMaquina="piedra";
				break;
			case 2:
				$scope.eleccionMaquina="papel";
				break;
			case 3:
				$scope.eleccionMaquina="tijera";
				break;

		}
	}
});