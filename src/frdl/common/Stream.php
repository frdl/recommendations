<?php
namespace frdl\common;
 
interface Stream
{
     public function stream_open($url, $mode, $options = \STREAM_REPORT_ERRORS, &$opened_path = null);
     public function dir_closedir();
     public function dir_opendir($path , $options);
     public function dir_readdir();
     public function dir_rewinddir();
     public function mkdir($path , $mode , $options);
     public function rename($path_from , $path_to);
     public function rmdir($path , $options);
 	   public function stream_cast($cast_as);
 	   public function stream_close();
     public function stream_eof();
     public function stream_flush();
     public function stream_lock($operation);
     public function stream_set_option($option , $arg1 , $arg2);
     public function stream_stat();
     public function unlink($path);
     public function url_stat($path , $flags);
     public function stream_read($count);
     public function stream_write($data);
     public function stream_tell();
     public function stream_seek($offset, $whence);
     public function stream_metadata($path, $option, $var);
 
}
