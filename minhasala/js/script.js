$(function(){
	$("#tabela imput").keyup(function(){
		var index = $(this).parent().index();
		var nth = "#tabela td:nth-child("+(index+1).toSting()+")";
		var valor = $(this).val().toUpperCase();
		$("#tabela tbody tr").show();
		$(nth).each(function(){
			if($(this).text().toUpperCase().indexOf(valor) < 0){
				$(this).parent().hide();
			}
		});
	});

	$("#tabela imput").blur(function(){
		$(this).val(" ");
	});
});