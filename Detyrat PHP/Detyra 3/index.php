<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detyra 3</title>
</head>
<body>
    <?php
        class CaesarCipher {
            public $shift;
            const alphabet = array(
              "lowercase" => array("a","b","c","d","e","f","g","h","i","j","k",
              "l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"," "),
              
              "uppercase" => array("A","B","C","D","E","F","G","H","I","J","K",
              "L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"," ")
            );
            public function __construct($shift = 0) {
              $this->shift = $shift % 27;
            }
            public function encrypt($input) {
              $result = str_split($input);
              for ($i = 0; $i < count($result); $i++) {
                for ($j = 0; $j < 27; $j++) {
                  if ($result[$i] === CaesarCipher::alphabet["lowercase"][$j]) {
                    $result[$i] = CaesarCipher::alphabet["lowercase"][($j + $this->shift) % 27];
                    $j = 27;
                  } elseif ($result[$i] === CaesarCipher::alphabet["uppercase"][$j]) {
                    $result[$i] = CaesarCipher::alphabet["uppercase"][($j + $this->shift) % 27];
                    $j = 27;
                  }
                }
              }
              $result = implode($result);
              return $result;
            }
            public function decrypt($input) {
              $result = str_split($input);
              for ($i = 0; $i < count($result); $i++) {
                for ($j = 0; $j < 27; $j++) {
                  if ($result[$i] === CaesarCipher::alphabet["lowercase"][$j]) {
                    $result[$i] = CaesarCipher::alphabet["lowercase"][($j + 27 - $this->shift) % 27];
                    $j = 27;
                  } elseif ($result[$i] === CaesarCipher::alphabet["uppercase"][$j]) {
                    $result[$i] = CaesarCipher::alphabet["uppercase"][($j + 27 - $this->shift) % 27];
                    $j = 27;
                  }
                }
              }
              $result = implode($result);
              return $result;
            }
          }
          $cipher = new CaesarCipher(3);
          echo $cipher->encrypt("Star Labs");
    ?>
</body>
</html>