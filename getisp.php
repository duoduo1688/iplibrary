<?php
   /**
     * @param $str
     * @return string
     */
    private function getIsp($str) {
        $ret = '';

        foreach ($this->dict_isp as $k => $v) {
            if (false !== strpos($str, $v)) {
                $ret = $v;
                break;
            }
        }

        return $ret;
    }

    /**
    get ip liast
     */
    public function __destruct() {
        if ($this->fp) {
            fclose($this->fp);
        }
        $this->fp = 0;
    }
?>
