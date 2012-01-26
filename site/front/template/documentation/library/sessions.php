<a class="prev" href="/documentation/library/files">&laquo; 7. Files and Folders </a>
<a class="next" href="/documentation/library/registry">9. The Registry &raquo;</a>

<h3>8. Sessions and Cookies</h3>
<p>Session and Cookie classes in <strong>Eden</strong> was mainly included as a wrapper for these variables. Both session and cookie classes can be accessed as arrays in the following manner.</p>

<sub>Figure 1. Sessions and cookies as arrays.</sub>
<div class="example"><pre class="brush: php;">
$session = eden('session')->start();		//instantiate

$session['name'] = 'value';			//set 'name' to 'value' in session data
echo $session['name'];				//get session data where key is 'name'
unset($session['name']);			//unset session data where key is 'name'
isset($session['name']);			//returns true if a key called 'name' exists

foreach($session as $key => $value) {}	//loop through session data

echo $session; // outputs a json version of the session data

$cookie = eden('cookie');			//instantiate

$cookie['name'] = 'value';			//set 'name' to 'value' in session data (no expiration)
echo $cookie['name'];				//get session data where key is 'name'
unset($cookie['name']);				//unset session data where key is 'name'
isset($cookie['name']);				//returns true if a key called 'name' exists

foreach($cookie as $key => $value) {}	//loop through cookie data

echo $cookie; // outputs a json version of the cookie data
</pre></div>

<sub>Figure 2. Session Methods</sub>
<div class="example"><pre class="brush: php;">
$session->start();					//starts session
$session->getId();					//get session id

$session->set('name', 'value');		//set 'name' to 'value' in session data
$session->get('name');				//get session data where key is 'name'
$session->remove('name');			//unset session data where key is name
$session->clear();					//remove all session data
</pre></div>

<sub>Figure 3. Cookies Methods</sub>
<div class="example"><pre class="brush: php;">

$cookie->set('name', 'value');		//set 'name' to 'value' in cookie data
$cookie->set('name', 'value', 3600, 'some/path', 'openovate.com');	//set 'name' to 'value' located in some/path in openovate.com, expires in 1 hour
$cookie->setSecure('name', 'value'); //set 'name' to 'value' in cookie data securely
$cookie->get('name');				//get cookie data where key is 'name'
$cookie->remove('name');			//unset cookie data where key is name
$cookie->clear();					//remove all cookie data
</pre></div>

<a class="prev" href="/documentation/library/files">&laquo; 7. Files and Folders </a>
<a class="next" href="/documentation/library/registry">9. The Registry &raquo;</a>