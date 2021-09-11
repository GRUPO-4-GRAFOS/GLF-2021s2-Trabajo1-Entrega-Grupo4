<?php
class log
{
    private $filelog;


    function __construct($path)
    {
      $this->filelog = fopen($path,"a");

    }
    function writeline($type, $message)
    {
        date_default_timezone_set("America/Santiago");
        $date = new DateTime();
        fputs($this->filelog, "[".$type."] [".$date->format("d-m-y h:i:s ")."]:".$message ."\n");
        
    }
    function close()
    {
        fclose($this->filelog);
    }

}

/*$log = new log("log.log");
$log->writeLine("E","ha habido un error inesperado");
$log->close()*/
?>