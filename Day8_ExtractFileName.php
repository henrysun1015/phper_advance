<?php
echo md5('bzy99864');exit;
function fileNameExtractor(string $dirtyFileName): string {
    //
    preg_match('/\d*_([^\.]*.[^\.]*)\..*/',$dirtyFileName,$match);
    return $match[1];
}

echo fileNameExtractor("1231231223123131_FILE_NAME.EXTENSION.OTHEREXTENSION");
//FILE_NAME.EXTENSIONFILE_NAME.EXTENSION
echo PHP_EOL;
echo fileNameExtractor("1_This_is_an_otherExample.mpg.OTHEREXTENSIONadasdassdassds34");
//This_is_an_otherExample.mpg