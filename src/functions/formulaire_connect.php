<?php

function afficheFormConnect(){
$stringRet="<article>
		<form action='src/actions/actionLogin.php' method='post' accept-charset='utf-8'>
			<label>Pseudo</label>
			<input type='text' name='username'/>
			<label>Mot de passe</label>
			<input type='password' name='passwd'/>
			<button type='submit'>me connecter</button>
		</form>	
	</article>";
return $stringRet;
}