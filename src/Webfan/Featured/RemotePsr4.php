<?php

namespace Webfan\Featured;


interface RemotePsr4{

//const HASH_ALGO = 'sha1';
const ACCESS_LEVEL_SHARED = 0;
const ACCESS_LEVEL_PUBLIC = 1;
const ACCESS_LEVEL_OWNER = 2;
const ACCESS_LEVEL_PROJECT = 4;
const ACCESS_LEVEL_BUCKET = 8;
const ACCESS_LEVEL_CONTEXT = 16;

  //Alias?__construct
  public function withServer($server = 'frdl.webfan.de', 
   $register = true,
   $version = 'latest',
   $allowFromSelfOrigin = false,
   $salted = false, 
   $classMap = null, 
   $cacheDirOrAccessLevel = self::ACCESS_LEVEL_SHARED, 
    $cacheLimit = null, 
    $password = null);
  
  
  public static function getInstance(  
  $server = [,
    '03.webfan.de',
    'cdn.frdl.io',  
    'frdl.frdl.io',      
            
  ],
  $register = true, 
  $version = 'latest',
  $allowFromSelfOrigin = false,
  $salted = false,
  $classMap = null, 
  $cacheDirOrAccessLevel = self::ACCESS_LEVEL_SHARED,   
  $cacheLimit = null, $password = null);

