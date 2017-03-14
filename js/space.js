function space_clear()
	{
		var character = document.forms["f1"]["Eng_input"].value;
		//alert (character);
		
        if(character.match(' '))
			{
				//alert('Spaces not allowed!');
				var n = character.length;
				var res = character.slice(0,n-1); 
				//document.getElementById("Eng_input").innerHTML = n;
				Eng_input.value = res;
				document.getElementById("demo").innerHTML = "*This application work base on Keyword.";
			}
	}