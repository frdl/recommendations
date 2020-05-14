<?php
namespace frdlweb;

 interface StubHelperInterface
 { 
  public function runStubs();
  public function addPhpStub($code, $file = null);	 
  public function addWebfile($path, $contents, $contentType = 'application/x-httpd-php', $n = 'php');	 
  public function addClassfile($class, $contents);
  public function get_file($part, $file, $name); 
  public function Autoload($class);   
  public function __toString();	
  public function __invoke(); 	
  public function __call($name, $arguments);
  public function getFileAttachment($file = null, $offset = null);	   
 }
