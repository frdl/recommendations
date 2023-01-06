<?php
namespace frdl\common;
 
interface Stream
{
     public function stream_open(string $path, 
								$mode, 
								int $options = \STREAM_REPORT_ERRORS, 
								string &$opened_path = null) : \resource | bool;
     public function dir_closedir(): bool;
     public function dir_opendir(string $path, int $options) : bool;
     public function dir_readdir() : string | bool;
     public function dir_rewinddir() : bool;
     public function mkdir(string $path, int $mode, int $options) : bool;
     public function rename(string $oldname, string $newname) : bool;
     public function rmdir(string $path, int $options) : bool;
     public function stream_cast(int $cast_as); 
     public function stream_close();
     public function stream_eof() : bool;
     public function stream_flush() : bool;
     public function stream_lock(int $operation) : bool;
     public function stream_metadata(string $path ,int $option, $value) : bool;
     public function stream_set_option(int $option, int $arg1, int $arg2) : bool;
     public function stream_stat() : array;
     public function unlink(string $path) : bool;
     public function url_stat(string $path, int $flags) : array | bool;
     public function stream_read(int $count) : string | bool;
     public function stream_write(string $data) : int | bool;
     public function stream_tell() : int | bool;
     public function stream_seek(int $offset, int $whence = \SEEK_SET) : bool;
     public function stream_truncate(int $new_size) : bool;
 
}