  public function withNamespace($prefix, $server, $prepend = false);
  public function getUrl($class, $server, $salt = null, $parseVars = false);
  public function loadClass($class, $salt = null);
  public function withSalt(bool $salted = null);
  public function register($throw = true, $prepend = false):
  public function Autoload($class); 
  public function withClassmap(array $classMap =  [
     'GuzzleHttp\\uri_template' => 'https://03.webfan.de/install/?salt=${salt}&version=${version}&source=GuzzleHttp\choose_handler',
     'GuzzleHttp\\describe_type' => 'https://03.webfan.de/install/?salt=${salt}&version=${version}&source=GuzzleHttp\choose_handler',
     'GuzzleHttp\\headers_from_lines' => 'https://03.webfan.de/install/?salt=${salt}&version=${version}&source=GuzzleHttp\choose_handler',
     'GuzzleHttp\\debug_resource' => 'https://03.webfan.de/install/?salt=${salt}&version=${version}&source=GuzzleHttp\choose_handler',
     'GuzzleHttp\\choose_handler' => 'https://03.webfan.de/install/?salt=${salt}&version=${version}&source=GuzzleHttp\choose_handler',
     'GuzzleHttp\\default_user_agent' => 'https://03.webfan.de/install/?salt=${salt}&version=${version}&source=GuzzleHttp\choose_handler',
     'GuzzleHttp\\default_ca_bundle' => 'https://03.webfan.de/install/?salt=${salt}&version=${version}&source=GuzzleHttp\choose_handler',
      'GuzzleHttp\\normalize_header_keys' => 'https://03.webfan.de/install/?salt=${salt}&version=${version}&source=GuzzleHttp\choose_handler',
     'GuzzleHttp\\is_host_in_noproxy' => 'https://03.webfan.de/install/?salt=${salt}&version=${version}&source=GuzzleHttp\choose_handler',
'GuzzleHttp\\json_decode' => 'https://03.webfan.de/install/?salt=${salt}&version=${version}&source=GuzzleHttp\choose_handler',
'GuzzleHttp\\json_encode' => 'https://03.webfan.de/install/?salt=${salt}&version=${version}&source=GuzzleHttp\choose_handler',

\GuzzleHttp\LoadGuzzleFunctionsForFrdl::class => 'https://03.webfan.de/install/?salt=${salt}&version=${version}&source=GuzzleHttp\LoadGuzzleFunctionsForFrdl',

// 'GuzzleHttp\\Psr7\\uri_for' => 'https://03.webfan.de/install/?salt=${salt}&version=${version}&source=GuzzleHttp\Psr7\uri_for',
'GuzzleHttp\\Psr7\\uri_for' =>  'https://03.webfan.de/install/?salt=${salt}&version=${version}&source=GuzzleHttp\Psr7\uri_for',


\Wehowski\Gist\Http\Response\Helper::class =>
'https://gist.githubusercontent.com/wehowski/d762cc34d5aa2b388f3ebbfe7c87d822/raw/5c3acdab92e9c149082caee3714f0cf6a7a9fe0b/Wehowski%255CGist%255CHttp%255CResponse%255CHelper.php?cache_bust=${salt}',
\webfan\hps\Format\DataUri::class => 'https://03.webfan.de/install/?salt=${salt}&source=webfan\hps\Format\DataUri',
'frdl\\Proxy\\' => 'https://raw.githubusercontent.com/frdl/proxy/master/src/${class}.php?cache_bust=${salt}',
 \frdlweb\Thread\ShutdownTasks::class => 'https://raw.githubusercontent.com/frdl/shutdown-helper/master/src/ShutdownTasks.php?cache_bust=${salt}',

    // NAMESPACES
    // Zend Framework components
    '@Zend\\AuraDi\\Config' => 'Laminas\\AuraDi\\Config',
    '@Zend\\Authentication' => 'Laminas\\Authentication',
    '@Zend\\Barcode' => 'Laminas\\Barcode',
    '@Zend\\Cache' => 'Laminas\\Cache',
    '@Zend\\Captcha' => 'Laminas\\Captcha',
    '@Zend\\Code' => 'Laminas\\Code',
    '@ZendCodingStandard\\Sniffs' => 'LaminasCodingStandard\\Sniffs',
    '@ZendCodingStandard\\Utils' => 'LaminasCodingStandard\\Utils',
    '@Zend\\ComponentInstaller' => 'Laminas\\ComponentInstaller',
    '@Zend\\Config' => 'Laminas\\Config',
    '@Zend\\ConfigAggregator' => 'Laminas\\ConfigAggregator',
    '@Zend\\ConfigAggregatorModuleManager' => 'Laminas\\ConfigAggregatorModuleManager',
    '@Zend\\ConfigAggregatorParameters' => 'Laminas\\ConfigAggregatorParameters',
    '@Zend\\Console' => 'Laminas\\Console',
    '@Zend\\ContainerConfigTest' => 'Laminas\\ContainerConfigTest',
    '@Zend\\Crypt' => 'Laminas\\Crypt',
    '@Zend\\Db' => 'Laminas\\Db',
    '@ZendDeveloperTools' => 'Laminas\\DeveloperTools',
    '@Zend\\Di' => 'Laminas\\Di',
    '@Zend\\Diactoros' => 'Laminas\\Diactoros',
    '@ZendDiagnostics\\Check' => 'Laminas\\Diagnostics\\Check',
    '@ZendDiagnostics\\Result' => 'Laminas\\Diagnostics\\Result',
    '@ZendDiagnostics\\Runner' => 'Laminas\\Diagnostics\\Runner',
    '@Zend\\Dom' => 'Laminas\\Dom',
    '@Zend\\Escaper' => 'Laminas\\Escaper',
    '@Zend\\EventManager' => 'Laminas\\EventManager',
    '@Zend\\Feed' => 'Laminas\\Feed',
    '@Zend\\File' => 'Laminas\\File',
    '@Zend\\Filter' => 'Laminas\\Filter',
    '@Zend\\Form' => 'Laminas\\Form',
    '@Zend\\Http' => 'Laminas\\Http',
    '@Zend\\HttpHandlerRunner' => 'Laminas\\HttpHandlerRunner',
    '@Zend\\Hydrator' => 'Laminas\\Hydrator',
    '@Zend\\I18n' => 'Laminas\\I18n',
    '@Zend\\InputFilter' => 'Laminas\\InputFilter',
    '@Zend\\Json' => 'Laminas\\Json',
    '@Zend\\Ldap' => 'Laminas\\Ldap',
    '@Zend\\Loader' => 'Laminas\\Loader',
    '@Zend\\Log' => 'Laminas\\Log',
    '@Zend\\Mail' => 'Laminas\\Mail',
    '@Zend\\Math' => 'Laminas\\Math',
    '@Zend\\Memory' => 'Laminas\\Memory',
    '@Zend\\Mime' => 'Laminas\\Mime',
    '@Zend\\ModuleManager' => 'Laminas\\ModuleManager',
    '@Zend\\Mvc' => 'Laminas\\Mvc',
    '@Zend\\Navigation' => 'Laminas\\Navigation',
    '@Zend\\Paginator' => 'Laminas\\Paginator',
    '@Zend\\Permissions' => 'Laminas\\Permissions',
    '@Zend\\Pimple\\Config' => 'Laminas\\Pimple\\Config',
    '@Zend\\ProblemDetails' => 'Mezzio\\ProblemDetails',
    '@Zend\\ProgressBar' => 'Laminas\\ProgressBar',
    '@Zend\\Psr7Bridge' => 'Laminas\\Psr7Bridge',
    '@Zend\\Router' => 'Laminas\\Router',
    '@Zend\\Serializer' => 'Laminas\\Serializer',
    '@Zend\\Server' => 'Laminas\\Server',
    '@Zend\\ServiceManager' => 'Laminas\\ServiceManager',
    '@ZendService\\ReCaptcha' => 'Laminas\\ReCaptcha',
    '@ZendService\\Twitter' => 'Laminas\\Twitter',
    '@Zend\\Session' => 'Laminas\\Session',
    '@Zend\\SkeletonInstaller' => 'Laminas\\SkeletonInstaller',
    '@Zend\\Soap' => 'Laminas\\Soap',
    '@Zend\\Stdlib' => 'Laminas\\Stdlib',
    '@Zend\\Stratigility' => 'Laminas\\Stratigility',
    '@Zend\\Tag' => 'Laminas\\Tag',
    '@Zend\\Test' => 'Laminas\\Test',
    '@Zend\\Text' => 'Laminas\\Text',
    '@Zend\\Uri' => 'Laminas\\Uri',
    '@Zend\\Validator' => 'Laminas\\Validator',
    '@Zend\\View' => 'Laminas\\View',
    '@ZendXml' => 'Laminas\\Xml',
    '@Zend\\Xml2Json' => 'Laminas\\Xml2Json',
    '@Zend\\XmlRpc' => 'Laminas\\XmlRpc',
    '@ZendOAuth' => 'Laminas\\OAuth',


//https://raw.githubusercontent.com/elastic/elasticsearch-php/v7.12.0/src/autoload.php
'Elasticsearch\\' => 'https://raw.githubusercontent.com/elastic/elasticsearch-php/v7.12.0/src/${class}.php?cache_bust=${salt}',
]);

}
