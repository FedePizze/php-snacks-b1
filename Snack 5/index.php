<!-- Prendere un testo abbastanza lungo, contenente diverse frasi.
Prendere il testo e suddividerlo in tanti paragrafi ogni volta
in cui si incontrerà un punto. -->

<?php

$string =
'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia eos a, amet quis dolores perspiciatis. consequatur ullam libero quo magnam praesentium quibusdam soluta velit nemo officia qui laborum. Ducimus, culpa.';

$stringReplace = str_replace('.', "\n", $string);

echo nl2br ($stringReplace )

?>