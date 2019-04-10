<?php

$patternArtist = '/^[A-Z]{1}[a-z \']+$/m';
$patternSong = '/^[A-Z ]+$/m';
while (true) {
    $input = readline();
    if ($input == "end")
        break;
    list($artist, $song) = array_pad(explode(":", $input), 2, null);
    if (preg_match_all($patternArtist, $artist) && preg_match_all($patternSong, $song)) {

        $key = strlen($artist);
        $artistChars = str_split($artist);
        $songChars = str_split($song);

        $encryptedArtist = "";
        foreach ($artistChars as $char) {
            $num = ord($char);
            $newNum = $num + $key;

            if ($num == 32) {
                $encryptedArtist .= $char;
            } elseif ($num == 39) {
                $encryptedArtist .= $char;
            } else {
                if (ctype_upper($char)) {
                    if ($newNum >= 65 && $newNum <= 90) {
                        $encryptedArtist .= chr($newNum);
                    } else {
                        $seq = ($newNum - 90) + 64;
                        $encryptedArtist .= chr($seq);
                    }
                } else {
                    if ($newNum >= 97 && $newNum <= 122) {
                        $encryptedArtist .= chr($newNum);
                    } else {
                        $seq = ($newNum - 122) + 96;
                        $encryptedArtist .= chr($seq);
                    }
                }
            }
        }

        $encryptedSong = "";
        foreach ($songChars as $char) {
            $num = ord($char);
            $newNum = $num + $key;

            if ($num == 32) {
                $encryptedSong .= $char;
            }else {
                if ($newNum >= 65 && $newNum <= 90) {
                    $encryptedSong .= chr($newNum);
                } else {
                    $seq = ($newNum - 90) + 64;
                    $encryptedSong .= chr($seq);
                }
            }
        }
echo "Successful encryption: $encryptedArtist@$encryptedSong\n";
    } else
        echo "Invalid input!\n";
}