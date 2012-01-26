<a class="prev" href="/documentation/library/errors">&laquo; 4. Error Handling</a>
<a class="next" href="/documentation/library/types">6. Data Types &raquo;</a>

<h3>5. Event Driven</h3>

<p>Events in <strong>Eden</strong> are for executing sub routines not originally part of an application scope. Emailing when a comment as been made on your post or logging when an error has been thrown would be valid implementations for an event driven design. With
<strong>Eden</strong>, you can easily design your applications to be plugin ready. The example below shows a skinned down version of
an order processing function.</p>

<sub>Figure 1. Processing Orders</sub>
<div class="example"><pre class="brush: php;">
function processOrder($email, $price) {
	if($price < 1) {
		return false;
	}
	
	//insert into database
	
	return true;
}

if(processOrder('info@openovate.com', 56.99)) {
	echo 'Success!';
}
</pre></div>

<p>When given a set of functional requirements we would think to add it in <sub>processOrder()</sub> linearly. In event driven
design, a function <strong>should</strong> only perform the main process stated on the function name. <sub>processOrder()</sub>,
for example should just insert the order into the database and nothing more. After it is done, we should trigger that this action
has been performed.</p>

<sub>Figure 1. Adding a Trigger</sub>
<div class="example"><pre class="brush: php;">
function processOrder($email, $price) {
	if($price < 1) {
		return false;
	}
	
	//insert into database
	
	eden('event')->trigger('success', $email, 'Success!', 'We triggered a success.');
	
	return true;
}

if(processOrder('info@openovate.com', 56.99)) {
	echo 'Success!';
}
</pre></div>

<p>In <sub>Figure 2</sub>, we add a trigger passing all possible variables to whatever other method is listening to that. This 
is the only requirement to make your application event driven. The examlple below represents how to build a plugin that will listen 
for a success event to occur.</p>

<sub>Figure 1. Listen</sub>
<div class="example"><pre class="brush: php;">
class Plugin_Email extends Eden_Class {
	public static function i() {
		return self::_getSingleton(__CLASS__);
	}
	
	public function __construct() {
		$this->Event()->listen('success', $this, 'send');
	}
	
	public function send($event, $email, $subject, $message) {
		mail($email, $subject, $message);
		return $this;
	}
}

Plugin_Email::i();
</pre></div>

<p>In the example above, we created a plugin class that will listen to a success event. When a success event is triggered the 
<sub>send()</sub> method will be called passing all the arguments as specified by the trigger.</p>

<blockquote class="tip clearfix">
	<span class="icon"></span>
	<strong>Eden_Event</strong>, when called will be a singleton. This makes it a global event handler. You can create a separate set of events by simply extending this class.
</blockquote>

<p>Our next section <a href="/documentation/library/types">6. Data Types</a> will show you some tricks to manipulating strings and arrays.</p>

<a class="prev" href="/documentation/library/errors">&laquo; 4. Error Handling</a>
<a class="next" href="/documentation/library/types">6. Data Types &raquo;</a>