<a class="prev" href="/documentation/library/events">&laquo; 5. Event Driven</a>
<a class="next" href="/documentation/library/files">7. Files and Folders &raquo;</a>

<h3>6. Data Types</h3>
<p>When using multiple PHP string or array functions in one line, it makes code harder to read. This is because a programmer needs
to be trained to read code from inner to outer, rather than traditionally left to right <em>(unless you live in Japan)</em>. 
<strong>Eden's</strong> data typing are objects that correct this readability problem.</p>

<sub>Figure 1. Inner to Outer</sub>
<div class="example"><pre class="brush: php;">
echo substr(strtolower(str_replace(' ', '-', 'Hello World')), 0, 8); //--> hello-wo
</pre></div>

<p><sub>Figure 1</sub> above demonstrates that we must read this as <sub>str_replace()</sub>, then <sub>strtolower()</sub>, followed by <sub>substr()</sub> which is inner function first going outwards. The example below shows how using types makes this line easier
to read.</p>

<sub>Figure 2. Left to Right</sub>
<div class="example"><pre class="brush: php;">
echo eden('type', 'Hello World')->str_replace(' ','-')->strtolower()->substr(0, 8); //--> hello-wo
</pre></div>

<blockquote class="tip clearfix">
	<span class="icon"></span>
	<strong>Eden_Type_String</strong>, when echoed will automatically convert back to a string.
</blockquote>

<p><strong>Eden</strong> covers most of the string and array functions provided by PHP. Below is a list of string methods you can linearly perform.</p>

<sub>Figure 3. String Methods</sub>
<div class="example"><pre class="brush: php;">
$string->camelize('-');			//looks for dashes and transforms to camel casing
$string->uncamelize('-');		//replaces camel casing to lower case with dash between
$string->dasherize();			//transforms spaces to dashes or URL friendly name
$string->titlze('-');			//transforms a dashed string to a Title (Caps and spaces)

//Supported PHP String Methods
$string->addSlashes();
$string->bin2hex()
$string->chunkSplit();
$string->convertUudecode();	
$string->convertUuencode();
$string->crypt();	
$string->htmlEntityDecode();
$string->htmlentities();	
$string->htmlspecialcharsDecode();
$string->htmlspecialchars();	
$string->lcfirst();
$string->ltrim();	
$string->md5();
$string->nl2br();	
$string->quotedPrintableDecode();
$string->quotedPrintableEncode();	
$string->quotemeta();
$string->rtrim();	
$string->sha1();
$string->sprintf('val1', 'val2');	
$string->pad();
$string->repeat();	
$string->rot13();
$string->shuffle();	
$string->stripTags();
$string->stripcslashes();	
$string->stripslashes();
$string->strpbrk();	
$string->stristr();
$string->strrev();	
$string->strstr();
$string->strtok();	
$string->strtolower();
$string->strtoupper();	
$string->strtr();
$string->substrReplace();	
$string->substr(1, 2);
$string->trim();	
$string->ucfirst();
$string->ucwords();	
$string->vsprintf();
$string->wordwrap();	
$string->countChars();
$string->hex2bin();	
$string->strlen();
$string->strpos();	
$string->substrCompare();
$string->substrCount();	
$string->strIreplace();
$string->strReplace(' ', '-');
$string->pregReplace('/[A-Z]/', '-');
$string->explode(' ');					//returns Eden_Type_Array
</pre></div>

<p>Similar to how strings objects in <strong>Eden</strong> can be echoed, array objects in Eden can be also treated as arrays.</p>

<sub>Figure 4. Array objects as Arrays</sub>
<div class="example"><pre class="brush: php;">
$array = eden('type', 1, 2, 3);			//instantiate

$array[] = 4;

echo $array[1];  //--> 2

foreach($array as $key => $value) {}	//loop through array

echo $array; // outputs a json version of the array
</pre></div>

<p>Below is a list of string methods you can linearly perform.</p>

<sub>Figure 5. Array Methods</sub>
<div class="example"><pre class="brush: php;">
$array = eden('type', 1, 2, 3);			//instantiate

$array->isEmpty();								//returns true if array is empty
$array->copy('Key1', 'Key2');					//copies the value of 'Key1' to 'Key2'
$array->cut(2);									//removes index of 2 and reindexes array
$array->paste('Key1', 'Key3', 'value');			//adds 'Key3' with the value of 'value' after 'Key1'

//Supported PHP Array Methods
$array->changeKeyCase();
$array->chunk();
$array->combine();
$array->countDatas();
$array->diffAssoc();
$array->diffKey();
$array->diffUassoc();
$array->diffUkey();
$array->diff();
$array->fillKeys();
$array->filter();
$array->flip();
$array->intersectAssoc();
$array->intersectKey();
$array->intersectUassoc();
$array->intersectUkey();
$array->intersect();
$array->keys();
$array->mergeRecursive();
$array->merge();
$array->pad();
$array->reverse();
$array->shift();
$array->slice();
$array->splice();
$array->sum();
$array->udiffAssoc();
$array->udiffUassoc();
$array->udiff();
$array->uintersectAssoc();
$array->uintersectAassoc();
$array->uintersect();
$array->unique();
$array->datas();
$array->count();
$array->current();
$array->each();
$array->end();
$array->extract();
$array->key();
$array->next();
$array->prev();
$array->sizeof();
$array->fill();
$array->map();
$array->search();
$array->compact();
$array->implode(' '); //returns Eden_Type_String
$array->in_array();
$array->unshift();
$array->walkRecursive();
$array->walk();
$array->arsort();
$array->asort();
$array->krsort();
$array->ksort();
$array->natcasesort();
$array->natsort();
$array->reset();
$array->rsort();
$array->shuffle();
$array->sort();
$array->uasort();
$array->uksort();
$array->usort();
$array->push();
</pre></div>

<a class="prev" href="/documentation/library/events">&laquo; 5. Event Driven</a>
<a class="next" href="/documentation/library/files">7. Files and Folders &raquo;</a>