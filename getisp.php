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
     * 析构函数，用于在页面执行结束后自动关闭打开的文件。
     */
    public function __destruct() {
        if ($this->fp) {
            fclose($this->fp);
        }
        $this->fp = 0;
    }
?>
