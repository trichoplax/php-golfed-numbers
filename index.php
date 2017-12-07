<?php
// Attempt 1: 46 characters
//for(;$i<=2e3;$i++){echo min(+$i,2e3-$i)."\n";}

// Attempt 2: 46 characters
//for($i=1001;$i--+1e3;){echo 1e3-abs($i)."\n";}

// Attempt 3: 48 characters
//$h=1e3;for($i=$h;$i>=-$h;)echo$h-abs($i--)."\n";

// Attempt 1a: 44 characters
//for(;$i<=2e3;$i++)echo min(+$i,2e3-$i)."\n";

// Attempt 2a: 44 characters
//for($i=1001;$i--+1e3;)echo 1e3-abs($i)."\n";

// Attempt 3a: 44 characters
//for($i=1e3;$i+1001;)echo 1e3-abs($i--)."\n";

// Attempt 1b: 43 characters
//for(;$i<=2e3;$i++)echo min(+$i,2e3-$i)."
//";

// Attempt 2b: 43 characters
//for($i=1001;$i--+1e3;)echo 1e3-abs($i)."
//";

// Attempt 3b: 43 characters
//for($i=1e3;$i+1001;)echo 1e3-abs($i--)."
//";

// Attempt 1c: 41 characters
//for(;$i<=2e3;)echo min(+$i,2e3-$i++)."
//";

// Attempt 1d: 41 characters
//for(;$i-2001;)echo min(+$i,2e3-$i++)."
//";

// Attempt 4: 41 characters
while($i-2001)echo min(+$i,2e3-$i++)."
";