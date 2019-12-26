#!/usr/bin/php
<?php
/**
 * Swagger Docs
 * @author Flávio Gomes da Silva Lisboa <flavio.lisboa@fgsl.eti.br>
 * @license https://www.gnu.org/licenses/lgpl-3.0.en.html
 */
echo "\n" . str_repeat('=',78);
echo "\n" . str_pad(' FGSL SWAGGER DOCUMENTATION GENERATOR ',78,'=',STR_PAD_BOTH);
echo "\n" . str_repeat('=',78);
echo "\nFor an alternative target directory, pass the directory name as argument."; 
echo "\nSo: vendor/bin/fsd [targetDirectory]";
echo "\n[targetDirectory] is relative to root directory of application.";
echo "\n" . str_repeat('=',78);

$targetDir = (isset($argv[1]) ? $argv[1] : 'public');

$currentDir = getcwd();

chdir($currentDir);

@unlink($currentDir . '/swagger.json');
shell_exec('composer run docs');
if (!file_exists($currentDir . '/swagger.json')){
    echo "\nFile swagger.json was not created. It is not possible to generate API documentation.\n";
    exit;
}
$swagger = file_get_contents($currentDir . '/swagger.json');
copy($currentDir . '/swagger.json', $currentDir . "/$targetDir/spec.js");
$swagger = "var spec = \n" . $swagger;
file_put_contents($currentDir . "/$targetDir/spec.js",$swagger);
echo "\nGenerated spec.js in web/dist for feeding swagger-ui\n";
$swaggerDir = realpath(__DIR__ . '/../swagger');
$swaggerFiles = scandir($swaggerDir);
if (empty($swaggerFiles)){
    echo "\nFiles not found in $swaggerDir. It is not possible to generate or update swagger-ui.\n";
    exit;
}
unset($swaggerFiles[0]);
unset($swaggerFiles[1]);
foreach($swaggerFiles as $file){
    @unlink(file_exists($currentDir . "/$targetDir/" . $file));
    copy($swaggerDir . '/' . $file, $currentDir . "/$targetDir/" . $file);
}
echo "\nCopied files of swagger-ui\n";
echo "\nTerminated\n";